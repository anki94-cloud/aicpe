<?php

    /*
    @Description: To build  query from get data
    @Author     : Shantanu
    @Input      : not count get array 
    @Output     : 
    @Date       : 07-10-2016
    */  

    function update_notification_data($notification_type,$notification_sub_type)
    {
        $CI = &get_instance();

        $CI->load->model('helper_model/common_task_helper_model');

        $update_count = array();

        $CI->common_task_helper_model->update_notification_data($notification_type,$notification_sub_type);

        return;
    }
    
    /*
    @Description: To build  query from get data
    @Author     : Shantanu
    @Input      : not count get array 
    @Output     : 
    @Date       : 07-10-2016
    */  

    function get_ups_mail_innovation_rates($weight)
    {
        $CI = &get_instance();

        $CI->load->model('helper_model/common_task_helper_model');

        $rate = $CI->common_task_helper_model->get_ups_mail_innovation_rate($weight);

        return $rate;
    }

    /*
    @Description: Helper function to get osm rates
    @Author     : Shantanu
    @Input      :  
    @Output     : 
    @Date       : 25-05-2018
    */  

    function get_osm_rates($where_request)
    {
        $CI = &get_instance();

        $CI->load->model('helper_model/common_task_helper_model');

        $rate = $CI->common_task_helper_model->get_osm_rate($where_request);

        return $rate;
    }

    /*
    @Description: Helper function to get osm surcharge
    @Author     : Harshad
    @Input      :  
    @Output     : 
    @Date       : 25-05-2018
    */  

    function get_osm_surcharge_rates($service_id)
    {
        $CI = &get_instance();

        $CI->load->model('helper_model/common_task_helper_model');

        $rate = $CI->common_task_helper_model->get_osm_surcharge_rates($service_id);

        return $rate;
    }

    function get_osm_rates_test($where_request)
    {
        $CI = &get_instance();

        $CI->load->model('helper_model/common_task_helper_model');

        $rate = $CI->common_task_helper_model->get_osm_rate_test($where_request);

        return $rate;
    }
    
    /*
    @Description: get rates for asendia international priority airmail
    @Author     : Shantanu
    @Input      : not count get array 
    @Output     : 
    @Date       : 07-10-2016
    */  

    function get_international_priority_airmail_rates($weight,$country,$service_call)
    {
        $CI = &get_instance();

        $CI->load->model('helper_model/common_task_helper_model');

            // $rate = $CI->common_task_helper_model->get_international_priority_airmail_rate($weight);

        $rate = $CI->common_task_helper_model->get_apc_international_priority_airmail_rate($weight,$country,$service_call);

        return $rate;
    }
    
    /*
    @Description: To build  query from get data
    @Author     : Shantanu
    @Input      : not count get array 
    @Output     : 
    @Date       : 07-10-2016
    */  

    function get_invoice_file_name_and_path($order_id = 0)
    {
        $result = array(
            'file_name' => '',
            'file_path' => ''
        );
        
        if($order_id > 0)
        {
            $result = array(
                'file_name' => 'Invoice-'.$order_id.'.pdf',
                'file_path' => base_url().'uploads/order_invoice/Invoice-'.$order_id.'.pdf'
            );
        }  

        return $result;
    }
    
    /*
    @Description: To build  query from get data
    @Author     : Shantanu
    @Input      : not count get array 
    @Output     : 
    @Date       : 07-10-2016
    */  

    function get_packing_slip_file_name_and_path($order_id = 0, $action = 'invoice')
    {
        $result = array(
            'file_name' => '',
            'file_path' => ''
        );
        
        if($order_id > 0)
        {   
            $result = array(
                'file_name' => 'Invoice-'.$order_id.'.pdf',
                'file_path' => base_url().'uploads/order_packing_slip/Invoice-'.$order_id.'.pdf'
            );
        }  

        return $result;
    }
    
    /*
    @Description: To get state code
    @Author     : Shantanu
    @Input      : not count get array 
    @Output     : 
    @Date       : 07-10-2016
    */  

    function get_state_code($state = '')
    { 
        $result = '';
        
        if($state != '')
        {
            if(strlen($state) == 2)
            {
                $result = $state;
            }
            else
            {
                $CI = &get_instance();

                $CI->load->model('helper_model/common_task_helper_model');
                
                $state_code = $CI->common_task_helper_model->get_state_code($state);
                
                if($state_code != '')
                {
                    $result = $state_code;
                }
            }   
        }  

        return $result;
    }
    
    /*
    @Description: To get state code
    @Author     : Shantanu
    @Input      : not count get array 
    @Output     : 
    @Date       : 07-10-2016
    */  

    function get_profit_formula_symbol($formula_key)
    {
        $operator = '';
        
        if($formula_key == 'Selling Price')
        {
            $operator = '+';
        }
        elseif ($formula_key == 'Shipping Price')
        {
            $operator = '+';
        }
        elseif ($formula_key == 'Marketplace Commision')
        {
            $operator = '-';
        }
        elseif ($formula_key == 'Buying Price')
        {
            $operator = '-';
        }
        elseif ($formula_key == 'Vendor Rebate')
        {
            $operator = '+';
        }
        elseif ($formula_key == 'Shipping Cost')
        {
            $operator = '-';
        }
        elseif ($formula_key == 'Package Cost')
        {
            $operator = '-';
        }
        elseif ($formula_key == 'Amazon Fees')
        {
            $operator = '-';
        }
        elseif ($formula_key == 'Amazon FBA Fees')
        {
            $operator = '-';
        }
        elseif ($formula_key == 'Profit')
        {
            $operator = '=';
        }
        elseif ($formula_key == 'Amazon Tax')
        {
            $operator = '-';
        }
        
        return $operator;
    }
    
    /*
    @Description: To get state code
    @Author     : Shantanu
    @Input      : not count get array 
    @Output     : 
    @Date       : 07-10-2016
    */  

    function get_store_marketplace_logo($store_name)
    {
        $store_logo = "";
        
        switch (strtolower(@$store_name))
        {
            case 'ebay':
                $store_logo = "ebay_logo_black.png";//"ebay_shipping_services_logo.png";
                break;
                case 'amazon':
                $store_logo = "amazon_logo_black.png";//"amazon-logo.png";
                break;
                case 'bonanza':
                $store_logo = "bonanza_logo_black.png";//"amazon-logo.png";
                break;
                case 'rakuten':
                $store_logo = "rakuten_logo_black.png";//"icon-p-rakuten.png";
                break;
                case 'overstock':
                $store_logo = "overstock_logo_black.png";//"overstock-logo.png";
                break;
                case 'shopify':
                $store_logo = "shopify_logo_black.png";//"icon-p-shopify.png";
                break;
                case 'walmart':
                $store_logo = "walmart_logo_black.png";//"wallmart-logo.png";
                break;
                case 'jet':
                $store_logo = "jet_logo_black.png";//"jet-logo.png";
                break;
                case 'groupon':
                $store_logo = "gropon_logo_black.png";//"gropon-logo-white.png";
                break;
                case 'newegg':
                $store_logo = "newegg_logo_black.png";//"gropon-logo-white.png";
                break;
                case 'neweggdotcom':
                $store_logo = "newegg_logo_black.png";//"gropon-logo-white.png";
                break;
                case 'newegg biz':
                $store_logo = "neweggbu_logo_black.png";//"gropon-logo-white.png";
                break;
                case 'newegg_business':
                $store_logo = "neweggbu_logo_black.png";//"gropon-logo-white.png";
                break;
                case 'wayfair':
                $store_logo = "wayfair_logo_black.png";//"gropon-logo-white.png";
                break;
                case 'wholesale':
                $store_logo = "wholesale_logo_black.png";//"gropon-logo-white.png";
                break;
                case 'store':
                $store_logo = "pens_n_more_logo_black.png";//"gropon-logo-white.png";
                break;
                case 'woot':
                $store_logo = "woot_logo_black.png";//"gropon-logo-white.png";
                break;
                case 'manual':
                $store_logo = 'manual_logo_black.png';
                break;
                case '':
                $store_logo = 'manual_logo_black.png';
                break;
            }

            return $store_logo;
        }

    /*
    @Description: To get state code
    @Author     : Shantanu
    @Input      : not count get array 
    @Output     : 
    @Date       : 07-10-2016
    */  

    function get_store_marketplace_logo_white($store_name)
    {
        $store_logo = "";
        
        switch (strtolower(@$store_name))
        {
            case 'ebay':
            $store_logo = "icon-p-ebay.png";
            break;
            case 'amazon':
            $store_logo = "icon-p-amazon.png";
            break;
            case 'amazon_fba':
            $store_logo = "icon-p-amazon_fba.png";
            break;
            case 'rakuten':
            $store_logo = "icon-p-rakuten.png";
            break;
            case 'overstock':
            $store_logo = "icon-p-overstock.png";
            break;
            case 'shopify':
            $store_logo = "icon-p-shopify.png";
            break;
            case 'walmart':
            $store_logo = "icon-p-walmart.png";
            break;
            case 'manual':
            $store_logo = "icon-p-manual.png";
            break;
            case 'manual_parent':
            $store_logo = "icon-p-replace-manual-order.png";
            break;
            case 'groupon':
            $store_logo = "icon-groupon.png";
            break;
            case 'jet':
            $store_logo = "jet-icon.png";
            break;
            case 'bonanza':
            $store_logo = "icon-bonanza.png";
            break;
            case 'newegg':
            $store_logo = "icon-p-newegg.png";
            break;
            case 'newegg biz':
            $store_logo = "icon-p-newegg-business.jpg";
            break;
            case 'woot':
            $store_logo = "icon-woot.png";
            break;
            case 'etsy':
            $store_logo = "icon-p-etsy.png";
            break;
            case 'wayfair':
            $store_logo = "icon-p-wayfair.png";
            break;
            case 'sears':
            $store_logo = 'icon-p-sears.jpg';
            break;
            case 'google':
            $store_logo = 'icon-p-google.png';
            break;
        }
        
        return $store_logo;
    }
    
    /*
    @Description: To get state code
    @Author     : Shantanu
    @Input      : not count get array 
    @Output     : 
    @Date       : 07-10-2016
    */  

    function get_dimensional_weight($package_data)
    {
        $response = array(
            'girth'           => 0.00,
            'total_girth'     => 0.00,
            'cubic_dimension' => 0.00,
            'weight_lbs'      => 0.00,
            'weight_oz'       => 0.00
        );
        
        $width = $height = $length = 0;
        $divisible = DIMENSIONAL_WEIGHT_DIVISOR;
        
        if(isset($package_data['package_width_from']) && $package_data['package_width_from'] != '' && isset($package_data['package_height_from']) && $package_data['package_height_from'] != '' && isset($package_data['package_length_from']) && $package_data['package_length_from'] != '')
        {           
            $weight_lbs = ($package_data['package_width_from'] * $package_data['package_height_from'] * $package_data['package_length_from'])/$divisible;

            $cubic_dimension = $package_data['package_width_from'] * $package_data['package_height_from'] * $package_data['package_length_from'];

            $girth = ($package_data['package_width_from'] + $package_data['package_height_from']) * 2;

            $total_girth = $package_data['package_length_from'] + $girth;
            
            $response = array(
                'girth'           => number_format($girth, 3,'.',''),
                'total_girth'     => number_format($total_girth, 3,'.',''),
                'cubic_dimension' => number_format($cubic_dimension, 3,'.',''),
                'weight_lbs'      => number_format($weight_lbs, 3,'.',''),
                'weight_oz'       => number_format($weight_lbs * 16, 3,'.','')
            );
        } 
        
        return $response;
    }
    
    /*
    @Description: To get state code
    @Author     : Shantanu
    @Input      : not count get array 
    @Output     : 
    @Date       : 07-10-2016
    */  

    function remove_special_characters($string)
    {
        $response = '';
        
        if($string != '')
        {
            $string = str_replace('&', 'and', $string);
            $response = preg_replace('/[^A-Za-z0-9\/ -]/', '', $string);
        }    
        
        return $response;
    }

    /*
    @Description: To get state code
    @Author     : Shantanu
    @Input      : not count get array 
    @Output     : 
    @Date       : 07-10-2016
    */  

    function format_phone_number($string)
    {
        $response = '';
        
        if($string != '')
        {
            $string = str_replace('-', '', $string);
            $response = str_replace(' ', '', $string);;
        }    
        
        return $response;
    }

    /*
    @Description: To get module wise document control number
    @Author     : Shantanu
    @Input      : 
    @Output     : 
    @Date       : 22-02-2018
    */  

    function get_document_control_number($module,$sub_module = '',$action = 'add')
    {
        $CI = &get_instance();
        
        $CI->load->model('helper_model/common_task_helper_model');
        
        $number = $CI->common_task_helper_model->get_document_control_number($module,$sub_module,$action);

        return $number;
    }

    /*
    @Description: common function to manage cron status
    @Author     : Shantanu
    @Input      : 
    @Output     : 
    @Date       : 18-05-20118
    */  

    function manage_cron_status($cron_name,$action,$extra_param = array(),$is_exit = TRUE)
    {   
        if(get_global_setting_data("stop_background_process_button")=="yes")
        {
            exit;
        }

        $restricted_cron_type=get_restricted_cron_name();
        
        if(in_array($cron_name, $restricted_cron_type))
        {   
            $restricted_hour = array('13','14','15','16','17','18');
            
            $hour = date('H');

            if(in_array($hour,$restricted_hour))
            {
                exit;
            }
        }
        
        $current_time = get_inserted_date_time();

        $CI = &get_instance();
        
        $CI->load->model('helper_model/common_task_helper_model');
        
        $cron_response = $CI->common_task_helper_model->manage_cron_status($cron_name,$action,$current_time,$extra_param);

        if(isset($cron_response['status']) && $cron_response['status'] == FALSE)
        {
            if($is_exit == TRUE)
            {
                exit;                
            }
        }

        return $cron_response;    
    }

    function generate_html_to_image($filename = '',$source_file_path = '',$destination_file_path = '',$format = 'png')
    {
        if($filename != '')
        {
            $filename = $filename.'.'.$format;

            $shell_command = SHELL_EXECUTION_WKHTMLTOIMAGE_PATH.'wkhtmltoimage --width 100 --quality 90 '.$source_file_path.' '.$destination_file_path.$filename;

            $generate_image = exec($shell_command);

            return $filename;
        }
        else
        {
            return false;
        }
    }

    /*
    @Description: common function to check user is eligible to update data or not
    @Author     : Shantanu
    @Input      : 
    @Output     : 
    @Date       : 27-07-20118
    */ 

    function check_user_eligibility($column)
    {
        $result = FALSE;

        $CI = &get_instance();

        $CI->load->model('helper_model/common_task_helper_model');

        $result = $CI->common_task_helper_model->check_user_eligibility($column); 

        return $result;
    }

    /*
    @Description: common function to update product cost log
    @Author     : Shantanu
    @Input      : 
    @Output     : 
    @Date       : 27-07-20118
    */

    function product_cost_update_log($product_data = array(), $source = '')
    {
        if(!empty($product_data))
        {
            $CI = &get_instance();

            $CI->load->model('helper_model/common_task_helper_model');

            $CI->common_task_helper_model->update_product_cost_log($product_data, $source);
        } 

        return;
    }

    /*
    @Description: common function to update product payment date
    @Author     : Akshit Arora
    @Input      : Order ID
    @Output     : Date if the order is manual, shipped and payment term is set for the customer; else false
    @Date       : 30-07-2018
    */
    function update_expected_payment_date($order_id)
    {
        $CI = &get_instance();

        $CI->load->model('helper_model/common_task_helper_model');

        // Get the shipped order with given order id and manual store.
        $order = $CI->common_task_helper_model->get_order_for_expected_payment($order_id);

        if($order)
        {
            $payment_term = $order['payment_term'];

            $expected_date = null;

             // Calculate the expected payment date if the payment term is set
            switch($payment_term)
            {
                case 'prepaid':
                    $expected_date = date('Y-m-d', strtotime($order['ship_date']));
                    break;

                case 'net_15' :
                    $expected_date = date('Y-m-d', strtotime($order['ship_date'] .' + 15 days'));
                    break;

                case 'net_30' :
                case 'deposit_50' :
                    $expected_date = date('Y-m-d', strtotime($order['ship_date'] .' + 30 days'));
                    break;

                default :
                    $expected_date = null;
            }

            // Update the expected payment date and return the result
            if(is_not_empty($expected_date))
            {
                $manual_order_id = $order['manual_order_id'];
                $CI->common_task_helper_model->update_expected_payment_date($manual_order_id, $expected_date);

                return $expected_date;
            }
            else
            {
                return false;
            }
        }
        else
        {
            return false;
        }
        // Return the result
    }

    /*
    @Description: common function to get shipping service restricted store list
    @Author     : Shantanu
    @Input      : 
    @Output     : Array of restricted store list service wise
    @Date       : 04-09-20118
    */

    function get_shipping_service_restricted_store()
    {
        $CI = &get_instance();

        $CI->load->model('helper_model/common_task_helper_model');

        // Get the shipping service store list
        return $service_store = $CI->common_task_helper_model->get_shipping_service_restricted_store_list();
    }

    /*
    @Description: common function to get the product's buying price
    @Author     : Akshit Arora
    @Input      : Product Id
    @Output     : Product buying price
    @Date       : 13-11-2018
    */
    function get_product_buying_price($product_id)
    {
        $CI = &get_instance();

        $CI->load->model('helper_model/common_task_helper_model');

        return $CI->common_task_helper_model->get_product_buying_price($product_id);
    }

    /*
    @Description: common function to get the product's buying price
    @Author     : Harshad Hirapara
    @Input      : User Id
    @Output     : User Open task count
    @Date       : 16-06-2020
    */

    function get_user_open_task_count()
    {
        $CI = &get_instance();

        $CI->load->model('helper_model/common_task_helper_model');

        return $CI->common_task_helper_model->get_user_open_task_count($CI->log_in_user_id);
    }