<?php
class Prints extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->log_in_user_id = helper_check_admin_login();

        $this->load->model('Orders_model', 'orders_model');
        $this->load->model('Shipping_rule_model', 'shipping_rule_model');
        $this->load->model('Warehouse_manager_model', 'warehouse_manager_model');
        $this->load->model('po_model');
        $this->load->model('pdf_items_model');
        $this->load->model('print_model');

        $this->perPage = 20;

        ini_set('max_execution_time', 0);
        ini_set('memory_limit', '1024M');

    }

    public function test_new_print()
    {
        // $order_ids =  array("27941","27944","27951","27964","15906276","15829978") ;

        $query = "SELECT order_id
        FROM `batch_shipping_trans`
        WHERE `shipping_job_id` =109
        LIMIT 30
        ";

        $result = $this->db->query($query)->result();

        $order_ids = helper_array_column($result, 'order_id', 'order_id');

        $this->bulk_print_order_invoice_label_new($order_ids);
    }

    /*
    @Description      : Function to get order invoice print list
    @Author          : krutin shah
    @Input          :
    @Output          :
    @Date          : 11-05-2017
     */

    public function order_invoice_print_list($id = null)
    {
        $this->PAGE_HEADER_DATA = get_page_header_data('print_invoice_listing');

        $data['scroll_position'] = $this->input->get('scroll_position');

        ///////// GET PAGE NUMBER

        if (is_numeric($this->input->get('page')) && $this->input->get('page') > 0) {
            $data['page'] = $this->input->get('page');
        } else {
            $data['page'] = ($this->uri->segment(3)) ? intval($this->uri->segment(3)) : 1;
        }

        /////////PER PAGE PAGINATION OPTION

        $data['per_page_option'] = $this->per_page_option;

        if ($this->input->get('per_page')) {
            $data['per_page'] = $this->input->get('per_page');
        } else {
            $data['per_page'] = $this->input->post('per_page') ? (int) $this->input->post('per_page') : 100;
        }

        if (!in_array($data['per_page'], $data['per_page_option'])) {
            $data['per_page'] = 10;
        }

        ///////// GET SEARCH KEYWORD

        if ($this->input->get('search')) {
            $search = $this->input->get('search');
        } else {
            $search = $this->input->post('search');
        }

        /////////RECORD TYPE OPTION

        if ($this->input->get('record_type')) {
            $data['record_type'] = $this->input->get('record_type');
        } else {
            $data['record_type'] = $this->input->post('record_type') ? $this->input->post('record_type') : '';
        }

        /////////STATUS OPTION

        if ($this->input->get('print_status') != '') {
            $data['print_status'] = $this->input->get('print_status');
        } else {
            $data['print_status'] = ($this->input->post('print_status') != '') ? $this->input->post('print_status') : '';
        }

        ///////// SORT DIRECTION AND SORT BY

        if ($this->input->get('sort_direction')) {
            $data['sort_direction'] = $this->input->get('sort_direction');
        } else {
            $data['sort_direction'] = trim($this->input->post('sort_direction')) ? trim($this->input->post('sort_direction')) : 'desc';
        }

        //////////////////

        if ($this->input->get('sort_by')) {
            $data['sort_by'] = $this->input->get('sort_by');
        } else {
            $data['sort_by'] = trim($this->input->post('sort_by')) ? trim($this->input->post('sort_by')) : 'id';
        }

        ///////// TOTAL RECORDS
        $where = array(
            'page'           => $data['page'],
            'per_page'       => $data['per_page'],
            'search'         => $search,
            'record_type'    => $data['record_type'],
            'print_status'   => $data['print_status'],
            'user_id'        => $this->log_in_user_id,
            'order_by'       => $data['sort_by'],
            'sort_direction' => $data['sort_direction'],
        );

        $data['request_type']  = $this->input->post('request_type');
        $data['total_records'] = $this->print_model->get_printing_job('count', $where);
        $data['job_list']      = $this->print_model->get_printing_job('data', $where);
        $data['total_pages']   = ceil($data['total_records'] / $data['per_page']);

        //////////////////

        if ($data['page'] > $data['total_pages']) {
            $data['page'] = '1';

            if ($this->input->get('page') != '') {
                $_GET['page'] = 1;
            }
        }

        ///////// CONGIGURE PAGINATION

        $data['paging_url'] = base_url() . 'prints/order_invoice_print_list/';

        if ($data['request_type'] == 'ajax') {
            $data['pagination'] = $this->get_pagination($data['paging_url'], '', $data['total_records'], 3, $data['per_page'], 6, false);
        } else {
            $data['pagination'] = $this->get_pagination($data['paging_url'], '', $data['total_records'], 3, $data['per_page'], 6, true);
        }

        //////////////////

        $data['from_records'] = ($data['total_records'] > 0) ? $data['page'] * $data['per_page'] - $data['per_page'] + 1 : 0;

        $data['to_records'] = ($data['page'] * $data['per_page'] < $data['total_records']) ? $data['page'] * $data['per_page'] : $data['total_records'];

        $request_type = isset($_POST['request_type']) ? $_POST['request_type'] : '';

        ///////////////////

        if ($this->input->post('request_type') == 'ajax') {
            echo parent::s_render('print/ajax_list', $data, true);
        } else {
            parent::c_render('print/list', $data);
        }
    }

    public function delete_record()
    {
        $message = array(
            'type' => 'error',
            'msg'  => 'Something went wrong! Please try again.',
        );

        if ($this->input->post() && $this->input->post('job_id') != '') {
            $job_id = helper_decrypt_url_key($this->input->post('job_id'));
        } else {
            $job_id = '';
        }

        if ($job_id != '') {
            if ($this->print_model->check_mark_print_exists($job_id)) {
                if ($this->print_model->remove_record(array($job_id))) {
                    $message = array(
                        'type' => 'success',
                        'msg'  => 'Record is removed successfully.',
                    );
                }
            } else {
                $message = array(
                    'type' => 'error',
                    'msg'  => 'This order is already printed or removed earlier.',
                );
            }
        }

        echo json_encode($message);
    }

    public function bulk_delete_record()
    {
        $message = array(
            'type' => 'error',
            'msg'  => 'Something went wrong! Please try again.',
        );

        $job_ids = $this->input->post('select_id');

        if (!empty($job_ids)) {
            if ($this->print_model->remove_record($job_ids)) {
                $message = array(
                    'type' => 'success',
                    'msg'  => 'Records are successfully removed.',
                );
            }
        } else {
            $message = array(
                'type' => 'error',
                'msg'  => 'Something went wrong! Please try again.',
            );
        }
        echo json_encode($message);
    }

    /*
    @Description    : Function to get po detail
    @Author          : krutin shah
    @Input          :
    @Output          :
    @Date              : 11-05-2017
     */

    public function po_detail_with_label($id = null)
    {
        if (!empty($id)) {
            $id = helper_decrypt_url_key($id);
        } else {
            $id = $this->input->post("selected_pos") ? $this->input->post("selected_pos") : $id;
        }

        if (!$id) {
            //redirect('orders/ebay');
        } else {
            if (!is_array($id)) {
                $data['po_id'] = $id;
            } else {
                $data['po_id'] = array_map(function ($value) {return $value;}, $id);
                $data['po_id'] = array_unique($data['po_id']);
            }

            $data['data'] = $this->po_model->get_po_detail_with_items($data);

            $data['shipment_details'] = $this->po_model->get_po_shipment_details($data);

            $data['shipment_details'] = helper_array_column_multiple_key($data["shipment_details"], array('id'), true);
        }

        foreach ($data["data"] as $key => $value) {
            $data["print_data"][$value["id"]]["po_items"][] = $value;

            $data["print_data"][$value["id"]]["po_details"] = $value;

            if (isset($data["shipment_details"][$value["id"]])) {
                $data["print_data"][$value["id"]]["po_shipment_details"] = $data["shipment_details"][$value["id"]];
            }
        }

        // foreach ($data["print_data"] as $k => $v)
        // {
        //    $d = convert_po_data_into_pagination($v['po_items']);

        //    $data["print_data"][$k]['po_items'] = $d;
        // }

        if (isset($data["shipment_details_data"]) && count($data["shipment_details_data"]) > 0) {
            $data['sales_order_number']       = implode(',', helper_array_column($data["shipment_details_data"]["po_shipment_details"], null, 'sales_order_number'));
            $data['bol_number']               = implode(',', helper_array_column($data["shipment_details_data"]["po_shipment_details"], null, 'bol_number'));
            $data['carrier']                  = implode(',', helper_array_column($data["shipment_details_data"]["po_shipment_details"], null, 'carrier'));
            $data['shipment_number']          = implode(',', helper_array_column($data["shipment_details_data"]["po_shipment_details"], null, 'shipment_number'));
            $data['pro_number']               = implode(',', helper_array_column($data["shipment_details_data"]["po_shipment_details"], null, 'pro_number'));
            $data['number_of_cartons']        = implode(',', helper_array_column($data["shipment_details_data"]["po_shipment_details"], null, 'number_of_cartons'));
            $data['number_of_pallets']        = implode(',', helper_array_column($data["shipment_details_data"]["po_shipment_details"], null, 'number_of_pallets'));
            $data['shipment_tracking_number'] = implode(',', helper_array_column($data["shipment_details_data"]["po_shipment_details"], null, 'shipment_tracking_number'));
        }

        unset($data["data"]);

        //pr($data);

        $Html = $this->load->view('print/po_detail_label_right', $data, true);

        //$Html = $this->load->view('print/po_detail_label_right_new',$data,true);

        echo $Html;
    }

    /*
    @Description    : Function to get po detail
    @Author       : krutin shah
    @Input        :
    @Output       :
    @Date             : 11-05-2017
     */

    public function pdf_items_print($id = null)
    {
        if (!empty($id)) {
            $id = helper_decrypt_url_key($id);
        } else {
            $id = $this->input->post("selected_pos") ? $this->input->post("selected_pos") : $id;
        }

        if (!$id) {
            //redirect('orders/ebay');
        } else {
            if (!is_array($id)) {
                $data['pdf_id'] = $id;
            } else {
                $data['pdf_id'] = array_map(function ($value) {return $value;}, $id);
                $data['pdf_id'] = array_unique($data['pdf_id']);
            }

            $data['print_data'] = $this->pdf_items_model->get_pdf_detail_with_items($data);

            /////////////////////////////// Get Amazoon Link ///////////////////////////

            $actual_product_id_array = helper_array_column($data['print_data'], null, 'actual_product_master_id');

            $condition = array(
                'where_in' => array('actual_product_master_id' => $actual_product_id_array),
                'where'    => array('product_marketplace_properties.store_marketplace' => "'amazon'"),
                "join"     => array(array("table" => "store_master", "condition" => "store_master.id = product_marketplace_properties.store_id", "type" => 'LEFT')),
            );

            $product_marketplace_properties_data = $this->common_model->select_from('product_marketplace_properties', array("store_id", " marketplace_identifier", "actual_product_master_id", "product_id", "store_master.store_type"), $condition, true, false);

            $product_marketplace_properties_data = helper_array_column_multiple_key($product_marketplace_properties_data, array('actual_product_master_id', 'product_id'), false);

            foreach ($data['print_data'] as $key => $actual_id) {
                $data['print_data'][$key]['asin'] = null;

                $data['print_data'][$key]['store_type'] = null;

                $data['print_data'][$key]['amazon_link'] = null;

                if (isset($product_marketplace_properties_data[$actual_id['actual_product_master_id']][$actual_id['product_id']])) {
                    $store_data = $product_marketplace_properties_data[$actual_id['actual_product_master_id']][$actual_id['product_id']];

                    $data['print_data'][$key]['asin'] = $store_data['marketplace_identifier'];

                    $data['print_data'][$key]['store_type'] = str_replace(' ', '_', $store_data['store_type']);

                    $store_type = str_replace(' ', '_', $store_data['store_type']);

                    $data['print_data'][$key]['amazon_link'] = get_store_product_url($store_type, $store_data['marketplace_identifier']);

                }

                if (isset($product_marketplace_properties_data[$actual_id['actual_product_master_id']])) {
                    $store_data = reset($product_marketplace_properties_data[$actual_id['actual_product_master_id']]);

                    $data['print_data'][$key]['asin'] = $store_data['marketplace_identifier'];

                    $data['print_data'][$key]['store_type'] = str_replace(' ', '_', $store_data['store_type']);

                    $store_type = str_replace(' ', '_', $store_data['store_type']);

                    $data['print_data'][$key]['amazon_link'] = get_store_product_url($store_type, $store_data['marketplace_identifier']);
                }
            }
        }

        //pr($data);

        $Html = $this->load->view('print/print_pdf_items', $data, true);

        echo $Html;
    }

    /*
    @Description    : Function to get po detail
    @Author       : krutin shah
    @Input        :
    @Output       :
    @Date             : 11-05-2017
     */

    public function po_detail_with_label_new($id = null)
    {
        if (!empty($id)) {
            $id = helper_decrypt_url_key($id);
        } else {
            $id = $this->input->post("selected_pos") ? $this->input->post("selected_pos") : $id;
        }

        if (!$id) {
            //redirect('orders/ebay');
        } else {
            if (!is_array($id)) {
                $data['po_id'] = $id;
            } else {
                $data['po_id'] = array_map(function ($value) {return $value;}, $id);
                $data['po_id'] = array_unique($data['po_id']);
            }

            $data['data'] = $this->po_model->get_po_detail_with_items($data);

            $data['shipment_details'] = $this->po_model->get_po_shipment_details($data);

            $data['shipment_details'] = helper_array_column_multiple_key($data["shipment_details"], array('id'), true);

            $po_master_id = isset($data['data'][0]['id']) ? $data['data'][0]['id'] : null;
            $vendor_id    = isset($data['data'][0]['vendor_id']) ? $data['data'][0]['vendor_id'] : null;

            $data['po_billing_address']  = get_po_billing_address($po_master_id, $vendor_id);
            $data['po_shipping_address'] = get_po_shipping_address($po_master_id, $vendor_id);
        }

        foreach ($data["data"] as $key => $value) {
            $data["print_data"][$value["id"]]["po_items"][] = $value;

            $data["print_data"][$value["id"]]["po_details"] = $value;

            if (isset($data["shipment_details"][$value["id"]])) {
                $data["print_data"][$value["id"]]["po_shipment_details"] = $data["shipment_details"][$value["id"]];
            }
        }

        foreach ($data["print_data"] as $k => $v) {
            $d = convert_po_data_into_pagination($v['po_items'], 'html');

            $data["print_data"][$k]['po_items'] = $d;
        }

        if (isset($data["shipment_details_data"]) && count($data["shipment_details_data"]) > 0) {
            $data['sales_order_number']       = implode(',', helper_array_column($data["shipment_details_data"]["po_shipment_details"], null, 'sales_order_number'));
            $data['bol_number']               = implode(',', helper_array_column($data["shipment_details_data"]["po_shipment_details"], null, 'bol_number'));
            $data['carrier']                  = implode(',', helper_array_column($data["shipment_details_data"]["po_shipment_details"], null, 'carrier'));
            $data['shipment_number']          = implode(',', helper_array_column($data["shipment_details_data"]["po_shipment_details"], null, 'shipment_number'));
            $data['pro_number']               = implode(',', helper_array_column($data["shipment_details_data"]["po_shipment_details"], null, 'pro_number'));
            $data['number_of_cartons']        = implode(',', helper_array_column($data["shipment_details_data"]["po_shipment_details"], null, 'number_of_cartons'));
            $data['number_of_pallets']        = implode(',', helper_array_column($data["shipment_details_data"]["po_shipment_details"], null, 'number_of_pallets'));
            $data['shipment_tracking_number'] = implode(',', helper_array_column($data["shipment_details_data"]["po_shipment_details"], null, 'shipment_tracking_number'));
        }

        unset($data["data"]);

        //pr($data);

        //$Html = $this->load->view('print/po_detail_label_right',$data,true);

        $Html = $this->load->view('print/po_detail_label_right_new', $data, true);

        echo $Html;
    }

    /*
    @Description    : Function to update order print flag
    @Author         : Shantanu
    @Input          : Order ID
    @Output         : Update print flag on order master
    @Date           : 05-06-2018
     */

    public function update_print_flag_into_db($id)
    {
        $update_data = array();

        if (!is_array($id)) {
            $update_data = array(
                'is_printed' => '1',
            );

            $this->orders_model->update_print_order_flag('update', $update_data, $id);
        } else {
            foreach ($id as $key => $order_master_id) {
                $update_data[] = array(
                    'id'         => $order_master_id,
                    'is_printed' => '1',
                );
            }

            if (count($update_data) > 0) {
                $this->common_model->update_batch('order_master', $update_data, 'id');
            }
        }
    }

    /*
    @Description    : Function to generate order detail invoice
    @Author         : Shantanu
    @Input          : Order ID
    @Output         : Generate invoice and save to database for further print
    @Date           : 11-05-2017
     */

    public function generate_order_detail_invoice($id = null)
    {
        $data["data"] = array();

        if (!empty($id)) {
            // $id = helper_decrypt_url_key($id);
        } else {
            $id = $this->input->post("id") ? $this->input->post("id") : $id;
            $id = helper_decrypt_url_key($id);
        }

        $print_count = $this->input->post("print_count") ? $this->input->post("print_count") : 1;
        $test_call   = $this->input->post("test_call") ? $this->input->post("test_call") : '0';

        if (!$id) {
            //redirect('orders/ebay');
        } else {
            if (!is_array($id)) {
                $data['order_id'] = $id;
            } else {
                $data['order_id'] = array_map(function ($value) {return $value;}, $id);
                $data['order_id'] = array_unique($data['order_id']);
            }

            // Update print flag for the order into order master
            $this->update_print_flag_into_db($data['order_id']);

            // get order details to store data in database for further print
            $data['data'] = $this->orders_model->get_order_detail_for_final_invoice($data);
        }

        foreach ($data["data"] as $key => $value) {
            $data["order_channel_id"][$value["order_id"]] = ($value['ebay_sales_record_number'] != '') ? $value['ebay_sales_record_number'] : $value['order_channel_id'];
        }

        // Get existing order invoice file name and path
        $file_data = get_invoice_file_name_and_path($id);

        $file_name = $file_data['file_name'];
        $file_path = $file_data['file_path'];

        // if (!file_exists($this->config->item('order_invoice_path').$file_name))
        // {
        // Generate order invoice/slip form helper function (common_helper)
        generate_order_detail_invoice(array($data['order_id']), 'invoice', '', '', $test_call);
        // }

        // Apply logic for number of copies for print
        for ($i = 0; $i < $print_count; $i++) {
            $print_data[] = array(
                'order_id'  => $data["order_channel_id"][$id],
                'file_path' => $file_path,
            );
        }

        // Insert generated file path with order id to database for further print
        insert_print_file_data($print_data);

        $result = array(
            'type' => 'success',
            'msg'  => 'Invoice is in queue for printing!',
        );

        echo json_encode($result);
    }

    /*
    @Description    : Function to generate order detail invoice
    @Author         : Shantanu
    @Input          : Order ID
    @Output         : Generate packing slip and save to database for further print
    @Date           : 11-05-2017
     */

    public function generate_order_detail_packing_slip($id = null)
    {
        $data["data"] = array();

        if (!empty($id)) {
            $id = helper_decrypt_url_key($id);
        } else {
            $id = $this->input->post("id") ? $this->input->post("id") : $id;
            $id = helper_decrypt_url_key($id);
        }

        $print_count = $this->input->post("print_count") ? $this->input->post("print_count") : 1;

        if (!$id) {
            //redirect('orders/ebay');
        } else {
            if (!is_array($id)) {
                $data['order_id'] = $id;
            } else {
                $data['order_id'] = array_map(function ($value) {return $value;}, $id);
                $data['order_id'] = array_unique($data['order_id']);
            }

            // Update print flag for the order into order master
            $this->update_print_flag_into_db($data['order_id']);

            // get order details to store data in database for further print
            $data['data'] = $this->orders_model->get_order_detail_for_packing_slip($data);
        }

        foreach ($data["data"] as $key => $value) {
            $data["order_channel_id"][$value["order_id"]] = ($value['ebay_sales_record_number'] != '') ? $value['ebay_sales_record_number'] : $value['order_channel_id'];
        }

        // Get existing order packing slip file name and path
        $file_data = get_packing_slip_file_name_and_path($id);

        $file_name = $file_data['file_name'];
        $file_path = $file_data['file_path'];

        // if (!file_exists($this->config->item('order_packing_slip_path').$file_name))
        // {
        // Generate order invoice/slip form helper function (common_helper)
        generate_order_detail_invoice(array($data['order_id']), 'slip');
        // }

        // Apply logic for number of copies for print
        for ($i = 0; $i < $print_count; $i++) {
            $print_data[] = array(
                'order_id'  => $data["order_channel_id"][$id],
                'file_path' => $file_path,
            );
        }

        // Insert generated file path with order id to database for further print
        insert_print_file_data($print_data);

        $result = array(
            'type' => 'success',
            'msg'  => 'Packing slip is in queue for printing!',
        );

        echo json_encode($result);
    }

    /*
    @Description    : Function to print bulk order invoice
    @Author         : Shantanu
    @Input          : Order ID array and status
    @Output         : Save all requested orders invoice to database for further print
    @Date           : 08-10-2016
     */

    public function bulk_print_order_invoice()
    {
        $order_ids     = $this->input->post('order_ids');
        $status        = $this->input->post('status');
        $printing_data = array();

        if (!empty($order_ids) && !empty($status)) {
            if ($status == 'print_order_invoice') {
                // Update print flag for the order into order master
                $this->update_print_flag_into_db($order_ids);

                // Get order channel id from order id
                $data['order_channel_id'] = $this->orders_model->get_order_channel_id($order_ids);

                // get orders type wise data
                $order_type_data = $this->orders_model->get_order_type_for_invoice_new(array("order_id" => $order_ids));

                if (!empty($order_type_data)) {
                    $data_array = array();

                    if (isset($order_type_data['wholesale'])) {
                        $data['order_id'] = $order_type_data['wholesale'];

                        // get wholesale order details of manual store data in database for further print
                        $query_array = $this->orders_model->get_wholesale_order_detail_for_invoice_new(array("order_id" => $order_ids));
                        $data_array  = $data_array + $query_array;
                    }

                    if (isset($order_type_data['other'])) {
                        $data['order_id'] = $order_type_data['other'];

                        // Akshit : Show lowest from MSRP or selling price on internation order invoice - 29-04-2019
                        // get order details of other store data in database for further print
                        $new_query_array = $this->orders_model->get_order_detail_for_invoice_new(array("order_id" => $order_ids));
                        $data_array      = $data_array + $new_query_array;
                    }
                }

                $print_array = $data_array;

                if (count($print_array) > 0) {
                    foreach ($print_array as $print_data) {
                        $invoice_data['print_data'][0] = $print_data;

                        /// Load html data for different stores
                        if ($print_data['shipping_detail']['store_marketplace'] == 'Groupon') {
                            $html = $this->load->view('print/groupon_order_detail_invoice', $invoice_data, true);
                        } elseif ($print_data['shipping_detail']['store_marketplace'] == 'Wayfair') {
                            $html = $this->load->view('print/wayfair_order_detail_invoice', $invoice_data, true);
                        } elseif (strtolower($print_data['shipping_detail']['manual_order_type']) == 'wholesale') {
                            $html = $this->load->view('print/manual_order_detail_invoice', $invoice_data, true);
                        } else {
                            $html = $this->load->view('print/order_detail_invoice', $invoice_data, true);
                        }

                        // Get existing order invoice file name and path
                        $file_data = get_invoice_file_name_and_path($print_data['shipping_detail']['order_id']);

                        $file_name = $file_data['file_name'];
                        $file_path = $file_data['file_path'];

                        // Generate order invoice pdf file
                        if (!file_exists($this->config->item('order_invoice_path') . $file_name)) {
                            $file_name = "Invoice-" . $print_data['shipping_detail']['order_id'] . '.pdf';
                            $file_path = './uploads/order_invoice/' . $file_name;
                            $this->load->library('pdf/pdf');
                            $pdf_data = $this->pdf->pdf_create($html, $file_name, false);
                            file_put_contents($file_path, $pdf_data);
                        }

                        $order_id = $print_data['shipping_detail']['order_id'];

                        $printing_data[] = array(
                            'order_id'  => $data["order_channel_id"][$order_id],
                            'file_path' => $file_path,
                        );
                    }

                    // Insert generated file path with order id to database for further print
                    insert_print_file_data($printing_data);
                }

                $message = array(
                    'type' => 'success',
                    'msg'  => 'Invoice is in queue for printing!',
                );
            } else {
                $message = array(
                    'type' => 'error',
                    'msg'  => 'Something went wrong! Please try again.',
                );
            }
        } else {
            $message = array(
                'type' => 'error',
                'msg'  => 'Something went wrong! Please try again.',
            );
        }

        echo json_encode($message);
    }

    /*
    @Description    : Function to print bulk order packing slip
    @Author         : Shantanu
    @Input          : Order ID array and status
    @Output         : Save all requested orders packing slip to database for further print
    @Date           : 08-10-2016
     */

    public function bulk_print_order_packing_slip()
    {
        $order_ids     = $this->input->post('order_ids');
        $status        = $this->input->post('status');
        $printing_data = array();

        if (!empty($order_ids) && !empty($status)) {
            if ($status == 'print_order_packing_slip') {
                // Update print flag for the order into order master
                $this->update_print_flag_into_db($order_ids);

                // Get order channel id from order id
                $data['order_channel_id'] = $this->orders_model->get_order_channel_id($order_ids);

                // get orders type wise data
                $order_type_data = $this->orders_model->get_order_type_for_invoice_new(array("order_id" => $order_ids));

                if (!empty($order_type_data)) {
                    $data_array = array();

                    if (isset($order_type_data['wholesale'])) {
                        $data['order_id'] = $order_type_data['wholesale'];

                        // get wholesale order details of manual store data in database for further print
                        $query_array = $this->orders_model->get_wholesale_order_detail_for_invoice_new(array("order_id" => $order_ids));
                        $data_array  = $data_array + $query_array;
                    }

                    if (isset($order_type_data['other'])) {
                        $data['order_id'] = $order_type_data['other'];

                        // get order details of other store data in database for further print
                        $new_query_array = $this->orders_model->get_order_detail_for_invoice_new(array("order_id" => $order_ids));
                        $data_array      = $data_array + $new_query_array;
                    }
                }

                $print_array = $data_array;

                if (count($print_array) > 0) {
                    foreach ($print_array as $print_data) {
                        $invoice_data['print_data'][0] = $print_data;

                        // Load html data for different stores
                        if ($print_data['shipping_detail']['store_marketplace'] == 'Groupon') {
                            $html = $this->load->view('print/groupon_order_detail_packing_slip', $invoice_data, true);
                        } elseif ($print_data['shipping_detail']['store_marketplace'] == 'Wayfair') {
                            $html = $this->load->view('print/wayfair_order_detail_packing_slip', $invoice_data, true);
                        } elseif (strtolower($print_data['shipping_detail']['manual_order_type']) == 'wholesale') {
                            $html = $this->load->view('print/manual_order_detail_packing_slip', $invoice_data, true);
                        } else {
                            $html = $this->load->view('print/order_detail_packing_slip', $invoice_data, true);
                        }

                        // Get existing order packing slip file name and path
                        $file_data = get_packing_slip_file_name_and_path($print_data['shipping_detail']['order_id']);

                        $file_name = $file_data['file_name'];
                        $file_path = $file_data['file_path'];

                        // Generate order packing slip pdf file
                        if (!file_exists($this->config->item('order_packing_slip_path') . $file_name)) {
                            $file_name = "Invoice-" . $print_data['shipping_detail']['order_id'] . '.pdf';
                            $file_path = './uploads/order_packing_slip/' . $file_name;
                            $this->load->library('pdf/pdf');
                            $pdf_data = $this->pdf->pdf_create($html, $file_name, false);
                            file_put_contents($file_path, $pdf_data);
                        }

                        $order_id = $print_data['shipping_detail']['order_id'];

                        $printing_data[] = array(
                            'order_id'  => $data["order_channel_id"][$order_id],
                            'file_path' => $file_path,
                        );
                    }

                    // Insert generated file path with order id to database for further print
                    insert_print_file_data($printing_data);
                }

                $message = array(
                    'type' => 'success',
                    'msg'  => 'Packing slip is in queue for printing!',
                );
            } else {
                $message = array(
                    'type' => 'error',
                    'msg'  => 'Something went wrong! Please try again.',
                );
            }
        } else {
            $message = array(
                'type' => 'error',
                'msg'  => 'Something went wrong! Please try again.',
            );
        }

        echo json_encode($message);
    }

    /*
    @Description    : Function to print bulk order shipping label
    @Author         : Shantanu
    @Input          : Order ID array and status
    @Output         : Save all requested orders shipping label to database for further print
    @Date           : 08-10-2016
     */

    public function bulk_print_shipping_label()
    {
        $order_ids = $this->input->post('order_ids');
        $status    = $this->input->post('status');

        if (!empty($order_ids) && !empty($status)) {
            if ($status == 'print_label') {
                // get order details to store data in database for further print
                $order_data = $this->shipping_rule_model->get_order_shipping_details($order_ids);

                $print_data = array();

                if (count($order_data) > 0) {
                    foreach ($order_ids as $order_id) {
                        if (isset($order_data[$order_id])) {
                            foreach ($order_data[$order_id] as $package) {
                                $print_data[$package["package_id"]] = array(
                                    'order_id'  => $package["order_channel_id"],
                                    'file_path' => base_url() . 'uploads/shipping_label/' . $package["shipping_label_file"],
                                );
                            }
                        }
                    }
                }

                if (count($print_data) > 0) {
                    // Insert generated file path with order id to database for further print
                    insert_print_file_data($print_data);

                    $requested_orders = count($order_ids);
                    $order_processed  = count($order_ids);
                    $data_diff        = $requested_orders - $order_processed;

                    $msg = 'Shipping label is in queue for printing!';

                    if ($data_diff == 0) {
                        $msg = 'Orders shipping label is in queue for printing!';
                    } elseif ($data_diff > 0 && $data_diff < $requested_orders) {
                        $msg = $order_processed . ' Orders shipping label is in queue for printing!<br>' . $data_diff . ' Orders label are not generated';
                    }

                    $message = array(
                        'type' => 'success',
                        'msg'  => $msg,
                    );

                    $message = array(
                        'type' => 'success',
                        'msg'  => 'Shipping label is in queue for printing!',
                    );
                } else {
                    $message = array(
                        'type' => 'error',
                        'msg'  => 'No Shipping label found for printing!',
                    );
                }
            } else {
                $message = array(
                    'type' => 'error',
                    'msg'  => 'Something went wrong! Please try again.',
                );
            }
        } else {
            $message = array(
                'type' => 'error',
                'msg'  => 'Something went wrong! Please try again.',
            );
        }
        echo json_encode($message);
    }

    /*
    @Description    : Function to print bulk order invoice and shipping label
    @Author         : Shantanu
    @Input          : Order ID array and status
    @Output         : Save all requested orders invoice and shipping label to database for further print
    @Date           : 08-10-2016
     */

    public function bulk_print_order_invoice_label($order_ids = array())
    {
        $is_internal_call = false;
        if (count($order_ids) > 0) {
            $order_ids        = $order_ids;
            $status           = 'print_label_order';
            $is_internal_call = true;
        } else {
            $order_ids = $this->input->post('order_ids');
            $status    = $this->input->post('status');
        }

        if (!empty($order_ids) && !empty($status)) {
            if ($status == 'print_label_order') {
                $print_data = array();

                // Update print flag for the order into order master
                $this->update_print_flag_into_db($order_ids);

                $order_data = $this->shipping_rule_model->get_order_shipping_details($order_ids);

                if (count($order_data) > 0) {
                    $file_order_ids = array_keys($order_data);

                    $order_sku_wise_data = $this->shipping_rule_model->get_order_sku_details($file_order_ids);

                    $sku_wise_bifurcation = array();

                    foreach ($order_sku_wise_data as $key => $value) {
                        $sku_wise_bifurcation[$value->sku]['orders'][] = $value->order_id;

                        $sku_wise_bifurcation[$value->sku]['sku']          = $value->sku;
                        $sku_wise_bifurcation[$value->sku]['product_id']   = $value->product_id;
                        $sku_wise_bifurcation[$value->sku]['location']     = $value->location;
                        $sku_wise_bifurcation[$value->sku]['total_qty']    = isset($sku_wise_bifurcation[$value->sku]['total_qty']) ? $sku_wise_bifurcation[$value->sku]['total_qty'] + $value->qty_ordered : $value->qty_ordered;
                        $sku_wise_bifurcation[$value->sku]['total_orders'] = isset($sku_wise_bifurcation[$value->sku]['total_orders']) ? $sku_wise_bifurcation[$value->sku]['total_orders'] + 1 : 1;
                    }

                    foreach ($sku_wise_bifurcation as $sku => $sku_bifurcation_details) {
                        $orders = $sku_bifurcation_details['orders'];

                        $print_data = array();

                        $processed_order = array();

                        $print_data[] = array(
                            'order_id'  => $sku,
                            'file_path' => generate_print_sku_file_name($sku_bifurcation_details),
                        );

                        foreach ($orders as $order_id) {
                            $invoice_file_path = './uploads/order_invoice/' . get_invoice_file_name_and_path($order_id)['file_name'];

                            if (!file_exists($invoice_file_path)) {
                                generate_order_detail_invoice(array($order_id), 'invoice');
                            }

                            if (isset($order_data[$order_id])) {
                                foreach ($order_data[$order_id] as $package) {
                                    if (!in_array($package["order_channel_id"], $processed_order)) {
                                        $print_data[] = array(
                                            'order_id'  => $package["order_channel_id"],
                                            'file_path' => get_invoice_file_name_and_path($order_id)['file_path'],
                                        );

                                        $processed_order[] = $package["order_channel_id"];
                                    }

                                    $print_data[] = array(
                                        'order_id'  => $package["order_channel_id"],
                                        'file_path' => base_url() . 'uploads/shipping_label/' . $package["shipping_label_file"],
                                    );
                                }
                            }
                        }

                        ////////////////////////

                        if (count($print_data)) {
                            insert_print_file_data($print_data);
                        }
                    }

                    $message = array(
                        'type' => 'success',
                        'msg'  => 'Orders Invoice and shipping label is in queue for printing!',
                    );
                } else {
                    $message = array(
                        'type' => 'error',
                        'msg'  => 'No relevant order found for printing!',
                    );
                }

            } else {
                $message = array(
                    'type' => 'error',
                    'msg'  => 'Something went wrong! Please try again.',
                );
            }
        } else {
            $message = array(
                'type' => 'error',
                'msg'  => 'Something went wrong! Please try again.',
            );
        }

        if ($is_internal_call) {
            //echo json_encode($message);
        } else {
            echo json_encode($message);
        }
    }

    /*
    @Description    : Function to print bulk order invoice and shipping label
    @Author         : Shantanu
    @Input          : Order ID array and status
    @Output         : Save all requested orders invoice and shipping label to database for further print
    @Date           : 08-10-2016
     */

    public function bulk_print_order_invoice_label_new($order_ids = array())
    {
        $is_internal_call = false;
        if (count($order_ids) > 0) {
            $order_ids        = $order_ids;
            $status           = 'print_label_order';
            $is_internal_call = true;
        } else {
            $order_ids = $this->input->post('order_ids');
            $status    = $this->input->post('status');
        }

        if (!empty($order_ids) && !empty($status)) {
            if ($status == 'print_label_order') {
                $print_data = array();

                // Update print flag for the order into order master
                $this->update_print_flag_into_db($order_ids);

                // get order details to store data in database for further print
                $order_data = $this->shipping_rule_model->get_order_shipping_details($order_ids);

                if (count($order_data) > 0) {
                    $processed_order = array();

                    foreach ($order_ids as $order_id) {
                        generate_order_detail_invoice(array($order_id), 'invoice');

                        if (isset($order_data[$order_id])) {
                            foreach ($order_data[$order_id] as $package) {
                                if (!in_array($package["order_channel_id"], $processed_order)) {
                                    $print_data[] = array(
                                        'order_id'  => $package["order_channel_id"],
                                        'file_path' => get_invoice_file_name_and_path($order_id)['file_path'],
                                    );

                                    $processed_order[] = $package["order_channel_id"];
                                }

                                $print_data[] = array(
                                    'order_id'  => $package["order_channel_id"],
                                    'file_path' => base_url() . 'uploads/shipping_label/' . $package["shipping_label_file"],
                                );
                            }
                        }
                    }
                }

                if (count($print_data)) {
                    // Insert generated file path with order id to database for further print
                    insert_print_file_data($print_data);

                    $requested_orders = count($order_ids);
                    $order_processed  = count($order_ids);
                    $data_diff        = $requested_orders - $order_processed;

                    $msg = 'Invoice and shipping label is in queue for printing!';

                    if ($data_diff == 0) {
                        $msg = 'Orders Invoice and shipping label is in queue for printing!';
                    } elseif ($data_diff > 0 && $data_diff < $requested_orders) {
                        $msg = $order_processed . ' Orders Invoice and shipping label is in queue for printing!<br>' . $data_diff . ' Orders label are not generated';
                    }

                    $message = array(
                        'type' => 'success',
                        'msg'  => $msg,
                    );
                } else {
                    $message = array(
                        'type' => 'error',
                        'msg'  => 'No relevant order found for printing!',
                    );
                }
            } else {
                $message = array(
                    'type' => 'error',
                    'msg'  => 'Something went wrong! Please try again.',
                );
            }
        } else {
            $message = array(
                'type' => 'error',
                'msg'  => 'Something went wrong! Please try again.',
            );
        }

        if ($is_internal_call) {
            //echo json_encode($message);
        } else {
            echo json_encode($message);
        }
    }

    /*
    @Description    : Function to print bulk order invoice
    @Author         : Shantanu
    @Input          : Order ID
    @Output         : Save order invoice and shipping label to database for further print
    @Date           : 08-10-2016
     */

    public function print_invoice_and_label($id = null)
    {
        $data["data"]     = array();
        $is_internal_call = false;

        if (!empty($id)) {
            $id               = helper_decrypt_url_key($id);
            $is_internal_call = true;
        } else {
            $id = $this->input->post("id") ? $this->input->post("id") : $id;
            $id = helper_decrypt_url_key($id);
        }

        $is_print_template = $this->input->post("is_print_template") ? $this->input->post("is_print_template") : '0';

        if (!$id) {
            //redirect('orders/ebay');
        } else {
            if (!is_array($id)) {
                $data['order_id'] = $id;
            } else {
                $data['order_id'] = array_map(function ($value) {
                    return $value;
                }, $id);
                $data['order_id'] = array_unique($data['order_id']);
            }

            // Update print flag for the order into order master
            $this->update_print_flag_into_db($data['order_id']);

            // get order details to store data in database for further print
            $shipping_details = $this->shipping_rule_model->get_order_shipment_details($data['order_id'], '', $is_print_template);

            $processed_order = array();

            foreach ($shipping_details as $package_data) {
                $order_channel_id = ($package_data['ebay_sales_record_number'] != '') ? $package_data['ebay_sales_record_number'] : $package_data['order_channel_id'];

                if (!in_array($order_channel_id, $processed_order)) {
                    $print_data[] = array(
                        'order_id'  => $order_channel_id,
                        'file_path' => get_invoice_file_name_and_path($package_data['order_id'])['file_path'],
                    );

                    if (isset($package_data['store_label']) && $package_data['store_label'] != '') {
                        $print_data[] = array(
                            'order_id'  => $order_channel_id,
                            'file_path' => base_url() . 'uploads/order_shipping_label/' . $package_data['store_label'],
                        );
                    }

                    $processed_order[] = $order_channel_id;
                }

                $print_data[$package_data['package_id']] = array(
                    'order_id'  => $order_channel_id,
                    'file_path' => base_url() . 'uploads/shipping_label/' . $package_data["shipping_label_file"],
                );
            }

            // Get existing order invoice file name and path
            $file_data = get_invoice_file_name_and_path($data['order_id']);

            $file_name = $file_data['file_name'];
            $file_path = $file_data['file_path'];

            // if (!file_exists($this->config->item('order_invoice_path').$file_name))
            // {
            // Generate order invoice/slip form helper function (common_helper)
            generate_order_detail_invoice(array($data['order_id']), 'invoice');
            // }

            // Insert generated file path with order id to database for further print
            insert_print_file_data($print_data);

            $print_result = array(
                'type' => 'success',
                'msg'  => 'Invoice and shipping label is in queue for printing!',
                'url'  => '',
            );
        }

        if ($is_internal_call) {
            return;
        } else {
            echo json_encode($print_result);
        }
    }

    /*
    @Description    : Function to print packing slip and shipping label
    @Author         : Shantanu
    @Input          : Order ID
    @Output         : Save order packing slip and shipping label to database for further print
    @Date           : 08-10-2016
     */

    public function print_packing_slip_and_label($id = null)
    {
        $data["data"]     = array();
        $is_internal_call = false;
        $print_data       = array();

        if (!empty($id)) {
            $id               = helper_decrypt_url_key($id);
            $is_internal_call = true;
        } else {
            $id = $this->input->post("id") ? $this->input->post("id") : $id;
            $id = helper_decrypt_url_key($id);
        }

        $is_print_template = $this->input->post("is_print_template") ? $this->input->post("is_print_template") : '0';

        if (!$id) {
            //redirect('orders/ebay');
        } else {
            if (!is_array($id)) {
                $data['order_id'] = $id;
            } else {
                $data['order_id'] = array_map(function ($value) {
                    return $value;
                }, $id);
                $data['order_id'] = array_unique($data['order_id']);
            }

            // Update print flag for the order into order master
            $this->update_print_flag_into_db($data['order_id']);

            // get order details to store data in database for further print
            $shipping_details = $this->shipping_rule_model->get_order_shipment_details($data['order_id'], '', $is_print_template);

            $processed_order = array();

            foreach ($shipping_details as $package_data) {
                $order_channel_id = ($package_data['ebay_sales_record_number'] != '') ? $package_data['ebay_sales_record_number'] : $package_data['order_channel_id'];

                if (!in_array($order_channel_id, $processed_order)) {
                    $print_data[] = array(
                        'order_id'  => $order_channel_id,
                        'file_path' => get_packing_slip_file_name_and_path($package_data['order_id'])['file_path'],
                    );

                    if (isset($package_data['store_label']) && $package_data['store_label'] != '') {
                        $print_data[] = array(
                            'order_id'  => $order_channel_id,
                            'file_path' => base_url() . 'uploads/order_shipping_label/' . $package_data['store_label'],
                        );
                    }

                    $processed_order[] = $order_channel_id;
                }

                $print_data[$package_data["package_id"]] = array(
                    'order_id'  => $order_channel_id,
                    'file_path' => base_url() . 'uploads/shipping_label/' . $package_data["shipping_label_file"],
                );
            }

            // Get existing order packing slip file name and path
            $file_data = get_packing_slip_file_name_and_path($data['order_id']);

            $file_name = $file_data['file_name'];
            $file_path = $file_data['file_path'];

            // if (!file_exists($this->config->item('order_packing_slip_path').$file_name))
            // {
            // Generate order invoice/slip form helper function (common_helper)
            generate_order_detail_invoice(array($data['order_id']), 'slip');
            // }

            // Insert generated file path with order id to database for further print
            insert_print_file_data($print_data);

            $print_result = array(
                'type' => 'success',
                'msg'  => 'Packing slip and shipping label is in queue for printing!',
                'url'  => '',
            );
        }

        if ($is_internal_call) {
            return;
        } else {
            echo json_encode($print_result);
        }
    }

    /*
    @Description    : Function to print shipping label
    @Author         : Shantanu
    @Input          : Order ID and internally called status
    @Output         : Save order shipping label to database for further print
    @Date           : 08-10-2016
     */

    public function print_shipping_label($id = null, $internally_called = false, $is_print_template = '0')
    {
        $data["data"] = array();

        if (!empty($id)) {
            $id = helper_decrypt_url_key($id);
        } else {
            $id = $this->input->post("id") ? $this->input->post("id") : $id;
            $id = helper_decrypt_url_key($id);
        }

        $print_count = $this->input->post("print_count") ? $this->input->post("print_count") : 1;

        $is_print_template = $this->input->post("is_print_template") ? $this->input->post("is_print_template") : $is_print_template;

        if (!$id) {
            //redirect('orders/ebay');
        } else {
            if (!is_array($id)) {
                $data['order_id'] = $id;
            } else {
                $data['order_id'] = array_map(function ($value) {
                    return $value;
                }, $id);
                $data['order_id'] = array_unique($data['order_id']);
            }

            // get order details to store data in database for further print
            $data['data'] = $this->shipping_rule_model->get_order_shipping_label_file($data['order_id'], $is_print_template);
        }

        $print_data = array();

        if (count($data["data"]) > 0) {
            foreach ($data["data"] as $key => $value) {
                if (isset($value['store_label']) && $value['store_label'] != '') {
                    $print_data[] = array(
                        'order_id'  => $order_channel_id,
                        'file_path' => base_url() . 'uploads/order_shipping_label/' . $value['store_label'],
                    );
                }

                $print_data[$value["package_id"]] = array(
                    'order_id'  => ($value['ebay_sales_record_number'] != '') ? $value['ebay_sales_record_number'] : $value['order_channel_id'],
                    'file_path' => base_url() . 'uploads/shipping_label/' . $value['shipping_label_file'],
                );
            }
        }

        if (count($print_data) > 0) {
            $print_data_temp = array();

            foreach ($print_data as $print) {
                // Apply logic for number of copies for print
                for ($i = 0; $i < $print_count; $i++) {
                    $print_data_temp[] = $print;
                }
            }

            $print_data = $print_data_temp;

            // Insert generated file path with order id to database for further print
            insert_print_file_data($print_data);

            $result = array(
                'type' => 'success',
                'msg'  => 'Shipping label is in queue for printing!',
            );
        } else {
            $result = array(
                'type' => 'error',
                'msg'  => 'Shipping label is not generated',
            );
        }

        ////////////////////

        if ($internally_called) {
            return;
        }

        echo json_encode($result);
    }

    /*
    @Description    : Function to print order invoice from browser
    @Author         : Shantanu
    @Input          : Order ID, Action from and number of print copy
    @Output         : HTML page of invoice
    @Date           : 08-10-2016
     */

    public function print_system_invoice($id = array(), $action = 'invoice', $print_copy = '1', $test_call = '0')
    {
        $order_ids = array();
        $html      = '';

        if (!empty($id)) {
            $id = helper_decrypt_url_key($id);
        } else {
            $id     = $this->input->post("id") ? $this->input->post("id") : $id;
            $action = $this->input->post("action") ? $this->input->post("action") : $action;

            if (!is_array($id)) {
                $id = helper_decrypt_url_key($id);
            }
        }

        if (!$id) {
            //redirect('orders/ebay');
        } else {
            if (!is_array($id)) {
                $order_ids[] = $id;
            } else {
                $order_ids = array_map(function ($value) {return $value;}, $id);
                $order_ids = array_unique($order_ids);
            }
        }

        if (is_array($order_ids) && count($order_ids) > 0) {
            $data['order_id'] = array_unique($order_ids);

            // Update print flag for the order into order master
            $this->update_print_flag_into_db($data['order_id']);

            // get orders type wise data
            $order_type_data = $this->orders_model->get_order_type_for_invoice_new($data);

            if (!empty($order_type_data)) {
                $data_array = array();

                // add condition "&& $test_call == '1'" if want to convert it for test only
                if (isset($order_type_data['wholesale'])) {
                    $data['order_id'] = $order_type_data['wholesale'];

                    // get wholesale order details of manual store data in database for further print
                    $query_array = $this->orders_model->get_wholesale_order_detail_for_invoice_new($data);
                    $data_array  = $data_array + $query_array;
                }

                if (isset($order_type_data['other'])) {
                    $data['order_id'] = $order_type_data['other'];

                    // get order details of other store data in database for further print
                    $new_query_array = $this->orders_model->get_order_detail_for_invoice_new($data);
                    $data_array      = $data_array + $new_query_array;
                }
            }

            $data['data'] = $data_array;

            if (count($data['data']) > 0) {
                $html = '';
                foreach ($data["data"] as $print_data) {
                    // Apply logic for number of copies for print
                    for ($i = 0; $i < $print_copy; $i++) {
                        // Separate order data for different stores invoice/slip design
                        if ($print_data['shipping_detail']['store_marketplace'] == 'Groupon') {
                            $data['group_on']['print_data'][] = $print_data;
                        } elseif ($print_data['shipping_detail']['store_marketplace'] == 'Wayfair') {
                            $data['wayfair']['print_data'][] = $print_data;
                        } elseif (strtolower($print_data['shipping_detail']['manual_order_type']) == 'wholesale') {
                            $data['manual']['print_data'][] = convert_wholesale_data_into_pagination($print_data);
                        } else {
                            $data['other']['print_data'][] = $print_data;
                        }
                    }
                }

                // Load html data for different stores
                if (isset($data['group_on']['print_data'])) {
                    if ($action == 'invoice') {
                        $html .= $this->load->view('print/groupon_order_detail_invoice_system', $data['group_on'], true);
                    } elseif ($action == 'slip') {
                        $html .= $this->load->view('print/groupon_order_detail_packing_slip_system', $data['group_on'], true);
                    }
                } elseif (isset($data['wayfair']['print_data'])) {
                    if ($action == 'invoice') {
                        $html .= $this->load->view('print/wayfair_order_detail_invoice_system', $data['wayfair'], true);
                    } elseif ($action == 'slip') {
                        $html .= $this->load->view('print/wayfair_order_detail_packing_slip_system', $data['wayfair'], true);
                    }
                } elseif (isset($data['manual']['print_data'])) {
                    if ($action == 'invoice') {
                        $html .= $this->load->view('print/manual_order_detail_invoice_system', $data['manual'], true);
                    } elseif ($action == 'slip') {
                        $html .= $this->load->view('print/manual_order_detail_packing_slip_system', $data['manual'], true);
                    }
                }
                if (isset($data['other']['print_data'])) {
                    if (isset($data['group_on']['print_data'])) {
                        $data['other']['is_page_break'] = true;
                    }
                    if ($action == 'invoice') {
                        $html .= $this->load->view('print/order_detail_invoice_system', $data['other'], true);
                    } elseif ($action == 'slip') {
                        $html .= $this->load->view('print/order_detail_packing_slip_system', $data['other'], true);
                    }
                }
            }
        }

        echo $html;
    }

    /*
    @Description    : Function to print order shipping label from browser
    @Author         : Shantanu
    @Input          : Order ID and number of print copy
    @Output         : HTML page of shipping label
    @Date           : 08-10-2016
     */

    public function print_system_shipping_label($id = null, $print_copy = '1', $is_print_template = '0')
    {
        $data["data"] = array();
        $html         = '';
        if (!empty($id)) {
            $id = helper_decrypt_url_key($id);
        } else {
            $id = $this->input->post("id") ? $this->input->post("id") : $id;
            if (!is_array($id)) {
                $id = helper_decrypt_url_key($id);
            }
        }

        $is_print_template = $this->input->post("is_print_template") ? $this->input->post("is_print_template") : $is_print_template;

        if (!$id) {
            //redirect('orders/ebay');
        } else {
            if (!is_array($id)) {
                $data['order_id'][] = $id;
            } else {
                $data['order_id'] = array_map(function ($value) {
                    return $value;
                }, $id);
                $data['order_id'] = array_unique($data['order_id']);
            }

            // get order details to store data in database for further print
            $data['data'] = $this->shipping_rule_model->get_order_shipping_label_file($data['order_id'], $is_print_template);
        }

        $print_data = array();

        if (count($data["data"]) > 0) {
            foreach ($data["data"] as $key => $value) {
                $print_data['print_data'][$value["package_id"]] = array(
                    'order_id'    => ($value['ebay_sales_record_number'] != '') ? $value['ebay_sales_record_number'] : $value['order_channel_id'],
                    'file_path'   => base_url() . 'uploads/shipping_label_system/' . $value['shipping_label_file'],
                    'store_label' => isset($value['store_label']) ? base_url() . 'uploads/order_shipping_label/system_' . $value['store_label'] : '',
                );
            }
        }

        if (count($print_data) > 0) {
            $print_data_temp = array();

            foreach ($print_data['print_data'] as $print) {
                // Apply logic for number of copies for print
                for ($i = 0; $i < $print_copy; $i++) {
                    $print_data_temp['print_data'][] = $print;
                }
            }

            $print_data = $print_data_temp;

            $html = $this->load->view('print/order_shipping_label', $print_data, true);
        }

        ////////////////////

        echo $html;
    }

    /*
    @Description    : Function to print order promotional label from browser
    @Author         : Shantanu
    @Input          : Order ID and number of print copy
    @Output         : HTML page of shipping label
    @Date           : 10-10-2018
     */

    public function print_system_promotional_label($id = null, $print_copy = '1', $is_print_template = '0')
    {
        $data["data"] = array();
        $html         = '';
        if (!empty($id)) {
            $id = helper_decrypt_url_key($id);
        } else {
            $id = $this->input->post("id") ? $this->input->post("id") : $id;
            if (!is_array($id)) {
                $id = helper_decrypt_url_key($id);
            }
        }

        $is_print_template = $this->input->post("is_print_template") ? $this->input->post("is_print_template") : $is_print_template;

        if (!$id) {
            //redirect('orders/ebay');
        } else {
            if (!is_array($id)) {
                $data['order_id'][] = $id;
            } else {
                $data['order_id'] = array_map(function ($value) {
                    return $value;
                }, $id);
                $data['order_id'] = array_unique($data['order_id']);
            }

            // get order details to store data in database for further print
            $data['data'] = $this->shipping_rule_model->get_order_shipping_label_file($data['order_id'], $is_print_template);
        }

        $print_data = array();

        if (count($data["data"]) > 0) {
            foreach ($data["data"] as $key => $value) {
                $print_data['print_data'][$value["package_id"]] = array(
                    'order_id'    => ($value['ebay_sales_record_number'] != '') ? $value['ebay_sales_record_number'] : $value['order_channel_id'],
                    'store_label' => isset($value['store_label']) ? base_url() . 'uploads/order_shipping_label/system_' . $value['store_label'] : '',
                );
            }
        }

        if (count($print_data) > 0) {
            $print_data_temp = array();

            foreach ($print_data['print_data'] as $print) {
                // Apply logic for number of copies for print
                for ($i = 0; $i < $print_copy; $i++) {
                    $print_data_temp['print_data'][] = $print;
                }
            }

            $print_data = $print_data_temp;

            $html = $this->load->view('print/order_shipping_label', $print_data, true);
        }

        ////////////////////

        echo $html;
    }

    /*
    @Description    : Function to print order invoice and shipping label from browser
    @Author         : Shantanu
    @Input          : Order ID
    @Output         : HTML page of invoice and shipping label
    @Date           : 08-10-2016
     */

    public function print_system_invoice_label($id = array(), $is_print_template = '0')
    {
        $order_ids = array();
        $html      = '';

        if (!empty($id)) {
            $id = helper_decrypt_url_key($id);
        } else {
            $id     = $this->input->post("id") ? $this->input->post("id") : $id;
            $action = $this->input->post("action") ? $this->input->post("action") : $action;

            if (!is_array($id)) {
                $id = helper_decrypt_url_key($id);
            }
        }

        $is_print_template = $this->input->post("is_print_template") ? $this->input->post("is_print_template") : $is_print_template;

        if (!$id) {
            //redirect('orders/ebay');
        } else {
            if (!is_array($id)) {
                $order_ids[] = $id;
            } else {
                $order_ids = array_map(function ($value) {return $value;}, $id);
                $order_ids = array_unique($order_ids);
            }
        }

        if (is_array($order_ids) && count($order_ids) > 0) {
            $data['order_id'] = array_unique($order_ids);

            // Update print flag for the order into order master
            $this->update_print_flag_into_db($data['order_id']);

            // get orders type wise data
            $order_type_data = $this->orders_model->get_order_type_for_invoice_new($data);

            if (!empty($order_type_data)) {
                $data_array = array();

                if (isset($order_type_data['wholesale'])) {
                    $data['order_id'] = $order_type_data['wholesale'];

                    // get wholesale order details of manual store data in database for further print
                    $query_array = $this->orders_model->get_wholesale_order_detail_for_invoice_label_new($data);
                    $data_array  = $data_array + $query_array;
                }

                if (isset($order_type_data['other'])) {
                    $data['order_id'] = $order_type_data['other'];

                    // get order details of other store data in database for further print
                    $new_query_array = $this->orders_model->get_order_detail_for_invoice_label_new($data, $is_print_template);
                    $data_array      = $data_array + $new_query_array;
                }
            }

            $data['data'] = $data_array;

            if (count($data['data']) > 0) {
                $html = '';
                foreach ($data["data"] as $print_data) {
                    // Separate order data for different stores invoice/slip design
                    if ($print_data['shipping_detail']['store_marketplace'] == 'Groupon') {
                        $data['group_on']['print_data'][] = $print_data;
                    } elseif ($print_data['shipping_detail']['store_marketplace'] == 'Wayfair') {
                        $data['wayfair']['print_data'][] = $print_data;
                    } elseif (strtolower($print_data['shipping_detail']['manual_order_type']) == 'wholesale') {
                        $data['manual']['print_data'][] = convert_wholesale_data_into_pagination($print_data);
                    } else {
                        $data['other']['print_data'][] = $print_data;
                    }
                }

                // Load html data and apply page break if store changes
                if (isset($data['group_on']['print_data'])) {
                    $html .= $this->load->view('print/groupon_order_detail_invoice_label', $data['group_on'], true);
                }
                if (isset($data['wayfair']['print_data'])) {
                    if (isset($data['group_on']['print_data'])) {
                        $data['wayfair']['is_page_break'] = true;
                    }
                    $html .= $this->load->view('print/wayfair_order_detail_invoice_label', $data['wayfair'], true);
                }
                if (isset($data['manual']['print_data'])) {
                    if (isset($data['group_on']['print_data'])) {
                        $data['manual']['is_page_break'] = true;
                    } elseif (isset($data['wayfair']['print_data'])) {
                        $data['manual']['is_page_break'] = true;
                    }
                    $html .= $this->load->view('print/manual_order_detail_invoice_label', $data['manual'], true);
                }
                if (isset($data['other']['print_data'])) {
                    if (isset($data['wayfair']['print_data'])) {
                        $data['other']['is_page_break'] = true;
                    } elseif (isset($data['group_on']['print_data'])) {
                        $data['other']['is_page_break'] = true;
                    } elseif (isset($data['manual']['print_data'])) {
                        $data['other']['is_page_break'] = true;
                    }
                    $html .= $this->load->view('print/order_detail_invoice_label', $data['other'], true);
                }
            }
        }

        echo $html;
    }

    /*
    @Description    : Function to print order packing slip and shipping label from browser
    @Author         : Shantanu
    @Input          : Order ID
    @Output         : HTML page of packing slip and shipping label
    @Date           : 08-10-2016
     */

    public function print_system_packing_slip_label($id = array(), $is_print_template = '0')
    {
        $order_ids = array();
        $html      = '';

        if (!empty($id)) {
            $id = helper_decrypt_url_key($id);
        } else {
            $id     = $this->input->post("id") ? $this->input->post("id") : $id;
            $action = $this->input->post("action") ? $this->input->post("action") : $action;

            if (!is_array($id)) {
                $id = helper_decrypt_url_key($id);
            }
        }

        $is_print_template = $this->input->post("is_print_template") ? $this->input->post("is_print_template") : $is_print_template;

        if (!$id) {
            //redirect('orders/ebay');
        } else {
            if (!is_array($id)) {
                $order_ids[] = $id;
            } else {
                $order_ids = array_map(function ($value) {return $value;}, $id);
                $order_ids = array_unique($order_ids);
            }
        }

        if (is_array($order_ids) && count($order_ids) > 0) {
            $data['order_id'] = array_unique($order_ids);

            // Update print flag for the order into order master
            $this->update_print_flag_into_db($data['order_id']);

            // get orders type wise data
            $order_type_data = $this->orders_model->get_order_type_for_invoice_new($data);

            if (!empty($order_type_data)) {
                $data_array = array();

                if (isset($order_type_data['wholesale'])) {
                    $data['order_id'] = $order_type_data['wholesale'];

                    // get wholesale order details of manual store data in database for further print
                    $query_array = $this->orders_model->get_wholesale_order_detail_for_invoice_label_new($data);
                    $data_array  = $data_array + $query_array;
                }

                if (isset($order_type_data['other'])) {
                    $data['order_id'] = $order_type_data['other'];

                    // get order details of other store data in database for further print
                    $new_query_array = $this->orders_model->get_order_detail_for_invoice_label_new($data, $is_print_template);
                    $data_array      = $data_array + $new_query_array;
                }
            }

            $data['data'] = $data_array;

            if (count($data['data']) > 0) {
                $html = '';
                foreach ($data["data"] as $print_data) {
                    // Separate order data for different stores invoice/slip design
                    if ($print_data['shipping_detail']['store_marketplace'] == 'Groupon') {
                        $data['group_on']['print_data'][] = $print_data;
                    } elseif ($print_data['shipping_detail']['store_marketplace'] == 'Wayfair') {
                        $data['wayfair']['print_data'][] = $print_data;
                    } elseif (strtolower($print_data['shipping_detail']['manual_order_type']) == 'wholesale') {
                        $data['manual']['print_data'][] = convert_wholesale_data_into_pagination($print_data);
                    } else {
                        $data['other']['print_data'][] = $print_data;
                    }
                }

                // Load html data and apply page break if store changes
                if (isset($data['group_on']['print_data'])) {
                    $html .= $this->load->view('print/groupon_order_detail_packing_slip_label', $data['group_on'], true);
                }
                if (isset($data['wayfair']['print_data'])) {
                    if (isset($data['group_on']['print_data'])) {
                        $data['wayfair']['is_page_break'] = true;
                    }
                    $html .= $this->load->view('print/wayfair_order_detail_packing_slip_label', $data['wayfair'], true);
                }
                if (isset($data['manual']['print_data'])) {
                    if (isset($data['group_on']['print_data'])) {
                        $data['manual']['is_page_break'] = true;
                    } elseif (isset($data['wayfair']['print_data'])) {
                        $data['manual']['is_page_break'] = true;
                    }
                    $html .= $this->load->view('print/manual_order_detail_packing_slip_label', $data['wayfair'], true);
                }
                if (isset($data['other']['print_data'])) {
                    if (isset($data['wayfair']['print_data'])) {
                        $data['other']['is_page_break'] = true;
                    } elseif (isset($data['group_on']['print_data'])) {
                        $data['other']['is_page_break'] = true;
                    } elseif (isset($data['manual']['print_data'])) {
                        $data['other']['is_page_break'] = true;
                    }
                    $html .= $this->load->view('print/order_detail_packing_slip_label', $data['other'], true);
                }
            }
        }

        echo $html;
    }

    /*
    @Description    : Function to print order invoice and shipping label from browser
    @Author         : Shantanu
    @Input          : Action from @string default all
    @Output         : User preference print setting details
    @Date           : 08-10-2016
     */

    public function get_print_type()
    {
        $action_from = $this->input->post("action_from") ? $this->input->post("action_from") : 'all';

        echo $print_methode = $this->shipping_rule_model->get_print_setting_data($action_from);
    }

    /*
    @Description    : Function to print order invoice and shipping label from browser
    @Author         : Shantanu
    @Input          :
    @Output         : User preference print setting details for print label only or invoice.slip with label
    @Date           : 08-10-2016
     */

    public function get_print_setting()
    {
        echo $print_methode = $this->shipping_rule_model->get_printing_setting();
    }

    /*
    @Description    : Function to get promotional template print setting
    @Author         : Shantanu
    @Input          : Order id
    @Output         : User preference print setting details for print promotional template if exist
    @Date           : 04-10-2018
     */

    public function get_promotional_template_setting()
    {
        $store = $this->input->post("ebay_store") ? $this->input->post("ebay_store") : 0;

        if ($store > 0) {
            echo $print_methode = $this->shipping_rule_model->get_promotional_template_setting($store);
        } else {
            echo $print_methode = 0;
        }
    }

    /*
    @Description : How to use print application
    @Author : Jayesh Chavda
    @Date : 28/2/2018
     */

    public function print_instruction()
    {
        $this->PAGE_HEADER_DATA = get_page_header_data('how_to_print');

        echo parent::c_render('print/how_to_print');
    }

    /*
    @Description : Test print call
    @Author : Jayesh Chavda
    @Date : 28/2/2018
     */

    public function print_test_print_call()
    {
        $html = '';

        $print_data['print_data'][] = array(
            'file_path' => base_url() . 'assets/images/print_instruction/test_print_document.png');

        if (count($print_data) > 0) {
            $html = $this->load->view('print/order_shipping_label', $print_data, true);
        }

        ////////////////////

        echo $html;
    }

    /*
    @Description : Test print call
    @Author : Jayesh Chavda
    @Date : 28/2/2018
     */

    public function test_print_call()
    {
        $print_data[] = array(
            'order_id'  => "10000001",
            'file_path' => base_url() . 'assets/images/print_instruction/test_print_document.png',
        );

        insert_print_file_data($print_data);

        $result = array(
            'type' => 'success',
            'msg'  => 'Please check the print',
        );

        echo json_encode($result);
    }

    /*
    @Description    : Function to print product label from application
    @Author         : Shantanu
    @Input          :
    @Output         :
    @Date           : 22-05-2018
     */

    public function print_product_label($id = array())
    {
        $product_ids = array();
        $html        = '';

        if (empty($id)) {
            $id = $this->input->post("id") ? $this->input->post("id") : $id;
        }

        if (!is_array($id)) {
            if (!is_numeric($id)) {
                $id = helper_decrypt_url_key($id);
            }

            $product_ids[] = $id;
        } else {
            $product_ids = array_map(function ($value) {return $value;}, $id);
            $product_ids = array_unique($product_ids);
        }

        if (is_array($product_ids) && count($product_ids) > 0) {
            $product_ids = array_unique($product_ids);

            $product_data = $this->orders_model->get_product_detail_for_label($product_ids);

            $print_data = array();

            if (count($product_data) > 0) {
                foreach ($product_data as $key => $value) {
                    $file_name = 'Product-' . $value['id'];

                    $format = 'png';

                    $source_file_path = base_url() . 'cron/print_crons/print_product_label_system/' . $value['id'];

                    $destination_file_path = '/var/www/html/erp_new/uploads/product_label/';

                    $destination_file_path = generate_html_to_image($file_name, $source_file_path, $destination_file_path, $format);

                    $print_data[] = array(
                        'order_id'  => $value['sku'],
                        'file_path' => base_url() . 'uploads/product_label/' . $destination_file_path,
                    );
                }
            }

            if (count($print_data) > 0) {
                // Insert generated file path with order id to database for further print
                insert_print_file_data($print_data);

                $result = array(
                    'type' => 'success',
                    'msg'  => 'Product label is in queue for printing!',
                );
            } else {
                $result = array(
                    'type' => 'error',
                    'msg'  => 'Product label is not generated',
                );
            }
        }

        echo json_encode($result);
    }

    /*
    @Description    : Function to print product label from the system
    @Author         : Shantanu
    @Input          :
    @Output         :
    @Date           : 22-05-2018
     */

    public function print_product_label_system($id = array())
    {
        $product_ids = array();
        $html        = '';

        if (empty($id)) {
            $id = $this->input->post("id") ? $this->input->post("id") : $id;
        }

        if (!is_array($id)) {
            if (!is_numeric($id)) {
                $id = helper_decrypt_url_key($id);
            }

            $product_ids[] = $id;
        } else {
            $product_ids = array_map(function ($value) {return $value;}, $id);
            $product_ids = array_unique($product_ids);
        }

        if (is_array($product_ids) && count($product_ids) > 0) {
            $product_ids = array_unique($product_ids);

            $product_data = $this->orders_model->get_product_detail_for_label($product_ids);

            if (count($product_data) > 0) {
                $print_data['print_data'] = array();

                foreach ($product_data as $product) {
                    $print_data['print_data'][] = array(
                        'upc' => $product['product_id'],
                        'sku' => $product['sku'],
                    );
                }

                $html = $this->load->view('print/product_label', $print_data, true);
            }
        }

        echo $html;
    }

    /*
    @Description    : Function to print product upc from application
    @Author         : Shantanu
    @Input          : Product upcs
    @Output         : Generate product upc barcode
    @Date           : 11-09-2018
     */

    public function print_product_upc($id = array(), $is_internal = false)
    {
        $product_upc_ids = array();
        $html            = '';

        if (empty($id)) {
            $id = $this->input->post("product_upc_ids") ? $this->input->post("product_upc_ids") : $id;
        }

        if (!is_array($id)) {
            if (!is_numeric($id)) {
                $id = helper_decrypt_url_key($id);
            }

            $product_upc_ids[] = $id;
        } else {
            $product_upc_ids = array_map(function ($value) {return $value;}, $id);
            $product_upc_ids = array_unique($product_upc_ids);
        }

        if (is_array($product_upc_ids) && count($product_upc_ids) > 0) {
            $product_upc_ids = array_unique($product_upc_ids);

            $product_data = $this->print_model->get_product_detail_for_label($product_upc_ids);

            if (count($product_data) > 0) {
                $print_data['print_data'] = array();

                $print_file = array();

                foreach ($product_data as $product) {
                    $print_data["action"]       = 'generate';
                    $print_data['print_data'][] = array(
                        'upc'            => $product['upc'],
                        'title'          => $product['title'],
                        'item_condition' => $product['item_condition'],
                        'sku'            => $product['sku'],
                    );

                    $html = $this->load->view('print/product_upc_label', $print_data, true);

                    if ($html != '') {
                        $file_name = "Product_UPC-" . $product['id'] . '.pdf';

                        $file_path = './uploads/product_label/' . $file_name;

                        $this->load->library('pdf/pdf');

                        $pdf_data = $this->pdf->pdf_create($html, $file_name, false);

                        file_put_contents($file_path, $pdf_data);
                    }

                    $print_file[] = array(
                        'order_id'  => $product['sku'],
                        'file_path' => base_url() . 'uploads/product_label/' . $file_name,
                    );
                }

                if (count($print_file) > 0 && $is_internal == false) {
                    // Insert generated file path with order id to database for further print
                    insert_print_file_data($print_file);

                    $result = array(
                        'type' => 'success',
                        'msg'  => 'Product label is in queue for printing!',
                    );
                } elseif ($is_internal == true) {
                    return $product['id'];
                } else {
                    $result = array(
                        'type' => 'error',
                        'msg'  => 'Product label is not generated',
                    );
                }
            }
        }

        echo json_encode($result);
    }

    /*
    @Description    : Function to print product upc from the system
    @Author         : Shantanu
    @Input          : product upcs
    @Output         : Html containing upc barcode
    @Date           : 11-09-2018
     */

    public function print_product_upc_system($id = array())
    {
        $product_upc_ids = array();
        $html            = '';

        if (empty($id)) {
            $id = $this->input->post("id") ? $this->input->post("id") : $id;
        }

        if (!is_array($id)) {
            if (!is_numeric($id)) {
                $id = helper_decrypt_url_key($id);
            }

            $product_upc_ids[] = $id;
        } else {
            $product_upc_ids = array_map(function ($value) {return $value;}, $id);
            $product_upc_ids = array_unique($product_upc_ids);
        }

        if (is_array($product_upc_ids) && count($product_upc_ids) > 0) {
            $product_upc_ids = array_unique($product_upc_ids);

            $product_data = $this->print_model->get_product_detail_for_label($product_upc_ids);

            if (count($product_data) > 0) {
                $print_data['print_data'] = array();

                foreach ($product_data as $product) {
                    $print_data['print_data'][] = array(
                        'upc'            => $product['upc'],
                        'title'          => $product['title'],
                        'item_condition' => $product['item_condition'],
                        'sku'            => $product['sku'],
                    );
                }

                $html = $this->load->view('print/product_upc_label', $print_data, true);
            }
        }

        echo $html;
    }

    /*
    @Description    : Download Product UPC lable in pdf format
    @Author         : Shantanu
    @Input          : product upc id
    @Output         : PDF File
    @Date           : 11-09-2018
     */

    public function download_product_upc_label_file($id = null)
    {
        $this->load->helper('download');

        if (isset($id) && $id != '') {
            $download_url = '';
            $this->print_product_upc($id, true);

            $filename = "Product_UPC-" . $id . ".pdf";

            $download_url = base_url() . 'uploads/product_label/' . $filename;

            if ($download_url != '') {
                force_download(FCPATH . '/uploads/product_label/' . $filename, null);
            } else {
                $error_msg = 'Error while generating Product UPC Label';

                $message = array(
                    'type' => 'error',
                    'msg'  => $error_msg,
                );

                $this->session->set_flashdata('message', $message);
            }
        } else {
            $message = array(
                'type' => 'error',
                'msg'  => 'Invalid Request!',
            );

            $this->session->set_flashdata('message', $message);
        }
    }

    /*
    @Description    : Function to print product label from application
    @Author         : Shantanu
    @Input          :
    @Output         :
    @Date           : 22-05-2018
     */

    public function print_order_barcode($id = array())
    {
        $order_ids = array();
        $html      = '';

        if (empty($id)) {
            $id = $this->input->post("id") ? $this->input->post("id") : $id;
        }

        if (!is_array($id)) {
            if (!is_numeric($id)) {
                $id = helper_decrypt_url_key($id);
            }

            $order_ids[] = $id;
        } else {
            $order_ids = array_map(function ($value) {return $value;}, $id);
            $order_ids = array_unique($order_ids);
        }

        if (is_array($order_ids) && count($order_ids) > 0) {
            $print_data = array();

            $order_data = $this->orders_model->get_order_barcode_detail($order_ids);

            if (count($order_data) > 0) {
                foreach ($order_data as $value) {
                    $file_name = 'Barcode-' . $value['id'];

                    $format = 'png';

                    $source_file_path = base_url() . 'cron/print_crons/print_order_barcode_system/' . $value['id'];

                    $destination_file_path = '/var/www/html/erp_new/uploads/order_barcode/';

                    $destination_file_path = generate_html_to_image($file_name, $source_file_path, $destination_file_path, $format);

                    $print_data[] = array(
                        'order_id'  => ($value['ebay_sales_record_number'] != '') ? $value['ebay_sales_record_number'] : $value['order_channel_id'],
                        'file_path' => base_url() . 'uploads/order_barcode/' . $destination_file_path,
                    );
                }
            }

            if (count($print_data) > 0) {
                // Insert generated file path with order id to database for further print
                insert_print_file_data($print_data);

                $result = array(
                    'type' => 'success',
                    'msg'  => 'Order barcode is in queue for printing!',
                );
            } else {
                $result = array(
                    'type' => 'error',
                    'msg'  => 'Order barcode is not generated',
                );
            }
        }

        echo json_encode($result);
    }

    /*
    @Description    : Function to print product label from the system
    @Author         : Shantanu
    @Input          :
    @Output         :
    @Date           : 22-05-2018
     */

    public function print_order_barcode_system($id = array())
    {
        $order_ids = array();
        $html      = '';

        if (empty($id)) {
            $id = $this->input->post("id") ? $this->input->post("id") : $id;
        }

        if (!is_array($id)) {
            if (!is_numeric($id)) {
                $id = helper_decrypt_url_key($id);
            }

            $order_ids[] = $id;
        } else {
            $order_ids = array_map(function ($value) {return $value;}, $id);
            $order_ids = array_unique($order_ids);
        }

        if (is_array($order_ids) && count($order_ids) > 0) {
            $order_data = $this->orders_model->get_order_barcode_detail($order_ids);

            if (count($order_data) > 0) {
                $print_data['print_data'] = array();

                foreach ($order_data as $order) {
                    $print_data['print_data'][] = array(
                        'id'                => $order['id'],
                        'internal_order_id' => $order['internal_order_id'],
                    );
                }

                $html = $this->load->view('print/order_barcode', $print_data, true);
            }
        }

        echo $html;
    }

    /*
    @Description    : Function to print product label from application
    @Author         : Harshad
    @Input          :
    @Output         :
    @Date           : 24-01-2020
     */

    public function print_po_rma_invoice($id = array())
    {
        $this->load->model('po_arrival_model');

        $po_item_ids = array();
        $html        = '';

        if (empty($id)) {
            $id = $this->input->post("id") ? $this->input->post("id") : $id;
        }

        if (!is_array($id)) {
            if (!is_numeric($id)) {
                $id = helper_decrypt_url_key($id);
            }

            $po_item_ids[] = $id;
        } else {
            $po_item_ids = array_map(function ($value) {return $value;}, $id);
            $po_item_ids = array_unique($po_item_ids);
        }

        if (is_array($po_item_ids) && count($po_item_ids) > 0) {
            $po_data = $this->po_arrival_model->get_po_rma_invoice_detail($po_item_ids);

            if (count($po_data) > 0) {
                $print_data['print_data'] = $po_data;

                $html = $this->load->view('print/po_rma_invoice', $print_data, true);
            }
        }

        echo $html;
    }

    /*
    @Description    : Function to print product label from application
    @Author         : Harshad
    @Input          :
    @Output         :
    @Date           : 24-01-2020
     */

    public function bulk_print_po_rma_invoice($id='')
    {
        $this->load->model('po_arrival_model');

        $log_item_ids = array();
        $html         = '';

        $id = $this->input->post("log_id") ? $this->input->post("log_id") : array($id);
        
        $log_item_ids = array_unique($id);

        if (is_array($log_item_ids) && count($log_item_ids) > 0) 
        {
            $po_data = $this->po_arrival_model->get_po_rma_invoice_detail($log_item_ids);

            if (count($po_data) > 0) 
            {
                $print_data['print_data'] = $po_data;

                $html = $this->load->view('print/po_rma_invoice', $print_data, true);
            }
        }

        echo $html;
    }

    /*
    @Description    : Function to print product california proposition 65 label from application
    @Author         : Bhavesh Chaudhari
    @Input          : Product IDs
    @Output         : Generate product california proposition 65 label
    @Date           : 26-11-2020
     */

    public function print_product_california_prop_65_label($id = array(), $is_internal = false)
    {        
        $product_ids = array();
        $html            = '';

        if (empty($id)) {
            $product_ids = $this->input->post("product_ids") ? $this->input->post("product_ids") : $id;
        }       

        if (is_array($product_ids) && count($product_ids) > 0) {

            $product_data = $this->print_model->get_product_california_info($product_ids);

            if (count($product_data) > 0) {
                $print_data['print_data'] = array();

                $print_file = array();

                foreach ($product_data as $product) {
                    $print_data["action"]       = 'generate';
                    $print_data['print_data'][] = array(
                        'sku'                             => $product['sku'],
                        'title'                           => $product['title'],
                        'california_prop_65_warning_type' => $product['california_prop_65_warning_type'],
                        'california_prop_65_chemical'     => $product['california_prop_65_chemical'],
                        'california_prop_warning_message' => $product['california_prop_warning_message'],
                        'data_source'                     => $product['data_source'],
                    );

                    $html = $this->load->view('print/product_warning_label_print_pdf', $print_data, true);

                    if ($html != '') {
                        $file_name = "California-Proposition-65-label-" . $product['id'] . '.pdf';

                        $file_path = './uploads/product_label/' . $file_name;

                        $this->load->library('pdf/pdf');

                        $pdf_data = $this->pdf->pdf_create($html, $file_name, false);

                        file_put_contents($file_path, $pdf_data);
                    }

                    $print_file[] = array(
                        'order_id'  => $product['sku'],
                        'file_path' => base_url() . 'uploads/product_label/' . $file_name,
                    );
                }

                if (count($print_file) > 0 && $is_internal == false) 
                {
                    // Insert generated file path with order id to database for further print
                    insert_print_file_data($print_file);

                    $result = array(
                        'type' => 'success',
                        'msg'  => 'Product label is in queue for printing!',
                    );
                } 
                elseif ($is_internal == true) 
                {
                    return $product['id'];
                } 
                else 
                {
                    $result = array(
                        'type' => 'error',
                        'msg'  => 'California Proposition 65 label is not generated',
                    );
                }
            }
        }

        echo json_encode($result);
    }

    /*
    @Description    : Function to print product california proposition 65 label from the system
    @Author         : Bhavesh Chaudhari
    @Input          : Product IDs
    @Output         : Html containing product california proposition 65 label
    @Date           : 26-11-2020
     */

    public function print_product_california_prop_65_label_system($id = array())
    {
        $product_ids = array();
        $html        = '';

        if (empty($id)) {
            $product_ids = $this->input->post("id") ? $this->input->post("id") : $id;
        }

        if (is_array($product_ids) && count($product_ids) > 0) {
            $product_data = $this->print_model->get_product_california_info($product_ids);

            if (count($product_data) > 0) {
                $print_data['print_data'] = array();

                foreach ($product_data as $product) {
                    $print_data['print_data'][] = array(
                        'sku'                             => $product['sku'],
                        'title'                           => $product['title'],
                        'california_prop_65_warning_type' => $product['california_prop_65_warning_type'],
                        'california_prop_65_chemical'     => $product['california_prop_65_chemical'],
                        'california_prop_warning_message' => $product['california_prop_warning_message'],
                        'data_source'                     => $product['data_source'],
                    );
                }
                $html = $this->load->view('print/product_warning_label_print', $print_data, true);
            }
        }

        echo $html;
    }
}
