<?php

	/*
    @Description  : Function to get page header data
    @Author     : Mehul Modh
    @Input      : 
    @Output     : 
    @Date     : 12-11-2016
    */
    
    function get_page_header_data($page_type)
    {
        $project_title = 'TNT';

        $amazon_repricer = 'Amazon repricer';

        $walmart_repricer = 'Walmart repricer';

        $ebay_repricer = 'Ebay repricer';        

        ////////////////////////////////
        ////AMAZON REPRICER START
        ////////////////////////////////

        $page_header_array['repricer_amazon_dashboard'] = array(
            
            "page_title"  =>  'Dashboard',
            "page_header_title" =>  'Dashboard : '.$amazon_repricer.' : '.$project_title

        );

        $page_header_array['repricer_amazon_bulk_update_product'] = array(
            
            "breadcrumbs" =>  array(
                array('title'=>'Repricer','url'=>amazon_repricer_base_url().''),
                array('title'=>'Bulk update products','is_active'=>TRUE),
            ),
            "page_title"  =>  'Bulk update products',
            "page_header_title" =>  'Bulk update products : '.$amazon_repricer.' : '.$project_title

        );

        

        $page_header_array['repricer_amazon_product_list'] = array(
            
            "breadcrumbs" =>  array(
                array('title'=>'Repricer','url'=>amazon_repricer_base_url().''),
                array('title'=>'Amazon product list','is_active'=>TRUE),
            ),
            "page_title"  =>  'Amazon product list',
            "page_header_title" =>  'Amazon product list : '.$amazon_repricer.' : '.$project_title

        );

        $page_header_array['repricer_amazon_sku_repricer_history'] = array(
            
            "breadcrumbs" =>  array(
                array('title'=>'Repricer','url'=>amazon_repricer_base_url().''),
                array('title'=>'SKU repricer history','is_active'=>TRUE),
            ),
            "page_title"  =>  'SKU repricer history',
            "page_header_title" =>  'SKU repricer history : '.$amazon_repricer.' : '.$project_title

        );

        $page_header_array['all_sku_repricer_history'] = array(
            
            "breadcrumbs" =>  array(
                array('title'=>'Repricer','url'=>amazon_repricer_base_url().''),
                array('title'=>'All SKU repricer history','is_active'=>TRUE),
            ),
            "page_title"  =>  'All SKU repricer history',
            "page_header_title" =>  'All SKU repricer history : '.$amazon_repricer.' : '.$project_title

        );

        $page_header_array['repricer_amazon_insight'] = array(
            
            "breadcrumbs" =>  array(
                array('title'=>'Repricer','url'=>amazon_repricer_base_url().''),
                array('title'=>'Insight','is_active'=>TRUE),
            ),
            "page_title"  =>  'Insight',
            "page_header_title" =>  'Insight : '.$amazon_repricer.' : '.$project_title

        );
                
        $page_header_array['repricer_amazon_strategy_list'] = array(
            
            "breadcrumbs" =>  array(
                array('title'=>'Repricer','url'=>amazon_repricer_base_url().''),
                array('title'=>'Strategy','is_active'=>TRUE),
            ),
            "page_title"  =>  'Strategy List',
            "page_header_title" =>  'Strategy : '.$amazon_repricer.' : '.$project_title

        );
                
        $page_header_array['repricer_amazon_add_strategy'] = array(
            
            "breadcrumbs" =>  array(
                array('title'=>'Repricer','url'=>amazon_repricer_base_url().''),
                array('title'=>'Strategy','url'=>amazon_repricer_base_url().'strategy'),
                array('title'=>'Add Strategy','is_active'=>TRUE),
            ),
            "page_title"  =>  'Add Strategy',
            "page_header_title" =>  'Add Strategy : '.$amazon_repricer.' : '.$project_title

        );

        $page_header_array['repricer_amazon_edit_strategy'] = array(
            
            "breadcrumbs" =>  array(
                array('title'=>'Repricer','url'=>amazon_repricer_base_url().''),
                array('title'=>'Strategy','url'=>amazon_repricer_base_url().'strategy'),
                array('title'=>'Edit Strategy','is_active'=>TRUE),
            ),
            "page_title"  =>  'Edit Strategy',
            "page_header_title" =>  'Edit Strategy : '.$amazon_repricer.' : '.$project_title

        );

        $page_header_array['repricer_amazon_min_max_price_list'] = array(
            
            "breadcrumbs" =>  array(
                array('title'=>'Repricer','url'=>amazon_repricer_base_url().''),
                array('title'=>'Min-Max Formula List','is_active'=>TRUE),
            ),
            "page_title"  =>  'Min-Max Formula List',
            "page_header_title" =>  'Min-Max Formula List : '.$amazon_repricer.' : '.$project_title

        );

        $page_header_array['repricer_amazon_setting'] = array(
            
            "breadcrumbs" =>  array(
                array('title'=>'Repricer','url'=>amazon_repricer_base_url().''),
                array('title'=>'Settings','is_active'=>TRUE),
            ),
            "page_title"  =>  'Settings',
            "page_header_title" =>  'Settings : '.$amazon_repricer.' : '.$project_title

        );

        ////////////////////////////////
        ////AMAZON REPRICER END
        ////////////////////////////////


        $page_header_array['product_proposition_65_report'] = array(
            
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'California Proposition 65 Report','is_active'=>TRUE),
            ),
            "page_title"  =>  'California Proposition 65 Report',
            "page_header_title" =>  'California Proposition 65 Report : '.$project_title

        );  
        ////////////////////////////////
        ////DASHBOARD CLICKABLE REPORT
        ////////////////////////////////
  

          $page_header_array['pick_list_orders_picked'] = array(
            
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Pick List Picked Orders','is_active'=>TRUE),
            ),
            "page_title"  =>  'Pick List Picked Orders',
            "page_header_title" =>  'Pick List Picked Orders : '.$project_title

        );  
          $page_header_array['fba_packaging_performance_report'] = array(
            
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Packaging Performance Report','is_active'=>TRUE),
            ),
            "page_title"  =>  'Packaging Performance Report',
            "page_header_title" =>  'Packaging Performance Report : '.$project_title

        ); 

         ////////////////////////////////
        ////AMAZON REPRICER END
        ////////////////////////////////


        ////////////////////////////////
        ////WALMART REPRICER START
        ////////////////////////////////

        $page_header_array['repricer_walmart_dashboard'] = array(
            
            "page_title"  =>  'Dashboard',
            "page_header_title" =>  'Dashboard : '.$walmart_repricer.' : '.$project_title

        );

        $page_header_array['repricer_walmart_product_list'] = array(
            
            "breadcrumbs" =>  array(
                array('title'=>'Repricer','url'=>walmart_repricer_base_url()),
                array('title'=>'Walmart product list','is_active'=>TRUE),
            ),
            "page_title"  =>  'Walmart product list',
            "page_header_title" =>  'Walmart product list : '.$walmart_repricer.' : '.$project_title

        );

        $page_header_array['repricer_walmart_strategy_list'] = array(
            
            "breadcrumbs" =>  array(
                array('title'=>'Repricer','url'=>walmart_repricer_base_url()),
                array('title'=>'Strategy','is_active'=>TRUE),
            ),
            "page_title"  =>  'Strategy List',
            "page_header_title" =>  'Strategy : '.$walmart_repricer.' : '.$project_title

        );
                
        $page_header_array['repricer_walmart_add_strategy'] = array(
            
            "breadcrumbs" =>  array(
                array('title'=>'Repricer','url'=>walmart_repricer_base_url()),
                array('title'=>'Strategy','url'=>walmart_repricer_base_url().'strategy'),
                array('title'=>'Add Strategy','is_active'=>TRUE),
            ),
            "page_title"  =>  'Add Strategy',
            "page_header_title" =>  'Add Strategy : '.$walmart_repricer.' : '.$project_title

        );

        $page_header_array['repricer_walmart_edit_strategy'] = array(
            
            "breadcrumbs" =>  array(
                array('title'=>'Repricer','url'=>walmart_repricer_base_url()),
                array('title'=>'Strategy','url'=>walmart_repricer_base_url().'strategy'),
                array('title'=>'Edit Strategy','is_active'=>TRUE),
            ),
            "page_title"  =>  'Edit Strategy',
            "page_header_title" =>  'Edit Strategy : '.$walmart_repricer.' : '.$project_title

        );

        $page_header_array['walmart_all_sku_repricer_history'] = array(
            
            "breadcrumbs" =>  array(
                array('title'=>'Repricer','url'=>walmart_repricer_base_url().''),
                array('title'=>'All SKU repricer history','is_active'=>TRUE),
            ),
            "page_title"  =>  'All SKU repricer history',
            "page_header_title" =>  'All SKU repricer history : '.$walmart_repricer.' : '.$project_title

        );

        $page_header_array['repricer_walmart_min_max_price_list'] = array(
            
            "breadcrumbs" =>  array(
                array('title'=>'Repricer','url'=>walmart_repricer_base_url()),
                array('title'=>'Min-Max Formula List','is_active'=>TRUE),
            ),
            "page_title"  =>  'Min-Max Formula List',
            "page_header_title" =>  'Min-Max Formula List : '.$walmart_repricer.' : '.$project_title

        );

        $page_header_array['repricer_walmart_insight'] = array(
            
            "breadcrumbs" =>  array(
                array('title'=>'Repricer','url'=>walmart_repricer_base_url()),
                array('title'=>'Insight','is_active'=>TRUE),
            ),
            "page_title"  =>  'Insight',
            "page_header_title" =>  'Insight : '.$walmart_repricer.' : '.$project_title

        );

        $page_header_array['repricer_walmart_sku_repricer_history'] = array(
            
            "breadcrumbs" =>  array(
                array('title'=>'Repricer','url'=>walmart_repricer_base_url()),
                array('title'=>'SKU repricer history','is_active'=>TRUE),
            ),
            "page_title"  =>  'SKU repricer history',
            "page_header_title" =>  'SKU repricer history : '.$walmart_repricer.' : '.$project_title

        );

        $page_header_array['repricer_walmart_bulk_update_product'] = array(
            
            "breadcrumbs" =>  array(
                array('title'=>'Repricer','url'=>walmart_repricer_base_url()),
                array('title'=>'Bulk update products','is_active'=>TRUE),
            ),
            "page_title"  =>  'Bulk update products',
            "page_header_title" =>  'Bulk update products : '.$walmart_repricer.' : '.$project_title

        );

        $page_header_array['repricer_walmart_setting'] = array(
            
            "breadcrumbs" =>  array(
                array('title'=>'Repricer','url'=>walmart_repricer_base_url()),
                array('title'=>'Settings','is_active'=>TRUE),
            ),
            "page_title"  =>  'Settings',
            "page_header_title" =>  'Settings : '.$walmart_repricer.' : '.$project_title

        );


        ////////////////////////////////
        ////WALMART REPRICER END
        ////////////////////////////////

        $page_header_array['prop_65_warning_message'] = array(
            
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Proposition 65 Warning Message List','is_active'=>TRUE),
            ),
            "page_title"  =>  'Proposition 65 Warning Message List',
            "page_header_title" =>  'Proposition 65 Warning Message List : '.$project_title

        );
        ////////////////////////////////
        ////EBAY REPRICER START
        ////////////////////////////////

        $page_header_array['repricer_ebay_dashboard'] = array(
            
            "page_title"  =>  'Dashboard',
            "page_header_title" =>  'Dashboard : '.$ebay_repricer.' : '.$project_title

        );

        $page_header_array['repricer_ebay_product_list'] = array(
            
            "breadcrumbs" =>  array(
                array('title'=>'Repricer','url'=>ebay_repricer_base_url()),
                array('title'=>'Ebay product list','is_active'=>TRUE),
            ),
            "page_title"  =>  'Ebay product list',
            "page_header_title" =>  'Ebay product list : '.$ebay_repricer.' : '.$project_title

        );

        $page_header_array['repricer_ebay_strategy_list'] = array(
            
            "breadcrumbs" =>  array(
                array('title'=>'Repricer','url'=>ebay_repricer_base_url()),
                array('title'=>'Strategy','is_active'=>TRUE),
            ),
            "page_title"  =>  'Strategy List',
            "page_header_title" =>  'Strategy : '.$ebay_repricer.' : '.$project_title

        );
                
        $page_header_array['repricer_ebay_add_strategy'] = array(
            
            "breadcrumbs" =>  array(
                array('title'=>'Repricer','url'=>ebay_repricer_base_url()),
                array('title'=>'Strategy','url'=>ebay_repricer_base_url().'strategy'),
                array('title'=>'Add Strategy','is_active'=>TRUE),
            ),
            "page_title"  =>  'Add Strategy',
            "page_header_title" =>  'Add Strategy : '.$ebay_repricer.' : '.$project_title

        );

        $page_header_array['repricer_ebay_edit_strategy'] = array(
            
            "breadcrumbs" =>  array(
                array('title'=>'Repricer','url'=>ebay_repricer_base_url()),
                array('title'=>'Strategy','url'=>ebay_repricer_base_url().'strategy'),
                array('title'=>'Edit Strategy','is_active'=>TRUE),
            ),
            "page_title"  =>  'Edit Strategy',
            "page_header_title" =>  'Edit Strategy : '.$ebay_repricer.' : '.$project_title

        );

        $page_header_array['repricer_ebay_min_max_price_list'] = array(
            
            "breadcrumbs" =>  array(
                array('title'=>'Repricer','url'=>ebay_repricer_base_url()),
                array('title'=>'Min-Max Formula List','is_active'=>TRUE),
            ),
            "page_title"  =>  'Min-Max Formula List',
            "page_header_title" =>  'Min-Max Formula List : '.$ebay_repricer.' : '.$project_title

        );

        $page_header_array['repricer_ebay_insight'] = array(
            
            "breadcrumbs" =>  array(
                array('title'=>'Repricer','url'=>ebay_repricer_base_url()),
                array('title'=>'Insight','is_active'=>TRUE),
            ),
            "page_title"  =>  'Insight',
            "page_header_title" =>  'Insight : '.$ebay_repricer.' : '.$project_title

        );

        $page_header_array['repricer_ebay_sku_repricer_history'] = array(
            
            "breadcrumbs" =>  array(
                array('title'=>'Repricer','url'=>ebay_repricer_base_url()),
                array('title'=>'SKU repricer history','is_active'=>TRUE),
            ),
            "page_title"  =>  'SKU repricer history',
            "page_header_title" =>  'SKU repricer history : '.$ebay_repricer.' : '.$project_title

        );

        $page_header_array['repricer_ebay_bulk_update_product'] = array(
            
            "breadcrumbs" =>  array(
                array('title'=>'Repricer','url'=>ebay_repricer_base_url()),
                array('title'=>'Bulk update products','is_active'=>TRUE),
            ),
            "page_title"  =>  'Bulk update products',
            "page_header_title" =>  'Bulk update products : '.$ebay_repricer.' : '.$project_title

        );

        $page_header_array['repricer_ebay_setting'] = array(
            
            "breadcrumbs" =>  array(
                array('title'=>'Repricer','url'=>ebay_repricer_base_url()),
                array('title'=>'Settings','is_active'=>TRUE),
            ),
            "page_title"  =>  'Settings',
            "page_header_title" =>  'Settings : '.$ebay_repricer.' : '.$project_title

        );


        ////////////////////////////////
        ////EBAY REPRICER END
        ////////////////////////////////

        $page_header_array['pending_pick_list_orders'] = array(
            
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Pending Pick list Orders','url'=>base_url().'report/pending_pick_list_orders/'),
                array('title'=>'Pending Pick list Orders','is_active'=>TRUE),
            ),
            "page_title"  =>  'Pending Pick list Orders',
            "page_header_title" =>  'Pending Pick list Orders : '.$project_title

        );
        $page_header_array['user_team_list'] = array(
            
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'User Team List','url'=>base_url().'user_team_list/user_team_list/'),
                array('title'=>'User Team List','is_active'=>TRUE),
            ),
            "page_title"  =>  'User Team List',
            "page_header_title" =>  'User Team List : '.$project_title

        );

        $page_header_array['walmart_quantity_log_status'] = array(
            
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Walmart Quantity Log Status','url'=>base_url().'walmart_quantity_log_status/walmart_quantity_log_status/'),
                array('title'=>'Walmart Quantity Log Status','is_active'=>TRUE),
            ),
            "page_title"  =>  'Walmart Quantity Log Status',
            "page_header_title" =>  'Walmart Quantity Log Status : '.$project_title

        );

        $page_header_array['amazon_quantity_log_status'] = array(
            
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Amazon Quantity Log Status','url'=>base_url().'amazon_quantity_log_status/amazon_quantity_log_status/'),
                array('title'=>'Amazon Quantity Log Status','is_active'=>TRUE),
            ),
            "page_title"  =>  'Amazon Quantity Log Status',
            "page_header_title" =>  'Amazon Quantity Log Status : '.$project_title

        );
        $page_header_array['amazon_selling_price_sg_report'] = array(
            
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Amazon Selling Price vs SG Report','url'=>base_url().'amazon_selling_price_sg_report'),
                array('title'=>'Amazon Selling Price vs SG Report','is_active'=>TRUE),
            ),
            "page_title"  =>  'Amazon Selling Price vs SG Report',
            "page_header_title" =>  'Amazon Selling Price vs SG Report : '.$project_title

        );
        
        //TASK TYPE URL LISTING
        $page_header_array['task_type_url'] = array(
            
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Task Type Url','is_active'=>TRUE),
            ),
            "page_title"  =>  'Task Type Url List',
            "page_header_title" =>  'Task Type Url List : '.$project_title

        );
        //Walmart Quantity Log list
        $page_header_array['task_type_url'] = array(
            
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Task Type Url','is_active'=>TRUE),
            ),
            "page_title"  =>  'Task Type Url List',
            "page_header_title" =>  'Task Type Url List : '.$project_title

        );
        ////////////////////////////////
        ////VENDOR START
        ////////////////////////////////

        $page_header_array['vendor_list'] = array(
            
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Vendor','is_active'=>TRUE),
            ),
            "page_title"  =>  'Vendor List',
            "page_header_title" =>  'Vendor List : '.$project_title

        );

        $page_header_array['add_vendor'] = array(

            'breadcrumbs' =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Vendor','url'=>base_url().'vendor'),
                array('title'=>'Add Vendor','is_active'=>TRUE)
            ),
            'page_title'  =>  'Add Vendor',
            'page_header_title' =>  'Add Vendor : '.$project_title
        );

        $page_header_array['edit_vendor'] = array(

            'breadcrumbs' =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Vendor','url'=>base_url().'vendor'),
                array('title'=>'Edit Vendor','is_active'=>TRUE)
            ),
            'page_title'  =>  'Edit Vendor',
            'page_header_title' =>  'Edit Vendor : '.$project_title
        );
        
        $page_header_array['vendor_bulk_update'] = array(

            'breadcrumbs' =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Vendor','url'=>base_url().'vendor'),
                array('title'=>'Vendor Bulk Update','is_active'=>TRUE)
            ),
            'page_title'  =>  'Vendor Bulk Update',
            'page_header_title' =>  'Vendor Bulk Update : '.$project_title
        );
        
        $page_header_array['vendor_field_mapping'] = array(

            'breadcrumbs' =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Vendor','url'=>base_url().'vendor'),
                array('title'=>'Vendor Field Mapping','is_active'=>TRUE)
            ),
            'page_title'  =>  'Vendor Field Mapping',
            'page_header_title' =>  'Vendor Field Mapping : '.$project_title
        );

        $page_header_array['vendor_custom_field_mapping_add'] = array(

            'breadcrumbs' =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Vendor Custom Field Mapping List','url'=>base_url().'vendor_custom_import/vendor_field_mapping_list/'),
                array('title'=>'Add Mapping','is_active'=>TRUE)
            ),
            'page_title'  =>  'Add Mapping',
            'page_header_title' =>  'Add Mapping : '.$project_title
        );

         $page_header_array['vendor_custom_field_mapping_edit'] = array(

            'breadcrumbs' =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Vendor Custom Field Mapping List','url'=>base_url().'vendor_custom_import/vendor_field_mapping_list/'),
                array('title'=>'Edit Mapping','is_active'=>TRUE)
            ),
            'page_title'  =>  'Edit Mapping',
            'page_header_title' =>  'Edit Mapping : '.$project_title
        );

        $page_header_array['vendor_custom_field_mapping_list'] = array(

            'breadcrumbs' =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Vendor Custom Field Mapping List','is_active'=>TRUE),
            ),
            'page_title'  =>  'Vendor Custom Field Mapping List',
            'page_header_title' =>  'Vendor Custom Field Mapping List : '.$project_title
        );
        
        $page_header_array['po_field_mapping'] = array(

            'breadcrumbs' =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Vendor','url'=>base_url().'vendor'),
                array('title'=>'PO Field Mapping','is_active'=>TRUE)
            ),
            'page_title'  =>  'PO Field Mapping',
            'page_header_title' =>  'PO Field Mapping : '.$project_title
        );


        $page_header_array['vendor_product_import_log'] = array(

            'breadcrumbs' =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Vendor','url'=>base_url().'vendor'),
                array('title'=>'Vendor Product Import Log','is_active'=>TRUE)
            ),
            'page_title'  =>  'Vendor Product Import Log',
            'page_header_title' =>  'Vendor Product Import Log : '.$project_title
        );

        $page_header_array['vendor_custom_imported_file_list'] = array(

            'breadcrumbs' =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Vendor','url'=>base_url().'vendor'),
                array('title'=>'Vendor Custom Imported File List','is_active'=>TRUE)
            ),
            'page_title'  =>  'Vendor Custom Imported File List',
            'page_header_title' =>  'Vendor Custom Imported File List : '.$project_title
        );

        $page_header_array['vendor_custom_imported_file_add'] = array(

            'breadcrumbs' =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Vendor Custom File Import','url'=>base_url().'vendor_custom_import/vendor_custom_imported_file_list/'),
                array('title'=>'Vendor Custom File Import','is_active'=>TRUE)
            ),
            'page_title'  =>  'Vendor Custom File Import',
            'page_header_title' =>  'Vendor Custom File Import : '.$project_title
        );


        ////////////////////////////////
        ////VENDOR END
        ////////////////////////////////
        
        $page_header_array['shipping_dashboard_orders'] = array(
            
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Shipping Orders List','is_active'=>TRUE),
            ),
            "page_title"  =>  'Shipping Orders List',
            "page_header_title" =>  'Shipping Orders List : '.$project_title

        );

          $page_header_array['total_in_house_orders'] = array(
            
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'In-House Orders List','is_active'=>TRUE),
            ),
            "page_title"  =>  'In-House Orders List',
            "page_header_title" =>  'In-House Orders List : '.$project_title

        );


          $page_header_array['total_shipped_picked'] = array(
                    
                    "breadcrumbs" =>  array(
                        array('title'=>'Home','url'=>base_url()),
                        array('title'=>'Shipped Picked Orders List','is_active'=>TRUE),
                    ),
                    "page_title"  =>  'Shipped Picked Orders List',
                    "page_header_title" =>  'Shipped Picked Orders List : '.$project_title

                );


          $page_header_array['total_unshipped_picked'] = array(
                    
                    "breadcrumbs" =>  array(
                        array('title'=>'Home','url'=>base_url()),
                        array('title'=>'Unshipped Picked Orders List','is_active'=>TRUE),
                    ),
                    "page_title"  =>  'Unshipped Picked Orders List',
                    "page_header_title" =>  'Unshipped Picked Orders List : '.$project_title

                );


          $page_header_array['total_not_picked'] = array(
                    
                    "breadcrumbs" =>  array(
                        array('title'=>'Home','url'=>base_url()),
                        array('title'=>'Not Picked Orders List','is_active'=>TRUE),
                    ),
                    "page_title"  =>  'Total Not Picked Orders List',
                    "page_header_title" =>  'Not Picked Orders List : '.$project_title

                );

           $page_header_array['order_tracking_detail'] = array(
                    
                    "breadcrumbs" =>  array(
                        array('title'=>'Home','url'=>base_url()),
                        array('title'=>'Order Shipment Tracking Detail','is_active'=>TRUE),
                    ),
                    "page_title"  =>  'Order Shipment Tracking Detail',
                    "page_header_title" =>  'Order Shipment Tracking Detail : '.$project_title

                );

             $page_header_array['months_years_on_hand_report'] = array(
                    
                    "breadcrumbs" =>  array(
                        array('title'=>'Home','url'=>base_url()),
                        array('title'=>'Months & Years On Hand Report','is_active'=>TRUE),
                    ),
                    "page_title"  =>  'Months & Years On Hand Report',
                    "page_header_title" =>  'Months & Years On Hand Report : '.$project_title

                );

             $page_header_array['product_sale_log_report'] = array(
                    
                    "breadcrumbs" =>  array(
                        array('title'=>'Home','url'=>base_url()),
                        array('title'=>'Inventory Analysis Report','is_active'=>TRUE),
                    ),
                    "page_title"  =>  'Inventory Analysis Report',
                    "page_header_title" =>  'Inventory Analysis Report : '.$project_title

                );


             

        ////////////////////////////////
        ////HR MANAGEMENT START
        ////////////////////////////////
        
        $page_header_array['hr_document_list'] = array(
            
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'HR Document','is_active'=>TRUE),
            ),
            "page_title"  =>  'HR Document List',
            "page_header_title" =>  'HR Document List : '.$project_title

        );

        ////////////////////////////////
        ////HR MANAGEMENT END
        ////////////////////////////////
         $page_header_array['task_master'] = array(
            
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Task','is_active'=>TRUE),
            ),
            "page_title"  =>  'Task List',
            "page_header_title" =>  'Task List : '.$project_title

        );
        $page_header_array['task_master_edit'] = array(
            
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Task List','url'=>base_url().'task_master/task_master'),
            //    array('title'=>'Task View','url'=>base_url().'task_master/task_master/view'),
                array('title'=>'Edit Task','is_active'=>TRUE),
            ),
            "page_title"  =>  'Edit Task',
            "page_header_title" =>  'Edit Task : '.$project_title

        );
        $page_header_array['task_master_view'] = array(
            
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Task List','url'=>base_url().'task_master/task_master'),
                array('title'=>'View Task','is_active'=>TRUE),
            ),
            "page_title"  =>  'View Task',
            "page_header_title" =>  'View Task : '.$project_title

        );
       
         //////////////////////////////////////////////
        ////Inhouse Wholesale reserved order list start
        ///////////////////////////////////////////////

        $page_header_array['inhouse_wholesale_reserved_order_list'] = array(
            
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Inhouse Wholesale Reserved Order List','url'=>base_url().'report/inhouse_wholesale_reserved_order_list'),
                array('title'=>'Inhouse Wholesale Reserved Order List','is_active'=>TRUE),
            ),
            "page_title"  =>  'Inhouse Wholesale Reserved Order List',
            "page_header_title" =>  'Inhouse Wholesale Reserved Order List : '.$project_title

        );
         ////////////////////////////////////////////
        ////Inhouse Wholesale reserved order list END
        /////////////////////////////////////////////
          $page_header_array['orders_bulk_action'] = array(
            
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Bulk Action Orders','is_active'=>TRUE),
            ),
            "page_title"  =>  'Bulk Action Order List',
            "page_header_title" =>  'Bulk Action Order List : '.$project_title

        );

        ////////////////////////////////
        ////SHIPMENT START
        ////////////////////////////////

        $page_header_array['add_shipping_rule'] = array(
            
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Shipping Preferences','url'=>base_url().'shipment/shipping_rule'),
                array('title'=>'Add Preferences','is_active'=>TRUE)
            ),
            "page_title"  =>  'Add Preferences',
            "page_header_title" =>  'Add Preferences : '.$project_title

        );
        
        $page_header_array['edit_shipping_rule'] = array(
            
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Shipping Preferences','url'=>base_url().'shipment/shipping_rule'),
                array('title'=>'Edit Preferences','is_active'=>TRUE)
            ),
            "page_title"  =>  'Edit Preferences',
            "page_header_title" =>  'Edit Preferences : '.$project_title

        );
        
        $page_header_array['shipping_preferences_list'] = array(
            
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Shipping Preferences','is_active'=>TRUE),
            ),
            "page_title"  =>  'Shipping Preferences',
            "page_header_title" =>  'Shipping Preferences : '.$project_title

        );
        
        $page_header_array['shipping_list'] = array(
            
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Shipping List','is_active'=>TRUE),
            ),
            "page_title"  =>  'Shipping List',
            "page_header_title" =>  'Shipping List : '.$project_title

        );
        
        $page_header_array['scan_and_ship'] = array(
            
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Scan And Ship','is_active'=>TRUE),
            ),
            "page_title"  =>  'Scan And Ship',
            "page_header_title" =>  'Scan And Ship : '.$project_title

        );

        $page_header_array['ship_by_po'] = array(
            
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'PO','url'=>base_url().'po/po/'),
                array('title'=>'Ship By PO','is_active'=>TRUE),
            ),
            "page_title"  =>  'Ship By PO',
            "page_header_title" =>  'Ship By PO : '.$project_title

        );
        
        ////////////////////////////////
        ////SHIPMENT END
        ////////////////////////////////
        
        ////////////////////////////////
        ////PRINT END
        ////////////////////////////////

        ////////////////////////////////
        //Marketplace Contact List Start
        ////////////////////////////////

        $page_header_array['marketplace_contact_list'] = array(
            
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Contact List','url'=>base_url().'marketplace/marketplace_contact/')
            ),
            "page_title"  =>  'Marketplace Contact List',
            "page_header_title" =>  'Contact Details : '.$project_title

        );

        $page_header_array['vendor_contact_list'] = array(
            
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Vendor Contact List','url'=>base_url().'vendor/vendor_contact/')
            ),
            "page_title"  =>  'Vendor Contact List',
            "page_header_title" =>  'Vendor Contact List : '.$project_title

        );

        $page_header_array['shipping_carrier_contact'] = array(
            
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Shipping Carrier Contact List','url'=>base_url().'shipping_carrier_contact/'),
                array('title'=>'Contacts','is_active'=>TRUE),
            ),
            "page_title"  =>  'Shipping Carrier Contact List',
            "page_header_title" =>  'Shipping Carrier Contact List : '.$project_title

        );

        $page_header_array['shipping_carrier_contact_list'] = array(
            
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Shipping Carrier Contact List', 'is_active' => TRUE)
            ),
            "page_title"  =>  'Shipping Carrier Contact List',
            "page_header_title" =>  'Shipping Carrier Contact List : '.$project_title

        );

        ////////////////////////////////
        //Marketplace Contact List End
        ////////////////////////////////
        

        ////////////////////////////////
        //Tax Rate List Start
        ////////////////////////////////
        
        $page_header_array['tax_rate_list'] = array(
            
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Tax Rate List','url'=>base_url().'tax/tax_rate/')
            ),
            "page_title"  =>  'Tax Rate List',
            "page_header_title" =>  'Tax Rate List : '.$project_title

        );

        ////////////////////////////////
        //Tax Rate List End
        ////////////////////////////////


        ////////////////////////////////
        //User Assistance Request Start
        ////////////////////////////////
        
        $page_header_array['user_assistance_request'] = array(
            
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'My Requests','url'=>base_url().'user_management/user_assistance/requests')
            ),
            "page_title"  =>  'User Assistance',
            "page_header_title" =>  'User Assistance: '.$project_title

        );

        ////////////////////////////////
        //User Assistance Request End
        ////////////////////////////////

        ////////////////////////////////
        //User Assistance Response Start
        ////////////////////////////////
        
        $page_header_array['user_assistance_response'] = array(
            
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'My Responses','url'=>base_url().'user_management/user_assistance/responses')
            ),
            "page_title"  =>  'User Assistance',
            "page_header_title" =>  'User Assistance: '.$project_title

        );

        ////////////////////////////////
        //User Assistance Response End
        ////////////////////////////////

        ////////////////////////////////
        //Customer Management Start
        ////////////////////////////////
        
        $page_header_array['customer_tax_exempt'] = array(
            
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Customer List','url'=>base_url().'customer/customer')
            ),
            "page_title"  =>  'Customer Tax Exempt',
            "page_header_title" =>  'Customer Tax Exempt: '.$project_title

        );

        ////////////////////////////////
        //Customer management Start
        ////////////////////////////////

        ////////////////////////////////
        //Customer Adding Start
        ////////////////////////////////
        
        $page_header_array['add_customer_tax_exempt'] = array(
            
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Customer List','url'=>base_url().'customer/customer')
            ),
            "page_title"  =>  'Add Customer',
            "page_header_title" =>  'Add Customer: '.$project_title

        );

        ////////////////////////////////
        //Customer Adding End
        ////////////////////////////////

        ////////////////////////////////
        //Customer Editing Start
        ////////////////////////////////
        
        $page_header_array['edit_customer_tax_exempt'] = array(
            
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Customer List','url'=>base_url().'customer/customer')
            ),
            "page_title"  =>  'Edit Customer',
            "page_header_title" =>  'Edit Customer: '.$project_title

        );

        ////////////////////////////////
        //Customer Editing End
        ////////////////////////////////

        ////////////////////////////////
        //Department Listing start
        ////////////////////////////////
        
        $page_header_array['department_listing'] = array(
            
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Department List','url'=>base_url().'department/department')
            ),
            "page_title"  =>  'Department List',
            "page_header_title" =>  'Department List: '.$project_title

        );

        ////////////////////////////////
        //Department Listing End
        ////////////////////////////////

        ////////////////////////////////
        //How to use print start
        ////////////////////////////////
        
        $page_header_array['how_to_print'] = array(
            
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'How To Use Print Application','url'=>base_url().'prints/print_instruction')
            ),
            "page_title"  =>  'How to use Print Application',
            "page_header_title" =>  'How to use Print Application: '.$project_title

        );

        ////////////////////////////////
        //How to use print end
        ////////////////////////////////

        ////////////////////////////////
        //CMS Pages start
        ////////////////////////////////
        
        $page_header_array['cms_pages'] = array(
            
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'CMS Pages','url'=>base_url().'cms/cms_pages')
            ),
            "page_title"  =>  'CMS Pages list',
            "page_header_title" =>  'CMS Pages List: '.$project_title

        );

        ////////////////////////////////
        //CMS Pages end
        ////////////////////////////////

        ////////////////////////////////
        //CMS Pages add start
        ////////////////////////////////
        
        $page_header_array['cms_pages_add'] = array(
            
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'CMS Pages','url'=>base_url().'cms/cms_pages'),
                array('title'=>'Add Page','is_active'=>TRUE)
            ),
            "page_title"  =>  'Add CMS Page',
            "page_header_title" =>  'Add CMS Page: '.$project_title

        );

        ////////////////////////////////
        //CMS Pages add end
        ////////////////////////////////

        ////////////////////////////////
        //CMS Pages Edit start
        ////////////////////////////////
        
        $page_header_array['cms_pages_edit'] = array(
            
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'CMS Pages','url'=>base_url().'cms/cms_pages'),
                array('title'=>'Edit Page','is_active'=>TRUE)
            ),
            "page_title"  =>  'Edit CMS Page',
            "page_header_title" =>  'Edit CMS Page: '.$project_title

        );

        ////////////////////////////////
        //CMS Pages Edit end
        ////////////////////////////////

        ////////////////////////////////
        //Marketplace List edit start
        ////////////////////////////////
        
        $page_header_array['marketplace_list_edit'] = array(
            
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Marketplace List','url'=>base_url().'marketplace_list'),
                array('title'=>'Edit Credentials','is_active'=>TRUE)
            ),
            "page_title"  =>  'Edit Credentials',
            "page_header_title" =>  'Edit Marketplace Credentials: '.$project_title

        );

        ////////////////////////////////
        //Marketplace List edit end
        ////////////////////////////////

        ////////////////////////////////
        //Marketplace List edit start
        ////////////////////////////////
        
        $page_header_array['global_settings'] = array(
            
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Global Settings','url'=>base_url().'global_settings')
            ),
            "page_title"  =>  'Global Settings',
            "page_header_title" =>  'Global Settings '.$project_title

        );

        ////////////////////////////////
        //Marketplace List edit end
        ////////////////////////////////


        $page_header_array['print_invoice_listing'] = array(
            
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Print Order List','is_active'=>TRUE),
            ),
            "page_title"  =>  'Print Order List',
            "page_header_title" =>  'Print Order List : '.$project_title

        );
        
        $page_header_array['general_settings'] = array(
            
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'User Preferences','is_active'=>TRUE),
            ),
            "page_title"  =>  'User Preferences',
            "page_header_title" =>  'User Preferences : '.$project_title

        );
        
        ////////////////////////////////
        ////PRINT END
        ////////////////////////////////

        ////////////////////////////////
        ////PO START
        ////////////////////////////////

        $page_header_array['po_list'] = array(
            
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Purchase order','is_active'=>TRUE),
            ),
            "page_title"  =>  'Purchase order List',
            "page_header_title" =>  'Purchase order List : '.$project_title

        );

        //Drishtant Leuva @25-5-2019
        $page_header_array['po_issue_list'] = array(
            
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title' => 'System Notification','is_active'=>TRUE),
                array('title'=>'Purchase Order issues','is_active'=>TRUE),
            ),
            "page_title"  =>  'Purchase Order issues',
            "page_header_title" =>  'Purchase Order issues : '.$project_title

        );
        //Drishtant Leuva @6-6-2019
        $page_header_array['po_verification_log'] = array(
            
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Po List','url'=>base_url().'po/po/'),
                 array('title'=>'Po Verification','url'=>base_url().'po/po_verification'),
                array('title'=>'Po Verification Log','is_active'=>TRUE),
            ),
            "page_title"  =>  'Po Verification Log',
            "page_header_title" =>  'Po Verification Log : '.$project_title

        );

         //Drishtant Leuva @6-6-2019
        $page_header_array['po_verification'] = array(
            
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Po List','url'=>base_url().'po/po/'),
                array('title'=>'Po Verification','is_active'=>TRUE),
            ),
            "page_title"  =>  'Po Verification',
            "page_header_title" =>  'Po Verification : '.$project_title

        );

        //Harshad @28-6-2019
        $page_header_array['ship_by_po_verification_log'] = array(
            
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Po List','url'=>base_url().'po/po/'),
                 array('title'=>'Ship By Po Verification','url'=>base_url().'po/ship_by_po_verification'),
                array('title'=>'Ship By Po Verification Log','is_active'=>TRUE),
            ),
            "page_title"  =>  'Ship By Po Verification Log',
            "page_header_title" =>  'Ship By Po Verification Log : '.$project_title

        );

         //Harshad @28-6-2019
        $page_header_array['ship_by_po_verification'] = array(
            
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Po List','url'=>base_url().'po/po/'),
                array('title'=>'Ship By Po Verification','is_active'=>TRUE),
            ),
            "page_title"  =>  'Ship By Po Verification',
            "page_header_title" =>  'Ship By Po Verification : '.$project_title

        );

        //Drishtant Leuva @11-6-2019
        $page_header_array['pick_list_item_log'] = array(
            
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Pick List','url'=>base_url().'pick/pick_list/'),
                array('title'=>'Pick List Item Log','is_active'=>TRUE),
            ),
            "page_title"  =>  'Pick List Item Log',
            "page_header_title" =>  'Pick List Item Log : '.$project_title

        );

        //Drishtant Leuva @12-6-2019
        $page_header_array['inventory_no_sales_report'] = array(
            
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Inventory Items - No Sales Report','is_active'=>TRUE),
            ),
            "page_title"  =>  'Inventory  Items - No Sales Report',
            "page_header_title" =>  'Inventory Items - No Sales Report : '.$project_title

        );

        //Drishtant Leuva @13-6-2019
        $page_header_array['inventory_no_sales_report_products'] = array(
            
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Inventory Items - No Sales Report','url'=>base_url().'report/inventory_no_sales_report/'),
                array('title'=>'Inventory Items - No Sales Report Products','is_active'=>TRUE),
            ),
            "page_title"  =>  'Inventory  Items - No Sales Report Products',
            "page_header_title" =>  'Inventory Items - No Sales Report Products : '.$project_title
        );

        //Drishtant Leuva @22-6-2019
        $page_header_array['product_without_primary_location'] = array(
            
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Products Without Primary Location','is_active'=>TRUE),
            ),
            "page_title"  =>  'Products Without Primary Location',
            "page_header_title" =>  'Products Without Primary Location : '.$project_title
        );

        $page_header_array['products_without_images'] = array(
            
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Products Without Images','is_active'=>TRUE),
            ),
            "page_title"  =>  'Products Without Images',
            "page_header_title" =>  'Products Without Images : '.$project_title
        );

        $page_header_array['in_house_sellable_location'] = array(
            
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Warehouse Location Details','is_active'=>TRUE),
            ),
            "page_title"  =>  'Warehouse Location Details',
            "page_header_title" =>  'Warehouse Location Details : '.$project_title

        );

        $page_header_array['orders_shipped_by_vendor'] = array(
            
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Orders Shipped by Vendor (Month) Report','is_active'=>TRUE),
            ),
            "page_title"  =>  'Orders Shipped by Vendor (Month) Report',
            "page_header_title" =>  'Orders Shipped by Vendor (Month) Report : '.$project_title

        );

        $page_header_array['orders_by_vendor'] = array(
            
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Orders Shipped by Vendor (Month) Report','url'=> base_url().'report/orders_shipped_by_vendor/'),
                array('title'=>'Orders by Vendor (Month) Report','is_active'=>TRUE),
            ),
            "page_title"  =>  'Orders by Vendor (Month) Report',
            "page_header_title" =>  'Orders by Vendor (Month) Report : '.$project_title

        );

        $page_header_array['pdf_item_list'] = array(
            
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'PDF Items','is_active'=>TRUE),
            ),
            "page_title"  =>  'PDF Items List',
            "page_header_title" =>  'PDF Items List : '.$project_title

        );
        $page_header_array['view_pdf_item_list'] = array(
            
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'View PDF Items','is_active'=>TRUE),
            ),
            "page_title"  =>  'View PDF Items List',
            "page_header_title" =>  'View PDF Items List : '.$project_title

        );

        $page_header_array['po_document'] = array(
            
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'PO Document','is_active'=>TRUE),
            ),
            "page_title"  =>  'PO Document List',
            "page_header_title" =>  'PO Document List: '.$project_title

        );

        $page_header_array['add_po'] = array(

            'breadcrumbs' =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Purchase order','url'=>base_url().'po/po'),
                array('title'=>'Add Purchase order','is_active'=>TRUE)
            ),
            'page_title'  =>  'Add Purchase order',
            'page_header_title' =>  'Add Purchase order : '.$project_title
        );

        $page_header_array['add_pdf_item'] = array(

            'breadcrumbs' =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'PDF Items','url'=>base_url().'inventory/pdf_items'),
                array('title'=>'Add PDF Item','is_active'=>TRUE)
            ),
            'page_title'  =>  'Add PDF Item',
            'page_header_title' =>  'Add PDF Item : '.$project_title
        );

        $page_header_array['edit_po'] = array(

            'breadcrumbs' =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Purchase order','url'=>base_url().'po/po'),
                array('title'=>'Edit Purchase order','is_active'=>TRUE)
            ),
            'page_title'  =>  'Edit Purchase order',
            'page_header_title' =>  'Edit Purchase order : '.$project_title
        );

        $page_header_array['edit_pdf_item'] = array(

            'breadcrumbs' =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'PDF Items','url'=>base_url().'inventory/pdf_items'),
                array('title'=>'Edit PDF Item','is_active'=>TRUE)
            ),
            'page_title'  =>  'Edit PDF Item',
            'page_header_title' =>  'Edit PDF Item : '.$project_title
        );

        $page_header_array['awaiting_wholesale_po_vendor_list'] = array(

            'breadcrumbs' =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Purchase order','url'=>base_url().'po/po'),
                array('title'=>'Awaiting wholesale PO','is_active'=>TRUE)
            ),
            'page_title'  =>  'Awaiting wholesale PO',
            'page_header_title' =>  'Awaiting wholesale PO : '.$project_title
        );

        $page_header_array['awaiting_dropship_po_vendor_list'] = array(

            'breadcrumbs' =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Purchase order','url'=>base_url().'po/po'),
                array('title'=>'Awaiting dropship PO','is_active'=>TRUE)
            ),
            'page_title'  =>  'Awaiting Dropship PO',
            'page_header_title' =>  'Awaiting dropship PO : '.$project_title
        );

        $page_header_array['awaiting_warehouse_po_vendor_list'] = array(

            'breadcrumbs' =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Purchase order','url'=>base_url().'po/po'),
                array('title'=>'Awaiting warehouse PO','is_active'=>TRUE)
            ),
            'page_title'  =>  'Awaiting warehouse PO',
            'page_header_title' =>  'Awaiting warehouse PO : '.$project_title
        );

        $page_header_array['create_awaiting_warehouse_po'] = array(

            'breadcrumbs' =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Purchase order','url'=>base_url().'po/po'),
                array('title'=>'Awaiting warehouse PO','url'=>base_url().'po/po/awaiting_warehouse_po_vendor_list'),
                array('title'=>'Create Awaiting warehouse PO','is_active'=>TRUE)
            ),
            'page_title'  =>  'Create Awaiting warehouse PO',
            'page_header_title' =>  'Create Awaiting warehouse PO : '.$project_title
        );

        $page_header_array['create_awaiting_wholesale_po'] = array(

            'breadcrumbs' =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Purchase order','url'=>base_url().'po/po'),
                array('title'=>'Awaiting wholesale PO','url'=>base_url().'po/po/awaiting_wholesale_po_vendor_list'),
                array('title'=>'Create Awaiting wholesale PO','is_active'=>TRUE)
            ),
            'page_title'  =>  'Create Awaiting wholesale PO',
            'page_header_title' =>  'Create Awaiting wholesale PO : '.$project_title
        );

        $page_header_array['import_po'] = array(

            'breadcrumbs' =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Purchase order','url'=>base_url().'po/po'),
                array('title'=>'Import PO','is_active'=>TRUE)
            ),
            'page_title'  =>  'Import PO',
            'page_header_title' =>  'Import PO : '.$project_title
        );

        $page_header_array['import_woot_order'] = array(

            'breadcrumbs' =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Order','url'=>base_url().'order'),
                array('title'=>'Import Woot Order','is_active'=>TRUE)
            ),
            'page_title'  =>  'Import Woot Order',
            'page_header_title' =>  'Import Woot Order : '.$project_title
        );

        $page_header_array['po_arrival'] = array(

            'breadcrumbs' =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Purchase order','url'=>base_url().'po/po'),
                array('title'=>'PO Arrival','is_active'=>TRUE)
            ),
            'page_title'  =>  'PO Arrival',
            'page_header_title' =>  'PO Arrival : '.$project_title
        );

        $page_header_array['manual_po_arrival'] = array(

            'breadcrumbs' =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Purchase order','url'=>base_url().'po/po'),
                array('title'=>'PO Arrival','is_active'=>TRUE)
            ),
            'page_title'  =>  'PO Arrival',
            'page_header_title' =>  'PO Arrival : '.$project_title
        );

        $page_header_array['po_check_in'] = array(

            'breadcrumbs' =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'PO','url'=>base_url().'po/po'),
                array('title'=>'PO Check In','is_active'=>TRUE)
            ),
            'page_title'  =>  'PO Check In',
            'page_header_title' =>  'PO Check In : '.$project_title
        );

        ////////////////////////////////
        ////PO END
        ////////////////////////////////
        
        ////////////////////////////////
        ////WAREHOUSE START
        ////////////////////////////////

        $page_header_array['warehouse_list'] = array(
            
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Warehouse Manager','is_active'=>TRUE),
            ),
            "page_title"  =>  'Warehouse List',
            "page_header_title" =>  'Warehouse List : '.$project_title

        );

        $page_header_array['add_warehouse'] = array(

            'breadcrumbs' =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Warehouse Manager','url'=>base_url().'warehouse_manager'),
                array('title'=>'Add Warehouse','is_active'=>TRUE)
            ),
            'page_title'  =>  'Add Warehouse',
            'page_header_title' =>  'Add Warehouse : '.$project_title
        );

        $page_header_array['warehouse_store_mapping'] = array(

            'breadcrumbs' =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Warehouse Store Mapping','is_active'=>TRUE)
            ),
            'page_title'  =>  'Warehouse Store Mapping',
            'page_header_title' =>  'Warehouse Store Mapping : '.$project_title
        );

        $page_header_array['edit_warehouse'] = array(

            'breadcrumbs' =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Warehouse Manager','url'=>base_url().'warehouse_manager'),
                array('title'=>'Edit Warehouse','is_active'=>TRUE)
            ),
            'page_title'  =>  'Edit Warehouse',
            'page_header_title' =>  'Edit Warehouse : '.$project_title
        );


        ////////////////////////////////
        ////WAREHOUSE END
        ////////////////////////////////



        ////////////////////////////////
        ////TNT START
        ////////////////////////////////

        $page_header_array['order_list'] = array(
            
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Orders List','is_active'=>TRUE),
            ),
            "page_title"  =>  'Orders List',
            "page_header_title" =>  'Orders List : '.$project_title
        );

        $page_header_array['edit_order'] = array(
            
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Orders List','url'=>base_url().'order'),
                array('title'=>'Edit Order','is_active'=>TRUE),
            ),
            "page_title"  =>  'Edit Order',
            "page_header_title" =>  'Edit Order : '.$project_title
        );

        $page_header_array['return_management'] = array(

            'breadcrumbs' =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'RMA','url'=>base_url().'rma/rma'),
                array('title'=>'Create RMA','is_active'=>TRUE)
               
            ),
            'page_title'  =>  'Return Management',
            'page_header_title' =>  'Return Management : '.$project_title

        );

        $page_header_array['rma_verify_item'] = array(

            'breadcrumbs' =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'RMA','url'=>base_url().'rma/rma/'),
                array('title'=>'RTW verification','is_active'=>TRUE),
            ),
            'page_title'  =>  'RTW verification',
            'page_header_title' =>  'RTW verification : '.$project_title
        );

        $page_header_array['rma_list'] = array(

            'breadcrumbs' =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'RMA List','is_active'=>TRUE)
               
            ),
            'page_title'  =>  'RMA List',
            'page_header_title' =>  'RMA List : '.$project_title

        );
        
        $page_header_array['create_rma'] = array(

            'breadcrumbs' =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'RMA List','url'=>base_url().'rma/rma/'),
                array('title'=>'Create RMA','is_active'=>TRUE)
               
            ),
            'page_title'  =>  'Create RMA',
            'page_header_title' =>  'Create RMA : '.$project_title

        );

        $page_header_array['rma_email_template'] = array(

            'breadcrumbs' =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'RMA','url'=>base_url().'rma/rma'),
                array('title'=>'Email Template','is_active'=>TRUE)
               
            ),
            'page_title'  =>  'Email Template',
            'page_header_title' =>  'Email Template : '.$project_title

        );

        $page_header_array['edit_rma'] = array(

            'breadcrumbs' =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'RMA List','url'=>base_url().'rma/rma/'),
                array('title'=>'Edit RMA','is_active'=>TRUE)
               
            ),
            'page_title'  =>  'Edit RMA',
            'page_header_title' =>  'Edit RMA : '.$project_title

        );

        $page_header_array['send_rma_email'] = array(

            'breadcrumbs' =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'RMA List','url'=>base_url().'rma/rma/'),
                array('title'=>'Send Email','is_active'=>TRUE)
               
            ),
            'page_title'  =>  'Send Email',
            'page_header_title' =>  'Send Email : '.$project_title

        );
        
        $page_header_array['order_ship_by_fba'] = array(
            
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'FBA Order List','url'=>base_url().'orders_fulfilled_by_amazon'),
                array('title'=>'Order Ship By FBA','is_active'=>TRUE),
            ),
            "page_title"  =>  'Order Ship By FBA',
            "page_header_title" =>  'Order Ship By FBA : '.$project_title

        );

         $page_header_array['orders_fullfilled_by_amazon'] = array(
            
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Orders Fullfilled By Amazon','is_active'=>TRUE),
            ),
            "page_title"  =>  'Orders Fullfilled By Amazon',
            "page_header_title" =>  'Orders Fullfilled By Amazon : '.$project_title

        );

        $page_header_array['amazon_listing_manager'] = array(
            
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Amazon Listing Manager','is_active'=>TRUE),
            ),
            "page_title"  =>  'Amazon Listing Manager',
            "page_header_title" =>  'Amazon Listing Manager : '.$project_title

        );

        $page_header_array['amazon_listed_product_manager_edit'] = array(
            
             "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Amazon Listing Manager','url'=>base_url().'listing_manager/amazon/to_be_posted',"last_link"=>true),
                array('title'=>'Edit','is_active'=>TRUE),
            ),
            "page_title"  =>  'Edit Amazon Product',
            "page_header_title" =>  'Edit Amazon Product : '.$project_title

        );

        $page_header_array['amazon_in_progress_product_manager_edit'] = array(
            
             "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Amazon Listing Manager','url'=>base_url().'listing_manager/amazon/in_progress'),
                array('title'=>'Edit','is_active'=>TRUE),
            ),
            "page_title"  =>  'Edit Amazon Product',
            "page_header_title" =>  'Edit Amazon Product : '.$project_title

        );

        $page_header_array['ebay_listing_manager'] = array(
            
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Ebay Listing Manager','is_active'=>TRUE),
            ),
            "page_title"  =>  'Ebay Listing Manager',
            "page_header_title" =>  'Ebay Listing Manager : '.$project_title

        );

        $page_header_array['walmart_listed_product_manager'] = array(
            
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Walmart Listing Manager','is_active'=>TRUE),
            ),
            "page_title"  =>  'Walmart Listing Manager',
            "page_header_title" =>  'Walmart Listing Manager : '.$project_title

        );

        //drishtant leuva @30-4-2019
        $page_header_array['sears_listed_product_manager'] = array(
            
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Sears Listing Manager','is_active'=>TRUE),
            ),
            "page_title"  =>  'Sears Listing Manager',
            "page_header_title" =>  'Sears Listing Manager : '.$project_title

        );

        $page_header_array['walmart_product_add'] = array(
            
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Walmart Listing Manager','url' => base_url() . 'listing_manager/walmart/lists/'),
                array('title' => 'Add Walmart Product', 'is_active' => TRUE)
            ),
            "page_title"  =>  'Walmart Listing Manager',
            "page_header_title" =>  'Walmart Listing Manager : '.$project_title

        );

        $page_header_array['edit_sears_product'] = array(
            
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Sears Listing Manager','url' => base_url() . 'listing_manager/sears/listed/'),
                array('title' => 'Edit sears Product', 'is_active' => TRUE)
            ),
            "page_title"  =>  'Sears Listing Manager',
            "page_header_title" =>  'Sears Listing Manager : '.$project_title

        );

        $page_header_array['add_sears_product'] = array(
            
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Sears Listing Manager','url' => base_url() . 'listing_manager/sears/lists/'),
                array('title' => 'Add sears Product', 'is_active' => TRUE)
            ),
            "page_title"  =>  'Sears Listing Manager',
            "page_header_title" =>  'Sears Listing Manager : '.$project_title

        );

        $page_header_array['walmart_product_edit'] = array(
            
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Walmart Listing Manager','url' => base_url() . 'listing_manager/walmart/listed/'),
                array('title' => 'Add Walmart Product', 'is_active' => TRUE)
            ),
            "page_title"  =>  'Walmart Listing Manager',
            "page_header_title" =>  'Walmart Listing Manager : '.$project_title

        );


        $page_header_array['bonanza_listed_product_manager'] = array(
            
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Bonanza Listing Manager','is_active'=>TRUE),
            ),
            "page_title"  =>  'Bonanza Listing Manager',
            "page_header_title" =>  'Bonanza Listing Manager : '.$project_title

        );

        
        $page_header_array['shopify_listing_manager'] = array(

            "breadcrumbs" => array(
                array('title' => 'Home', 'url' => base_url()),
                array('title' => 'Shopify Listing Manager', 'is_active' => TRUE),
            ),
            "page_title" => 'Shopify Listing Manager',
            "page_header_title" => 'Shopify Listing Manager : '.$project_title
        );


        $page_header_array['edit_shopify_product'] = array(
            
             "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Shopify Listing Manager','url'=>base_url().'listing_manager/shopify/listed',"last_link"=>true),
                array('title'=>'Edit','is_active'=>TRUE),
            ),
            "page_title"  =>  'Edit Shopify Product',
            "page_header_title" =>  'Edit Shopify Product : '.$project_title

        );

        $page_header_array['add_shopify_product'] = array(
            
             "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Shopify Listing Manager','url'=>base_url().'listing_manager/shopify/lists',"last_link"=>true),
                array('title'=>'Add','is_active'=>TRUE),
            ),
            "page_title"  =>  'Add Shopify Product',
            "page_header_title" =>  'Add Shopify Product : '.$project_title

        );

        ////////////////////////////////
        ////Tanga Listing START
        ////////////////////////////////
        $page_header_array['tanga_listed_product_manager'] = array(
            
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Tanga Listing Manager','is_active'=>TRUE),
            ),
            "page_title"  =>  'Tanga Listing Manager',
            "page_header_title" =>  'Tanga Listing Manager : '.$project_title

        );
        ////////////////////////////////
        ////Tanga Listing End
        ////////////////////////////////

        ////////////////////////////////
        ////Tanga Listing edit start
        ////////////////////////////////
        $page_header_array['tanga_listed_product_manager_edit'] = array(
            
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Tanga Listing Manager','url'=>base_url().'listing_manager/tanga/lists',"last_link"=>true),
                array('title'=>'Edit','is_active'=>TRUE),
            ),
            "page_title"  =>  'Edit Tanga Product',
            "page_header_title" =>  'Edit Tanga Product : '.$project_title
        );

        ////////////////////////////////
        ////Tanga Listing edit end
        ////////////////////////////////

        $page_header_array['bonanza_listed_product_manager_edit'] = array(
            
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Bonanza Listing Manager','url'=>base_url().'listing_manager/bonanza/lists',"last_link"=>true),
                array('title'=>'Edit','is_active'=>TRUE),
            ),
            "page_title"  =>  'Edit Bonanza Product',
            "page_header_title" =>  'Edit Bonanza Product : '.$project_title

        );



        $page_header_array['newegg_listed_product_manager'] = array(
            
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Newegg Listing Manager','is_active'=>TRUE),
            ),
            "page_title"  =>  'Newegg Listing Manager',
            "page_header_title" =>  'Newegg Listing Manager : '.$project_title

        );

        $page_header_array['newegg_listed_product_manager_edit'] = array(
            
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Newegg Listing Manager','url'=>base_url().'listing_manager/newegg/lists',"last_link"=>true),
                array('title'=>'Edit','is_active'=>TRUE),
            ),
            "page_title"  =>  'Edit Newegg Product',
            "page_header_title" =>  'Edit Newegg Product : '.$project_title

        );

        $page_header_array['newegg_biz_listed_product_manager'] = array(
            
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Newegg Biz Listing Manager','is_active'=>TRUE),
            ),
            "page_title"  =>  'Newegg Biz Listing Manager',
            "page_header_title" =>  'Newegg Biz Listing Manager : '.$project_title

        );

        $page_header_array['newegg_biz_listed_product_manager_edit'] = array(
            
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Newegg Biz Listing Manager','url'=>base_url().'listing_manager/newegg_biz/lists',"last_link"=>true),
                array('title'=>'Edit','is_active'=>TRUE),
            ),
            "page_title"  =>  'Edit Newegg Biz Product',
            "page_header_title" =>  'Edit Newegg Biz Product : '.$project_title

        );

        $page_header_array['walmart_list_product_manager'] = array(
            
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Walmart Listing Manager','is_active'=>TRUE),
            ),
            "page_title"  =>  'Walmart Listing Manager',
            "page_header_title" =>  'Walmart Listing Manager : '.$project_title

        );

        $page_header_array['walmart_list_progress_product_manager'] = array(
            
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Walmart Listing Manager','is_active'=>TRUE),
            ),
            "page_title"  =>  'Walmart Listing Manager',
            "page_header_title" =>  'Walmart Listing Manager : '.$project_title

        );

        $page_header_array['walmart_listed_product_manager_edit'] = array(
            
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Walmart Listing Manager','url'=>base_url().'listing_manager/walmart/lists',"last_link"=>true),
                array('title'=>'Edit','is_active'=>TRUE),
            ),
            "page_title"  =>  'Edit Walmart Product',
            "page_header_title" =>  'Edit Walmart Product : '.$project_title

        );

        $page_header_array['overstock_listing_manager'] = array(
            
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Overstock Listing Manager','is_active'=>TRUE),
            ),
            "page_title"  =>  'Overstock Listing Manager',
            "page_header_title" =>  'Overstock Listing Manager : '.$project_title

        );

        $page_header_array['overstock_listing_manager_edit'] = array(
            
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Overstock Listing Manager','url'=>base_url().'listing_manager/overstock/lists',"last_link"=>true),
                array('title'=>'Edit','is_active'=>TRUE)
            ),
            "page_title"  =>  'Overstock Listing Manager',
            "page_header_title" =>  'Overstock Listing Manager : '.$project_title

        );

        $page_header_array['rakuten_listing_manager'] = array(
            
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Rakuten Listing Manager','is_active'=>TRUE),
            ),
            "page_title"  =>  'Rakuten Listing Manager',
            "page_header_title" =>  'Rakuten Listing Manager : '.$project_title

        );
        
        $page_header_array['inventory_master_listing'] = array(
            
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Inventory Master Listing','is_active'=>TRUE),
            ),
            "page_title"  =>  'Inventory Master Listing',
            "page_header_title" =>  'Inventory Master Listing : '.$project_title

        );

        $page_header_array['kit_master_listing'] = array(
            
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Kit Master Listing','is_active'=>TRUE),
            ),
            "page_title"  =>  'Kit Master Listing',
            "page_header_title" =>  'Kit Master Listing : '.$project_title

        );
    
        $page_header_array['dashboard'] = array(
            "page_title"  =>  'Dashboard',
            "page_header_title" =>  'Dashboard : '.$project_title

        );

        ////////////

        //PICK LISTING
        $page_header_array['pick_list'] = array(
            
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Pick','url'=>'javascript:void(0)'),
                array('title'=>'Pick List','is_active'=>TRUE),
            ),
            "page_title"  =>  'Pick List',
            "page_header_title" =>  'Pick List : '.$project_title

        );

        //PICK LISTING
        $page_header_array['create_pick_list'] = array(
            
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Pick List','url'=>base_url().'pick/pick_list'),
                array('title'=>'Create Pick List','is_active'=>TRUE),
            ),
            "page_title"  =>  'Create Pick List',
            "page_header_title" => 'Create Pick List : '.$project_title

        );
        //PICK LIST DETAIL
        $page_header_array['pick_list_order'] = array(
            
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Pick List','url'=>base_url().'pick/pick_list'),
                array('title'=>'Orders List','is_active'=>TRUE),
            ),
            "page_title"  =>  'Pick List Orders',
            "page_header_title" => 'Pick List Orders : '.$project_title

        );


        ////////////

        //USER MASTER LISTING
        $page_header_array['user_master'] = array(
            
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'User List','is_active'=>TRUE),
            ),
            "page_title"  =>  'User List',
            "page_header_title" =>  'User List : '.$project_title

        );

        //USER MASTER ADD
        $page_header_array['user_master_add'] = array(
            
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'User List','url'=>base_url().'user_master'),
                array('title'=>'Add User','is_active'=>TRUE),
            ),
            "page_title"  =>  'Add User',
            "page_header_title" =>  'Add User : '.$project_title

        );

        //USER MASTER EDIT
        $page_header_array['user_master_edit'] = array(
            
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'User List','url'=>base_url().'user_master'),
                array('title'=>'Edit User','is_active'=>TRUE),
            ),
            "page_title"  =>  'Edit User',
            "page_header_title" =>  'Edit User : '.$project_title

        );

        //user restriction 
        $page_header_array['user_restriction'] = array(
            
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),             
                array('title'=>'User Restriction List','is_active'=>TRUE),
            ),
            "page_title"  =>  'User Restriction List',
            "page_header_title" =>  'User Restriction List : '.$project_title

        );

        ////////////

         ////////////

        //USER MASTER LISTING
        $page_header_array['smtp_profiles'] = array(
            
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'SMTP Profiles','is_active'=>TRUE),
            ),
            "page_title"  =>  'SMTP Profiles',
            "page_header_title" =>  'SMTP Profiles : '.$project_title

        );

        $page_header_array['cron_manager'] = array(
            
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Cron Manager','is_active'=>TRUE),
            ),
            "page_title"  =>  'Cron Manager',
            "page_header_title" =>  'Cron Manager : '.$project_title

        );


        $page_header_array['database_query_tool'] = array(
            
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Database Query Tool','is_active'=>TRUE),
            ),
            "page_title"  =>  'Database Query Tool',
            "page_header_title" =>  'Database Query Tool : '.$project_title

        );

        $page_header_array['ebay_business_policy'] = array(
            
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Ebay Business Policy','is_active'=>TRUE),
            ),
            "page_title"  =>  'Ebay Business Policy',
            "page_header_title" =>  'Ebay Business Policy : '.$project_title

        );

        $page_header_array['ebay_store_categories'] = array(
            
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Ebay Store Categories','is_active'=>TRUE),
            ),
            "page_title"  =>  'Ebay Store Categories',
            "page_header_title" =>  'Ebay Store Categories : '.$project_title

        );

        

        $page_header_array['ebay_business_policy_products'] = array(
            
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Ebay Business Policy Products','is_active'=>TRUE),
            ),
            "page_title"  =>  'Ebay Business Policy Products',
            "page_header_title" =>  'Ebay Business Policy Products : '.$project_title

        );

        //USER MASTER ADD
        $page_header_array['smtp_profiles_add'] = array(
            
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'SMTP Profiles','url'=>base_url().'smtp_profiles'),
                array('title'=>'Add SMTP Profiles','is_active'=>TRUE),
            ),
            "page_title"  =>  'Add SMTP Profiles',
            "page_header_title" =>  'Add SMTP Profiles : '.$project_title

        );

        $page_header_array['cron_manager_add'] = array(
            
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Add Cron Manager','is_active'=>TRUE),
            ),
            "page_title"  =>  'Add Cron Manager',
            "page_header_title" =>  'Add Cron Manager : '.$project_title

        );

        $page_header_array['cron_manager_edit'] = array(
            
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Edit Cron Manager','is_active'=>TRUE),
            ),
            "page_title"  =>  'Edit Cron Manager',
            "page_header_title" =>  'Edit Cron Manager : '.$project_title

        );

        //USER MASTER EDIT
        $page_header_array['smtp_profiles_edit'] = array(
            
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'SMTP Profiles List','url'=>base_url().'smtp_profiles'),
                array('title'=>'Edit SMTP Profiles','is_active'=>TRUE),
            ),
            "page_title"  =>  'Edit SMTP Profiles',
            "page_header_title" =>  'Edit SMTP Profiles : '.$project_title

        );

        ////////////

        //USER MASTER LISTING
        $page_header_array['baker_vendor_details'] = array(
            
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Baker Vendor Details','is_active'=>TRUE),
            ),
            "page_title"  =>  'Baker Vendor Details',
            "page_header_title" =>  'Baker Vendor Details : '.$project_title

        );

        //USER GROUP LISTING
        $page_header_array['user_groups'] = array(
            
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'User Group List','is_active'=>TRUE),
            ),
            "page_title"  =>  'User Group List',
            "page_header_title" =>  'User Group List : '.$project_title

        );

        //USER GROUP ADD
        $page_header_array['user_groups_add'] = array(
            
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'User Group List','url'=>base_url().'user_groups'),
                array('title'=>'Add User Group','is_active'=>TRUE),
            ),
            "page_title"  =>  'Add User Group',
            "page_header_title" =>  'Add User Group : '.$project_title

        );

        //USER GROUP EDIT
        $page_header_array['user_groups_edit'] = array(
            
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'User Group List','url'=>base_url().'user_groups'),
                array('title'=>'Edit User Group','is_active'=>TRUE),
            ),
            "page_title"  =>  'Edit User Group',
            "page_header_title" =>  'Edit User Group : '.$project_title

        );


        ////////////

        //Order Shipping TEMPLATE LISTING
        $page_header_array['order_shipping_templates'] = array(
            
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Order Shipping Templates List','is_active'=>TRUE),
            ),
            "page_title"  =>  'Order Shipping Templates List',
            "page_header_title" =>  'Order Shipping Templates List : '.$project_title

        );
         //Order Shipping TERMS LISTING
        $page_header_array['order_shipping_terms'] = array(
                    
                    "breadcrumbs" =>  array(
                        array('title'=>'Home','url'=>base_url()),
                        array('title'=>'Order Shipping Terms List','is_active'=>TRUE),
                    ),
                    "page_title"  =>  'Order Shipping Terms List',
                    "page_header_title" =>  'Order Shipping Terms List : '.$project_title

                );

        //Order Shipping TEMPLATE ADD
        $page_header_array['order_shipping_templates_add'] = array(
            
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Order Shipping Templates List','url'=>base_url().'order_shipping_templates'),
                array('title'=>'Add Order Shipping Templates','is_active'=>TRUE),
            ),
            "page_title"  =>  'Add Order Shipping Templates',
            "page_header_title" =>  'Add Order Shipping Templates : '.$project_title

        );

        //Order Shipping TEMPLATE EDIT
        $page_header_array['order_shipping_templates_edit'] = array(
            
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Order Shipping Templates List','url'=>base_url().'order_shipping_templates'),
                array('title'=>'Edit Order Shipping Templates','is_active'=>TRUE),
            ),
            "page_title"  =>  'Edit Order Shipping Templates',
            "page_header_title" =>  'Edit Order Shipping Templates : '.$project_title

        );

        //EBAY TEMPLATE LISTING
        $page_header_array['ebay_templates'] = array(
            
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Ebay Templates List','is_active'=>TRUE),
            ),
            "page_title"  =>  'Ebay Templates List',
            "page_header_title" =>  'Ebay Templates List : '.$project_title

        );

        //EBAY TEMPLATE ADD
        $page_header_array['ebay_templates_add'] = array(
            
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Ebay Templates List','url'=>base_url().'ebay_templates'),
                array('title'=>'Add Ebay Templates','is_active'=>TRUE),
            ),
            "page_title"  =>  'Add Ebay Templates',
            "page_header_title" =>  'Add Ebay Templates : '.$project_title

        );

        

        //EBAY TEMPLATE EDIT
        $page_header_array['ebay_templates_edit'] = array(
            
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Ebay Templates List','url'=>base_url().'ebay_templates'),
                array('title'=>'Edit Ebay Templates','is_active'=>TRUE),
            ),
            "page_title"  =>  'Edit Ebay Templates',
            "page_header_title" =>  'Edit Ebay Templates : '.$project_title

        );

        
            
        ////////////

        //QUICK LAUNCH LISTING
        $page_header_array['quick_launch'] = array(
            
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Inventory', 'url'=>base_url().'inventory/inventory_master'),
                array('title'=>'Quick Launch','is_active'=>TRUE),
            ),
            "page_title"  =>  'Quick Launch',
            "page_header_title" =>  'Quick Launch : '.$project_title

        );

        ////////////

        //BARCODE IMPORT LISTING
        $page_header_array['barcode_import'] = array(
            
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Inventory', 'url'=>base_url().'inventory/inventory_master'),
                array('title'=>'Barcode Sheet List','is_active'=>TRUE),
            ),
            "page_title"  =>  'Import Barcode',
            "page_header_title" =>  'Barcode Sheet List : '.$project_title

        );

        ////////////

        //MARKETPLACE PULL
        $page_header_array['marketplace_pull'] = array(
            
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Inventory', 'url'=>base_url().'inventory/inventory_master'),
                array('title'=>'Marketplace Pull','is_active'=>TRUE),
            ),
            "page_title"  =>  'Marketplace Pull',
            "page_header_title" =>  'Marketplace Pull : '.$project_title

        );

        ////////////
                
        //AMAZON PRODUCT SHADOW
        $page_header_array['add_amazon_product_shadow'] = array(
            
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Amazon Listing Manager', 'url'=>base_url().'inventory/inventory_master'),
                array('title'=>'Create Shadow','is_active'=>TRUE),
            ),
            "page_title"  =>  'Create Shadow',
            "page_header_title" =>  'Create Shadow : '.$project_title

        );

        ////////////

        //EBAY RESTRICTED KEYWORDS
        $page_header_array['ebay_restricted_keyword'] = array(
            
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Ebay Restricted Keywords','is_active'=>TRUE),
            ),
            "page_title"  =>  'Ebay Restricted Keywords',
            "page_header_title" =>  'Ebay Restricted Keywords : '.$project_title

        );

        //WALMART RESTRICTED KEYWORDS
        $page_header_array['walmart_restricted_keyword'] = array(
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Walmart Restricted Keywords','is_active'=>TRUE),
            ),
            "page_title"  =>  'Walmart Restricted Keywords',
            "page_header_title" =>  'Walmart Restricted Keywords : '.$project_title
        );

        //AMAZON RESTRICTED KEYWORDS
        $page_header_array['amazon_restricted_keyword'] = array(
            
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Amazon Restricted Keywords','is_active'=>TRUE),
            ),
            "page_title"  =>  'Amazon Restricted Keywords',
            "page_header_title" =>  'Amazon Restricted Keywords : '.$project_title

        );

        //AMAZON RESTRICTED PRODUCT
        $page_header_array['amazon_restricted_products'] = array(
            
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Amazon Restricted Products','is_active'=>TRUE),
            ),
            "page_title"  =>  'Amazon Restricted Products',
            "page_header_title" =>  'Amazon Restricted Products : '.$project_title

        );

        //AMAZON FBA SHIPMENT CREATE
        $page_header_array['create_fba_shipment'] = array(
            
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'FBA Pick List', 'url'=>base_url().'fba/fba_pick_list'),
                array('title'=>'Create FBA Pick List','is_active'=>TRUE),
            ),
            "page_title"  =>  'Create FBA Pick List',
            "page_header_title" =>  'Create FBA Pick List : '.$project_title

        );

        //AMAZON FBA SHIPMENT CREATE
        $page_header_array['fba_pick_list_items'] = array(
            
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'FBA Pick List Items', 'url'=>base_url().'fba/fba_pick_list'),
                array('title'=>'FBA Pick List Items','is_active'=>TRUE),
            ),
            "page_title"  =>  'FBA Pick List Items',
            "page_header_title" =>  'FBA Pick List Items : '.$project_title

        );

        //FBA Packing Product List
        $page_header_array['packing_list_items'] = array(
            
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'FBA Packaging', 'url'=>base_url().'fba/packing_list/pack_items'),
                array('title'=>'Packing Product List','is_active'=>TRUE),
            ),
            "page_title"  =>  'Packing Product List',
            "page_header_title" =>  'Packing Product List : '.$project_title

        );

        //FBA Packing Product List
        $page_header_array['packing_product_log'] = array(
            
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'FBA Packaging', 'url'=>base_url().'fba/packing_list/pack_items'),
                array('title'=>'Product Packing Log','is_active'=>TRUE),
            ),
            "page_title"  =>  'Product Packing Log',
            "page_header_title" =>  'Product Packing Log : '.$project_title

        );

        //FBA Packing Product List
        $page_header_array['packing_screen'] = array(
            
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'FBA Packaging', 'is_active'=>TRUE),
                array('title'=>'Pack Product','is_active'=>TRUE),
            ),
            "page_title"  =>  'Pack Product',
            "page_header_title" =>  'Pack Product : '.$project_title

        );

        $page_header_array['fba_prep_material'] = array(
            
            "breadcrumbs"    =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'FBA Packaging','is_active'=> TRUE),
                array('title'=>'FBA Prep Material','is_active'=> TRUE),
            ),
            "page_title"        =>  'FBA Prep Material',
            "page_header_title" =>  'FBA Prep Material : '.$project_title

        );

        //AMAZON FBA ARCHIVE PRODUCT LIST
        $page_header_array['fba_archive_products'] = array(
            
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'FBA Archive Product List','is_active'=>TRUE),
            ),
            "page_title"  =>  'FBA Archive Product List',
            "page_header_title" =>  'FBA Archive Product List : '.$project_title

        );


        //AMAZON FBA SHIPMENT PENDING LIST
        $page_header_array['pending_fba_shipment_list'] = array(
            
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'FBA Shipment', 'url'=>base_url().'fba/fba_manager'),
                array('title'=>'Pending FBA Shipment List','is_active'=>TRUE),
            ),
            "page_title"  =>  'Pending FBA Shipment List',
            "page_header_title" =>  'Pending FBA Shipment List : '.$project_title

        );

        //AMAZON FBA SHIPMENT WORKING LIST
        $page_header_array['working_fba_shipment_list'] = array(
            
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'FBA Shipment', 'url'=>base_url().'fba/fba_manager'),
                array('title'=>'Working FBA Shipment List','is_active'=>TRUE),
            ),
            "page_title"  =>  'Working FBA Shipment List',
            "page_header_title" =>  'Working FBA Shipment List : '.$project_title

        );

        //AMAZON FBA SHIPMENT WORKING LIST
        $page_header_array['working_fba_shipment_plan_list'] = array(
            
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'FBA Shipment', 'url'=>base_url().'fba/fba_manager'),
                array('title'=>'FBA Shipment Plan List','is_active'=>TRUE),
            ),
            "page_title"  =>  'FBA Shipment Plan List',
            "page_header_title" =>  'FBA Shipment Plan List : '.$project_title

        );

        //AMAZON FBA COMPLETE SHIPMENT LIST
        $page_header_array['complete_fba_shipment_list'] = array(
            
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'FBA Shipment', 'url'=>base_url().'fba/fba_manager'),
                array('title'=>'Complete FBA Shipment List','is_active'=>TRUE),
            ),
            "page_title"  =>  'Complete FBA Shipment List',
            "page_header_title" =>  'Complete FBA Shipment List : '.$project_title

        );

        //AMAZON FBA shipments with issues list
        $page_header_array['shipments_with_issues_list'] = array(
            
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'FBA Shipment', 'url'=>base_url().'fba/fba_manager'),
                array('title'=>'FBA Shipments With Issues List','is_active'=>TRUE),
            ),
            "page_title"  =>  'FBA Shipments With Issues List',
            "page_header_title" =>  'FBA Shipments With Issues List : '.$project_title

        );

        //AMAZON FBA SHIPMENT ERROR LIST
        $page_header_array['shipments_error_log'] = array(
            
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'FBA Shipment', 'url'=>base_url().'fba/fba_manager'),
                array('title'=>'Shipment Error Log','is_active'=>TRUE),
            ),
            "page_title"  =>  'Shipment Error Log',
            "page_header_title" =>  'Shipment Error Log : '.$project_title

        );

        //EDIT AMAZON FBA SHIPMENT
        $page_header_array['edit_fba_shipment'] = array(
            
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Working FBA Shipment List', 'url'=>base_url().'fba/fba_manager/working_shipments'),
                array('title'=>'Edit FBA Shipment','is_active'=>TRUE),
            ),
            "page_title"  =>  'Edit FBA Shipment',
            "page_header_title" =>  'Edit FBA Shipment : '.$project_title

        );

        //EDIT AMAZON FBA SHIPMENT
        $page_header_array['edit_fba_shipment_plan'] = array(
            
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'FBA Shipment Plan List', 'url'=>base_url().'fba/fba_manager/shipment_plan'),
                array('title'=>'Edit FBA Shipment Plan','is_active'=>TRUE),
            ),
            "page_title"  =>  'Edit FBA Shipment Plan',
            "page_header_title" =>  'Edit FBA Shipment Plan : '.$project_title

        );

        //FBA PICKLIST 
        $page_header_array['fba_pick_list'] = array(
            
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'FBA Manager', 'url'=>base_url().'fba/fba_manager'),
                array('title'=>'FBA Pick List','is_active'=>TRUE),
            ),
            "page_title"  =>  'FBA Pick List',
            "page_header_title" =>  'FBA Pick List : '.$project_title

        );
        

         //FBA PICKLIST 
        $page_header_array['fba_pick_items'] = array(
            
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'FBA Pick List', 'url'=>base_url().'fba/fba_pick_list'),
                array('title'=>'FBA Pick Items','is_active'=>TRUE),
            ),
            "page_title"  =>  'FBA Pick Items',
            "page_header_title" =>  'FBA Pick Items : '.$project_title

        );
        

        $page_header_array['fba_shipment_items'] = array(
            
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'FBA Pick List', 'url'=>base_url().'fba/fba_pick_list'),
                array('title'=>'FBA Shipment Items','is_active'=>TRUE),
            ),
            "page_title"  =>  'FBA Shipment Items',
            "page_header_title" =>  'FBA Shipment Items : '.$project_title

        );

        $page_header_array['fba_sales_hike_report'] = array(
            
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'FBA Sales Hike Report','is_active'=>TRUE),
            ),
            "page_title"  =>  'FBA Sales Hike Report',
            "page_header_title" =>  'FBA Sales Hike Report : '.$project_title

        );

        $page_header_array['fba_top_selling_product_report'] = array(
            
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'FBA Top Selling Products','is_active'=>TRUE),
            ),
            "page_title"  =>  'FBA Top Selling Products',
            "page_header_title" =>  'FBA Top Selling Products : '.$project_title

        );

        $page_header_array['missing_crucial_fields_report'] = array(
            
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Missing Crucial Data Fields Report','is_active'=>TRUE),
            ),
            "page_title"  =>  'Missing Crucial Data Fields Report',
            "page_header_title" =>  'Missing Crucial Data Fields Report : '.$project_title

        );

        $page_header_array['product_crucial_field_update'] = array(
            
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Product Crucial Field Update','is_active'=>TRUE),
            ),
            "page_title"  =>  'Product Crucial Field Update',
            "page_header_title" =>  'Product Crucial Field Update : '.$project_title

        );

        $page_header_array['crucial_issue_products'] = array(
            
            "breadcrumbs"    =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Issue Product list','is_active'=> TRUE),
            ),
            "page_title"        =>  'Issue Product list',
            "page_header_title" =>  'Issue Product list : '.$project_title

        );

        $page_header_array['order_not_received_in_po_report'] = array(
            
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Order Report','is_active'=>TRUE),
                array('title'=>'PO Order Re-Assignment Report','is_active'=>TRUE),

            ),
            "page_title"  =>  'PO Order Re-Assignment Report',
            "page_header_title" =>  'PO Order Re-Assignment Report : '.$project_title

        );

        ////////////

        // PRODUCT GROUPS
        $page_header_array['product_groups'] = array(
            
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Product Groups','is_active'=>TRUE),
            ),
            "page_title"  =>  'Product Groups',
            "page_header_title" =>  'Product Groups : '.$project_title

        );
        // BRANDS
        $page_header_array['brand'] = array(
            
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Brand','is_active'=>TRUE),
            ),
            "page_title"  =>  'Brand List',
            "page_header_title" =>  'Brand List : '.$project_title

        );
        
        // Manufacturer
        $page_header_array['manufacturer'] = array(
            
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Manufacturer','is_active'=>TRUE),
            ),
            "page_title"  =>  'Manufacturer List',
            "page_header_title" =>  'Manufacturer List : '.$project_title

        );
        // FBA PREP INFO
        $page_header_array['fba_prep_info'] = array(
            
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'FBA Prep List','is_active'=>TRUE),
            ),
            "page_title"  =>  'FBA Prep List',
            "page_header_title" =>  'FBA Prep List : '.$project_title

        );
        // RMA ORDERS
        $page_header_array['rma_order_list'] = array(
            
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'RMA Orders','is_active'=>TRUE),
            ),
            "page_title"  =>  'RMA Orders List',
            "page_header_title" =>  'RMA Orders List : '.$project_title

        );
        
        // ISSUE ORDERS LIST
        
        $page_header_array['issue_shipping_info'] = array(
            
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Marketplace Notification','is_active'=>TRUE),
                array('title'=>'Shipping Issues','is_active'=>TRUE),
            ),
            "page_title"  =>  'Shipping Issues',
            "page_header_title" =>  'Shipping Issues : '.$project_title

        );
        
        $page_header_array['issue_fba_quantity'] = array(
            
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Marketplace Notification','is_active'=>TRUE),
                array('title'=>'FBA Quantity Issues','is_active'=>TRUE),
            ),
            "page_title"  =>  'FBA Quantity Issues',
            "page_header_title" =>  'FBA Quantity Issues : '.$project_title

        );
        
        $page_header_array['issue_order_list'] = array(
            
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'System Notification','is_active'=>TRUE),
                array('title'=>'Orders Issues','is_active'=>TRUE),
            ),
            "page_title"  =>  'Orders Issues',
            "page_header_title" =>  'Orders Issues : '.$project_title

        );
        
        $page_header_array['issue_pick_list'] = array(
            
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'System Notification','is_active'=>TRUE),
                array('title'=>'Pick List Issues','is_active'=>TRUE),
            ),
            "page_title"  =>  'Pick List Issues',
            "page_header_title" =>  'Pick List Issues : '.$project_title

        );

        // ISSUE SHIP ORDERS LIST
        $page_header_array['issue_ship_order_list'] = array(
            
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'System Notification','is_active'=>TRUE),
                array('title'=>'Shipping Issues','is_active'=>TRUE),
            ),
            "page_title"  =>  'Shipping Issues',
            "page_header_title" =>  'Shipping Issues : '.$project_title

        );
        
        $page_header_array['issue_scan_and_ship'] = array(
            
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'System Notification','is_active'=>TRUE),
                array('title'=>'Scan and Ship Issues','is_active'=>TRUE),
            ),
            "page_title"  =>  'Scan and Ship Issues',
            "page_header_title" =>  'Scan and Ship Issues : '.$project_title
        );
        
        $page_header_array['issue_fba_pick_list'] = array(
            
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'System Notification','is_active'=>TRUE),
                array('title'=>'FBA Pick List Issues','is_active'=>TRUE),
            ),
            "page_title"  =>  'FBA Pick List Issues',
            "page_header_title" =>  'FBA Pick List Issues : '.$project_title
        );
        
        $page_header_array['issue_receiving_list'] = array(
            
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'System Notification','is_active'=>TRUE),
                array('title'=>'Receiving Issues','is_active'=>TRUE),
            ),
            "page_title"  =>  'Receiving Issues',
            "page_header_title" =>  'Receiving Issues : '.$project_title
        );
        
        $page_header_array['issue_customer_service_list'] = array(
            
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'System Notification','is_active'=>TRUE),
                array('title'=>'Customer Service Issues','is_active'=>TRUE),
            ),
            "page_title"  =>  'Customer Service Issues',
            "page_header_title" =>  'Customer Service Issues : '.$project_title
        );

          $page_header_array['issue_purchasing_list'] = array(
            
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'System Notification','is_active'=>TRUE),
                array('title'=>'Purchasing Department','is_active'=>TRUE),
            ),
            "page_title"  =>  'Purchasing Department',
            "page_header_title" =>  'Purchasing Department : '.$project_title
        );
        
        //custom_coloums
        $page_header_array['custom_column'] = array(
            
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Custom column','is_active'=>TRUE),
            ),
            "page_title"  =>  'Custom column List',
            "page_header_title" =>  'Custom column List : '.$project_title

        );
         $page_header_array['edit_custom_column'] = array(

            'breadcrumbs' =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Custom column','url'=>base_url().'custom_colums'),
                array('title'=>'Edit','is_active'=>TRUE)
            ),
            'page_title'  =>  'Edit Custom column',
            'page_header_title' =>  'Edit Custom column : '.$project_title
        );

         $page_header_array['add_custom_column'] = array(

            'breadcrumbs' =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Custom column','url'=>base_url().'custom_colums'),
                array('title'=>'Add','is_active'=>TRUE)
            ),
            'page_title'  =>  'Add Custom column',
            'page_header_title' =>  'Add Custom column : '.$project_title
        );
        // SYSTEM SCHEDULER
        $page_header_array['system_scheduler'] = array(
            
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'System Scheduler','is_active'=>TRUE),
            ),
            "page_title"  =>  'System Scheduler',
            "page_header_title" =>  'System Scheduler : '.$project_title

        );


        // MARKETPLACE LIST
        $page_header_array['marketplace_list'] = array(
            
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Marketplace List','is_active'=>TRUE),
            ),
            "page_title"  =>  'Marketplace List',
            "page_header_title" =>  'Marketplace List : '.$project_title

        );

        ////////////

        //PRODUCT VARIATION THEME LISTING
        $page_header_array['product_variation_theme'] = array(
            
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Product Variation Theme List','is_active'=>TRUE),
            ),
            "page_title"  =>  'Product Variation Theme List',
            "page_header_title" =>  'Product Variation Theme List : '.$project_title

        );

        //ORDER SHIPMENT LISTING
        $page_header_array['order_shipment'] = array(
            
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Order','url'=>base_url().'order'),
                array('title'=>'Order Shipment List','is_active'=>TRUE),
            ),
            "page_title"  =>  'Order Shipment List',
            "page_header_title" =>  'Order Shipment List : '.$project_title

        );

        //ORDER REASON LISTING
        $page_header_array['order_return_reason'] = array(
            
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Order Return Reason','is_active'=>TRUE),
            ),
            "page_title"  =>  'Order Return Reason',
            "page_header_title" =>  'Order Return Reason : '.$project_title

        );

        //QUANTITY CHANGE REASON LISTING
        $page_header_array['quantity_change_reason'] = array(
            
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Quantity Change Reason','is_active'=>TRUE),
            ),
            "page_title"  =>  'Quantity Change Reason',
            "page_header_title" =>  'Quantity Change Reason : '.$project_title

        );

         //Product disable CHANGE REASON LISTING
        $page_header_array['product_disable_reason'] = array(
            
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Product Disable Reason','is_active'=>TRUE),
            ),
            "page_title"  =>  'Product Disable Reason',
            "page_header_title" =>  'Product Disable Reason : '.$project_title

        );

        //Feedback REASON LISTING
        $page_header_array['feedback_reason'] = array(
            
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Order Feedback Reason','is_active'=>TRUE),
            ),
            "page_title"  =>  'Order Feedback Reason',
            "page_header_title" =>  'Order Feedback Reason : '.$project_title

        );

        $page_header_array['order_inquiry'] = array(
            
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Order Inquiry List','is_active'=>TRUE),
            ),
            "page_title"  =>  'Order Inquiry List',
            "page_header_title" =>  'Order Inquiry List : '.$project_title

        );

        $page_header_array['product_level_shipping_notes'] = array(
            
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Product Level Shipping Notes','is_active'=>TRUE),
            ),
            "page_title"  =>  'Product Level Shipping Notes',
            "page_header_title" =>  'Product Level Shipping Notes : '.$project_title

        );

        //FBA ISSUE LISTING
        $page_header_array['fba_issue_list'] = array(
            
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'FBA Issue List','is_active'=>TRUE),
            ),
            "page_title"  =>  'FBA Issue List',
            "page_header_title" =>  'FBA Issue List : '.$project_title

        );

        //ORDER CANCEL LISTING
        $page_header_array['order_cancel'] = array(
            
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Order','url'=>base_url().'order'),
                array('title'=>'Order Cancel List','is_active'=>TRUE),
            ),
            "page_title"  =>  'Order Cancel List',
            "page_header_title" =>  'Order Cancel List : '.$project_title

        );

        //ORDER REFUND LISTING
        $page_header_array['order_refund'] = array(
            
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Order','url'=>base_url().'order'),
                array('title'=>'Order Refund List','is_active'=>TRUE),
            ),
            "page_title"  =>  'Order Refund List',
            "page_header_title" =>  'Order Refund List : '.$project_title

        );

        //SHIPPING PACKAGES LIST
        $page_header_array['shipping_packages'] = array(
            
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Shipping Packages List','is_active'=>TRUE),
            ),
            "page_title"  =>  'Shipping Packages List',
            "page_header_title" =>  'Shipping Packages List : '.$project_title

        );
        //SHIPPING STATION LIST
        $page_header_array['shipping_station'] = array(
            
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Shipping Station List','is_active'=>TRUE),
            ),
            "page_title"  =>  'Shipping Station List',
            "page_header_title" =>  'Shipping Station List : '.$project_title

        );
        //ORDER NOTE TYPE LIST
        $page_header_array['order_note_type'] = array(
            
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Order Note Type List','is_active'=>TRUE),
            ),
            "page_title"  =>  'Order Note Type List',
            "page_header_title" =>  'Order Note Type List : '.$project_title

        );
        //SHIPPING SERVICES LIST
        $page_header_array['shipping_services'] = array(
            
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Shipping Services List','is_active'=>TRUE),
            ),
            "page_title"  =>  'Shipping Services List',
            "page_header_title" =>  'Shipping Services List : '.$project_title

        );

        //AMAZON SETTLEMENT LIST
        $page_header_array['amazon_settlement_list'] = array(
            
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Settlment List','is_active'=>TRUE),
            ),
            "page_title"  =>  'Amazon Settlement List',
            "page_header_title" =>  'Amazon Settlement List : '.$project_title

        );
        
        $page_header_array['amazon_settlement_order_list'] = array(
            
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Amazon Order Settlment List','is_active'=>TRUE),
            ),
            "page_title"  =>  'Amazon Order Settlement List',
            "page_header_title" =>  'Amazon Order Settlement List : '.$project_title

        );

        //Marketplace Inventory Report
        $page_header_array['marketplace_inventory_report'] = array(
            
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Marketplace Inventory Report','is_active'=>TRUE),
            ),
            "page_title"  =>  'Marketplace Inventory Report',
            "page_header_title" =>  'Marketplace Inventory Report : '.$project_title

        );

        //Shipped Orders Report
        $page_header_array['shipped_orders_report'] = array(
            
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Shipped Orders Report','is_active'=>TRUE),
            ),
            "page_title"  =>  'Shipped Orders Report',
            "page_header_title" =>  'Shipped Orders Report : '.$project_title

        );
        //Deliver Orders Report
        $page_header_array['deliver_orders_report'] = array(
            
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Late Delivered Orders','is_active'=>TRUE),
            ),
            "page_title"  =>  'Late Delivered Orders',
            "page_header_title" =>  'Late Delivered Orders : '.$project_title

        );
         //Deliver Orders Report
        $page_header_array['osm_surcharge'] = array(
            
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'OSM Surcharge','is_active'=>TRUE),
            ),
            "page_title"  =>  'OSM Surcharge',
            "page_header_title" =>  'OSM Surcharge : '.$project_title

        );
        
        //PO Report
        $page_header_array['purchase_orders_report'] = array(
            
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Purchase Order Report','is_active'=>TRUE),
            ),
            "page_title"  =>  'Purchase Order Report',
            "page_header_title" =>  'Purchase Order Report : '.$project_title

        );

        //PO Report
        $page_header_array['po_audit_report'] = array(
            
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Purchase Order Audit Report','is_active'=>TRUE),
            ),
            "page_title"  =>  'Purchase Order Audit Report',
            "page_header_title" =>  'Purchase Order Audit Report : '.$project_title

        );

        //ORDER REPLACE AND RETURN

        $page_header_array['order_replace'] =array(
            'breadcrumbs' =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Order List','url'=>base_url().'order'),
                array('title'=>'Replace Order','is_active'=>TRUE)
                ),
            'page_title'  =>  'Replace Order',
            'page_header_title' =>  "Replace Order"." : TNT"
            );

        ///// Import
        $page_header_array['import_order_shipping_cost'] = array(
            
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Import Order Shipping Cost','is_active'=>TRUE),
            ),
            "page_title"  =>  'Import Order Shipping Cost',
            "page_header_title" =>  'Import Order Shipping Cost : '.$project_title

        );

        $page_header_array['import_order_payment_detail'] = array(
            
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Import Order Payment Details','is_active'=>TRUE),
            ),
            "page_title"  =>  'Import Order Payment Details',
            "page_header_title" =>  'Import Order Payment Details : '.$project_title

        );
        $page_header_array['import_donation_order'] = array(
            
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Import Donation Orders','is_active'=>TRUE),
            ),
            "page_title"  =>  'Import Donation Order',
            "page_header_title" =>  'Import Donation Orders : '.$project_title

        );

        $page_header_array['import_order_note_detail'] = array(
            
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Import Order Note Details','is_active'=>TRUE),
            ),
            "page_title"  =>  'Import Order Note Details',
            "page_header_title" =>  'Import Order Note Details : '.$project_title

        );

        $page_header_array['import_order_charges_detail'] = array(
            
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Import Order Charges Details','is_active'=>TRUE),
            ),
            "page_title"  =>  'Import Order Charges Details',
            "page_header_title" =>  'Import Order Charges Details : '.$project_title

        );

        $page_header_array['import_order_payment_detail'] = array(
            
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Import Order Payment Details','is_active'=>TRUE),
            ),
            "page_title"  =>  'Import Order Payment Details',
            "page_header_title" =>  'Import Order Payment Details : '.$project_title

        );

        $page_header_array['import_product_upc'] = array(
            
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Import Product UPC Detail','is_active'=>TRUE),
            ),
            "page_title"  =>  'Import Product UPC Detail',
            "page_header_title" =>  'Import Product UPC Detail : '.$project_title

        );

        $page_header_array['product_upc_detail'] = array(
            
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Product UPC Detail','is_active'=>TRUE),
            ),
            "page_title"  =>  'Product UPC Detail',
            "page_header_title" =>  'Product UPC Detail : '.$project_title

        );

        $page_header_array['import_shipping_packages_detail'] = array(
            
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Import Shipping Packages Details','is_active'=>TRUE),
            ),
            "page_title"  =>  'Import Shipping Packages Details',
            "page_header_title" =>  'Import Shipping Packages Details : '.$project_title

        );

        ////////////// Jet Product Listing Manager
        $page_header_array['jet_listed_product_manager'] = array(
            
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Jet Listing Manager','is_active'=>TRUE),
            ),
            "page_title"  =>  'Jet Listing Manager',
            "page_header_title" =>  'Jet Listing Manager : '.$project_title

        );


        $page_header_array['jet_listed_product_manager_edit'] = array(
            
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Jet Listing Manager','url'=>base_url().'listing_manager/jet/listed/',"last_link"=>true),
                array('title'=>'Edit','is_active'=>TRUE),
            ),
            "page_title"  =>  'Edit Product',
            "page_header_title" =>  'Edit : '.$project_title

        );

        $page_header_array['jet_list_product_manager_edit'] = array(
            
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Jet Listing Manager','url'=>base_url().'listing_manager/jet/lists/',"last_link"=>true),
                array('title'=>'Edit','is_active'=>TRUE),
            ),
            "page_title"  =>  'Edit Product',
            "page_header_title" =>  'Edit : '.$project_title

        );

        $page_header_array['import_inventory'] = array(
            
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Import Inventory','is_active'=>TRUE),
            ),
            "page_title"  =>  'Import Inventory',
            "page_header_title" =>  'Import Inventory : '.$project_title

        );

        $page_header_array['create_bulk_product'] = array(
            
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Create Bulk Product','is_active'=>TRUE),
            ),
            "page_title"  =>  'Create Bulk Product',
            "page_header_title" =>  'Create Bulk Product : '.$project_title

        );

        $page_header_array['bulk_module'] = array(
            
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Import Inventory Module','is_active'=>TRUE),
            ),
            "page_title"  =>  'Import Inventory Module',
            "page_header_title" =>  'Import Inventory Module : '.$project_title

        );


        

        $page_header_array['bulk_update_log'] = array(
            
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Bulk Update Log','is_active'=>TRUE),
            ),
            "page_title"  =>  'Bulk Update Log',
            "page_header_title" =>  'Bulk Update Log : '.$project_title

        );

        $page_header_array['bulk_update_log_detail'] = array(
            
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Bulk Update Log','url'=>base_url()."import/inventory/bulk_update_log"),
                array('title'=>'Bulk Log Detail','is_active'=>TRUE),
            ),
            "page_title"  =>  'Bulk Update Log Detail',
            "page_header_title" =>  'Bulk Update Log Detail: '.$project_title

        );


        $page_header_array['import_order_tracking_number'] = array(
            
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Import Order Tracking Number','is_active'=>TRUE),
            ),
            "page_title"  =>  'Import Order Tracking Number',
            "page_header_title" =>  'Import Order Tracking Number: '.$project_title

        );

        $page_header_array['import_po_item_cost'] = array(
            
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Import PO Item Cost','is_active'=>TRUE),
            ),
            "page_title"  =>  'Import PO Item Cost',
            "page_header_title" =>  'Import PO Item Cost: '.$project_title

        );


        $page_header_array['task_schedular_log'] = array(

            'breadcrumbs' =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Task Scheduler Log','is_active'=>TRUE)
            ),
            'page_title'  =>  'Task Scheduler Log',
            'page_header_title' =>  'Task Scheduler Log : '.$project_title
        );

        $page_header_array['cycle_count_report'] = array(
            'breadcrumbs' =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Cycle Count Report','is_active'=>TRUE)
            ),
            'page_title'  =>  'Cycle Count Report',
            'page_header_title' =>  'Cycle Count Report : '.$project_title
        );

        $page_header_array['cycle_count_missing_product'] = array(
            'breadcrumbs' =>  array(
                array('title'=>'Home','url'=>base_url()),
                 array('title'=>'Cycle Count List','url'=>base_url().'cycle_count_list/cycle_count_list'),
                array('title'=>'Cycle Count Missing Products','is_active'=>TRUE)
            ),
            'page_title'  =>  'Cycle Count Missing Products',
            'page_header_title' =>  'Cycle Count Missing Products : '.$project_title
        );

        $page_header_array['inventory_variance_report'] = array(
            'breadcrumbs' =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Inventory Variance Report','is_active'=>TRUE)
            ),
            'page_title'  =>  'Inventory Variance Report',
            'page_header_title' =>  'Inventory Variance Report : '.$project_title
        );

        $page_header_array['cycle_count'] = array(

            'breadcrumbs' =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Inventory','url'=>base_url().'inventory/inventory_master'),
                array('title'=>'Cycle Count Items','is_active'=>TRUE)
            ),
            'page_title'  =>  'Cycle Count Items',
            'page_header_title' =>  'Cycle Count Items : '.$project_title
        );

        $page_header_array['manual_cycle_count'] = array(

            'breadcrumbs' =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Cycle Count','url'=>base_url().'cycle_count/'),
                array('title'=>'Manual Cycle Count','is_active'=>TRUE),
            ),
            'page_title'  =>  'Manual Cycle Count',
            'page_header_title' =>  'Manual Cycle Count : '.$project_title
        );

        $page_header_array['cycle_count_master'] = array(

            'breadcrumbs' =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Cycle Count','url'=>base_url().'cycle_count/'),
                array('title'=>'Manual Cycle Count Master','is_active'=>TRUE),
            ),
            'page_title'  =>  'Manual Cycle Count Master',
            'page_header_title' =>  'Manual Cycle Count Master : '.$project_title
        );

        $page_header_array['product_location_transfer'] = array(

            'breadcrumbs' =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Product Location Transfer','url'=>base_url().'product_location_transfer/'),
                array('title'=>'Product Location Transfer','is_active'=>TRUE),
            ),
            'page_title'  =>  'Product Location Transfer',
            'page_header_title' =>  'Product Location Transfer : '.$project_title
        );

        $page_header_array['cycle_count_scheduler'] = array(

            'breadcrumbs' =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Cycle Count','url'=>base_url().'cycle_count_list/cycle_count_scheduler'),
                array('title'=>'Cycle Count Scheduler','is_active'=>TRUE),
            ),
            'page_title'  =>  'Cycle Count Scheduler',
            'page_header_title' =>  'Cycle Count Scheduler : '.$project_title
        );

        $page_header_array['cycle_count_list'] = array(

            'breadcrumbs' =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Cycle Count','url'=>base_url().'cycle_count_list/cycle_count_list'),
                array('title'=>'Cycle Count List','is_active'=>TRUE),
            ),
            'page_title'  =>  'Cycle Count List',
            'page_header_title' =>  'Cycle Count List : '.$project_title
        );

        $page_header_array['cycle_count_list_item'] = array(

            'breadcrumbs' =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Cycle Count List','url'=>base_url().'cycle_count_list/cycle_count_list'),
                array('title'=>'Product List','is_active'=>TRUE),
            ),
            'page_title'  =>  'Product List',
            'page_header_title' =>  'Product List : '.$project_title
        );

        $page_header_array['start_verifing'] = array(

            'breadcrumbs' =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Cycle Count List','url'=>base_url().'cycle_count_list/cycle_count_list'),
                array('title'=>'Verify Item','is_active'=>TRUE),
            ),
            'page_title'  =>  'Verify Item',
            'page_header_title' =>  'Verify Item : '.$project_title
        );

        $page_header_array['update_crucial_item'] = array(

            'breadcrumbs' =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Crucial Field List','url'=>base_url().'crucial_field_list/crucial_field_list'),
                array('title'=>'Update Crucial Field','is_active'=>TRUE),
            ),
            'page_title'  =>  'Update Crucial Field',
            'page_header_title' =>  'Update Crucial Field : '.$project_title
        );


        $page_header_array['report_inventory_master_listing_not_posted'] = array(

            'breadcrumbs' =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Not Posted In Marketplace','is_active'=>TRUE)
            ),
            'page_title'  =>  'Not Posted In Marketplace',
            'page_header_title' =>  'Not Posted In Marketplace: '.$project_title
        );

        $page_header_array['ebay_duplicate_product_id'] = array(

            'breadcrumbs' =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Ebay Proudct With Duplicate Product ID','is_active'=>TRUE)
            ),
            'page_title'  =>  'Ebay Proudct With Duplicate Product ID',
            'page_header_title' =>  'Ebay Proudct With Duplicate Product ID: '.$project_title
        );

        $page_header_array['ebay_item_specification'] = array(

            'breadcrumbs' =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Ebay Proudct Specification','is_active'=>TRUE)
            ),
            'page_title'  =>  'Ebay Proudct Specification',
            'page_header_title' =>  'Ebay Proudct Specification: '.$project_title
        );

        $page_header_array['ebay_auto_list'] = array(

            'breadcrumbs' =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Ebay Auto List','is_active'=>TRUE)
            ),
            'page_title'  =>  'Ebay Auto List',
            'page_header_title' =>  'Ebay Auto List: '.$project_title
        );

        $page_header_array['report_inventory_by_warehouse'] = array(

            'breadcrumbs' =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Inventory by warehouse report','is_active'=>TRUE)
            ),
            'page_title'  =>  'Inventory by warehouse report',
            'page_header_title' =>  'Inventory by warehouse report : '.$project_title
        );

        $page_header_array['top_selling_items'] = array(

            'breadcrumbs' =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Top Selling Item Report','is_active'=>TRUE)
            ),
            'page_title'  =>  'Top Selling Item Report',
            'page_header_title' =>  'Top Selling Item Report : '.$project_title
        );

        $page_header_array['top_selling_skus'] = array(

            'breadcrumbs' =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Top Selling SKU Report','is_active'=>TRUE)
            ),
            'page_title'  =>  'Top Selling SKU Report',
            'page_header_title' =>  'Top Selling SKU Report : '.$project_title
        );

        $page_header_array['top_selling_not_live_in_marketplace_items'] = array(

            'breadcrumbs' =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Top Selling Not Live In Marketplace Report','is_active'=>TRUE)
            ),
            'page_title'  =>  'Top Selling Not Live In Marketplace Report',
            'page_header_title' =>  'Top Selling Not Live In Marketplace Report : '.$project_title
        );

        $page_header_array['top_selling_ceiling_items'] = array(

            'breadcrumbs' =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Top Selling Ceiling Items Report','is_active'=>TRUE)
            ),
            'page_title'  =>  'Top Selling Ceiling Items Report',
            'page_header_title' =>  'Top Selling Ceiling Items Report : '.$project_title
        );

        $page_header_array['top_selling_floor_items'] = array(

            'breadcrumbs' =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Top Selling Floor Items Report','is_active'=>TRUE)
            ),
            'page_title'  =>  'Top Selling Floor Items Report',
            'page_header_title' =>  'Top Selling Floor Items Report : '.$project_title
        );

        

        $page_header_array['inventory_adjustment_report'] = array(

            'breadcrumbs' =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Inventory Adjustment Report','is_active'=>TRUE)
            ),
            'page_title'  =>  'Inventory Adjustment Report',
            'page_header_title' =>  'Inventory Adjustment Report : '.$project_title
        );

        $page_header_array['reserved_quantity_adjustment_report'] = array(

            'breadcrumbs' =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Reserved Negative Inventory List','is_active'=>TRUE)
            ),
            'page_title'  =>  'Reserved Negative Inventory List',
            'page_header_title' =>  'Reserved Negative Inventory List : '.$project_title
        );

        $page_header_array['inventory_balance_report'] = array(

            'breadcrumbs' =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Inventory Balance Report','is_active'=>TRUE)
            ),
            'page_title'  =>  'Inventory Balance Report',
            'page_header_title' =>  'Inventory Balance Report : '.$project_title
        );

        $page_header_array['product_reserved_qty_report'] = array(

            'breadcrumbs' =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Product Reserved Quantity Report','is_active'=>TRUE)
            ),
            'page_title'  =>  'Product Reserved Quantity Report',
            'page_header_title' =>  'Product Reserved Quantity Report : '.$project_title
        );

        $page_header_array['pick_list_scheduler'] = array(

            'breadcrumbs' =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Pick List','url'=>base_url().'pick/pick_list'),
                array('title'=>'Pick List Scheduler','is_active'=>TRUE)
            ),
            'page_title'  =>  'Pick List Scheduler',
            'page_header_title' =>  'Pick List Scheduler : '.$project_title
        );
        $page_header_array['pick_list_warehouse_order_scheduler'] = array(

            'breadcrumbs' =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Pick List','url'=>base_url().'pick/pick_list'),
                array('title'=>'Pick List Warehouse Order Scheduler','is_active'=>TRUE)
            ),
            'page_title'  =>  'Pick List Warehouse Order Scheduler',
            'page_header_title' =>  'Pick List Warehouse Order Scheduler : '.$project_title
        );

        $page_header_array['import_product_template'] = array(

            'breadcrumbs' =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Import Product Template Master List','url'=>base_url().'import/inventory/product_template_mapping'),
                array('title'=>'Import Product Template Master','is_active'=>TRUE)
            ),
            'page_title'  =>  'Import Product Template Master',
            'page_header_title' =>  'Import Product Template Master : '.$project_title
        );

        $page_header_array['import_product_template_list'] = array(

            'breadcrumbs' =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Import Product Template Master List','is_active'=>TRUE),
            ),
            'page_title'  =>  'Import Product Template Master List',
            'page_header_title' =>  'Import Product Template Master List : '.$project_title
        );


        $page_header_array['report_sales_tax_collected'] = array(

            'breadcrumbs' =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Sales Tax Collected Report','is_active'=>TRUE),
            ),
            'page_title'  =>  'Sales Tax Collected Report',
            'page_header_title' =>  'Sales Tax Collected Report : '.$project_title
        );

        /////////// Order Customers
        $page_header_array['order_customer'] = array(

            'breadcrumbs' =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Order Customers','is_active'=>TRUE),
            ),
            'page_title'  =>  'Order Customers',
            'page_header_title' =>  'Order Customers : '.$project_title
        );

        $page_header_array['edit_order_customer'] = array(

            'breadcrumbs' =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Order Customers', 'url' => base_url().'order_customer'),
                array('title'=>'Edit Customer','is_active'=>TRUE),
            ),
            'page_title'  =>  'Edit Order Customer',
            'page_header_title' =>  'Edit Order Customer : '.$project_title
        );

        $page_header_array['add_order_customer'] = array(

            'breadcrumbs' =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Order Customers', 'url' => base_url().'order_customer'),
                array('title'=>'Add New Customer','is_active'=>TRUE),
            ),
            'page_title'  =>  'Add New Customer',
            'page_header_title' =>  'Add New Customer : '.$project_title
        );

        ////////////// Sales Report
        $page_header_array['sales_report'] = array(

            'breadcrumbs' =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Sales Report','is_active'=>TRUE),
            ),
            'page_title'  =>  'Sales Report',
            'page_header_title' =>  'Sales Report : '.$project_title
        );

        ////////////// Sales Report Detail
        $page_header_array['sales_report_detail'] = array(

            'breadcrumbs' =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Sales Report', 'url' => base_url().'report/sales_report'),
                array('title'=>'Sales Report Details','is_active'=>TRUE),
            ),
            'page_title'  =>  'Sales Report Details',
            'page_header_title' =>  'Sales Report Details : '.$project_title
        );

        ////////////// Start Picking
        $page_header_array['start_picking'] = array(

            'breadcrumbs' =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Pick List','url'=>base_url().'pick/pick_list/'),
                array('title'=>'Start Picking','is_active'=>TRUE),
            ),
            'page_title'  =>  'Start Picking',
            'page_header_title' =>  'Start Picking : '.$project_title
        );

        ////////////// FBA Start Picking
        $page_header_array['fba_start_picking'] = array(

            'breadcrumbs' =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'FBA Pick List','url'=>base_url().'fba/fba_pick_list/'),
                array('title'=>'FBA Start Picking','is_active'=>TRUE),
            ),
            'page_title'  =>  'FBA Start Picking',
            'page_header_title' =>  'FBA Start Picking : '.$project_title
        );
        ////////////// Profit & Loss Report
        $page_header_array['profit_loss_report'] = array(

            'breadcrumbs' =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Profit & Loss Report','is_active'=>TRUE),
            ),
            'page_title'  =>  'Profit & Loss Report',
            'page_header_title' =>  'Profit & Loss Report : '.$project_title
        );

        $page_header_array['marketplace_live_listing_report'] = array(

            'breadcrumbs' =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Marketplace Live Listing Report','is_active'=>TRUE),
            ),
            'page_title'  =>  'Marketplace Live Listing Report',
            'page_header_title' =>  'Marketplace Live Listing Report : '.$project_title
        );

        $page_header_array['Pnl_orders'] = array(

            'breadcrumbs' =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Profit & Loss Report', 'url' => base_url().'report/profit_loss_report'),
                array('title' => 'Orders', 'is_active' => TRUE),
            ),
            'page_title'  =>  'Orders',
            'page_header_title' =>  'Orders : '.$project_title
        );

        $page_header_array['page_restricted'] = array(

            'breadcrumbs' =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title' => 'Page Restricted', 'is_active' => TRUE),
            ),
            'page_title'  =>  'Page Restricted',
            'page_header_title' =>  'Page Restricted : '.$project_title
        );

        $page_header_array['wrong_shipping_cost'] = array(

            'breadcrumbs' =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title' => 'Wrong Shipping Cost Report', 'is_active' => TRUE),
            ),
            'page_title'  =>  'Wrong Shipping Cost Report',
            'page_header_title' =>  'Wrong Shipping Cost Report : '.$project_title
        );

        $page_header_array['report_loss_orders'] = array(

            'breadcrumbs' =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title' => 'Loss Orders Report', 'is_active' => TRUE),
            ),
            'page_title'  =>  'Loss Orders Report',
            'page_header_title' =>  'Loss Orders Report : '.$project_title
        );

        $page_header_array['us_shipped_orders_map_report'] = array(

            'breadcrumbs' =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title' => 'US Shipped Orders Map Report', 'is_active' => TRUE),
            ),
            'page_title'  =>  'US Shipped Orders Map Report',
            'page_header_title' =>  'US Shipped Orders Map Report : '.$project_title
        );

        $page_header_array['amazon_health_rate_chart'] = array(

            'breadcrumbs' =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title' => 'Amazon Health Rate Chart', 'is_active' => TRUE),
            ),
            'page_title'  =>  'Amazon Health Rate Chart',
            'page_header_title' =>  'Amazon Health Rate Chart : '.$project_title
        );

        $page_header_array['report_low_margin'] = array(

            'breadcrumbs' =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title' => 'Low Margin Report', 'is_active' => TRUE),
            ),
            'page_title'  =>  'Low Margin Report',
            'page_header_title' =>  'Low Margin Report : '.$project_title
        );

        $page_header_array['fba_product_without_mfn_listing'] = array(

            'breadcrumbs' =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title' => 'FBA Product Without MFN Listing', 'is_active' => TRUE),
            ),
            'page_title'  =>  'FBA Product Without MFN Listing',
            'page_header_title' =>  'FBA Product Without MFN Listing : '.$project_title
        );

        $page_header_array['fba_return_report'] = array(

            'breadcrumbs' =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title' => 'FBA Return Report', 'is_active' => TRUE),
            ),
            'page_title'  =>  'FBA Return Report',
            'page_header_title' =>  'FBA Return Report : '.$project_title
        );

        $page_header_array['unshipped_orders_without_available_qty_report'] = array(

            'breadcrumbs' =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title' => 'Unshipped Orders Without Available Quantity Report', 'is_active' => TRUE),
            ),
            'page_title'  =>  'Unshipped Orders Without Available Quantity Report',
            'page_header_title' =>  'Unshipped Orders Without Available Quantity Report : '.$project_title
        );

        $page_header_array['safety_quantity_enabled_products'] = array(

            'breadcrumbs' =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title' => 'Safety Quantity Enabled Products Report', 'is_active' => TRUE),
            ),
            'page_title'  =>  'Safety Quantity Enabled Products Report',
            'page_header_title' =>  'Safety Quantity Enabled Products Report : '.$project_title
        );

        $page_header_array['report_low_profit'] = array(

            'breadcrumbs' =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title' => 'Low Profit Report', 'is_active' => TRUE),
            ),
            'page_title'  =>  'Low Profit Report',
            'page_header_title' =>  'Low Profit Report : '.$project_title
        );

        $page_header_array['loss_orders'] = array(

            'breadcrumbs' =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Loss Orders Report', 'url' => base_url().'report/loss_order_report'),
                array('title' => 'Loss Orders', 'is_active' => TRUE),
            ),
            'page_title'  =>  'Loss Orders',
            'page_header_title' =>  'Loss Orders : '.$project_title
        );

        $page_header_array['low_margin_orders'] = array(

            'breadcrumbs' =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Low Margin Report', 'url' => base_url().'report/low_margin_report'),
                array('title' => 'Low Margin Orders', 'is_active' => TRUE),
            ),
            'page_title'  =>  'Low Margin Orders',
            'page_header_title' =>  'Low Margin Orders : '.$project_title
        );

        $page_header_array['low_profit_orders'] = array(

            'breadcrumbs' =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Low Profit Report', 'url' => base_url().'report/low_profit_report'),
                array('title' => 'Low Profit Orders', 'is_active' => TRUE),
            ),
            'page_title'  =>  'Low Profit Orders',
            'page_header_title' =>  'Low Profit Orders : '.$project_title
        );

        $page_header_array['order_profit_report'] = array(

            'breadcrumbs' =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Order Profit Report', 'url' => base_url().'report/order_profit_report'),
                array('title' => 'Order Profit Report', 'is_active' => TRUE),
            ),
            'page_title'  =>  'Order Profit Report',
            'page_header_title' =>  'Order Profit Report : '.$project_title
        );

        $page_header_array['order_profit_orders'] = array(

            'breadcrumbs' =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Order Profit Report', 'url' => base_url().'report/order_profit_report'),
                array('title' => 'Orders', 'is_active' => TRUE),
            ),
            'page_title'  =>  'Orders',
            'page_header_title' =>  'Orders : '.$project_title
        );

        $page_header_array['wrong_shipping_cost_orders'] = array(

            'breadcrumbs' =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Wrong Shipping Cost Report', 'url' => base_url().'report/wrong_shipping_cost'),
                array('title' => 'Orders with Wrong Shipping Cost', 'is_active' => TRUE),
            ),
            'page_title'  =>  'Orders with Wrong Shipping Cost',
            'page_header_title' =>  'Orders with Wrong Shipping Cost : '.$project_title
        );

        $page_header_array['wrong_shipping_cost_orders_all'] = array(

            'breadcrumbs' =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Wrong Shipping Cost Report', 'url' => base_url().'report/wrong_shipping_cost'),
                array('title' => 'Orders', 'is_active' => TRUE),
            ),
            'page_title'  =>  'Orders',
            'page_header_title' =>  'Orders : '.$project_title
        );

        ////////////// Wrong Selling Price Report
        $page_header_array['report_wrong_selling_price'] = array(

            'breadcrumbs' =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title' => 'Wrong Selling Price Report', 'is_active' => TRUE),
            ),
            'page_title'  =>  'Wrong Selling Price Report',
            'page_header_title' =>  'Wrong Selling Price Report : '.$project_title
        );

        $page_header_array['wrong_selling_orders'] = array(

            'breadcrumbs' =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Wrong Selling Price Report', 'url' => base_url().'report/wrong_selling_price'),
                array('title' => 'Orders', 'is_active' => TRUE),
            ),
            'page_title'  =>  'Orders',
            'page_header_title' =>  'Orders : '.$project_title
        );

        $page_header_array['profitable_product_orders'] = array(

            'breadcrumbs' =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Profitable Products Report', 'url' => base_url().'report/profitable_products'),
                array('title' => 'Orders', 'is_active' => TRUE),
            ),
            'page_title'  =>  'Orders',
            'page_header_title' =>  'Orders : '.$project_title
        );

        

         $page_header_array['picklist_issue_reason'] = array(

            'breadcrumbs' =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title' => 'Picklist Issue Reason List', 'is_active' => TRUE),
            ),
            'page_title'  =>  'Picklist Issue Reason List',
            'page_header_title' =>  'Picklist Issue Reason List : '.$project_title
        );

         $page_header_array['issue_resolve_reason'] = array(

            'breadcrumbs' =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title' => 'Issue Resolve Reason List', 'is_active' => TRUE),
            ),
            'page_title'  =>  'Issue Resolve Reason List',
            'page_header_title' =>  'Issue Resolve Reason List : '.$project_title
        );

         $page_header_array['user_notes'] = array(

            'breadcrumbs' =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title' => 'My Notes List', 'is_active' => TRUE),
            ),
            'page_title'  =>  'My Notes List',
            'page_header_title' =>  'My Notes List : '.$project_title
        );

         $page_header_array['shipped_order_orders'] = array(

            'breadcrumbs' =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Shipped Orders Report', 'url' => base_url().'report/shipped_orders_report'),
                array('title' => 'Orders', 'is_active' => TRUE),
            ),
            'page_title'  =>  'Orders',
            'page_header_title' =>  'Orders : '.$project_title
        );

        $page_header_array['report_no_shipping_cost'] = array(

            'breadcrumbs' =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title' => 'No Shipping Cost Orders Report', 'is_active' => TRUE),
            ),
            'page_title'  =>  'No Shipping Cost Orders Report',
            'page_header_title' =>  'No Shipping Cost Orders Report : '.$project_title
        );

        $page_header_array['dash_carrier_shipping_cost_report'] = array(

            'breadcrumbs' =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Dashboard', 'url' => base_url().'dashboard'),
                array('title' => 'Carrier Shipping Cost', 'is_active' => TRUE),
            ),
            'page_title'  =>  'Carrier Shipping Cost',
            'page_header_title' =>  'Carrier Shipping Cost : '.$project_title
        );

        $page_header_array['dash_fba_long_term_storage_products'] = array(

            'breadcrumbs' =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Dashboard', 'url' => base_url().'dashboard'),
                array('title' => 'FBA Long Term Storage Products', 'is_active' => TRUE),
            ),
            'page_title'  =>  'FBA Long Term Storage Products',
            'page_header_title' =>  'FBA Long Term Storage Products : '.$project_title
        );

        $page_header_array['dash_po_by_status_report'] = array(

            'breadcrumbs' =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Dashboard', 'url' => base_url().'dashboard'),
                array('title' => 'PO By Status Report', 'is_active' => TRUE),
            ),
            'page_title'  =>  'PO By Status Report',
            'page_header_title' =>  'PO By Status Report : '.$project_title
        );

        $page_header_array['dash_received_po_items_report'] = array(

            'breadcrumbs' =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Dashboard', 'url' => base_url().'dashboard'),
                array('title' => 'Received PO Items Report', 'is_active' => TRUE),
            ),
            'page_title'  =>  'Received PO Items Report',
            'page_header_title' =>  'Received PO Items Report : '.$project_title
        );

        $page_header_array['dash_received_po_report'] = array(

            'breadcrumbs' =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Dashboard', 'url' => base_url().'dashboard'),
                array('title' => 'Received PO Report', 'is_active' => TRUE),
            ),
            'page_title'  =>  'Received PO Report',
            'page_header_title' =>  'Received PO Report : '.$project_title
        );

        $page_header_array['dash_vendor_po_report'] = array(

            'breadcrumbs' =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Dashboard', 'url' => base_url().'dashboard'),
                array('title' => 'Vendor PO Report', 'is_active' => TRUE),
            ),
            'page_title'  =>  'Vendor PO Report',
            'page_header_title' =>  'Vendor PO Report : '.$project_title
        );

        $page_header_array['dash_stock_valuation_report'] = array(

            'breadcrumbs' =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Dashboard', 'url' => base_url().'dashboard'),
                array('title' => 'Stock Valuation Report', 'is_active' => TRUE),
            ),
            'page_title'  =>  'Stock Valuation Report',
            'page_header_title' =>  'Stock Valuation Report : '.$project_title
        );

        $page_header_array['dash_orders_received_list'] = array(

            'breadcrumbs' =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Dashboard', 'url' => base_url().'dashboard'),
                array('title' => 'Orders Received Report', 'is_active' => TRUE),
            ),
            'page_title'  =>  'Orders Received Report',
            'page_header_title' =>  'Orders Received Report : '.$project_title
        );

        // Vendor Sales Comparison Report
        $page_header_array['dash_vendor_sales_comparison_report'] = array(

            'breadcrumbs' =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Dashboard', 'url' => base_url().'dashboard'),
                array('title' => 'Vendor Product Sales Comparison Report', 'is_active' => TRUE),
            ),
            'page_title'  =>  'Vendor Product Sales Comparison Report',
            'page_header_title' =>  'Vendor Product Sales Comparison Report : '.$project_title
        );

        // Cancelled Orders By Month Report
        $page_header_array['dash_cancel_orders_by_month_report'] = array(

            'breadcrumbs' =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Dashboard', 'url' => base_url().'dashboard'),
                array('title' => 'Cancelled Orders By Month Report', 'is_active' => TRUE),
            ),
            'page_title'  =>  'Cancelled Orders By Month Report',
            'page_header_title' =>  'Cancelled Orders By Month Report : '.$project_title
        );

        // Products Pushing Zero
        $page_header_array['dash_products_pushing_zero'] = array(

            'breadcrumbs' =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Dashboard', 'url' => base_url().'dashboard'),
                array('title' => 'Products Pushing Zero', 'is_active' => TRUE),
            ),
            'page_title'  =>  'Products Pushing Zero',
            'page_header_title' =>  'Products Pushing Zero : '.$project_title
        );

        $page_header_array['dash_unshipped_order_by_month_year_report'] = array(

            'breadcrumbs' =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Dashboard', 'url' => base_url().'dashboard'),
                array('title' => 'Unshipped Order By Month', 'is_active' => TRUE),
            ),
            'page_title'  =>  'Unshipped Order By Month',
            'page_header_title' =>  'Unshipped Order By Month : '.$project_title
        );

        $page_header_array['dash_inhouse_sku_report'] = array(

            'breadcrumbs' =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Dashboard', 'url' => base_url().'dashboard'),
                array('title' => 'Inhouse SKUs Report', 'is_active' => TRUE),
            ),
            'page_title'  =>  'Inhouse SKUs Report',
            'page_header_title' =>  'Inhouse SKUs Report : '.$project_title
        );

        $page_header_array['dash_inhouse_with_inventory_report'] = array(

            'breadcrumbs' =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Dashboard', 'url' => base_url().'dashboard'),
                array('title' => 'SKUs with Inventory Report', 'is_active' => TRUE),
            ),
            'page_title'  =>  'SKUs with Inventory Report',
            'page_header_title' =>  'SKUs with Inventory Report : '.$project_title
        );

        $page_header_array['dash_fba_sku_report'] = array(

            'breadcrumbs' =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Dashboard', 'url' => base_url().'dashboard'),
                array('title' => 'FBA Inventory', 'is_active' => TRUE),
            ),
            'page_title'  =>  'FBA Inventory',
            'page_header_title' =>  'FBA Inventory : '.$project_title
        );

        $page_header_array['dash_gross_profit_report'] = array(

            'breadcrumbs' =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Dashboard', 'url' => base_url().'dashboard'),
                array('title' => 'Gross Profit Report', 'is_active' => TRUE),
            ),
            'page_title'  =>  'Gross Profit Report',
            'page_header_title' =>  'Gross Profit Report : '.$project_title
        );

        $page_header_array['dash_units_by_channel_report'] = array(

            'breadcrumbs' =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Dashboard', 'url' => base_url().'dashboard'),
                array('title' => "Units By Channel Report", 'is_active' => TRUE),
            ),
            'page_title'  =>  "Units By Channel Report",
            'page_header_title' =>  "Units By Channel Report : ".$project_title
        );

        $page_header_array['dash_units_by_user_report'] = array(

            'breadcrumbs' =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Dashboard', 'url' => base_url().'dashboard'),
                array('title' => "Units By User Report", 'is_active' => TRUE),
            ),
            'page_title'  =>  "Units By User Report",
            'page_header_title' =>  "Units By User Report : ".$project_title
        );

        $page_header_array['dash_cancel_order_list_report'] = array(

            'breadcrumbs' =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Dashboard', 'url' => base_url().'dashboard'),
                array('title' => "Cancel Order List", 'is_active' => TRUE),
            ),
            'page_title'  =>  "Cancel Order List",
            'page_header_title' =>  "Cancel Order List : ".$project_title
        );

        $page_header_array['dash_refund_order_list_report'] = array(

            'breadcrumbs' =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Dashboard', 'url' => base_url().'dashboard'),
                array('title' => "Refund Order List", 'is_active' => TRUE),
            ),
            'page_title'  =>  "Refund Order List",
            'page_header_title' =>  "Refund Order List : ".$project_title
        );

        $page_header_array['profitable_products'] = array(

            'breadcrumbs' =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title' => "Profitable Products", 'is_active' => TRUE),
            ),
            'page_title'  =>  "Profitable Products",
            'page_header_title' =>  "Profitable Products : ".$project_title
        );

        $page_header_array['dash_fba_valuation_report'] = array(

            'breadcrumbs' =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Dashboard', 'url' => base_url().'dashboard'),
                array('title' => "FBA Valuation", 'is_active' => TRUE),
            ),
            'page_title'  =>  "FBA Valuation",
            'page_header_title' =>  "FBA Valuation : ".$project_title
        );

         $page_header_array['order_document_types'] = array(

            'breadcrumbs' =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title' => "Order Document Types", 'is_active' => TRUE),
            ),
            'page_title'  =>  "Order Document Types",
            'page_header_title' =>  "Order Document Types : ".$project_title
        );

         $page_header_array['customer_tax_exempt_orders'] = array(

            'breadcrumbs' =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Customer List', 'url' => base_url().'customer/customer'),
                array('title' => "Customer Orders", 'is_active' => TRUE),
            ),
            'page_title'  =>  "Customer Orders",
            'page_header_title' =>  "Customer Orders : ".$project_title
        );

          $page_header_array['order_products_list'] = array(

            'breadcrumbs' =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Customer List', 'url' => base_url().'customer/customer'),
                array('title' => "Orders Products", 'is_active' => TRUE),
            ),
            'page_title'  =>  "Orders Products",
            'page_header_title' =>  "Orders Products : ".$project_title
        );

        $page_header_array['customer_document_list'] = array(

            'breadcrumbs' =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Customer List', 'url' => base_url().'customer/customer'),
                array('title' => "Customer Documents", 'is_active' => TRUE),
            ),
            'page_title'  =>  "Customer Documents",
            'page_header_title' =>  "Customer Documents : ".$project_title
        );

        // RMA Location
        $page_header_array['rma_locations'] = array(

            'breadcrumbs' =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'RMA', 'url' => base_url().'rma/rma'),
                array('title' => "RMA Location", 'is_active' => TRUE),
            ),
            'page_title'  =>  "RMA Location",
            'page_header_title' =>  "RMA Location : ".$project_title
        );

        // Cycle Count Notes
        $page_header_array['cycle_count_notes'] = array(

            'breadcrumbs' =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title' => "Cycle Count Notes", 'is_active' => TRUE),
            ),
            'page_title'  =>  "Cycle Count Notes",
            'page_header_title' =>  "Cycle Count Notes : ".$project_title
        );

        // Product Cost Update Report
        $page_header_array['report_product_cost_update'] = array(

            'breadcrumbs' =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title' => "Product Cost Update Report", 'is_active' => TRUE),
            ),
            'page_title'  =>  "Product Cost Update Report",
            'page_header_title' =>  "Product Cost Update Report : ".$project_title
        );

        // Product Without Shipping Cost
        $page_header_array['report_product_without_shipping_cost'] = array(

            'breadcrumbs' =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title' => "Product Without Shipping Cost Report", 'is_active' => TRUE),
            ),
            'page_title'  =>  "Product Without Shipping Cost Report",
            'page_header_title' =>  "Product Without Shipping Cost Report : ".$project_title
        );

        // Product Without Shipping Cost
        $page_header_array['marketplace_product_without_shipping_cost'] = array(

            'breadcrumbs' =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title' => "Marketplace Product Without Shipping Cost Report", 'is_active' => TRUE),
            ),
            'page_title'  =>  "Marketplace Product Without Shipping Cost Report",
            'page_header_title' =>  "Marketplace Product Without Shipping Cost Report : ".$project_title
        );

        // Total Out Safety Stock Products
        $page_header_array['total_out_safety_stock_products'] = array(

            'breadcrumbs' =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title' => "Total SKUs Below Safety Stock", 'is_active' => TRUE),
            ),
            'page_title'  =>  "Total SKUs Below Safety Stock",
            'page_header_title' =>  "Total SKUs Below Safety Stock : ".$project_title
        );

        // RMA Product List
        $page_header_array['rma_product_list_index'] = array(

            'breadcrumbs' =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title' => "RTW Product Report", 'is_active' => TRUE),
            ),
            'page_title'  =>  "RTW Product Report",
            'page_header_title' =>  "RTW Product Report : ".$project_title
        );

        $page_header_array['dash_units_picked_by_user_report'] = array(

            'breadcrumbs' =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Dashboard', 'url' => base_url().'dashboard'),
                array('title' => "Items Picked By User Report", 'is_active' => TRUE),
            ),
            'page_title'  =>  "Items Picked By User Report",
            'page_header_title' =>  "Items Picked By User Report : ".$project_title
        );

        // RMA Product List
        $page_header_array['report_seller_price'] = array(

            'breadcrumbs' =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title' => "Amazon Floor Price Report", 'is_active' => TRUE),
            ),
            'page_title'  =>  "Amazon Floor Price Report",
            'page_header_title' =>  "Amazon Floor Price Report : ".$project_title
        );

        // Picklist Issue Report
        $page_header_array['report_picklist_issues'] = array(

            'breadcrumbs' =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title' => "Pick List Issue Report", 'is_active' => TRUE),
            ),
            'page_title'  =>  "Pick List Issue Report",
            'page_header_title' =>  "Pick List Issue Report : ".$project_title
        );

        // RTV List
        $page_header_array['awaiting_rtv_list'] = array(

            'breadcrumbs' =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title' => "Awaiting RTV List", 'is_active' => TRUE),
            ),
            'page_title'  =>  "Awaiting RTV List",
            'page_header_title' =>  "Awaiting RTV List : ".$project_title
        );

        // RTV Product List
        $page_header_array['awaiting_rtv_products'] = array(

            'breadcrumbs' =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Awaiting RTV List', 'url' => base_url().'rma/rtv'),
                array('title' => "Awaiting RTV Product List", 'is_active' => TRUE),
            ),
            'page_title'  =>  "Awaiting RTV Product List",
            'page_header_title' =>  "Awaiting RTV Product List : ".$project_title
        );

        // Pick List Issue Log Report
        $page_header_array['report_pick_list_issue_log'] = array(

            'breadcrumbs' =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title' => "Pick List Issue Log Report", 'is_active' => TRUE),
            ),
            'page_title'  =>  "Pick List Issue Log Report",
            'page_header_title' =>  "Pick List Issue Log Report : ".$project_title
        );

        // RTV Order
        $page_header_array['rtv_order'] = array(

            'breadcrumbs' =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Awaiting RTV List', 'url' => base_url().'rma/rtv'),
                array('title' => "RTV Order", 'is_active' => TRUE),
            ),
            'page_title'  =>  "RTV Order",
            'page_header_title' =>  "RTV Order : ".$project_title
        );

        // RTV Order Details
        $page_header_array['rtv_order_detail'] = array(

            'breadcrumbs' =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title' => "RTV Orders", 'url' => base_url().'rma/rtv/rtv_order_list'),
                array('title' => "RTV Order Detail", 'is_active' => TRUE),
            ),
            'page_title'  =>  "RTV Order Detail",
            'page_header_title' =>  "RTV Order Detail : ".$project_title
        );

        // Edit RTV Order
        $page_header_array['edit_rtv_order'] = array(

            'breadcrumbs' =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Awaiting RTV List', 'url' => base_url().'rma/rtv'),
                array('title' => "Edit RTV Order", 'is_active' => TRUE),
            ),
            'page_title'  =>  "Edit RTV Order",
            'page_header_title' =>  "Edit RTV Order : ".$project_title
        );

         // Amazon Kit Product Price Issue Report
        $page_header_array['amazon_kit_price_report'] = array(

            'breadcrumbs' =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title' => "Amazon Kit Product Price Issue Report", 'is_active' => TRUE),
            ),
            'page_title'  =>  "Amazon Kit Product Price Issue Report",
            'page_header_title' =>  "Amazon Kit Product Price Issue Report : ".$project_title
        );

        // Amazon Non Kit Products Report
        $page_header_array['amazon_non_kit_products_report'] = array(

            'breadcrumbs' =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title' => "Amazon Non Kit Products Report", 'is_active' => TRUE),
            ),
            'page_title'  =>  "Amazon Non Kit Products Report",
            'page_header_title' =>  "Amazon Non Kit Products Report : ".$project_title
        );

        // Etsy Listing Manager
        $page_header_array['etsy_listed_product_manager'] = array(

            'breadcrumbs' =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title' => "Etsy Listing Manager", 'is_active' => TRUE),
            ),
            'page_title'  =>  "Etsy Listing Manager",
            'page_header_title' =>  "Etsy Listing Manager : ".$project_title
        );

        // Export Manager
        $page_header_array['export_manager'] = array(

            'breadcrumbs' =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title' => "Export Manager", 'is_active' => TRUE),
            ),
            'page_title'  =>  "Export Manager",
            'page_header_title' =>  "Export Manager : ".$project_title
        );

        // RTV Order List
        $page_header_array['rtv_order_list'] = array(

            'breadcrumbs' =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title' => "RTV Order List", 'is_active' => TRUE),
            ),
            'page_title'  =>  "RTV Order List",
            'page_header_title' =>  "RTV Order List : ".$project_title
        );

        // Rakuten Edit Product
        $page_header_array['rakuten_edit_product'] = array(

            'breadcrumbs' =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Rakuten Listing Manager', 'url' => base_url().'listing_manager/rakuten/listed'),
                array('title' => "Edit Product", 'is_active' => TRUE),
            ),
            'page_title'  =>  "Rakuten Edit Product",
            'page_header_title' =>  "Rakuten Edit Product : ".$project_title
        );

         // Rakuten Edit Product
        $page_header_array['rakuten_add_product'] = array(

            'breadcrumbs' =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Rakuten Listing Manager', 'url' => base_url().'listing_manager/rakuten/lists'),
                array('title' => "Add Product", 'is_active' => TRUE),
            ),
            'page_title'  =>  "Rakuten Add Product",
            'page_header_title' =>  "Rakuten Add Product : ".$project_title
        );

        // Google Edit Product
        $page_header_array['google_add_product'] = array(

            'breadcrumbs' =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Google Listing Manager', 'url' => base_url().'listing_manager/google/lists'),
                array('title' => "Add Product", 'is_active' => TRUE),
            ),
            'page_title'  =>  "Add Google Product",
            'page_header_title' =>  "Add Google Product : ".$project_title
        );

         // Sales By Product Classification
        $page_header_array['product_classification_sales_report'] = array(

            'breadcrumbs' =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title' => "Sales By Product Classification", 'is_active' => TRUE),
            ),
            'page_title'  =>  "Sales By Product Classification",
            'page_header_title' =>  "Sales By Product Classification : ".$project_title
        );

         // Product Classification Manager
        $page_header_array['product_classifications'] = array(

            'breadcrumbs' =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title' => "Product Classification Manager", 'is_active' => TRUE),
            ),
            'page_title'  =>  "Product Classification Manager",
            'page_header_title' =>  "Product Classification Manager : ".$project_title
        );

        // Amazon Wholesale No Sales Report
        $page_header_array['amazon_wholesale_no_sales_report'] = array(

            'breadcrumbs' =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title' => "Amazon Wholesale No Sales Report", 'is_active' => TRUE),
            ),
            'page_title'  =>  "Amazon Wholesale No Sales Report",
            'page_header_title' =>  "Amazon Wholesale No Sales Report : ".$project_title
        );

        $page_header_array['ebay_no_sales_products_report'] = array(

            'breadcrumbs' =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title' => "Ebay No Sales Products Report", 'is_active' => TRUE),
            ),
            'page_title'  =>  "Ebay No Sales Products Report",
            'page_header_title' =>  "Ebay No Sales Products Report : ".$project_title
        );

        $page_header_array['fba_packaging_inventory_detail'] = array(

            'breadcrumbs' =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title' => "FBA Packaging Inventory Detail", 'is_active' => TRUE),
            ),
            'page_title'  =>  "FBA Packaging Inventory Detail",
            'page_header_title' =>  "FBA Packaging Inventory Detail : ".$project_title
        );

        

        // Amazon Delisted Products With Sale
        $page_header_array['amazon_delisted_product_with_sales'] = array(

            'breadcrumbs' =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title' => "Amazon Delisted Products With Sale", 'is_active' => TRUE),
            ),
            'page_title'  =>  "Amazon Delisted Products With Sale",
            'page_header_title' =>  "Amazon Delisted Products With Sale : ".$project_title
        );

        // Order Issue Logs Report
        $page_header_array['report_order_issue_log'] = array(

            'breadcrumbs' =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title' => "Order Issue Logs Report", 'is_active' => TRUE),
            ),
            'page_title'  =>  "Order Issue Logs Report",
            'page_header_title' =>  "Order Issue Logs Report : ".$project_title
        );

        // FBA Returns % Report
        $page_header_array['fba_return_rate_report'] = array(

            'breadcrumbs' =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title' => "FBA Returns % Report", 'is_active' => TRUE),
            ),
            'page_title'  =>  "FBA Returns % Report",
            'page_header_title' =>  "FBA Returns % Report : ".$project_title
        );

        // Products with Zero Qty Posting
        $page_header_array['zero_qty_post_products'] = array(

            'breadcrumbs' =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title' => "Products with Zero Qty Posting", 'is_active' => TRUE),
            ),
            'page_title'  =>  "Products with Zero Qty Posting",
            'page_header_title' =>  "Products with Zero Qty Posting : ".$project_title
        );

        // Rakuten-Ebay Category Mapper
        $page_header_array['rakuten_category_mapper'] = array(

            'breadcrumbs' =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title' => "Rakuten-Ebay Category Mapper", 'is_active' => TRUE),
            ),
            'page_title'  =>  "Rakuten-Ebay Category Mapper",
            'page_header_title' =>  "Rakuten-Ebay Category Mapper : ".$project_title
        );

        // Import Custom Documents
        $page_header_array['import_custom_documents'] = array(

            'breadcrumbs' =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title' => "Import Custom Documents", 'is_active' => TRUE),
            ),
            'page_title'  =>  "Import Custom Documents",
            'page_header_title' =>  "Import Custom Documents : ".$project_title
        );

         // Sales Comparison Report
        $page_header_array['sales_comparison_report'] = array(

            'breadcrumbs' =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title' => "Sales Comparison Report", 'is_active' => TRUE),
            ),
            'page_title'  =>  "Sales Comparison Report",
            'page_header_title' =>  "Sales Comparison Report : ".$project_title
        );

        // Sales Orders
        $page_header_array['sales_comparison_report_orders'] = array(

            'breadcrumbs' =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Sales Comparison Report', 'url' => base_url().'report/sales_comparison_report'),
                array('title' => "Orders", 'is_active' => TRUE),
            ),
            'page_title'  =>  "Sales Orders",
            'page_header_title' =>  "Sales Orders : ".$project_title
        );

        // FBA For CA Products Report
        $page_header_array['fba_for_ca_products'] = array(

            'breadcrumbs' =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title' => "FBA For CA Products Report", 'is_active' => TRUE),
            ),
            'page_title'  =>  "FBA For CA Products Report",
            'page_header_title' =>  "FBA For CA Products Report : ".$project_title
        );

        // Background process manager Report
        $page_header_array['background_process_manager_report'] = array(

            'breadcrumbs' =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title' => "Background process manager", 'is_active' => TRUE),
            ),
            'page_title'  =>  "Background process manager",
            'page_header_title' =>  "Background process manager : ".$project_title
        );

        // Background process log Report
        $page_header_array['background_process_log_report'] = array(

            'breadcrumbs' =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Background process manager','url'=>base_url().'report/background_process_manager_report'),
                array('title' => "Background process log", 'is_active' => TRUE),
            ),
            'page_title'  =>  "Background process log",
            'page_header_title' =>  "Background process log : ".$project_title
        );

        // Deleted porduct list Report
        $page_header_array['deleted_product_list_report'] = array(

            'breadcrumbs' =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title' => "Deleted product list", 'is_active' => TRUE),
            ),
            'page_title'  =>  "Deleted product list",
            'page_header_title' =>  "Deleted product list : ".$project_title
        );

        // Marketplace quantity log Report
        $page_header_array['marketplace_quantity_update_log'] = array(

            'breadcrumbs' =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title' => "Marketplace quantity update", 'is_active' => TRUE),
            ),
            'page_title'  =>  "Marketplace quantity update",
            'page_header_title' =>  "Marketplace quantity update : ".$project_title
        );

        //  Kit Products without components
        $page_header_array['kit_products_without_component']=array(
            
            'breadcrumbs'        =>  array(
                array('title'   =>  'Home','url' =>  base_url()),
                array('title'   =>  'Kit Products Without Component','is_active' =>  TRUE),
            ),
            'page_title'        =>  'Kit Products Without Component',
            'page_header_title' =>  "Kit Products Without Component : ".$project_title
        );

        //  Products with components
        $page_header_array['products_with_component']=array(
            
            'breadcrumbs'        =>  array(
                array('title'   =>  'Home','url' =>  base_url()),
                array('title'   =>  'Kit Products marked as Normal products','is_active' =>  TRUE),
            ),
            'page_title'        =>  'Kit Products marked as Normal products',
            'page_header_title' =>  "Kit Products marked as Normal products : ".$project_title
        );

        //FBA out of stock products with instock qty report
        $page_header_array['fba_out_of_stock_products_with_instock_qty_report'] = array(
            'breadcrumbs'       =>  array(
                array('title'   =>  'Home','url'    =>  base_url()),
                array('title'   =>  'FBA out of stock products with instock Quantity','is_active' => TRUE),
            ),
            'page_title'        =>  'FBA out of stock products with instock Quantity',
            'page_header_title' =>  'FBA out of stock products with instock Quantity :'.$project_title         
        );


        ////////////////////////////////////////////
        ////////     WAREHOUSE ZONE   /////////////

        $page_header_array['warehouse_zone'] = array(
            
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Warehouse Zone List', 'is_active' => TRUE)
            ),
            "page_title"  =>  'Warehouse Zone List',
            "page_header_title" =>  'Warehouse Zone List : '.$project_title

        );

        $page_header_array['sub_warehouse_zone'] = array(
            
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Sub Warehouse Zone List', 'is_active' => TRUE)
            ),
            "page_title"  =>  'Sub Warehouse Zone List',
            "page_header_title" =>  'Sub Warehouse Zone List : '.$project_title

        );

        $page_header_array['location_type_list'] = array(
            
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Location Type List', 'is_active' => TRUE)
            ),
            "page_title"  =>  'Location Type List',
            "page_header_title" =>  'Location Type List : '.$project_title

        );

        $page_header_array['location_size_list'] = array(
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Location Size List', 'is_active' => TRUE)
            ),
            "page_title"  =>  'Location Size List',
            "page_header_title" =>  'Location Size List : '.$project_title
        );

        ////////////////////////////////////////////
        ////////     Tax exempt Reason   /////////////

        $page_header_array['tax_exempt_reason'] = array(
            
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Tax Exempt Reason', 'is_active' => TRUE)
            ),
            "page_title"  =>  'Tax Exempt Reason List',
            "page_header_title" =>  'Tax Exempt Reason List : '.$project_title

        );

        //////////////////////////////////////////////////////////////
        ////////     Tax exemptstates marketplace list   /////////////

        $page_header_array['tax_exempt_state_list'] = array(
            
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Tax Exempt State Marketplace List', 'is_active' => TRUE)
            ),
            "page_title"  =>  'Tax Exempt State Marketplace List',
            "page_header_title" =>  'Tax Exempt State Marketplace List : '.$project_title

        );


        $page_header_array['amazon_health_report'] = array(
            
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Amazon Health Rate List', 'is_active' => TRUE)
            ),
            "page_title"  =>  'Amazon Health Rate List',
            "page_header_title" =>  'Amazon Health Rate List : '.$project_title

        );

        $page_header_array['shipping_wise_map_report'] = array(
            
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'US Statewise Shipping Report', 'is_active' => TRUE)
            ),
            "page_title"  =>  'US Statewise Shipping Report',
            "page_header_title" =>  'US Statewise Shipping Report : '.$project_title

        );

         $page_header_array['rakuten_category_mapper_ace'] = array(
            
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Rakuten-Ebay Category Mapper', 'url'=> base_url().'rakuten_category_mapper'),
                array('title'=>'Category Mapper for Ace', 'is_active' => TRUE)
            ),
            "page_title"  =>  'Category Mapper for Ace',
            "page_header_title" =>  'Category Mapper for Ace : '.$project_title

        );

        ////////////////////////////////////////////
        ////////    MENU MASTER  /////////////

        $page_header_array['menu_master'] = array(
            
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Menu Master List','url'=>base_url().'menu_master/')
            ),
            "page_title"  =>  'Menu Master List',
            "page_header_title" =>  'Menu Master List : '.$project_title

        );

        ////////////////////////////////////////////
        ////////    CRON MASTER  /////////////

        $page_header_array['cron_master'] = array(
            
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Cron Master List','url'=>base_url().'cron_master/')
            ),
            "page_title"  =>  'Cron Master List',
            "page_header_title" =>  'Cron Master List : '.$project_title

        );

        ////////////////////////////////////////////
        ////////     MARKETPLACE TABLE MAPPING   /////////////

        $page_header_array['marketplace_table_mapping'] = array(
            
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Marketplace Table Mapping', 'is_active' => TRUE)
            ),
            "page_title"  =>  'Marketplace Table Mapping',
            "page_header_title" =>  'Marketplace Table Mapping : '.$project_title

        );

        $page_header_array['marketplace_table_mapping_add'] = array(
            
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Marketplace Table Mapping','url'=>base_url().'marketplace_table_mapping/index/'),
                 array('title'=>'Add Marketplace', 'is_active' => TRUE)
            ),
            "page_title"  =>  'Add Marketplace',
            "page_header_title" =>  'Add Marketplace : '.$project_title

        );

        $page_header_array['marketplace_table_mapping_edit'] = array(
            "breadcrumbs" =>    array(
                array('title' =>'Home', 'url' => base_url()),
                array('title' => 'Marketplace Table Mapping','url'=>base_url().'marketplace_table_mapping/index/'),
                array('title' => 'Edit Marketplace', 'is_active' => TRUE)
            ),
            "page_title"    =>  'Edit Marketplace',
            "page_header_title"     => 'Edit Marketplace :'.$project_title
        );
        //////////////////////////////////////////////////

        $page_header_array['keepa_product_details'] = array(
            
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Keepa Product List','url'=>base_url().'keepa_product_details/')
            ),
            "page_title"  =>  'Keepa Product List',
            "page_header_title" =>  'Keepa Product List : '.$project_title

        );
        ////////////////////////////////////////////
        ////////     Us tax codes  /////////////

        $page_header_array['Walmart_product_tax_codes'] = array(
            
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Walmart Product Tax Codes', 'is_active' => TRUE)
            ),
            "page_title"  =>  'Walmart Product Tax Codes',
            "page_header_title" =>  'Walmart Product Tax Codes : '.$project_title

        );

        $page_header_array['walmart_category_mapper'] = array(
            
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Walmart-Ebay Category Mapper', 'is_active' => TRUE)
            ),
            "page_title"  =>  'Walmart-Ebay Category Mapper',
            "page_header_title" =>  'Walmart-Ebay Category Mapper : '.$project_title

        );

        ///////////////////////////////////////////////
        ////////// Rpricer Rule List ////////
        $page_header_array['repricer_rule_list'] = array(
            
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Repricer Rule List','is_active'=>TRUE),
            ),
            "page_title"  =>  'Repricer Rule List',
            "page_header_title" =>  'Repricer Rule List : '.$project_title

        );

        $page_header_array['channel_or_country_list'] = array(
            
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Channel or Country Specific List','is_active'=>TRUE),
            ),
            "page_title"  =>  'Channel or Country Specific List',
            "page_header_title" =>  'Channel or Country Specific List : '.$project_title

        );

        ////////////////////////////////////////////
        ////////     Ebay Product details  /////////////

        $page_header_array['ebay_product_detail'] = array(
            
            "breadcrumbs"    =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Ebay Listing Manager','url'=>base_url().'listing_manager/ebay/listed/'),
                array('title'=>'Ebay Product Details','is_active'=> TRUE),
            ),
            "page_title"        =>  'Ebay Product Details',
            "page_header_title" =>  'Ebay Product Details : '.$project_title

        );


        $page_header_array['shipping_carriers'] = array(
            
            "breadcrumbs"    =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Shipping Carriers List','is_active'=> TRUE),
            ),
            "page_title"        =>  'Shipping Carriers List',
            "page_header_title" =>  'Shipping Carriers List : '.$project_title

        );

        $page_header_array['task_types'] = array(
            
            "breadcrumbs"    =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Task Types Manager','is_active'=> TRUE),
            ),
            "page_title"        =>  'Task Types Manager',
            "page_header_title" =>  'Task Types Manager : '.$project_title

        );

        $page_header_array['task_status'] = array(
            
            "breadcrumbs"    =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Task Status Manager','is_active'=> TRUE),
            ),
            "page_title"        =>  'Task Status Manager',
            "page_header_title" =>  'Task Status Manager : '.$project_title

        );

         $page_header_array['task_tag'] = array(
            
            "breadcrumbs"    =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Task Tag Manager','is_active'=> TRUE),
            ),
            "page_title"        =>  'Task Tag Manager',
            "page_header_title" =>  'Task Tag Manager : '.$project_title

        );
        ///////////////////////////////////////////////
        /////////Book Bark ////////////////////

         $page_header_array['book_mark'] = array(
            
            "breadcrumbs"    =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Bookmark List','is_active'=> TRUE),
            ),
            "page_title"        =>  'Bookmark List',
            "page_header_title" =>  'Bookmark List : '.$project_title

        );

        ///////////////////////////////////////////
         ////////////////////////////////////////
         ///////pick_list_type///////////
         $page_header_array['pick_list_type'] = array(
            
            "breadcrumbs"    =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Picklist Type List','is_active'=> TRUE),
            ),
            "page_title"        =>  'Picklist Type List',
            "page_header_title" =>  'Picklist Type List : '.$project_title

        ); 
         $page_header_array['pick_list_by_type'] = array(
            
            "breadcrumbs"    =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Picklist By Type List','is_active'=> TRUE),
            ),
            "page_title"        =>  'Picklist By Type List',
            "page_header_title" =>  'Picklist By Type List : '.$project_title

        );

         ///////////////////////////////////////
        ////////    User working hour report  /////////////

         $page_header_array['employee_working_hrs'] = array(
            
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Employee Working Hours Report','url'=>base_url().'employee_working_hrs_report')
            ),
            "page_title"  =>  'Employee Working Hours Report',
            "page_header_title" =>  'Employee Working Hours Report : '.$project_title

        );

         ///////////////////////////////////////////
        ////////    Dashboard FBA inventory by country report  /////////////

         $page_header_array['dash_fba_inventory_by_country'] = array(
            
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Dashboard', 'url' => base_url().'dashboard'),
                array('title'=>'FBA Inventory by Country Report', 'is_active'=> TRUE)
            ),
            "page_title"  =>  'FBA Inventory by Country Report',
            "page_header_title" =>  'FBA Inventory by Country Report : '.$project_title

        );

         ///////////////////////////////////////////
        ////////    Dashboard FBA Removal orders report  ///////////// 

         $page_header_array['fba_removal_orders_details'] = array(
            
            "breadcrumbs" =>  array(

                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Dashboard', 'url' => base_url().'dashboard'),
                array('title'=>'FBA Removal Orders Details', 'is_active'=> TRUE)
            ),
            "page_title"  =>  'FBA Removal Orders Details',
            "page_header_title" =>  'FBA Removal Orders Details : '.$project_title

        );

          ///////////////////////////////////////////
        ////////    Dashboard FBA Sales By Month Report  /////////////

         $page_header_array['dash_fba_sales_ytd_report'] = array(
            
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Dashboard', 'url' => base_url().'dashboard'),
                array('title'=>'FBA Sales By Month Report', 'is_active'=> TRUE)
            ),
            "page_title"  =>  'FBA Sales By Month Report',
            "page_header_title" =>  'FBA Sales By Month Report : '.$project_title

        );

          ///////////////////////////////////////////
        ////////    Dashboard Channel Sales By Month Report  /////////////

         $page_header_array['dash_channel_sales_by_month_report'] = array(
            
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Dashboard', 'url' => base_url().'dashboard'),
                array('title'=>'Shipped Channel Sales By Month Report', 'is_active'=> TRUE)
            ),
            "page_title"  =>  'Shipped Channel Sales By Month Report',
            "page_header_title" =>  'Shipped Channel Sales By Month Report : '.$project_title

        );

        $page_header_array['dash_vendor_sales_by_month_report'] = array(
            
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Dashboard', 'url' => base_url().'dashboard'),
                array('title'=>'Shipped Vendors Sales By Month Report', 'is_active'=> TRUE)
            ),
            "page_title"  =>  'Shipped Vendors Sales By Month Report',
            "page_header_title" =>  'Shipped Vendors Sales By Month Report : '.$project_title

        );

        $page_header_array['dash_po_orders_report'] = array(
            
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Dashboard', 'url' => base_url().'dashboard'),
                array('title'=>'PO Orders Report', 'is_active'=> TRUE)
            ),
            "page_title"  =>  'PO Orders Report',
            "page_header_title" =>  'PO Orders Report : '.$project_title

        );


        $page_header_array['dash_unshipped_orders_report'] = array(
            
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Dashboard', 'url' => base_url().'dashboard'),
                array('title'=>'Unshipped Orders Report', 'is_active'=> TRUE)
            ),
            "page_title"  =>  'Unshipped Orders Report',
            "page_header_title" =>  'Unshipped Orders Report : '.$project_title

        );

        $page_header_array['dash_channel_health_orders'] = array(
            
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Dashboard', 'url' => base_url().'dashboard'),
                array('title'=>'Channel Health Orders', 'is_active'=> TRUE)
            ),
            "page_title"  =>  'Channel Health Orders',
            "page_header_title" =>  'Channel Health Orders : '.$project_title

        );

        //Drishtant leuva @ 30-4-2019
        $page_header_array['get_channel_in_house_variance_report'] = array(
            
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Dashboard', 'url' => base_url().'dashboard'),
                array('title'=>'Channel in house variance report','is_active'=> TRUE)
            ),
            "page_title"  =>  'Channel in house variance report',
            "page_header_title" =>  'Channel in house variance report : '.$project_title

        );
        //Drishtant leuva @ 23-5-2019
        $page_header_array['get_order_package_list'] = array(
            
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Dashboard', 'url' => base_url().'dashboard'),
                array('title'=>'Order list report','is_active'=> TRUE)
            ),
            "page_title"  =>  'Order list report',
            "page_header_title" =>  'Order list report : '.$project_title

        );

        //Drishtant leuva @ 24-5-2019
        $page_header_array['get_order_package_per_service'] = array(
            
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Dashboard', 'url' => base_url().'dashboard'),
                array('title'=>'Order list report per service','is_active'=> TRUE)
            ),
            "page_title"  =>  'Order list report per service',
            "page_header_title" =>  'Order list report per service : '.$project_title

        );

        //by: Dirshtant leuva @24-5-2019
        $page_header_array['get_order_package_per_package_type'] = array(

            
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Dashboard', 'url' => base_url().'dashboard'),
                array('title'=>'Order list report per package type','is_active'=> TRUE)
            ),
            "page_title"  =>  'Order list report per package type',
            "page_header_title" =>  'Order list report per package type : '.$project_title
        );

        //by: Dirshtant leuva @24-5-2019
        $page_header_array['get_order_package_per_weight'] = array(

            
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Dashboard', 'url' => base_url().'dashboard'),
                array('title'=>'Order list report per weight','is_active'=> TRUE)
            ),
            "page_title"  =>  'Order list report per weight',
            "page_header_title" =>  'Order list report per weight : '.$project_title
        );
        
        //by: Dirshtant leuva @25-5-2019
        $page_header_array['get_order_package_per_weight_type_report'] = array(

            
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Dashboard', 'url' => base_url().'dashboard'),
                array('title'=>'Order list report per type/weight','is_active'=> TRUE)
            ),
            "page_title"  =>  'Order list report per type/weight',
            "page_header_title" =>  'Order list report per type/weight : '.$project_title
        );

        //by: Dirshtant leuva @25-5-2019
        $page_header_array['get_in_house_physical_qty_dollar_report'] = array(
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Dashboard', 'url' => base_url().'dashboard'),
                array('title'=>'Product Adjustment Report','is_active'=> TRUE)
            ),
            "page_title"  =>  'Product Adjustment Report',
            "page_header_title" =>  'Product Adjustment Report : '.$project_title
        );

        //by: Dirshtant leuva @27-5-2019
        $page_header_array['order_manual_charge_detail'] = array(

            
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Order manual charge detail report','is_active'=> TRUE)
            ),
            "page_title"  =>  'Order manual charge detail report',
            "page_header_title" =>  'Order manual charge detail report : '.$project_title
        );

        //by: Dirshtant leuva @4-6-2019
        $page_header_array['pending_order_list'] = array(

            
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Wholesale Removed Orders Report','is_active'=> TRUE)
            ),
            "page_title"  =>  'Wholesale Removed Orders Report',
            "page_header_title" =>  'Wholesale Removed Orders Report : '.$project_title
        );

        $page_header_array['dash_sales_tax_orders'] = array(
            
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Dashboard', 'url' => base_url().'dashboard'),
                array('title'=>'Sales Tax Orders', 'is_active'=> TRUE)
            ),
            "page_title"  =>  'Sales Tax Orders',
            "page_header_title" =>  'Sales Tax Orders : '.$project_title

        );

        $page_header_array['marketplace_top_selling_items_report'] = array(
            
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Marketplace Top Selling Items Report', 'is_active'=> TRUE)
            ),
            "page_title"  =>  'Marketplace Top Selling Items Report',
            "page_header_title" =>  'Marketplace Top Selling Items Report : '.$project_title

        );

        $page_header_array['marketplace_top_selling_items_orders'] = array(
            
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Marketplace Top Selling Items Orders', 'is_active'=> TRUE)
            ),
            "page_title"  =>  'Marketplace Top Selling Items Orders',
            "page_header_title" =>  'Marketplace Top Selling Items Orders : '.$project_title

        );

        $page_header_array['sears_setting'] = array(
            
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Sears Settings', 'is_active'=> TRUE)
            ),
            "page_title"  =>  'Sears Settings',
            "page_header_title" =>  'Sears Settings : '.$project_title

        );

        $page_header_array['product_cost_mismatch_report'] = array(
            
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Product Buying Cost Mismatch Report', 'is_active'=> TRUE)
            ),
            "page_title"  =>  'Product Buying Cost Mismatch Report',
            "page_header_title" =>  'Product Buying Cost Mismatch Report : '.$project_title

        );

        $page_header_array['orders_without_buying_price'] = array(
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Orders without product buying price', 'is_active'=> TRUE)
            ),
            "page_title"  =>  'Orders without product buying price',
            "page_header_title" =>  'Orders without product buying price : '.$project_title
        );

        $page_header_array['packaging_warehouse_product_detail'] = array(
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Packaging warehouse product detail', 'is_active'=> TRUE)
            ),
            "page_title"  =>  'Packaging warehouse product detail',
            "page_header_title" =>  'Packaging warehouse product detail : '.$project_title
        );

        $page_header_array['late_order_by_po'] = array(
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Late Order by PO Report', 'is_active'=> TRUE)
            ),
            "page_title"  =>  'Late Order by PO Report',
            "page_header_title" =>  'Late Order by PO Report : '.$project_title
        );

        //drishtant @22-6-2019
          $page_header_array['item_to_list'] = array(
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Item To List', 'is_active'=> TRUE)
            ),
            "page_title"  =>  'Item To List',
            "page_header_title" =>  'Item To List : '.$project_title
        );

        //drishtant @24-6-2019
          $page_header_array['partial_bin_orders'] = array(
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Partial Bin Orders', 'is_active'=> TRUE)
            ),
            "page_title"  =>  'Partial Bin Orders',
            "page_header_title" =>  'Partial Bin Orders : '.$project_title
        );

        $page_header_array['hourly_shipped_orders'] = array(
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Hourly Shipped Orders Report', 'is_active'=> TRUE)
            ),
            "page_title"  =>  'Hourly Shipped Orders Report',
            "page_header_title" =>  'Hourly Shipped Orders Report : '.$project_title
        );

        $page_header_array['hourly_shipped_orders_employee'] = array(
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Hourly Shipped Orders Report', 'url' => base_url().'report/hourly_shipped_orders'),
                array('title'=>'Hourly Shipped Orders Report - Employee-wise', 'is_active'=> TRUE)

            ),
            "page_title"  =>  'Hourly Shipped Orders Report - Employee-wise',
            "page_header_title" =>  'Hourly Shipped Orders Report - Employee-wise : '.$project_title
        );

        $page_header_array['bin_location'] = array(
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Order Bin Locations', 'is_active'=> TRUE)
            ),
            "page_title"  =>  'Order Bin Locations',
            "page_header_title" =>  'Order Bin Locations : '.$project_title
        );

        $page_header_array['task_type'] = array(
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Task Type', 'is_active'=> TRUE)
            ),
            "page_title"  =>  'Task Type',
            "page_header_title" =>  'Task Type : '.$project_title
        );

        $page_header_array['picking_bin_location'] = array(
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Picking Bin Locations', 'is_active'=> TRUE)
            ),
            "page_title"  =>  'Picking Bin Locations',
            "page_header_title" =>  'Picking Bin Locations : '.$project_title
        );
        $page_header_array['shipping_packing_zones'] = array(
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Shipping Packing Zones', 'is_active'=> TRUE)
            ),
            "page_title"  =>  'Shipping Packing Zones',
            "page_header_title" =>  'Shipping Packing Zones : '.$project_title
        );
        
        $page_header_array['fba_fulfillment_center'] = array(
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'FBA Fullfillment Center', 'is_active'=> TRUE)
            ),
            "page_title"  =>  'FBA Fullfillment Center',
            "page_header_title" =>  'FBA Fullfillment Center : '.$project_title
        );

        $page_header_array['shipping_measurables'] = array(
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Shipping Measurables', 'is_active'=> TRUE)
            ),
            "page_title"  =>  'Shipping Measurables',
            "page_header_title" =>  'Shipping Measurables : '.$project_title
        );

        $page_header_array['order_buying_cost_report'] = array(
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Order Buying Cost Report', 'is_active'=> TRUE)
            ),
            "page_title"  =>  'Order Buying Cost Report',
            "page_header_title" =>  'Order Buying Cost Report : '.$project_title
        );

    	$page_header_array['new_item_report'] = array(
                "breadcrumbs" =>  array(
                    array('title'=>'Home','url'=>base_url()),
                    array('title'=>'New Items report', 'is_active'=> TRUE)
                ),
                "page_title"  =>  'New Items report',
                "page_header_title" =>  'New Items report : '.$project_title
            );

        $page_header_array['vendor_inventory_on_channel'] = array(
                "breadcrumbs" =>  array(
                    array('title'=>'Home','url'=>base_url()),
                    array('title'=>'Vendor Inventory On Channel', 'is_active'=> TRUE)
                ),
                "page_title"  =>  'Vendor Inventory On Channel',
                "page_header_title" =>  'Vendor Inventory On Channel : '.$project_title
            );

        $page_header_array['customer_wholesale_price'] = array(
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Customer', 'url'=> base_url().'customer/customer'),
                array('title'=>'Wholesale Price', 'is_active'=> TRUE)
            ),
            "page_title"  =>  'Wholesale Price',
            "page_header_title" =>  'Wholesale Price : '.$project_title
        );

        $page_header_array['amazon_asin_comparison_report'] = array(
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Amazon ASIN Comparison Report', 'is_active'=> TRUE)
            ),
            "page_title"  =>  'Amazon ASIN Comparison Report',
            "page_header_title" =>  'Amazon ASIN Comparison Report : '.$project_title
        );

        $page_header_array['po_settings'] = array(
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'PO Settings', 'is_active'=> TRUE)
            ),
            "page_title"  =>  'PO Settings',
            "page_header_title" =>  'PO Settings : '.$project_title
        );

        $page_header_array['daily_backup_report_files'] = array(
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Daily Backup Report Files', 'is_active'=> TRUE)
            ),
            "page_title"  =>  'Daily Backup Report Files',
            "page_header_title" =>  'Daily Backup Report Files : '.$project_title
        );

        $page_header_array['dash_low_margin_report_by_vendor_orders'] = array(
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Dashboard','url'=>base_url().'dashboard'),
                array('title'=>'Low Margin Report By Vendors', 'is_active'=> TRUE)
            ),
            "page_title"  =>  'Low Margin Report By Vendors',
            "page_header_title" =>  'Low Margin Report By Vendors : '.$project_title
        );

        $page_header_array['dash_low_margin_report_by_channel_orders'] = array(
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Dashboard','url'=>base_url().'dashboard'),
                array('title'=>'Low Margin Report By Channel Orders', 'is_active'=> TRUE)
            ),
            "page_title"  =>  'Low Margin Report By Channel Orders',
            "page_header_title" =>  'Low Margin Report By Channel Orders : '.$project_title
        );

        $page_header_array['shipping_batch_manager'] = array(
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Shipping Batch Manager', 'is_active'=> TRUE)
            ),
            "page_title"  =>  'Shipping Batch Manager',
            "page_header_title" =>  'Shipping Batch Manager : '.$project_title
        );

        $page_header_array['shipping_batch_manager_orders'] = array(
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Shipping Batch Manager','url'=>base_url().'shipping_batch'),
                array('title'=>'Shipping Batch Manager - Orders', 'is_active'=> TRUE)
            ),
            "page_title"  =>  'Shipping Batch Manager - Orders',
            "page_header_title" =>  'Shipping Batch Manager - Orders : '.$project_title
        );

        $page_header_array['groupon_order_list'] = array(
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Groupon Orders List', 'is_active'=> TRUE)
            ),
            "page_title"  =>  'Groupon Orders List',
            "page_header_title" =>  'Groupon Orders List : '.$project_title
        );

        $page_header_array['crucial_field_scheduler'] = array(

            'breadcrumbs' =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Crucial Field List','url'=>base_url().'crucial_field_list/crucial_field_scheduler'),
                array('title'=>'Crucial Field Scheduler','is_active'=>TRUE),
            ),
            'page_title'  =>  'Crucial Field Scheduler',
            'page_header_title' =>  'Crucial Field Scheduler : '.$project_title
        );

        $page_header_array['crucial_field_list'] = array(

            'breadcrumbs' =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Crucial Field List','is_active'=>TRUE),
            ),
            'page_title'  =>  'Crucial Field List',
            'page_header_title' =>  'Crucial Field List : '.$project_title
        );


        $page_header_array['crucial_field_list_item'] = array(

            'breadcrumbs' =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Crucial Field List','url'=>base_url().'crucial_field_list/crucial_field_list'),
                array('title'=>'Crucial Field Product List','is_active'=>TRUE),
            ),
            'page_title'  =>  'Crucial Field Product List',
            'page_header_title' =>  'Crucial Field Product List : '.$project_title
        );

         $page_header_array['auto_repricer_log'] = array(

            'breadcrumbs' =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Auto Repricer Product Log','is_active'=>TRUE),
            ),
            'page_title'  =>  'Auto Repricer Product Log',
            'page_header_title' =>  'Auto Repricer Product Log : '.$project_title
        );

         $page_header_array['dash_rma_orders'] = array(
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Dashboard','url'=>base_url().'dashboard'),
                array('title'=>'RMA Orders', 'is_active'=> TRUE)
            ),
            "page_title"  =>  'RMA Orders',
            "page_header_title" =>  'RMA Orders : '.$project_title
        );

         $page_header_array['dash_item_po_frequency'] = array(
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Dashboard','url'=>base_url().'dashboard'),
                array('title'=>'Item\'s PO Frequency', 'is_active'=> TRUE)
            ),
            "page_title"  =>  'Item\'s PO Frequency',
            "page_header_title" =>  'Item\'s PO Frequency : '.$project_title
        );

        $page_header_array['orders_without_manual_reserved'] = array(
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Orders','url'=>base_url().'orders'),
                array('title'=>'Orders Without Manual Reserve', 'is_active'=> TRUE)
            ),
            "page_title"  =>  'Orders Without Manual Reserve',
            "page_header_title" =>  'Orders Without Manual Reserve : '.$project_title
        );

        $page_header_array['reports_page'] = array(
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'All reports', 'is_active'=> TRUE)
            ),
            "page_title"  =>  'All reports',
            "page_header_title" =>  'All reports : '.$project_title
        );

        $page_header_array['amazon_fba_fees'] = array(
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Amazon FBA Fees', 'is_active'=> TRUE)
            ),
            "page_title"  =>  'Amazon FBA Fees',
            "page_header_title" =>  'Amazon FBA Fees : '.$project_title
        );


        $page_header_array['advance_search_manager'] = array(
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Advance Search Manager', 'is_active'=> TRUE)
            ),
            "page_title"  =>  'Advance Search Manager',
            "page_header_title" =>  'Advance Search Manager : '.$project_title
        );

        $page_header_array['create_invoice'] = array(
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Create FBA Invoice', 'is_active'=> TRUE)
            ),
            "page_title"  =>  'Create FBA Invoice',
            "page_header_title" =>  'Create FBA Invoice : '.$project_title
        );

        $page_header_array['product_ingredients_list'] = array(
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Product Ingredients', 'is_active'=> TRUE)
            ),
            "page_title"  =>  'Product Ingredients',
            "page_header_title" =>  'Product Ingredients : '.$project_title
        );

        $page_header_array['taxjar_transaction_verification'] = array(
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'TaxJar Transaction Verification', 'is_active'=> TRUE)
            ),
            "page_title"  =>  'TaxJar Transaction Verification',
            "page_header_title" =>  'TaxJar Transaction Verification : '.$project_title
        );

        $page_header_array['taxjar_transaction_orders'] = array(
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'TaxJar Transaction Verification','url'=>base_url().'report/taxjar_transaction_verification/index/'),
                array('title'=>'TaxJar Transaction Orders', 'is_active'=> TRUE)
            ),
            "page_title"  =>  'TaxJar Transaction Orders',
            "page_header_title" =>  'TaxJar Transaction Orders : '.$project_title
        );    
        
        $page_header_array['verify_bin_item'] = array(
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'PO', 'url'=>base_url().'po/po/'),
                array('title'=>'PO receive item in Bin rack', 'is_active'=> TRUE)
            ),
            "page_title"  =>  'PO receive item in Bin rack',
            "page_header_title" =>  'PO receive item in Bin rack : '.$project_title
        );

        $page_header_array['bin_to_warehouse'] = array(
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'PO', 'url'=>base_url().'po/po/'),
                array('title'=>'Receive Bin Item in Warehouse', 'is_active'=> TRUE)
            ),
            "page_title"  =>  'Receive Bin Item In Warehouse',
            "page_header_title" =>  'Receive Bin Item In Warehouse : '.$project_title
        );

        $page_header_array['ebay_bulk_listing_manager'] = array(
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Ebay Bulk Listing Manager', 'is_active'=> TRUE)
            ),
            "page_title"  =>  'Ebay Bulk Listing Manager',
            "page_header_title" =>  'Ebay Bulk Listing Manager : '.$project_title
        );
        
        $page_header_array['ebay_bulk_listing_product'] = array(
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Ebay Bulk Listing Manager', 'url'=>base_url().'ebay_bulk_listing_manager'),
                array('title'=>'Ebay Bulk Listing Products', 'is_active'=> TRUE)
            ),
            "page_title"  =>  'Ebay Bulk Listing Products',
            "page_header_title" =>  'Ebay Bulk Listing Products : '.$project_title
        );

        $page_header_array['suspected_intellectual_property_violations'] = array(
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Amazon Product Policy Violations : Suspected Intellectual Property', 'is_active'=> TRUE)
            ),
            "page_title"  =>  'Amazon Product Policy Violations : Suspected Intellectual Property',
            "page_header_title" =>  'Amazon Product Policy Violations : Suspected Intellectual Property : '.$project_title
        );

        $page_header_array['seller_cloud_order_list'] = array(
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Seller Cloud Order List', 'is_active'=> TRUE)
            ),
            "page_title"  =>  'Seller Cloud Order List',
            "page_header_title" =>  'Seller Cloud Order List : '.$project_title
        );

        $page_header_array['received_intellectual_property_violations'] = array(
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Amazon Product Policy Violations : Received Intellectual Property', 'is_active'=> TRUE)
            ),
            "page_title"  =>  'Amazon Product Policy Violations : Received Intellectual Property',
            "page_header_title" =>  'Amazon Product Policy Violations : Received Intellectual Property : '.$project_title
        );

        $page_header_array['product_authenticity_property_violations'] = array(
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Amazon Product Policy Violations : Product Authenticity', 'is_active'=> TRUE)
            ),
            "page_title"  =>  'Amazon Product Policy Violations : Product Authenticity',
            "page_header_title" =>  'Amazon Product Policy Violations : Product Authenticity : '.$project_title
        );

        $page_header_array['product_condition_property_violations'] = array(
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Amazon Product Policy Violations : Product Condition', 'is_active'=> TRUE)
            ),
            "page_title"  =>  'Amazon Product Policy Violations : Product Condition',
            "page_header_title" =>  'Amazon Product Policy Violations : Product Condition : '.$project_title
        );

        $page_header_array['product_safety_property_violations'] = array(
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Amazon Product Policy Violations : Product Safety', 'is_active'=> TRUE)
            ),
            "page_title"  =>  'Amazon Product Policy Violations : Product Safety',
            "page_header_title" =>  'Amazon Product Policy Violations : Product Safety : '.$project_title
        );

        $page_header_array['listing_policy_property_violations'] = array(
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Amazon Product Policy Violations : Listing Policy', 'is_active'=> TRUE)
            ),
            "page_title"  =>  'Amazon Product Policy Violations : Listing Policy',
            "page_header_title" =>  'Amazon Product Policy Violations : Listing Policy : '.$project_title
        );

        $page_header_array['restricted_products_property_violations'] = array(
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Amazon Product Policy Violations : Restricted Products', 'is_active'=> TRUE)
            ),
            "page_title"  =>  'Amazon Product Policy Violations : Restricted Products',
            "page_header_title" =>  'Amazon Product Policy Violations : Restricted Products : '.$project_title
        );

        $page_header_array['product_review_property_violations'] = array(
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Amazon Product Policy Violations : Customer Product Reviews', 'is_active'=> TRUE)
            ),
            "page_title"  =>  'Amazon Product Policy Violations : Customer Product Reviews',
            "page_header_title" =>  'Amazon Product Policy Violations : Customer Product Reviews : '.$project_title
        );


        $page_header_array['preship_order_list'] = array(
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Order', 'url'=>base_url().'order'),
                array('title'=>'Preship Order List', 'is_active'=> TRUE)
            ),
            "page_title"  =>  'Preship Order List',
            "page_header_title" =>  'Preship Order List : '.$project_title
        );

        $page_header_array['ebay_repricer_products'] = array(
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Ebay Repricer Products', 'is_active'=> TRUE)
            ),
            "page_title"  =>  'Ebay Repricer Products',
            "page_header_title" =>  'Ebay Repricer Products : '.$project_title
        );

        $page_header_array['shadow_parent_products'] = array(
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Shadow Parent Products', 'is_active'=> TRUE)
            ),
            "page_title"  =>  'Shadow Parent Products',
            "page_header_title" =>  'Shadow Parent Products : '.$project_title
        );

         $page_header_array['products_main_image_manager'] = array(
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Products Main Image Manager', 'is_active'=> TRUE)
            ),
            "page_title"  =>  'Products Main Image Manager',
            "page_header_title" =>  'Products Main Image Manager : '.$project_title
        );

        $page_header_array['fba_detailed_sales'] = array(
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'FBA Detailed Sales Report', 'is_active'=> TRUE)
            ),
            "page_title"  =>  'FBA Detailed Sales Report',
            "page_header_title" =>  'FBA Detailed Sales Report : '.$project_title
        );

        $page_header_array['fba_detailed_sales_orders'] = array(
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'FBA Detailed Sales Report','url'=>base_url().'report/fba_detailed_sales'),
                array('title'=>'FBA Orders', 'is_active'=> TRUE)
            ),
            "page_title"  =>  'FBA Orders',
            "page_header_title" =>  'FBA Orders : '.$project_title
        );

        $page_header_array['wholesale_po_without_order'] = array(
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Wholesale PO Without Order', 'is_active'=> TRUE)
            ),
            "page_title"  =>  'Wholesale PO Without Order',
            "page_header_title" =>  'Wholesale PO Without Order : '.$project_title
        );

        $page_header_array['products_without_warehouse_zone'] = array(
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Products Without Warehouse Zone', 'is_active'=> TRUE)
            ),
            "page_title"  =>  'Products Without Warehouse Zone',
            "page_header_title" =>  'Products Without Warehouse Zone : '.$project_title
        );

        $page_header_array['running_apache_processes'] = array(
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Running Apache Processes', 'is_active'=> TRUE)
            ),
            "page_title"  =>  'Running Apache Processes',
            "page_header_title" =>  'Running Apache Processes : '.$project_title
        );

        $page_header_array['user_browse_activity'] = array(
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'User Browse Activity', 'is_active'=> TRUE)
            ),
            "page_title"  =>  'User Browse Activity',
            "page_header_title" =>  'User Browse Activity : '.$project_title
        );

        $page_header_array['hourly_picked_items'] = array(
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Hourly Picked Items', 'is_active'=> TRUE)
            ),
            "page_title"  =>  'Hourly Picked Items',
            "page_header_title" =>  'Hourly Picked Items : '.$project_title
        );

        $page_header_array['hourly_picked_items_list'] = array(
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Hourly Picked Items List', 'is_active'=> TRUE)
            ),
            "page_title"  =>  'Hourly Picked Items List',
            "page_header_title" =>  'Hourly Picked Items List : '.$project_title
        );

        $page_header_array['picked_order_list'] = array(
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Picked Items List', 'is_active'=> TRUE)
            ),
            "page_title"  =>  'Picked Items List',
            "page_header_title" =>  'Picked Items List : '.$project_title
        );     


        $page_header_array['hourly_picked_items_employee'] = array(
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Hourly Picked Items', 'url' => base_url().'report/hourly_picked_items'),
                array('title'=>'Hourly Picked Items - Employee-wise', 'is_active'=> TRUE)

            ),
            "page_title"  =>  'Hourly Picked Items - Employee-wise',
            "page_header_title" =>  'Hourly Picked Items - Employee-wise : '.$project_title
        );

        $page_header_array['dash_monthly_loss_profit_orders'] = array(

            'breadcrumbs' =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Dashboard', 'url' => base_url().'dashboard'),
                array('title' => 'Monthly Loss Profit Orders', 'is_active' => TRUE),
            ),
            'page_title'  =>  'Monthly Loss Profit Orders',
            'page_header_title' =>  'Monthly Loss Profit Orders : '.$project_title
        );

        $page_header_array['dash_out_of_stock_by_vendor_products'] = array(

            'breadcrumbs' =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Dashboard', 'url' => base_url().'dashboard'),
                array('title' => 'Out Of Stock Products', 'is_active' => TRUE),
            ),
            'page_title'  =>  'Out Of Stock Products',
            'page_header_title' =>  'Out Of Stock Products : '.$project_title
        );

        $page_header_array['dash_channelwise_skus_with_inventory_products'] = array(

            'breadcrumbs' =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Dashboard', 'url' => base_url().'dashboard'),
                array('title' => 'Channelwise SKU with Inventory', 'is_active' => TRUE),
            ),
            'page_title'  =>  'Channelwise SKU with Inventory',
            'page_header_title' =>  'Channelwise SKU with Inventory : '.$project_title
        );

        $page_header_array['brand_product_list'] = array(

            'breadcrumbs' =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Brands', 'url' => base_url().'brand'),
                array('title' => 'Brand Products', 'is_active' => TRUE),
            ),
            'page_title'  =>  'Brand Products',
            'page_header_title' =>  'Brand Products : '.$project_title
        );

        $page_header_array['manufacturer_product_list'] = array(

            'breadcrumbs' =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Manufacturer', 'url' => base_url().'manufacturer'),
                array('title' => 'Manufacturer Products', 'is_active' => TRUE),
            ),
            'page_title'  =>  'Manufacturer Products',
            'page_header_title' =>  'Manufacturer Products : '.$project_title
        );

        $page_header_array['do_not_reorder_reason'] = array(
            
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Do Not Reorder Reasons', 'is_active' => TRUE)
            ),
            "page_title"  =>  'Do Not Reorder Reasons',
            "page_header_title" =>  'Do Not Reorder Reasons : '.$project_title

        );

        $page_header_array['channel_bulk_payment'] = array(
            
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Channel Bulk Payment', 'is_active' => TRUE)
            ),
            "page_title"  =>  'Channel Bulk Payment',
            "page_header_title" =>  'Channel Bulk Payment : '.$project_title

        );

        $page_header_array['pick_list_order_report'] = array(
            
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Pick List Order Report', 'is_active' => TRUE)
            ),
            "page_title"  =>  'Pick List Order Report',
            "page_header_title" =>  'Pick List Order Report : '.$project_title

        );

        $page_header_array['product_upc_job_list'] = array(
            
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Product UPC Job List', 'is_active' => TRUE)
            ),
            "page_title"  =>  'Product UPC Job List',
            "page_header_title" =>  'Product UPC Job List : '.$project_title

        );
        
        $page_header_array['amazon_product_sales_report'] = array(
            
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Amazon Product Sales Report', 'is_active' => TRUE)
            ),
            "page_title"  =>  'Amazon Product Sales Report',
            "page_header_title" =>  'Amazon Product Sales Report : '.$project_title
        );

        $page_header_array['upc_product_details_list'] = array(
            
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Product UPC Details', 'is_active' => TRUE)
            ),
            "page_title"  =>  'Product UPC Details',
            "page_header_title" =>  'Product UPC Details : '.$project_title

        );

        $page_header_array['sales_history_report'] = array(
            
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Sales History Report', 'is_active' => TRUE)
            ),
            "page_title"  =>  'Sales History Report',
            "page_header_title" =>  'Sales History Report : '.$project_title
        );

        $page_header_array['sales_history_orders'] = array(
            
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Sales History Report','url'=>base_url().'report/sales_history'),
                array('title'=>'Sales History Orders', 'is_active' => TRUE)
            ),
            "page_title"  =>  'Sales History Orders',
            "page_header_title" =>  'Sales History Orders : '.$project_title
        );

        $page_header_array['search_product'] = array(

            'breadcrumbs' =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Inventory','url'=>base_url().'inventory/inventory_master'),
                array('title'=>'Search Product','is_active'=>TRUE),
            ),
            'page_title'  =>  'Search Product',
            'page_header_title' =>  'Search Product : '.$project_title
        );

        $page_header_array['search_location'] = array(

            'breadcrumbs' =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Warehouse Location Details','url'=>base_url().'report/in_house_sellable_location'),
                array('title'=>'Search Location','is_active'=>TRUE),
            ),
            'page_title'  =>  'Search Location',
            'page_header_title' =>  'Search Location : '.$project_title
        );

        $page_header_array['incomplete_product_list'] = array(

            'breadcrumbs' =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Inventory','url'=>base_url().'inventory/inventory_master'),
                array('title'=>'Incomplete Product List','is_active'=>TRUE),
            ),
            'page_title'  =>  'Incomplete Product List',
            'page_header_title' =>  'Incomplete Product List : '.$project_title
        );

        $page_header_array['temp_wholesale_product_list'] = array(
            'breadcrumbs' =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Temp Wholesale Product List','is_active'=>TRUE),
            ),
            'page_title'  =>  'Temp Wholesale Product List',
            'page_header_title' =>  'Temp Wholesale Product List : '.$project_title
        );

        $page_header_array['temp_wholesale_cycle_count'] = array(
            'breadcrumbs' =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Temp Wholesale Product List','url'=>base_url().'temp_wholesale/product_list'),
                array('title'=>'Product Detail','is_active'=>TRUE),
            ),
            'page_title'  =>  'Product Detail',
            'page_header_title' =>  'Product Detail : '.$project_title
        );

        $page_header_array['products_not_in_autorepricer'] = array(
            'breadcrumbs' =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Products Not In Repricer','is_active'=>TRUE),
            ),
            'page_title'  =>  'Products Not In Repricer',
            'page_header_title' =>  'Products Not In Repricer : '.$project_title
        );

        $page_header_array['fba_removal_orders'] = array(
            'breadcrumbs' =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'FBA Removal Orders','is_active'=>TRUE),
            ),
            'page_title'  =>  'FBA Removal Orders',
            'page_header_title' =>  'FBA Removal Orders : '.$project_title
        );

        $page_header_array['amazon_bulk_listing_manager'] = array(
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Amazon Bulk Listing Manager', 'is_active'=> TRUE)
            ),
            "page_title"  =>  'Amazon Bulk Listing Manager',
            "page_header_title" =>  'Amazon Bulk Listing Manager : '.$project_title
        );
        
        $page_header_array['amazon_bulk_listing_product'] = array(
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Amazon Bulk Listing Manager', 'url'=>base_url().'amazon_bulk_listing_manager'),
                array('title'=>'Amazon Bulk Listing Products', 'is_active'=> TRUE)
            ),
            "page_title"  =>  'Amazon Bulk Listing Products',
            "page_header_title" =>  'Amazon Bulk Listing Products : '.$project_title
        );

        $page_header_array['fba_verify_bin_item'] = array(
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'FBA Removal Orders', 'url'=>base_url().'report/fba_removal_orders/'),
                array('title'=>'FBA receive item in Bin rack', 'is_active'=> TRUE)
            ),
            "page_title"  =>  'FBA receive item in Bin rack',
            "page_header_title" =>  'FBA receive item in Bin rack : '.$project_title
        );

        $page_header_array['fba_bin_to_warehouse'] = array(
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'FBA Removal Orders', 'url'=>base_url().'report/fba_removal_orders/'),
                array('title'=>'Receive Bin Item in Warehouse', 'is_active'=> TRUE)
            ),
            "page_title"  =>  'Receive Bin Item In Warehouse',
            "page_header_title" =>  'Receive Bin Item In Warehouse : '.$project_title
        );

        $page_header_array['po_rma_transfer_log'] = array(
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Purchase Order List', 'url'=>base_url().'po/po/'),
                array('title'=>'PO RMA Transfer Log', 'is_active'=> TRUE)
            ),
            "page_title"  =>  'PO RMA Transfer Log',
            "page_header_title" =>  'PO RMA Transfer Log : '.$project_title
        );

        $page_header_array['amazon_parent_variations'] = array(
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Amazon ASIN Parent Variations', 'is_active'=> TRUE)
            ),
            "page_title"  =>  'Amazon ASIN Parent Variations',
            "page_header_title" =>  'Amazon ASIN Parent Variations : '.$project_title
        );


          $page_header_array['get_vendor_po_count_report'] = array(

            'breadcrumbs' =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Dashboard', 'url' => base_url().'dashboard'),
                array('title' => 'Vendor PO Count Report', 'is_active' => TRUE),
            ),
            'page_title'  =>  'Vendor PO Count Report',
            'page_header_title' =>  'Vendor PO Count Report : '.$project_title
        );
        
         $page_header_array['tax_exempt_form_list'] = array(

            'breadcrumbs' =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title' => 'Tax Exempt Forms List', 'is_active' => TRUE),
            ),
            'page_title'  =>  'Tax Exempt Forms List',
            'page_header_title' =>  'Tax Exempt Forms List : '.$project_title
        );

        $page_header_array['order_replacement_reason'] = array(
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Order Replacement Reason', 'is_active'=> TRUE)
            ),
            "page_title"  =>  'Order Replacement Reason',
            "page_header_title" =>  'Order Replacement Reason : '.$project_title
        );

        $page_header_array['customers_inquiry_reason'] = array(
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Customers Inquiry Reason', 'is_active'=> TRUE)
            ),
            "page_title"  =>  'Customers Inquiry Reason',
            "page_header_title" =>  'Customers Inquiry Reason : '.$project_title
        );
        /////////////////
        $page_header_array['partially_bin_reason'] = array(
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Partially BIN Reason', 'is_active'=> TRUE)
            ),
            "page_title"  =>  'Partially BIN Reason',
            "page_header_title" =>  'Partially BIN Reason : '.$project_title
        );
        ////////////////
        /////////////////
        $page_header_array['root_category'] = array(
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Category List', 'is_active'=> TRUE)
            ),
            "page_title"  =>  'Category List',
            "page_header_title" =>  'Category List : '.$project_title
        ); 
        $page_header_array['product_buying_category'] = array(
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Product Buying Category List', 'is_active'=> TRUE)
            ),
            "page_title"  =>  'Product Buying Category ',
            "page_header_title" =>  'Product Buying Category List : '.$project_title
        ); 


        
        ///////////////////
        // article start //
        //////////////////
        $page_header_array['article'] = array(
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Article List', 'is_active'=> TRUE)
            ),
            "page_title"  =>  'Article List',
            "page_header_title" =>  'Article List : '.$project_title
        );

        $page_header_array['article_edit'] = array(
            
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Article List','url'=>base_url().'knowledge_base/article'),          
                array('title'=>'Edit Article','is_active'=>TRUE),
            ),
            "page_title"  =>  'Edit Article',
            "page_header_title" =>  'Edit Article : '.$project_title

        );

        $page_header_array['article_add'] = array(
            
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Article List','url'=>base_url().'knowledge_base/article'),          
                array('title'=>'Add Article','is_active'=>TRUE),
            ),
            "page_title"  =>  'Add Article',
            "page_header_title" =>  'Add Article : '.$project_title

        );

        $page_header_array['article_view'] = array(
            
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Article List','url'=>base_url().'knowledge_base/article'),
                array('title'=>'View Article','is_active'=>TRUE),
            ),
            "page_title"  =>  'View Article',
            "page_header_title" =>  'View Article : '.$project_title

        );
        $page_header_array['sub_category_article'] = array(
            
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Category List','url'=>base_url().'knowledge_base/article'),
                array('title'=>'Sub Category','is_active'=>TRUE),
            ),
            "page_title"  =>  'Sub Category',
            "page_header_title" =>  'Sub Category : '.$project_title

        );

        $page_header_array['article_search'] = array(
            
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Category List','url'=>base_url().'knowledge_base/article'),
                array('title'=>'Search Result','is_active'=>TRUE),
            ),
            "page_title"  =>  'Search Result',
            "page_header_title" =>  'Search Result : '.$project_title

        );

        ///////////////////
        // article start //
        //////////////////
        ////////////////
        $page_header_array['state_expiration_list'] = array(

            'breadcrumbs' =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title' => 'State Expiration List', 'is_active' => TRUE),
            ),
            'page_title'  =>  'State Expiration List',
            'page_header_title' =>  'State Expiration List : '.$project_title
        );

        $page_header_array['replacement_order_list'] = array(

            'breadcrumbs' =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title' => 'Replacement Order List', 'is_active' => TRUE),
            ),
            'page_title'  =>  'Replacement Order List',
            'page_header_title' =>  'Replacement Order List : '.$project_title
        );

        $page_header_array['Order_without_sales_tax'] = array(
            'breadcrumbs' =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title' => 'Order Without sales Tax', 'is_active' => TRUE),
            ),
            'page_title'  =>  'Order Without sales Tax',
            'page_header_title' =>  'Order Without sales Tax : '.$project_title
        );
         $page_header_array['fba_archive_reason'] = array(
            'breadcrumbs' =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title' => 'FBA Archive Reason', 'is_active' => TRUE),
            ),
            'page_title'  =>  'FBA Archive Reason',
            'page_header_title' =>  'FBA Archive Reason : '.$project_title
        );
         $page_header_array['google_listing_manager'] = array(
            'breadcrumbs' =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title' => 'Google listing Manager', 'is_active' => TRUE),
            ),
            'page_title'  =>  'Google listing Manager',
            'page_header_title' =>  'Google listing Manager : '.$project_title
        );

         $page_header_array['edit_google_listing_manager'] = array(
            'breadcrumbs' =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title' => 'Edit Google listing Manager', 'is_active' => TRUE),
            ),
            'page_title'  =>  'Edit Google listing Manager',
            'page_header_title' =>  'Edit Google listing Manager : '.$project_title
        );

         $page_header_array['edit_suspected_intellectual'] = array(
            'breadcrumbs' =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Amazon Product Policy Violations','url'=>base_url().'channel_health/amazon_product_policy_violations'),
                array('title' => 'Edit Violations Policy', 'is_active' => TRUE),
            ),
            'page_title'  =>  'Edit Violations Policy',
            'page_header_title' =>  'Edit Violations Policy : '.$project_title
        );

         $page_header_array['vendor_sales_comparison_report'] = array(
            'breadcrumbs' =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title' => 'Vendor Product Sales Comparison Report', 'is_active' => TRUE),
            ),
            'page_title'  =>  'Vendor Product Sales Comparison Report',
            'page_header_title' =>  'Vendor Product Sales Comparison Report : '.$project_title
        );

         $page_header_array['product_buyer_authenticity_claims'] = array(
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Amazon Product Policy Violations : Buyer Authenticity Claims', 'is_active'=> TRUE)
            ),
            "page_title"  =>  'Amazon Product Policy Violations : Buyer Authenticity Claims',
            "page_header_title" =>  'Amazon Product Policy Violations : Buyer Authenticity Claims : '.$project_title
        );

         $page_header_array['campaign_report'] = array(
            
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Amazon Ads Report','url'=>base_url().'report/advertise/campaign_report'),
                array('title'=>'Campaign Report','is_active'=>TRUE),
            ),
            "page_title"  =>  'Campaign Report',
            "page_header_title" =>  'Campaign Report : '.$project_title
        ); 

         $page_header_array['ad_group_report'] = array(
            
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Amazon Ads Report','url'=>base_url().'report/advertise/ad_group_report'),
                array('title'=>'Ad Group Report','is_active'=>TRUE),
            ),
            "page_title"  =>  'Ad Group Report',
            "page_header_title" =>  'Ad Group Report : '.$project_title
        ); 

          $page_header_array['in_house_replenishable_availability'] = array(
            'breadcrumbs' =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title' => 'In House Replenishable Availability', 'is_active' => TRUE),
            ),
            'page_title'  =>  'In House Replenishable Availability',
            'page_header_title' =>  'In House Replenishable Availability : '.$project_title
        );

          $page_header_array['taxjar_api_call_detail'] = array(
            'breadcrumbs' =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title' => 'TaxJar API Call Detail', 'is_active' => TRUE),
            ),
            'page_title'  =>  'TaxJar API Call Detail',
            'page_header_title' =>  'TaxJar API Call Detail : '.$project_title
        );
           $page_header_array['google_bulk_listing_manager'] = array(
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Google Bulk Listing Manager', 'is_active'=> TRUE)
            ),
            "page_title"  =>  'Google Bulk Listing Manager',
            "page_header_title" =>  'Google Bulk Listing Manager : '.$project_title
        );

         $page_header_array['google_bulk_listing_product'] = array(
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Google Bulk Listing Manager', 'url'=>base_url().'google_bulk_listing_manager'),
                array('title'=>'Google Bulk Listing Products', 'is_active'=> TRUE)
            ),
            "page_title"  =>  'Google Bulk Listing Products',
            "page_header_title" =>  'Google Bulk Listing Products : '.$project_title
        );   
       
        $page_header_array['product_log_report'] = array(
            'breadcrumbs' =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title' => 'Product Logs Report', 'is_active' => TRUE),
            ),
            'page_title'  =>  'Product Logs Report',
            'page_header_title' =>  'Product Logs Report : '.$project_title
        );

        $page_header_array['order_log_report'] = array(
            'breadcrumbs' =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title' => 'Order Logs Report', 'is_active' => TRUE),
            ),
            'page_title'  =>  'Order Logs Report',
            'page_header_title' =>  'Order Logs Report : '.$project_title
        );

        $page_header_array['po_note_logs_report'] = array(
            'breadcrumbs' =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title' => 'PO Logs Report', 'is_active' => TRUE),
            ),
            'page_title'  =>  'PO Logs Report',
            'page_header_title' =>  'PO Logs Report : '.$project_title
        );

         $page_header_array['order_notes_logs_report'] = array(
            'breadcrumbs' =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title' => 'Order Notes List', 'is_active' => TRUE),
            ),
            'page_title'  =>  'Order Notes List',
            'page_header_title' =>  'Order Notes List : '.$project_title
        );


          //PO Report
        $page_header_array['po_order_demand_report'] = array(
            
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Wholesale POs - Received vs Order Demand Report','is_active'=>TRUE),
            ),
            "page_title"  =>  'Wholesale POs - Received vs Order Demand Report',
            "page_header_title" =>  'Wholesale POs - Received vs Order Demand Report : '.$project_title

        );

        $page_header_array['edit_po_order_demand_report'] = array(
            
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'PO items','is_active'=>TRUE),
            ),
            "page_title"  =>  'PO items',
            "page_header_title" =>  'PO items : '.$project_title

        );

          $page_header_array['warehouse_order_list_report'] = array(
            
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Pending Picklist Warehouse Orders','is_active'=>TRUE),
            ),
            "page_title"  =>  'Pending Picklist Warehouse Orders',
            "page_header_title" =>  'Pending Picklist Warehouse Orders : '.$project_title

        );

        $page_header_array['orders_recieved_vs_shipped_index'] = array(
            
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Orders Received vs Orders Shipped','is_active'=>TRUE),
            ),
            "page_title"  =>  'Orders Received vs Orders Shipped',
            "page_header_title" =>  'Orders Received vs Orders Shipped : '.$project_title

        );  
        
        $page_header_array['vendor_billing_group_list'] = array(
            "breadcrumbs" =>  array(
                array('title' =>'Home','url'=>base_url()),
                array('title' =>'Vendor Billing Group List','is_active'=>TRUE),
            ),
            "page_title"        =>  'Vendor Billing Group List',
            "page_header_title" =>  'Vendor Billing Group List : '.$project_title
        );

        $page_header_array['amazon_ranking_report'] = array(
            "breadcrumbs" =>  array(
                array('title' =>'Home','url'=>base_url()),
                array('title' =>'Amazon Ranking Report','is_active'=>TRUE),
            ),
            "page_title"        =>  'Amazon Ranking Report',
            "page_header_title" =>  'Amazon Ranking Report : '.$project_title
        );

        $page_header_array['issue_pick_list_orders_report'] = array(
            "breadcrumbs" =>  array(
                array('title' =>'Home','url'=>base_url()),
                array('title' =>'Issue Pick List Orders Report','is_active'=>TRUE),
            ),
            "page_title"        =>  'Issue Pick List Orders Report',
            "page_header_title" =>  'Issue Pick List Orders Report : '.$project_title
        );

        $page_header_array['product_all_po_report'] = array(
            "breadcrumbs" =>  array(
                array('title' =>'Home','url'=>base_url()),
                array('title' =>'Product All PO Report','is_active'=>TRUE),
            ),
            "page_title"        =>  'Product All PO Report',
            "page_header_title" =>  'Product All PO Report : '.$project_title
        );

        $page_header_array['hourly_order_list'] = array(
            "breadcrumbs" =>  array(
                array('title' =>'Home','url'=>base_url()),
                array('title' =>'Shipped Order List - Hour-wise','is_active'=>TRUE),
            ),
            "page_title"        =>  'Shipped Order List - Hour-wise',
            "page_header_title" =>  'Shipped Order List - Hour-wise : '.$project_title
        );

        $page_header_array['get_customer_inquiry_order_list_report'] = array(
            "breadcrumbs" =>  array(
                array('title' =>'Home','url'=>base_url()),
                array('title' =>'Customer Inquiry Order List','is_active'=>TRUE),
            ),
            "page_title"        =>  'Customer Inquiry Order List',
            "page_header_title" =>  'Customer Inquiry Order List : '.$project_title
        );

        $page_header_array['pick_list_issue_detail_report'] = array(
            "breadcrumbs" =>  array(
                array('title' =>'Home','url'=>base_url()),
                array('title' =>'Pick List Issue Detail Report','is_active'=>TRUE),
            ),
            "page_title"        =>  'Pick List Issue Detail Report',
            "page_header_title" =>  'Pick List Issue Detail Report : '.$project_title
        );


        $page_header_array['sql_editor'] = array(
            "breadcrumbs" =>  array(
                array('title' =>'Home','url'=>base_url()),
                array('title' =>'SQL Editor','is_active'=>TRUE),
            ),
            "page_title"        =>  'SQL Editor',
            "page_header_title" =>  'SQL Editor : '.$project_title
        );
        
        $page_header_array['get_out_of_stock_with_unshipped_order_list_report'] = array(
            "breadcrumbs" =>  array(
                array('title' =>'Home','url'=>base_url()),
                array('title' =>'Out of Stock with Unshipped Orders','is_active'=>TRUE),
            ),
            "page_title"        =>  'Out of Stock with Unshipped Orders',
            "page_header_title" =>  'Out of Stock with Unshipped Orders : '.$project_title
        );
        
        $page_header_array['unshipped_order_list'] = array(
            "breadcrumbs" =>  array(
                array('title' =>'Home','url'=>base_url()),
                array('title' =>'Unshipped Order Detail','is_active'=>TRUE),
            ),
            "page_title"        =>  'Unshipped Order Detail',
            "page_header_title" =>  'Unshipped Order Detail : '.$project_title
        );

        $page_header_array['duplicate_sku_with_same_upc_report'] = array(
            "breadcrumbs" =>  array(
                array('title' =>'Home','url'=>base_url()),
                array('title' =>'Duplicate SKU with same UPC Report','is_active'=>TRUE),
            ),
            "page_title"        =>  'Duplicate SKU with same UPC Report',
            "page_header_title" =>  'Duplicate SKU with same UPC Report : '.$project_title
        );

        $page_header_array['order_followup_reason'] = array(
            "breadcrumbs" =>  array(
                array('title' =>'Home','url'=>base_url()),
                array('title' =>'Order Follow-up Reason','is_active'=>TRUE),
            ),
            "page_title"        =>  'Order Follow-up Reason',
            "page_header_title" =>  'Order Follow-up Reason : '.$project_title
        );
        

        /////////////////////////////////////////////
        ///////////   MailBox Start  ////////////////  
        /////////////////////////////////////////////
        $page_header_array['email_list'] = array(
            "breadcrumbs" =>  array(
                array('title' =>'Home','url'=>base_url()),
                array('title' =>'Email List','is_active'=>TRUE),
            ),
            "page_title"        =>  'Email List',
            "page_header_title" =>  'Email List : '.$project_title
        );

        $page_header_array['read_email'] = array(
            "breadcrumbs" =>  array(
                array('title' =>'Home','url'=>base_url()),
                array('title' =>'Read Email','is_active'=>TRUE),
            ),
            "page_title"        =>  'Read Email',
            "page_header_title" =>  'Read Email : '.$project_title
        );

        $page_header_array['compose_email'] = array(
            "breadcrumbs" =>  array(
                array('title' =>'Home','url'=>base_url()),
                array('title' =>'Compose Email','is_active'=>TRUE),
            ),
            "page_title"        =>  'Compose Email',
            "page_header_title" =>  'Compose Email : '.$project_title
        );

        /////////////////////////////////////////////
        ///////////   MailBox End  ////////////////  
        /////////////////////////////////////////////

        $page_header_array['dash_weekly_vendor_po_report'] = array(
            "breadcrumbs" =>  array(
                array('title' =>'Home','url'=>base_url()),
                array('title' =>'Weekly Vendor PO Report','is_active'=>TRUE),
            ),
            "page_title"        =>  'Weekly Vendor PO Report',
            "page_header_title" =>  'Weekly Vendor PO Report : '.$project_title
        );

        $page_header_array['sales_by_product_classification'] = array(
            "breadcrumbs" =>  array(
                array('title' =>'Home','url'=>base_url()),
                array('title' =>'Orders By Product Classification Report','is_active'=>TRUE),
            ),
            "page_title"        =>  'Orders By Product Classification Report',
            "page_header_title" =>  'Orders By Product Classification Report : '.$project_title
        );

        $page_header_array['live_shipping_dashboard'] = array(
            "breadcrumbs" =>  array(
                array('title' =>'Home','url'=>base_url()),
                array('title' =>'Live Shipping Dashboard','is_active'=>TRUE),
            ),
            "page_title"        =>  'Live Shipping Dashboard',
            "page_header_title" =>  'Live Shipping Dashboard : '.$project_title
        );

        $page_header_array['dash_estimated_vs_final_shipping_cost'] = array(
            "breadcrumbs" =>  array(
                array('title' =>'Home','url'=>base_url()),
                array('title' =>'Orders By Estimated vs Final Shipping Cost','is_active'=>TRUE),
            ),
            "page_title"        =>  'Orders By Estimated vs Final Shipping Cost',
            "page_header_title" =>  'Orders By Estimated vs Final Shipping Cost : '.$project_title
        );

        $page_header_array['dash_monthly_amazon_rma_orders'] = array(
            "breadcrumbs" =>  array(
                array('title' =>'Home','url'=>base_url()),
                array('title' =>'Monthly Amazon RMA Orders','is_active'=>TRUE),
            ),
            "page_title"        =>  'Monthly Amazon RMA Orders',
            "page_header_title" =>  'Monthly Amazon RMA Orders : '.$project_title
        );

        $page_header_array['warehouse_inventory_inquiry_report'] = array(
            "breadcrumbs" =>  array(
                array('title' =>'Home','url'=>base_url()),
                array('title' =>'Warehouse Inventory Inquiry Report','is_active'=>TRUE),
            ),
            "page_title"        =>  'Warehouse Inventory Inquiry Report',
            "page_header_title" =>  'Warehouse Inventory Inquiry Report : '.$project_title
        );

        $page_header_array['warehouse_inventory_order_list_report'] = array(
            "breadcrumbs" =>  array(
                array('title' =>'Home','url'=>base_url()),
                array('title' =>'Order List by Warehouse Inventory','is_active'=>TRUE),
            ),
            "page_title"        =>  'Order List by Warehouse Inventory',
            "page_header_title" =>  'Order List by Warehouse Inventory : '.$project_title
        );

        $page_header_array['preship_list_scheduler'] = array(
            "breadcrumbs" =>  array(
                array('title' =>'Home','url'=>base_url()),
                array('title' =>'Preship Scheduler','is_active'=>TRUE),
            ),
            "page_title"        =>  'Preship Scheduler',
            "page_header_title" =>  'Preship Scheduler : '.$project_title
        );

        $page_header_array['preship_list'] = array(
            "breadcrumbs" =>  array(
                array('title' =>'Home','url'=>base_url()),
                array('title' =>'Preship List','is_active'=>TRUE),
            ),
            "page_title"        =>  'Preship List',
            "page_header_title" =>  'Preship List : '.$project_title
        );

        $page_header_array['internal_tracking_status'] = array(
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Internal Tracking Status List', 'is_active'=> TRUE)
            ),
            "page_title"  =>  'Internal Tracking Status List',
            "page_header_title" =>  'Internal Tracking Status List : '.$project_title
        );

        $page_header_array['tracking_status_mapping'] = array(
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Tracking Status Mapping', 'is_active'=> TRUE)
            ),
            "page_title"  =>  'Tracking Status Mapping',
            "page_header_title" =>  'Tracking Status Mapping : '.$project_title
        );

        $page_header_array['fba_sku_list_report'] = array(
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'FBA SKU List', 'is_active'=> TRUE)
            ),
            "page_title"  =>  'FBA SKU List',
            "page_header_title" =>  'FBA SKU List : '.$project_title
        );

        $page_header_array['in_house_wholesale_locations'] = array(
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'In-House Wholesale Locations', 'is_active'=> TRUE)
            ),
            "page_title"  =>  'In-House Wholesale Locations',
            "page_header_title" =>  'In-House Wholesale Locations : '.$project_title
        );

        $page_header_array['dash_weekly_vendor_group_po_report'] = array(
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Weekly Vendor Group PO Report', 'is_active'=> TRUE)
            ),
            "page_title"  =>  'Weekly Vendor Group PO Report',
            "page_header_title" =>  'Weekly Vendor Group PO Report : '.$project_title
        );

         $page_header_array['hourly_received_items'] = array(
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Hourly Received Items', 'is_active'=> TRUE)
            ),
            "page_title"  =>  'Hourly Received Items',
            "page_header_title" =>  'Hourly Received Items : '.$project_title
        );

        $page_header_array['hourly_received_items_employee'] = array(
            "breadcrumbs" =>  array(
                array('title'=>'Home','url'=>base_url()),
                array('title'=>'Hourly Received Items', 'url' => base_url().'report/hourly_received_items'),
                array('title'=>'Hourly Received Items - Employee-wise', 'is_active'=> TRUE)

            ),
            "page_title"  =>  'Hourly Received Items - Employee-wise',
            "page_header_title" =>  'Hourly Received Items - Employee-wise : '.$project_title
        );

        $page_header_array['hourly_received_order_list'] = array(
            "breadcrumbs" =>  array(
                array('title' =>'Home','url'=>base_url()),
                array('title' =>'Received Order List - Hour-wise','is_active'=>TRUE),
            ),
            "page_title"        =>  'Received Order List - Hour-wise',
            "page_header_title" =>  'Received Order List - Hour-wise : '.$project_title
        );

        $page_header_array['true_value_product_list'] = array(
            "breadcrumbs" =>  array(
                array('title' =>'Home','url'=>base_url()),
                array('title' =>'True Value Product List','is_active'=>TRUE),
            ),
            "page_title"        =>  'True Value Product List',
            "page_header_title" =>  'True Value Product List : '.$project_title
        );

        $page_header_array['user_action_requests'] = array(
            "breadcrumbs" =>  array(
                array('title' =>'Home','url'=>base_url()),
                array('title' =>'User Action Requests','is_active'=>TRUE),
            ),
            "page_title"        =>  'User Action Requests',
            "page_header_title" =>  'User Action Requests : '.$project_title
        );



        $page_header_array['dash_abc_analysis_report'] = array(
            "breadcrumbs" =>  array(
                array('title' =>'Home','url'=>base_url()),
                array('title' =>'ABC Analysis Summary','is_active'=>TRUE),
            ),
            "page_title"        =>  'ABC Analysis Summary',
            "page_header_title" =>  'ABC Analysis Summary : '.$project_title
        );

        $page_header_array['system_notifications'] = array(
            "breadcrumbs" =>  array(
                array('title' =>'Home','url'=>base_url()),
                array('title' =>'System Notifications','is_active'=>TRUE),
            ),
            "page_title"        =>  'System Notifications',
            "page_header_title" =>  'System Notifications : '.$project_title
        );

        $page_header_array['user_notifications'] = array(
            "breadcrumbs" =>  array(
                array('title' =>'Home','url'=>base_url()),
                array('title' =>'User Notifications','is_active'=>TRUE),
            ),
            "page_title"        =>  'User Notifications',
            "page_header_title" =>  'User Notifications : '.$project_title
        );

        $page_header_array['dash_product_by_location_inventory_report'] = array(
            "breadcrumbs" =>  array(
                array('title' =>'Home','url'=>base_url()),
                array('title' =>'Product By Location Inventory','is_active'=>TRUE),
            ),
            "page_title"        =>  'Product By Location Inventory',
            "page_header_title" =>  'Product By Location Inventory : '.$project_title
        );

        $page_header_array['dash_unpicked_pick_list_items_report'] = array(
            "breadcrumbs" =>  array(
                array('title' =>'Home','url'=>base_url()),
                array('title' =>'Unpicked Pick List Items','is_active'=>TRUE),
            ),
            "page_title"        =>  'Unpicked Pick List Items',
            "page_header_title" =>  'Unpicked Pick List Items : '.$project_title
        );

        $page_header_array['international_sales_tax_report'] = array(
            "breadcrumbs" =>  array(
                array('title' =>'Home','url'=>base_url()),
                array('title' =>'International Sales Tax Report','is_active'=>TRUE),
            ),
            "page_title"        =>  'International Sales Tax Report',
            "page_header_title" =>  'International Sales Tax Report : '.$project_title
        );

        $page_header_array['packsize_compatible_product_list'] = array(
            "breadcrumbs" =>  array(
                array('title' =>'Home','url'=>base_url()),
                array('title' =>'Pack Size Compatible Product List','is_active'=>TRUE),
            ),
            "page_title"        =>  'Pack Size Compatible Product List',
            "page_header_title" =>  'Pack Size Compatible Product List : '.$project_title
        );
        
        ////TNT END


        $page_header_data = $page_header_array[$page_type];

        return $page_header_data;
    }
?>
