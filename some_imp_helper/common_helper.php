<?php
/*
	@Description	: Function to get currency symbol based on currency code
	@Author			: Yogesh Hotchandani
	@Input			: Currency Code
	@Output			: Currency Symbol
	@Date			: 02-10-2016
*/
	function currency_symbol($currency_code='USD')
	{
		$currency_code = ($currency_code!='') ? strtoupper($currency_code) :'USD';

		$currency = array(
    		"USD" => "&#36;", 		 //U.S. Dollar
    		"AUD" => "&#36;",        //Australian Dollar
    		"BRL" => "R&#36;",       //Brazilian Real
    		"CAD" => "CAD&#36;",       //Canadian Dollar
    		"CZK" => "K&#269;",      //Czech Koruna
    		"DKK" => "kr",           //Danish Krone
    		"EUR" => "&euro;",       //Euro
    		"HKD" => "&#36;" , 		 //Hong Kong Dollar
    		"HUF" => "Ft" ,          //Hungarian Forint
    		"ILS" => "&#x20aa;",     //Israeli New Sheqel
    		"INR" => "&#8377;",      //Indian Rupee
    		"JPY" => "&yen;" ,       //Japanese Yen 
    		"MYR" => "RM" ,          //Malaysian Ringgit 
    		"MXN" => "&#36;" ,        //Mexican Peso
    		"NOK" => "kr" ,          //Norwegian Krone
    		"NZD" => "&#36;" , 		 //New Zealand Dollar
    		"PHP" => "&#x20b1;" ,    //Philippine Peso
    		"PLN" => "&#122;&#322;", //Polish Zloty
    		"GBP" => "&pound;",      //Pound Sterling
    		"SEK" => "kr" ,          //Swedish Krona
    		"CHF" => "Fr" ,          //Swiss Franc
    		"TWD" => "&#36;" , 		 //Taiwan New Dollar 
    		"THB" => "&#3647;" ,     //Thai Baht
    		"TRY" => "&#8378;"       //Turkish Lira
    	);

		if(array_key_exists($currency_code, $currency))
		{
			return $currency[$currency_code];
		}
		else
		{
			return '$';
		}
	}

	function currency_symbol_icon($currency_code='USD')
	{
		$currency_code = ($currency_code!='') ? strtoupper($currency_code) :'USD';

		$currency = array(
    		"USD" => "$", 		 //U.S. Dollar
    		"AUD" => "$",
    		"CAD" => "CAD$",
    		"GBP" => "£"
    	);

		if(array_key_exists($currency_code, $currency))
		{
			return $currency[$currency_code];
		}
		else
		{
			return '$';
		}
	}


/*
	@Description	: Function to get currency symbol based on currency code
	@Author	: Yogesh Hotchandani
	@Input	: Currency Ammount
	@Output	: Currency Amount Formatted
	@Date		: 02-10-2016
 */
	function currency_format($currency_amount)
	{
		return number_format((float) $currency_amount, 2, '.', ',');
	}

/*
	@Description	: Function to get fba shipment unique name
	@Author	: Shantanu
	@Input	: Shipment unique number
	@Output	: Shipment unique name
	@Date		: 10-01-2017
 */
	function get_shipment_unique_name($unique_no)
	{
		return 'Shipment'.$unique_no;
	}


/*
	@Description	: Function to print any in pre style
	@Author	: Yogesh Hotchandani
	@Input	: Only One Value
	@Output	: Print Output of Variable
	@Date		: 25-09-2016
 */

	function pr1($Var)
	{
		echo "<pre>";
		print_r($Var);
		echo "</pre>";
		//exit;
	}


	function pr($Var = '')
	{	
		echo "<pre>";
		print_r($Var);
		echo "</pre>";
		exit;
	}

/*
		@Description: Function to convert yy-mm-dd format to d-m-y format
		@Author	: Yogesh Hotchandani
		@Input	: date , format
		@Output	: Appropriate Format
		@Date	: 02-10-2016
	*/

		function format_date($date=NULL,$format = "d M y , h:i A")
		{
			$formatDate = NULL;
			if($date!=NULL && $date!="0000-00-00" && $date!="0000-00-00 00:00:00")
			{
				$formatDate =  date($format,strtotime($date));
			}
			return $formatDate;
		}


	 /*
		@Description: To get current date time from system
		@Author     : Yogesh
		@Input      : 
		@Output     : current date time
		@Date       : 22-09-2016
		*/  

		function get_inserted_date_time()
		{
			return date('Y-m-d H:i:s');
		}

		/*
		@Description: To get Success or Error message
		@Author     : Harshad Hirapara
		@Input      : alert type,message to display in alert
		@Output     : alert message
		@Date       : 22-09-2016
		*/  

		function get_alert_message($type,$message)
		{
			return "<script>toastr['".$type."']('".$message."');</script>";
		}

		/*
		@Description: To get encrypt string
		@Author     : Yogesh
		@Input      : to encrypt data
		@Output     : 
		@Date       : 06-10-2016
	*/  

		function helper_encrypt_url_key($string)
		{
			$CI = &get_instance();

			$key = $CI->config->item('encryption_key');

			$encValue =  base64_encode(mcrypt_encrypt(MCRYPT_RIJNDAEL_256, md5($key),$string, MCRYPT_MODE_CBC, md5(md5($key))));

			return strtr($encValue, array("+"=>".", "="=>"-","/"=>"~"));

		}

	/*
		@Description: To get decrypt string
		@Author     : Yogesh
		@Input      : to decrypt data
		@Output     : 
		@Date       : 06-10-2016
	*/  

		function helper_decrypt_url_key($string)
		{
			$CI = &get_instance();

			$key = $CI->config->item('encryption_key');

			$string = strtr($string, array("."=>"+", "-"=>"=", "~"=>"/"));

			$decValue =  rtrim(mcrypt_decrypt(MCRYPT_RIJNDAEL_256, md5($key), base64_decode($string), MCRYPT_MODE_CBC, md5(md5($key))), "\0");

			return $decValue;

		}

	/*
		@Description: To build get query
		@Author     : Yogesh
		@Input      : get data
		@Output     : 
		@Date       : 07-10-2016
	*/  

		function convert_to_build_get_query($array, $qs = false,$if_url_encode_string=false)
		{
			$parts = array();
			if ($qs)
			{
				$parts[] = $qs;
			}
			foreach ($array as $key => $value)
			{
				if (is_array($value))
				{
					foreach ($value as $value2)
					{
						$parts[] = http_build_query(array($key => $value2));
					}
				}
				else
				{
					if(trim($value)!=="")
					{
						$parts[] = http_build_query(array($key =>($if_url_encode_string?urlencode($value):$value)));
					}
				}
			}
			return join('&', $parts);
		}



	/*
		@Description: To build  query from get data
		@Author     : Yogesh
		@Input      : not count get array 
		@Output     : 
		@Date       : 07-10-2016
	*/  

		function build_get_query_from_get($not_count_array=array())
		{
			$CI = &get_instance();
			$get_array = $CI->input->get();
			foreach ($not_count_array as $key => $value)
			{
				if(isset($get_array[$value]))
				{
					unset($get_array[$value]);
				}

				
			}
			foreach ($get_array as $key => $value)
			{
				if(trim($value)==="")
				{
					unset($get_array[$key]);
				}
			}
			return convert_to_build_get_query($get_array);
			
		}


/*
		@Description: To check admin login
		@Author     : krutin shah
		@Input      : 
		@Output     : 
		@Date       : 10-10-2016
*/ 

		function helper_check_admin_login()
		{
			$CI = &get_instance();

			$user_detail = array(); 

			if(!isset($CI->session->user['id']))
			{

				$user_id=@$CI->session->user['id'];

				if(empty($user_id))

				{ 
					if(isset($_COOKIE['user_id']))
					{
						$user_id = helper_decrypt_url_key($_COOKIE['user_id']);

						if(!empty($user_id))
						{
							$CI->load->model('common_model');
							$user_detail = $CI->common_model->select_by_key('user_master',array('id'=>$user_id));
							$CI->session->set_userdata('user',(array)$user_detail);

							$user_detail = $CI->common_model->select_single_specific_field_by_key('user_master','*','id',$user_id);
							$user_image = $CI->common_model->select_single_specific_field_by_key('user_details','user_profile_image','user_id',$user_id);
							$user_detail['user_image']=$user_image['user_profile_image'];
							$CI->session->set_userdata('user',(array)$user_detail);   
							return $CI->session->user['id'];

						}
					}
					
				}
			}
			else
			{
				return $CI->session->user['id'];
			}
			
			$message = array(
				'type' => 'error',
				'msg' => 'Please login to continue'
			);

			$CI->session->set_flashdata('message',$message);

			if($CI->input->is_ajax_request())
			{
				echo '<script type="text/javascript">window.location = "'.base_url().'login?redirect='.urlencode($CI->uri->uri_string().'?'.$_SERVER['QUERY_STRING']).'"</script>';
				exit;
			}
			else
			{
				redirect('/login?redirect='.urlencode($CI->uri->uri_string().'?'.$_SERVER['QUERY_STRING']));
			}

		}


		function create_store_product_url($store_url,$product_identifier)
		{
			return $product_identifier!=""?($store_url.$product_identifier):"";
		}

		function setTimeout($time_start,$time_limit)
		{
			$time_end = microtime(true);
			$execution_time = round($time_end - $time_start);
			if($execution_time>$time_limit)
			{
				return true;
			}
		}


		function convert_object_to_array($object)
		{
			return json_decode(json_encode($object),true);
		}

/*
	@Description: To check File exist in directory
	@Author     : Harshad Hirapara
	@Input      : file path
	@Output     : true if exist or false
	@Date       : 26-10-2016
*/ 
	function check_file_exist($url,$upload_path='TRUE')
	{
		$CI   = &get_instance();

		if($upload_path=='TRUE')
		{
			$path = $CI->config->item('upload_path').$url;
		}
		else
		{
			$path=$url;
		}
		
		if(file_exists($path))
		{
			return TRUE;
		}
		else
		{
			return FALSE;
		}
	}

/*
	@Description: To if not empty value
	@Author     : Yogesh Hotchandani
	@Input      : value
	@Output     : Boolean Result
	@Date       : 24-10-2016
*/ 

	function is_not_empty($value)
	{
		if(!is_array($value))
		{

			$value = (string)$value;
			return (trim($value)!==""?true:false);
		}
		else
		{
			return (!is_empty($value));
		}
	}

	 /*
		@Description: To if empty value
		@Author     : Yogesh Hotchandani
		@Input      : value
		@Output     : Boolean Result
		@Date       : 24-10-2016
		*/ 

		function is_empty($value)
		{
			if(!is_array($value))
			{
				$value = (string)$value;
				return (trim($value)===""?true:false);
			}
			else
			{
				if(empty($value)) return true;
				else
					foreach ($value as $data_value)
					{
						if(is_empty($data_value)) return true;
					}
				}
				return false;
			}

	/*
		@Description: To if proper length
		@Author     : Yogesh Hotchandani
		@Input      : value
		@Output     : Boolean Result
		@Date       : 24-10-2016
		*/ 

		function is_length($value,$length)
		{
			$value = (string)$value;
			return strlen($value)==$length;
		}



		function get_sku($pre="",$post="")
		{
			$first_char = random_string('alnum', 1);

			$uniqid = substr(uniqid(rand(), true), 2, 2);

			$uniqid = $first_char.$uniqid;

			$uniqid = rtrim($uniqid,".");

			$uniqid = strtoupper($pre.$uniqid.mt_rand().$post);

			return strtoupper($uniqid);

		}

	    /*
		@Description: To generate array_column functionality such as set as key and it's respective value
		@Author     : Yogesh Hotchandani
		@Input      : array , index key and it's values
		@Output     : array
		@Date       : 08-11-2016
		*/ 

		function helper_array_column($input, $array_index_key = NULL , $array_value = NULL ) 
		{
			$result = array();

			if(count($input) > 0)
			{
				foreach( $input as $key => $value )
				{

					if(is_array($value))
					{
						$result[is_null($array_index_key) ? $key : (string)(is_callable($array_index_key)?$array_index_key($value,$key):$value[$array_index_key])] = is_null($array_value) ? $value : (is_callable($array_value)?$array_value($value,$key):$value[$array_value]);
					}
					else if(is_object($value))
					{
						$result[is_null($array_index_key) ? $key : (string)$value->$array_index_key] = is_null($array_value) ? $value : $value->$array_value;
					}
					else
					{
						$result[is_null($array_index_key) ? $key : (string)(is_callable($array_index_key)?$array_index_key($value,$key):$key)] = is_null($array_value) ? $value : (string)(is_callable($array_value)?$array_value($value,$key):$value);
					}    
				}
			}    
			
			return $result;
		}

		

		/*
		@Description: To generate array_column functionality such as set as multiple key and it's respective value
		@Author     : Yogesh Hotchandani
		@Input      : array , index key and it's values
		@Output     : array
		@Date       : 08-11-2016
		*/ 

		
		function helper_array_column_multiple_key($input, $array_index_key = NULL , $add_extra_key = FALSE ,  $array_value = NULL) 
		{
			$result = array();

			$add_extra_key_string = "";

			if($add_extra_key)
			{
				$add_extra_key_string = "[]";
			}

			if(count($input) > 0)
			{
				$key_string = (implode("",array_map(function($value)
				{
					$data_string = '[(string)$value["'.$value.'"]]';
					return $data_string;

				},$array_index_key)).$add_extra_key_string);


				foreach( $input as $key => $value)
				{
					if(is_array($value) && $key_string)
					{
						$execution = '$result'.$key_string.' = is_null($array_value) ? $value : $value[$array_value];';
						eval($execution);
					}
				}
			}    
			return $result;
		}


	/*
		@Description: To check if empty value then return default value
		@Author     : Yogesh Hotchandani
		@Input      : value and default value
		@Output     : value of excuted according to proper condition
		@Date       : 08-11-2016
	*/ 


		function helper_check_empty_default_value($value,$default_value=NULL)
		{
			return (is_empty($value)?$default_value:$value);
		}

	/*
	@Description	: Common Helper function to get amazon repricer base URL
	@Author			: Mehul Modh
	@Input			: 
	@Output			: 
	@Date			: 25-05-2016
	*/

	function amazon_repricer_base_url()
	{
		return base_url().AMAZON_REPRICER_PATH;
	}

    /*
	@Description	: Common Helper function to get walmart repricer base URL
	@Author			: Mehul Modh
	@Input			: 
	@Output			: 
	@Date			: 25-05-2016
	*/

	function walmart_repricer_base_url()
	{
		return base_url().WALMART_REPRICER_PATH;
	}

	/*
	@Description	: Common Helper function to get ebay repricer base URL
	@Author			: Jimil Choksi
	@Input			: 
	@Output			: 
	@Date			: 24-04-2018
	*/

	function ebay_repricer_base_url()
	{
		return base_url().EBAY_REPRICER_PATH;
	}


	/*
		@Description    : Function to process the numeric figures upto the given decimal numbers
		@Author     : Mehul Modh
		@Input      : 
		@Output     : 
		@Date     : 12-11-2016
	*/
		
		function round_number($amount, $precesion = 2)
		{
			return round($amount * pow(10, $precesion)) / pow(10, $precesion);
		}

	/*
	@Description  : Function to capitalize and replace underscore from string
	@Author     : Mehul Modh
	@Input      : 
	@Output     : 
	@Date     : 12-11-2016
	*/
	
	function helper_capitalize_replace_underscore_words($string)
	{
		return ucwords(str_replace('_', ' ', $string));
	}

	/*
	@Description  : Function to capitalize words
	@Author     : Mehul Modh
	@Input      : 
	@Output     : 
	@Date     : 12-11-2016
	*/
	
	function helper_ucwords($string)
	{
		return ucwords($string);
	}

	/*
	@Description : Common Helper function to set limit of string
	@Author     : Mehul Modh
	@Input      : 
	@Output     : 
	@Date     : 12-11-2016
	*/
	
	function helper_set_string_limit($string,$limit = '30')
	{
		$string = trim(strip_tags($string));

		if (strlen($string) > $limit) 
		{
			$string = substr($string, 0, $limit).'...';
		}
		
		return $string;
	}

	/*
	@Description	: Common Helper function to convert timezone to hour
	@Author			: Mehul Modh
	@Input			: 
	@Output			: Hour difference
	@Date			: 15-07-2016
	*/
	function convert_timezone_to_hour($timezone) 
	{

		$origin_dtz = new DateTimeZone($timezone);

		$remote_dtz = new DateTimeZone("GMT");

		$origin_dt = new DateTime("now", $origin_dtz);

		$remote_dt = new DateTime("now", $remote_dtz);

		$offset = $origin_dtz->getOffset($origin_dt) - $remote_dtz->getOffset($remote_dt);

		$offset_type = $offset >= 0 ? "+" : "-";

		$offset = abs($offset);

		$hours = floor((int)$offset / 3600);

		$minutes = floor((int)$offset % 60);

		return $offset_type.str_pad($hours, 2, "0", STR_PAD_LEFT) . ":" . str_pad($minutes, 2, "0", STR_PAD_LEFT);
	}

	/*
	@Description	: Common Helper function to get date range array
	@Author			: Mehul Modh
	@Input			: 
	@Output			: Store detail
	@Date			: 29-02-2016
	*/
	function helper_get_date_range($startDate, $endDate, $format="Y-m-d")
	{
        //Create output variable
		$datesArray = array();

        //Calculate number of days in the range
		$total_days = round(abs(strtotime($endDate) - strtotime($startDate)) / 86400, 0) + 1;

		if($total_days<0) { return false; }

        //Populate array of weekdays and counts
		for($day=0; $day<$total_days; $day++)
		{
			$datesArray[] = date($format, strtotime("{$startDate} + {$day} days"));
		}

        //Return results array
		return $datesArray;
	}

	/*
	@Description	: Common Helper function to get date range array
	@Author			: Mehul Modh
	@Input			: 
	@Output			: Store detail
	@Date			: 29-02-2016
	*/
	function helper_get_number_of_days_between_date($startDate, $endDate)
	{
		if(empty($startDate) || empty($endDate) )
		{
			$total_days = '-';
		}
		else
		{
	        //Calculate number of days in the range
			$startDate = date("Y-m-d", strtotime($startDate));
			$endDate = date("Y-m-d", strtotime($endDate));

			$total_days = round(abs(strtotime($endDate) - strtotime($startDate)) / 86400, 0) + 1;
		}

		return $total_days;
	}

	function zerofill($num, $zerofill = 3)
	{
		return str_pad($num, $zerofill, '0', STR_PAD_LEFT);
	}

	function get_internal_order_id($store_id,$store_name,$order_date,$shipping_country)
	{
		$last_three_digits = '';

		$unique_id = '';

		if($store_id != '')
		{
			$last_id = get_last_unique_id($store_id,$order_date);
			
			if(isset($last_id[0]) && $last_id[0] != '')				
			{
//				if($store_name == 'Ebay')
//				{
//					$last_three_digits = str_split($last_id[0],9);
//				}
//				else
//				{
//					$last_three_digits = str_split($last_id[0],7);
//				}

				$last_three_digits = substr($last_id[0],-3,3);

				$last_three_digits = (int)$last_three_digits;
				$last_three_digits = $last_three_digits + 1;
				$last_three_digits = zerofill($last_three_digits);
				$order_date = date('dmy',strtotime($order_date));

				$store_name_split = str_split($store_name,1);
				if($store_name == 'Ebay')
				{
					$unique_id = $store_name_split['0'].$shipping_country.$order_date.''.$last_three_digits;
				}
				else
				{
					$unique_id = $store_name_split['0'].$order_date.''.$last_three_digits;
				}
			}
			else
			{
				$last_three_digits = '001';
				$order_date = date('dmy',strtotime($order_date));
				$store_name_split = str_split($store_name,1);
				if($store_name == 'Ebay')
				{
					$unique_id = $store_name_split['0'].$shipping_country.$order_date.''.$last_three_digits;
				}
				else
				{
					$unique_id = $store_name_split['0'].$order_date.''.$last_three_digits;
				}
			}
			
		}
		
		return $unique_id;
	}

	

	function get_last_unique_id($store_id,$order_date)
	{
		$CI = &get_instance();

		$CI->load->model('Orders_model');

		return $CI->Orders_model->get_last_unique_id($store_id,$order_date);
	}

	/*
		@Description    : Function to process the numeric figures upto the given decimal numbers
		@Author     : Mehul Modh
		@Input      : 
		@Output     : 
		@Date     : 12-11-2016
	*/
		
		function get_discount_price($item_price,$item_discount,$item_discount_type)
		{
			if(!is_null($item_discount_type) && !is_null($item_discount))
			{
				$total_discount = $item_discount_type == 'percentage' ? $item_price * $item_discount / 100 : $item_discount;

				$final_item_price = round_number($item_price - $total_discount) > 0 ? round_number($item_price - $total_discount) : 0;
			}
			else
			{
				$final_item_price = $item_price;
			}

			return $final_item_price;
		}

	/*
		@Description    : Function to process the numeric figures upto the given decimal numbers
		@Author     : Mehul Modh
		@Input      : 
		@Output     : 
		@Date     : 12-11-2016
	*/
		
		function get_after_tax_price($item_price,$item_tax,$item_tax_type)
		{
			if(!is_null($item_tax_type) && !is_null($item_tax))
			{
				$total_tax = $item_tax_type == 'percentage' ? $item_price * $item_tax / 100 : $item_tax;

				$final_item_price = round_number($item_price + $total_tax);
			}
			else
			{
				$final_item_price = $item_price;
			}

			return $final_item_price;
		}

	 /*
  @Description  : Update The Product Quantity Logs
  @Author     : Yogesh Hotchandani
  @Output     : 
  @Date     : 25-02-2017
  */

  function insert_inventory_quantity_logs($param_array)
  {
  	$CI = &get_instance();

  	$CI->load->model('Inventory_model');

  	return $CI->Inventory_model->insert_inventory_quantity_logs($param_array);
  }



	/*
	@Description	: Update The Product Quantity
	@Author			: Yogesh Hotchandani
	@Output			: Update The Quantity
	@Date			: 02-02-2017
	*/

	function update_quantity($param_array)
	{
		$CI = &get_instance();

		/*$CI->load->model('Inventory_model');

		return $CI->Inventory_model->update_quantity($param_array);*/

		$CI->load->model('Update_quantity_model');

		return $CI->Update_quantity_model->update_quantity($param_array);
	}

	/*
	@Description	: Update The Product Quantity
	@Author			: Yogesh Hotchandani
	@Output			: Update The Quantity
	@Date			: 02-02-2017
	*/

	function update_quantity_new($param_array)
	{
		$CI = &get_instance();

		$CI->load->model('Update_quantity_model');

		return $CI->Update_quantity_model->update_quantity($param_array);
	}

	/*
	@Description	: Update The Product Shadow Information
	@Author			: Yogesh Hotchandani
	@Output			: Update The Shadow
	@Date			: 13-09-2017
	*/

	function shadow_update($id_array)
	{
		$CI = &get_instance();
		$CI->load->model('Inventory_model');
		return $CI->Inventory_model->shadow_update($id_array);
	}

	/*
	@Description	: Update The Product kit Information
	@Author			: Yogesh Hotchandani
	@Output			: Update The kit
	@Date			: 13-09-2017
	*/

	function kit_update($id_array)
	{
		$CI = &get_instance();
		$CI->load->model('Inventory_model');
		return $CI->Inventory_model->kit_update($id_array);
	}

	/*
	@Description	: get Currency Rate
	@Author			: Yogesh Hotchandani
	@Output			: get Currency Rate
	@Date			: 05-05-2017
	*/

	function get_currency_rate($from_currency=NULL,$amount=NULL,$to_currency=NULL,$currency_rate=NULL,$round=true)
	{
		$CI = &get_instance();

		$CI->load->model('Currency_model');

		return $CI->Currency_model->get_currency_rate($from_currency,$amount,$to_currency,$currency_rate,$round);
	}


    /*
	@Description	: Update The Product Quantity
	@Author			: Yogesh Hotchandani
	@Output			: Update The Quantity
	@Date			: 02-02-2017
	*/

	function create_po_note($param_array)
	{
		///////////////// ITEM VEIFY //////////////////////

  //       $po_verify_item = array(
  //               'po_id'         => '',
  //               'po_note_type'  =>'ITEM_VERIFY',
  //               'inserted_by'   => $this->log_in_user_id,
  //               'inserted_date' => $inserted_date,
  //               'additional'    => array(
  //                   'user_name'     => $this->session->user['user_name'],
  //                   'sku'           => $sku,
  //                   'po_item_id'    => $po_item_id,
  //                   'quantity'      => $qty_received,
  //                   'warehouse_name'=> $warehouse_name,
  //                   'location'      => $location,
  //                   )  
  //               );

      ///////////////// CREATE PO ////////////////////

  //       $po_note_data = array(
  //               'po_id'         => '1',
  //               'po_note_type'  =>'CREATE',
  //               'inserted_by'   => $this->log_in_user_id,
  //               'inserted_date' => get_inserted_date_time(),
  //               'additional'    => array(
  //                   'user_name'     => 'TNT ADMIN',
  //                   )  
  //               );

  //       ///////////////// PO CHANGE STATUS ////////////////////

  //       $po_note_data = array(
  //               'po_id'         => '1',
  //               'po_note_type'  =>'STATUS_CHANGE',
  //               'inserted_by'   => $this->log_in_user_id,
  //               'inserted_date' => get_inserted_date_time(),
  //               'additional'    => array(
  //                   'from_status'   => 'ARRIVED',
  //                   'to_status'     => 'Closed',
  //                   'user_name'     => 'TNT Admin'
  //                   )  
  //               );

         ///////////////// ITEM_ADD OR ITEM_UPDATE ////////////////////

 // 		$test[] = array(
 // 		           'po_id' =>'5',
 // 		           'po_note_type'=>'ITEM_ADD',
 // 		           'inserted_by'=> '1',
 // 		           'inserted_date'=>get_inserted_date_time(),
 // 		           'additional'=>array(
 // 		               'po_item_id'=>'10',
 // 		               'user_name'=>'Harshad',
 // 		               'quantity'=>'40',
 // 		               'item_price'=>'50',
 // 		               'item_discount'=>'15',
 // 		               'item_discount_type'=>'Fixed',
 // 		               'sku'=>'dsalhdsg'
 // 		               )
 // 		           );

		// $test[] = array(
  //           'po_id' =>'5',
  //           'po_note_type'=>'ITEM_ADD',
  //           'inserted_by'=> '1',
  //           'inserted_date'=>get_inserted_date_time(),
  //           'additional'=>array(
  //               'po_item_id'=>'10',
  //               'user_name'=>'Harshad',
  //               'quantity'=> Array(
  //                   'from' => 18,
  //                   'to' => 19
  //                   ),
  //               'item_price'=> Array(
  //                   'from' => 18,
  //                   'to' => 19
  //                   ),
  //               'item_discount'=> Array(
  //                   'from' => 1800,
  //                   'to' => 80
  //                   ),
  //               'item_discount_type'=>Array(
  //                   'from' => 'Fixed',
  //                   'to' => 'Percentage'
  //                   ),
  //               'sku'=>'N902045094509'
  //               )
  //           );

        ///////////////// ORDER_ASSIGN  OR ORDER_RELEASE////////////////////

  //       $po_note_data = array(
  //               'po_id'         => '1',
  //               'po_note_type'  =>'ORDER_ASSIGN',
  //               'inserted_by'   => $this->log_in_user_id,
  //               'inserted_date' => get_inserted_date_time(),
  //               'additional'    => array(
  //                   'sku'   => '467658478678',
  //					'po_sku'   => '467658478678',
  //                   'order_number' => '14565476',
  //                   'po_item_id'     => '1',
  //                   )  
  //               );

       ///////////////// CUSTOM ////////////////////

  //        $po_note_data = array(
  //               'po_id'         => '1',
  //               'po_note_type'  =>'ORDER_ASSIGN',
  //               'inserted_by'   => $this->log_in_user_id,
  //               'inserted_date' => get_inserted_date_time(),
  //               'additional'    => array(
  //                   'po_note' =>'hello',
  //                   'po_item_id' => '2'
  //                   )  
  //               );

		$CI = &get_instance();

		$CI->load->model('po_model');

		return $CI->po_model->create_po_note($param_array);
	}

	/*
	@Description	: Create order log
	@Author			: Mehul Modh
	@Input			: Log parameters
	@Output			: Order log insert into database
	@Date			: 28-07-2017
	*/

	function create_order_log($log_detail = array())
	{
		/*$log_detail = array(

            'order_id'          =>  '1',
            'order_item_id'     =>  '456',
            'log_type'          =>  'reserved_qty_add',
            'additional'        =>  array(

                'qty'   =>  '2',
                'sku'   =>  'abc',

            )

        );

        $log_detail = array($log_detail);*/

        ///////////////////////

        $status = FALSE;

        if(is_array($log_detail) && count($log_detail) > 0)
        {
        	$CI = &get_instance();

        	$CI->load->model('orders_model');

        	$status = $CI->orders_model->create_order_log($log_detail);
        }

        return $status;
    }


	/*
	@Description	: Create order log
	@Author			: Mehul Modh
	@Input			: Log parameters
	@Output			: Order log insert into database
	@Date			: 28-07-2017
	*/

	function create_product_log($log_detail = array())
	{

		$status = FALSE;

		if(is_array($log_detail) && count($log_detail) > 0)
		{
			$CI = &get_instance();

			$CI->load->model('inventory_model');

			$status = $CI->inventory_model->create_product_log($log_detail);
		}

		return $status;
	}


	/*
	@Description	: Create Pick List log
	@Author			: Harshad Hirapara
	@Input			: Log parameters
	@Output			: Pick List insert into database
	@Date			: 05-10-2020
	*/

	function create_pick_list_log($log_detail = array())
	{
		$status = FALSE;

		if(is_array($log_detail) && count($log_detail) > 0)
		{
			$CI = &get_instance();

			$CI->load->model('pick_list_model');

			$status = $CI->pick_list_model->create_pick_list_log($log_detail);
		}

		return $status;
	}

	/*
	@Description	: Get Advance Search Input Parameter
	@Author			: Yogesh Hotchandani
	@Output			: Advance Search Ids
	@Date			: 10-03-2017
	*/

	function get_advance_search_input_param()
	{
		$CI = &get_instance();

		$data = array();

		if($CI->input->get('advance_search_id'))
		{
			$data['advance_search_id'] = $CI->input->get('advance_search_id');
		}
		else
		{   
			$data['advance_search_id']            = $CI->input->post('advance_search_id')?$CI->input->post('advance_search_id'):NULL;
		}

		if($CI->input->get('advance_search_template_id'))
		{
			$data['advance_search_template_id'] = $CI->input->get('advance_search_template_id');
		}
		else
		{   
			$data['advance_search_template_id']            = $CI->input->post('advance_search_template_id')?$CI->input->post('advance_search_template_id'):NULL;
		}
		return $data;
	}

	function get_advance_search($module = '')
	{
		$data = array();

		if($module != '')
		{
			$CI = &get_instance();
			$data += get_advance_search_input_param();
			$CI->load->model('Advance_search_model','advance_search_model');
			$data['advance_search']        = $CI->advance_search_model->get_advance_search_filter($module,$data['advance_search_id'],$data['advance_search_template_id']);
			$data["advance_search_module"] = $module;
		}
		return $data;
	}

	/*
	@Description	: Process PO Advance Search
	@Author			: Yogesh Hotchandani
	@Output			: 
	@Date			: 10-03-2017
	*/

	function process_po_advance_search($data)
	{
		$CI = &get_instance();
		$CI->load->model('Advance_search_model','advance_search_model');
		$CI->advance_search_model->process_po_advance_search($data);
	}

	/*
	@Description	: Product ID Gettings
	@Author			: Yogesh Hotchandani
	@Output			: 
	@Date			: 10-03-2017
	*/

	function get_product_id($sku=NULL)
	{
		$product_id = NULL;
		if(trim($sku)!="")
		{
			$CI = &get_instance();
			$CI->db->select(array("product_master.id"));
			$CI->db->from("product_master");
			$CI->db->where("product_master.sku",$sku);
			$product_result = $CI->db->get()->result_array();
			if(count($product_result) > 0)
			{
				$product_result = $product_result[0];
				if(!empty($product_result))
				{
					$product_id = $product_result["id"];
				}
			}
		}
		return $product_id;
	}

	/*
	@Description	: Square Crop Image
	@Author			: Yogesh Hotchandani
	@Output			: 
	@Date			: 10-03-2017
	*/

	function square_crop($src_image, $dest_image, $thumb_size = 100, $jpg_quality = 90)
	{

        //////////////// Get dimensions of existing image
		$image = getimagesize($src_image);

        //////////////// Check for valid dimensions
		if( $image[0] <= 0 || $image[1] <= 0 ) return false;

        //////////////// Determine format from MIME-Type
		$image['format'] = strtolower(preg_replace('/^.*?\//', '', $image['mime']));

        //////////////// Import image
		switch( $image['format'] )
		{
			case 'jpg':

			case 'jpeg':
			$image_data = imagecreatefromjpeg($src_image);
			break;

			case 'png':
			$image_data = imagecreatefrompng($src_image);
			break;

			case 'gif':
			$image_data = imagecreatefromgif($src_image);
			break;

			default:
			return false;
			break;
		}

        //////////////// Verify import
		if( $image_data == false ) return false;

        //////////////// Calculate measurements

		if( $image[0] > $image[1] )
		{
               // For landscape images
			$x_offset = ($image[0] - $image[1]) / 2;
			$y_offset = 0;
			$square_size = $image[0] - ($x_offset * 2);
		}
		else
		{
               // For portrait and square images
			$x_offset = 0;
			$y_offset = ($image[1] - $image[0]) / 2;
			$square_size = $image[1] - ($y_offset * 2);
		}

        // Resize and crop
		$canvas = imagecreatetruecolor($thumb_size, $thumb_size);
            // get the color white
		$color = imagecolorallocate($canvas, 255, 255, 255);

            // fill entire image
		imagefill($canvas, 0, 0, $color);
		if(imagecopyresampled($canvas,$image_data,0,0,$x_offset,$y_offset,$thumb_size,$thumb_size,$square_size,$square_size
		)) 
		{

            // Create thumbnail
			switch( strtolower(preg_replace('/^.*\./', '', $dest_image)) )
			{
				case 'jpg':

				case 'jpeg':
				return imagejpeg($canvas, $dest_image, $jpg_quality);
				break;

				case 'png':
				return imagepng($canvas, $dest_image);
				break;

				case 'gif':
				return imagegif($canvas, $dest_image);
				break;

				default:
                    // Unsupported format
				return false;
				break;
			}

		}
		else
		{
			return false;
		} 
	}

     /*
	@Description	: Warehouse Location Divided
	@Author			: Yogesh Hotchandani
	@Output			: 
	@Date			: 04-07-2017
	*/

	function get_location_array($location="")
	{
		$location_array = NULL;

		$location_array = array();

		if(!empty($location))
		{
			$location = trim($location,"-");
			$location_array = explode("-",$location);
		}

		$warehouse_floor_status = FALSE;

		if(array_key_exists("0",$location_array) &&  strtoupper(trim($location_array[0]))==WAREHOUSE_FLOOR_PRECEDED)
		{
			$warehouse_floor_status = TRUE;
		}

		if($warehouse_floor_status)
		{
			return array(
				"warehouse_floor"  => array_key_exists("0",$location_array)?(string)trim($location_array[0]):NULL,
				"warehouse_number" => array_key_exists("1",$location_array)?(string)trim($location_array[1]):NULL,
				"aisle"            => array_key_exists("2",$location_array)?(string)trim($location_array[2]):NULL,
				"shelf"            => array_key_exists("3",$location_array)?(string)trim($location_array[3]):NULL,
				"bin"              => array_key_exists("4",$location_array)?(string)trim($location_array[4]):NULL,
				"other1"           => array_key_exists("5",$location_array)?(string)trim($location_array[5]):NULL,
				"other2"           => array_key_exists("6",$location_array)?(string)trim($location_array[6]):NULL,
				"location"         => $location

			);

		}
		else
		{

			return array(
				"warehouse_floor" => NULL,
				"warehouse_number" => array_key_exists("0",$location_array)?(string)trim($location_array[0]):NULL,
				"aisle"            => array_key_exists("1",$location_array)?(string)trim($location_array[1]):NULL,
				"shelf"            => array_key_exists("2",$location_array)?(string)trim($location_array[2]):NULL,
				"bin"              => array_key_exists("3",$location_array)?(string)trim($location_array[3]):NULL,
				"other1"           => array_key_exists("4",$location_array)?(string)trim($location_array[4]):NULL,
				"other2"           => array_key_exists("5",$location_array)?(string)trim($location_array[5]):NULL,
				"location"         => $location

			);
		}
	}

	function insert_system_scheduler($filter_array=array(),&$job_id=NULL)
	{
		if(!empty($filter_array))
		{
			$CI = &get_instance();
			$CI->load->model('system_scheduler_model','system_scheduler_model');
			$CI->load->model('Common_model');
			$get_last_record = $CI->system_scheduler_model->get_last_record();
			$filter_array['job_id']        = $get_last_record + 1;
			$job_id =  $filter_array['job_id'];
			$filter_array['inserted_date'] = get_inserted_date_time(); 
			$CI->Common_model->insert_all('system_scheduler_master', $filter_array);
		}
	}

	function array_trim($data,$last_step=false)
	{
		$blank_found = true;
		foreach ($data as $key => $value)
		{
			if(is_empty($value) && $blank_found)
			{

				unset($data[$key]);
			}
			else
			{
				$blank_found = false;
				break;
			}
		}
		if(!empty($data) && !$last_step)
		{
			$data = array_reverse($data);
			$data = array_trim($data,true);
			$data = !empty($data)?array_reverse($data):$data;
		}
		return $data;
	}

	function get_company_address()
	{
		$address = array(

			'address_name'		=>	'TNT Deals, Inc',
			'address1'			=>	'7730 W 99th Street',
			'address2'			=>	'',
			'city'				=>	'Hickory Hills',
			'state'				=>	'IL',
			'zipcode'			=>	'60457',
			'country'			=>	'US',

		);

		return $address;
	}

    /*
    @Description    : Function insert data for print
    @Author         : Shantanu
    @Input          : Print data
    @Output         : 
    @Date           : 15-06-2017
    */
    
    function insert_print_file_data($print_data = array())
    {
    	$CI = &get_instance();

    	$CI->session_data = $CI->session->userdata('user');

    	$insert_data = array();

    	if(count($print_data) > 0)
    	{
    		foreach ($print_data as $data) 
    		{
    			if(isset($data['order_id']) && isset($data['file_path']))
    			{
    				$insert_data[] = array(
    					'emp_id' => $CI->session_data['id'],
    					'emp_code' => $CI->session_data['user_email'],
    					'order_id' => $data['order_id'],
    					'file_path' => $data['file_path']
    				);
    			}    
    		}
    	}    

    	if(count($insert_data) > 0)
    	{            
    		$CI->db->insert_batch('order_shipment_print', $insert_data);

            ////////////////////

    		return TRUE;
    	}  

    	return FALSE;
    }
    
    /*
    @Description    : Function to generate order invoice
    @Author         : Shantanu
    @Input          : Order IDs, Action from, Custom folder and zip file name
    @Output         : Generate pdf file and return status
    @Date           : 15-06-2017
    */
    
    function generate_order_detail_invoice($order_ids = array(),$action = 'All',$custom_folder = '',$zip_file = '',$test_call = '0')
    {
    	$CI = &get_instance();

    	$CI->load->model('orders_model');

    	$data["data"] =array();

    	$html = '';
    	$html_slip = '';

    	if(is_array($order_ids) && count($order_ids) > 0)
    	{
    		$data['order_id']  = array_unique($order_ids);

            // get orders type wise data
    		$order_type_data = $CI->orders_model->get_order_type_for_invoice_new($data);

    		if(!empty($order_type_data))
    		{
    			$data_array = array();


    			if(isset($order_type_data['wholesale']))
    			{
    				$data['order_id'] = $order_type_data['wholesale'];

            		// get wholesale order details of manual store data in database for further print
    				$query_array = $CI->orders_model->get_wholesale_order_detail_for_invoice_new($data);
    				$data_array = $data_array + $query_array;
    			}

    			if(isset($order_type_data['other']))
    			{
    				$data['order_id'] = $order_type_data['other'];

            		// get order details of other store data in database for further print
    				$new_query_array = $CI->orders_model->get_order_detail_for_invoice_new($data);
    				$data_array = $data_array + $new_query_array;
    			}	
    		}	

    		$data['data'] = $data_array;

    		if(count($data['data']) > 0)
    		{
    			$files_array = array();
    			foreach ($data["data"] as $print_data) 
    			{
    				if(strtolower($print_data['shipping_detail']['manual_order_type']) == 'wholesale')
    				{
    					$data['print_data'][0] = convert_wholesale_data_into_pagination($print_data, 'pdf'); 
    				} 
    				else
    				{
    					$data['print_data'][0] = $print_data;                        	
    				}	

                    // Load html data for different stores
    				if($print_data['shipping_detail']['store_marketplace'] == 'Groupon')
    				{
    					if($action == 'invoice')
    					{    
    						$html = $CI->load->view('print/groupon_order_detail_invoice',$data,true);
    					}
    					elseif($action == 'slip')
    					{    
    						$html_slip = $CI->load->view('print/groupon_order_detail_packing_slip',$data,true);
    					}
    					else
    					{
    						$html = $CI->load->view('print/groupon_order_detail_invoice',$data,true);

    						$html_slip = $CI->load->view('print/groupon_order_detail_packing_slip',$data,true);
    					}
    				}
    				elseif($print_data['shipping_detail']['store_marketplace'] == 'Wayfair')
    				{
    					if($action == 'invoice')
    					{    
    						$html = $CI->load->view('print/wayfair_order_detail_invoice',$data,true);
    					}
    					elseif($action == 'slip')
    					{    
    						$html_slip = $CI->load->view('print/wayfair_order_detail_packing_slip',$data,true);
    					}
    					else
    					{
    						$html = $CI->load->view('print/wayfair_order_detail_invoice',$data,true);

    						$html_slip = $CI->load->view('print/wayfair_order_detail_packing_slip',$data,true);
    					}
    				}
    				elseif(strtolower($print_data['shipping_detail']['manual_order_type']) == 'wholesale')
    				{
    					if($action == 'invoice')
    					{    
    						$html = $CI->load->view('print/manual_order_detail_invoice',$data,true);
    						
    					}
    					elseif($action == 'slip')
    					{    
    						$html_slip = $CI->load->view('print/manual_order_detail_packing_slip',$data,true);
    					}
    					else
    					{
    						$html = $CI->load->view('print/manual_order_detail_invoice',$data,true);

    						$html_slip = $CI->load->view('print/manual_order_detail_packing_slip',$data,true);
    					}
    				}	
    				else
    				{
    					if($action == 'invoice')
    					{    
    						$html = $CI->load->view('print/order_detail_invoice',$data,true);
    					}
    					elseif($action == 'slip')
    					{    
    						$html_slip = $CI->load->view('print/order_detail_packing_slip',$data,true);
    					}
    					else
    					{
    						$html = $CI->load->view('print/order_detail_invoice',$data,true);

    						$html_slip = $CI->load->view('print/order_detail_packing_slip',$data,true);
    					}
    				}

                 	// Generate order invoice pdf file	
    				if($html != '')
    				{    
    					$file_name = "Invoice-".$print_data['shipping_detail']['order_id'].'.pdf';

    					$file_path = ($custom_folder != '') ? './'.$custom_folder.$file_name : './uploads/order_invoice/'.$file_name;

    					$CI->load->library('pdf/pdf');	

    					$pdf_data = $CI->pdf->pdf_create($html, $file_name, FALSE);	

    					file_put_contents($file_path, $pdf_data);
    					if($zip_file != '' && file_exists($file_path))
    					{
    						$files_array[$file_name] = $file_path;
    					}
    				}

                    // Generate order packing slip pdf file
    				if($html_slip != '')
    				{    
    					$file_name_slip = "Invoice-".$print_data['shipping_detail']['order_id'].'.pdf';

    					$file_path_slip = ($custom_folder != '') ? './'.$custom_folder.$file_name_slip : './uploads/order_packing_slip/'.$file_name_slip;

    					$CI->load->library('pdf/pdf');	

    					$pdf_data = $CI->pdf->pdf_create($html_slip, $file_name_slip, FALSE);	

    					file_put_contents($file_path_slip, $pdf_data);

    					if($zip_file != '' && file_exists($file_path_slip))
    					{
    						$files_array[$file_name_slip] = $file_path_slip;
    					}
    				}
    			}

                //Process to create zip File if files found
    			if(!empty($files_array))
    			{
    				return write_zip($zip_file,$files_array,TRUE);
    			}
    		} 
    	}  

    	if($zip_file != '')
    	{
    		return array("status"=>"error");
    	}
    }

    /*
    @Description    : Function to convert wholesale order data into item wise pagination
    @Author         : Shantanu
    @Input          : Array of order data for print
    @Output         : Converted array of order data for print
    @Date           : 07-09-2018
    */ 

    function convert_wholesale_data_into_pagination($print_data, $format = 'system')
    {
        // $t = array();
        // $k = 1;
        // foreach ($print_data['order_items'] as $item_key1 => $items1) 
        // {
        //     if($k > 2)
        //     { 
        //         for ($j=0; $j < 5; $j++) 
        //         { 
        //             $t[$item_key1+$j] = $items1;
        //         }
        //     }
        //     else
        //     {
        //         $t[$item_key1] = $items1;
        //     }    

        //     $k++;
        // }

        // $print_data['order_items'] = $t;

    	$manual_print_data = array();
    	$total_items = count($print_data['order_items']);
    	$page_number = 1;  
    	$item_limit = ($format == 'pdf')?7:4;
    	$first_page_limit = ($format == 'pdf')?7:6;
    	$other_page_limit = ($format == 'pdf')?10:9;

        // if count of order items is greater than page limit than will converted to multiple page
    	if(isset($print_data['order_items']) && $total_items > $item_limit)
    	{
    		$item_temp = array();
    		$i = 1;

    		foreach ($print_data['order_items'] as $item_key => $items) 
    		{
    			$items_per_page = $total_items;

                // Adjusting number of items as per page
    			if($total_items > $first_page_limit)
    			{
    				if($page_number == 1)
    				{
    					$items_per_page = $first_page_limit;
    				} 
    				else
    				{
    					$items_per_page = $other_page_limit;
    				}                                        
    			} 

                // Change page if items reached per page limit
    			if($i > $items_per_page)
    			{
    				$page_number++;
    				$i = 0;
    			}  

    			$item_temp[$page_number][$item_key] = $items;                              

    			$i++;
    		}  

            // If all items adjust in first page than moving order total into next page
    		if($total_items > $item_limit && $total_items < $first_page_limit)
    		{
    			$item_temp[$page_number + 1][] = array(); 
    		}  

            // Finalize order array
    		if(!empty($item_temp))
    		{
    			foreach ($item_temp as $page => $item_data) 
    			{
    				$manual_print_data[$page] = $print_data;
    				$manual_print_data[$page]['order_items'] = $item_data;
    			}
    		} 
    	}  
    	else
    	{
    		$manual_print_data[$page_number] = $print_data;
    	}

    	return $manual_print_data;
    }

    /*
    @Description    : Function to get PO print config
    @Author         : Harshad Hirapara
    @Input          : Array of order data for print
    @Output         : Converted array of order data for print
    @Date           : 07-09-2018
    */ 

    function get_po_item_page_limit($po_id=NULL)
    {	
    	$CI = &get_instance();
    	
    	$po_page_config['first_page_limit'] = 13;
    	
    	$po_page_config['other_page_limit'] = 13;

    	if($po_id!="")
    	{	
    		$CI->db->select("po_master.po_first_page as first_page_limit,po_master.po_other_page as other_page_limit");
    		
    		$CI->db->from("po_master");

    		$CI->db->where('po_master.id', $po_id);

    		$page_config = $CI->db->get()->row_array();

    		$first_page_limit = get_value($page_config,'first_page_limit','0');

    		$other_page_limit = get_value($page_config,'other_page_limit','0');
    	}

    	if($first_page_limit<="0" || $other_page_limit<="0")
    	{	
    		$first_page_limit = get_global_setting_data("po_first_page_item");

    		$other_page_limit = get_global_setting_data("po_other_page_item");
    	}

    	if($first_page_limit>"0" && $other_page_limit>"0")
    	{
    		$po_page_config['first_page_limit'] = $first_page_limit;

    		$po_page_config['other_page_limit'] = $other_page_limit;
    	}
    	
    	return $po_page_config;
    }

    /*
    @Description    : Function to convert wholesale order data into item wise pagination
    @Author         : Shantanu
    @Input          : Array of order data for print
    @Output         : Converted array of order data for print
    @Date           : 07-09-2018
    */ 

    function convert_po_data_into_pagination($print_data, $format = 'pdf',$total_other_cost=0)
    {	
    	$po_master_id = isset($print_data[0]['id']) ? $print_data[0]['id']:NULL;

    	$po_page_config = get_po_item_page_limit($po_master_id);
    	
    	$manual_print_data = array();
    	$total_items = count($print_data);
    	$page_number = 1;  
    	$item_limit = ($format == 'pdf')?8:5;
    	$first_page_limit = ($format == 'pdf')?$po_page_config['first_page_limit']:$po_page_config['first_page_limit'];
    	$other_page_limit = ($format == 'pdf')?($po_page_config['other_page_limit']-1):($po_page_config['other_page_limit']-1);

        // if count of order items is greater than page limit than will converted to multiple page
    	if(isset($print_data) && $total_items > $item_limit)
    	{
    		$item_temp = array();
    		$i = 1;

    		foreach ($print_data as $item_key => $items) 
    		{
    			$items_per_page = $total_items;

                // Adjusting number of items as per page
    			if($total_items > $first_page_limit)
    			{
    				if($page_number == 1)
    				{
    					$items_per_page = $first_page_limit;
    				} 
    				else
    				{
    					$items_per_page = $other_page_limit;
    				}                                        
    			} 

                // Change page if items reached per page limit
    			if($i > $items_per_page)
    			{
    				$page_number++;
    				$i = 0;
    			}  

    			$item_temp[$page_number][$item_key] = $items;                              

    			$i++;
    		}  

            // If all items adjust in first page than moving order total into next page
    		if($total_items > $item_limit && $total_items < $first_page_limit)
    		{
    			$item_temp[$page_number + 1][] = array(); 
    		}  
    		// Finalize order array
    		if(!empty($item_temp))
    		{
    			foreach ($item_temp as $page => $item_data) 
    			{
    				$manual_print_data[$page] = $item_data;
    			}
    		} 
    	}  
    	else
    	{
    		$manual_print_data[$page_number] = $print_data;
    	}

    	if(count($manual_print_data)>0)
    	{
    		$last_page_items = count(end($manual_print_data)) + $total_other_cost;

    		if($last_page_items>=13)
    		{	
    			$page_number++;
    			$manual_print_data[$page_number]  =array();
    		}
    	}
    	
    	return $manual_print_data;
    }

    /*
    @Description    : Function to compress title for invoice print
    @Author         : Shantanu
    @Input          : Title of product in string
    @Output         : Converted title string
    @Date           : 26-09-2018
    */ 

    function compress_title_for_invoice_pdf($title = '',$line_limit = 2,$row_limit = 25)
    {
    	$row_length = 0;

    	// If title length is limit for one row than it will return as it is
    	if(strlen($title) <= $row_limit)
    	{
    		return $title;
    	}	

    	$new_title = array();

    	// Cut the string upto 60 character
    	$title = substr($title, 0, 60);

    	// Convert string into array
    	$title = explode(' ',$title);

    	$row = 0;

    	// for each character
    	foreach ($title as $character) 
    	{
    		// check character length
    		$char_len = strlen($character);
    		
    		// if character length is less than row limit
    		if($char_len <= $row_limit)
    		{
    			// Check combined row length
    			$row_length = $row_length + $char_len + 1;
    			
    			// If combined row length is less than row limit
    			if($row_length <= $row_limit)
    			{
    				if(isset($new_title[$row]))
    				{
    					$new_title[$row] = $new_title[$row].' '.$character;
    				}	
    				else
    				{
    					$new_title[$row] = $character;
    				} 
    			}	
    			else
    			{
    				// If combined row length is greater than row limit than move character into another row
    				if(($row + 1) < $line_limit)
    				{
    					$row++;
    					$row_length = 0;
    					$new_title[$row] = $character;    					
    				}	
    			}	
    		}	
    	}

		// Convert array into string
    	$title = implode(' ',$new_title);

    	return $title;
    }
    
    /*
    @Description: To build  query from get data
    @Author     : Shantanu
    @Input      : not count get array 
    @Output     : 
    @Date       : 07-10-2016
    */  

    function get_notification_data()
    {
    	$CI = &get_instance();

    	$marketplace_notification = array();
    	$system_notification = array();
    	$all_notification = array();

    	$notification_result = $CI->db->select('*')->from('notification_master')->get()->result();

    	$marketplace_notification['count'] = 0;
    	$system_notification['count'] = 0;
    	$po_notification['count'] = 0;

    	if(count($notification_result) > 0)
    	{
    		foreach ($notification_result as $notification) 
    		{
    			if($notification->notification_type == 'Marketplace')
    			{
    				$marketplace_notification['count'] = $marketplace_notification['count'] + $notification->count;
    				$marketplace_notification['data'][] = array(
    					$notification->notification_sub_type => $notification->count
    				);
    			}

    			if($notification->notification_type == 'System')
    			{
    				$system_notification['count'] = $system_notification['count'] + $notification->count;
    				$system_notification['data'][] = array(
    					$notification->notification_sub_type => $notification->count
    				);
    			}

    			if($notification->notification_type == 'PO')
    			{
    				$po_notification['count'] = $po_notification['count'] + $notification->count;
    				$po_notification['data'][] = array(
    					$notification->notification_sub_type => $notification->count
    				);
    			}
    		}
    	}

    	$all_notification = array(
    		'marketplace' => $marketplace_notification,
    		'system' => $system_notification,
    		'po' => $po_notification
    	);

    	return $all_notification;

    }

    /*
    @Description: Getting Assistance request received count
    @Author     : Jayesh Chavda
    @Input      :  
    @Output     : 
    @Date       : 20/2/2018
    */

    function get_assistance_count()
    {
    	$CI = &get_instance();

    	$CI->load->model('user_management/user_assistance_model');

    	$result = $CI->user_assistance_model->notification_count();

    	return $result;
    }

    /*
    @Description: Answer Notification count
    @Author     : Jayesh Chavda
    @Input      :  
    @Output     : 
    @Date       : 27/2/2018
    */

    function answer_notification_count()
    {
    	$CI = &get_instance();

    	$CI->load->model('user_management/user_assistance_model');

    	$result = $CI->user_assistance_model->answer_notification();

    	return $result;
    }

    /*
    @Description: To build  write csv
    @Author     : Yogesh
    @Input      :  
    @Output     : 
    @Date       : 28-07-2017
    */

    function write_csv($file_path,$data,$delimeter = ",")
    {
    	if(!empty($data))
    	{
    		$handle = fopen($file_path, "a");
    		foreach ($data as $key => $value)
    		{
    			$value = helper_array_column($value,NULL,function($value,$key)
    			{ 

    				$key = (string)$key;
    				if($key=="long_description" || $key=="short_description" || $key=="description" || $key=='marketplace_description')
    				{
    					$value = str_replace("\n","</br>",$value);
    					$value = str_replace(",","&comma;",$value);

    				}


    				return $value; });
    			fputcsv($handle, $value,$delimeter); 
    		}
    		fclose($handle);
    	}
    }

    /*
    @Description: To build tab delimited file
    @Author     : Mehul
    @Input      :  
    @Output     : 
    @Date       : 10-04-2018
    */

    function write_tab_delimited($file_path,$data)
    {
    	if(!empty($data))
    	{
    		foreach ($data as $key => $value) 
    		{
    			$data[$key] = implode("\t", $value);
    		}

    		$data = implode("\n", $data);

    		$handle = fopen($file_path,'a');

    		fwrite($handle, $data);

    		fclose($handle);
    	}
    }

    /*
    @Description: To build  zip file
    @Author     : Yogesh
    @Input      :  
    @Output     : 
    @Date       : 01-09-2017
    */

    function write_zip($zip_file_path,$files_array=array(),$delete_arc_files=TRUE)
    {
    	$zip = new ZipArchive();
    	$status = array("status"=>"success");
    	if ($zip->open($zip_file_path, ZipArchive::CREATE) !== TRUE)
    	{
    		$status = array("status"=>"error");
    	}
    	else
    	{
    		foreach($files_array as $file_name => $file)
    		{
    			$zip->addFile($file,$file_name);
    		}
    	}
    	if(!$zip->close())
    	{
    		return ($status = array("status"=>"error"));
    	}

    	if($delete_arc_files)
    	{
    		foreach($files_array as $file_name => $file)
    		{
    			unlink($file);
    		}
    	}
    	return $status;
    }

    /*
    @Description: To build excel file
    @Author     : Akshit
    @Input      :  file path, data
    @Output     : 
    @Date       : 21-05-2019
    */
    function write_excel($file_path, $header = array(), $data, $ActiveSheetTitle = 'Sheet1', $data_before_header = array(), $custom_settings = array())
    {
    	$CI 		=& get_instance();
    	$alphabet 	= range('A', 'Z');

    	$CI->load->library('excel/excel');

    	try
    	{
    		$objPHPExcel = new PHPExcel();

    		$objPHPExcel->setActiveSheetIndex(0);

    		$objPHPExcel->getActiveSheet()->setTitle($ActiveSheetTitle);

    		$row_num = 1;

    		if(count($data_before_header))
    		{
    			foreach($data_before_header as $data_row)
    			{
    				foreach($data_row as $key => $value)
    				{
    					if(is_numeric($key))
    					{
    						$objPHPExcel->getActiveSheet()->setCellValue(get_letters_to_key($key).$row_num, $value);
    					}
    					
    				}

    				$row_num++;
    			}

    	    	// Leave a blank line
    			$row_num++;
    		}

    		if(count($header))
    		{
    			foreach($header as $key => $header_value)
    			{
    				$objPHPExcel->getActiveSheet()->setCellValue(get_letters_to_key($key).$row_num, $header_value);
    			}

    			$objPHPExcel->getActiveSheet()->getStyle('A'.$row_num.':'. get_letters_to_key(count($header) - 1) .$row_num)->getFont()->setBold(true);

    			$row_num++;
    		}

    		$text_keys = array();

    	    // Set value as text for the column (For the cases in UPC)
    		if(isset($custom_settings['set_as_text']) && is_array($custom_settings['set_as_text']))
    		{
    			foreach($custom_settings['set_as_text'] as $header_label) 
    			{
    				if(isset($header))
    				{
    					if(in_array($header_label, $header))
    					{
    						$text_keys[] = array_search($header_label, $header);
    					}
    				}
    			}
    		}

    		if(count($data))
    		{
    	    	// $row_count = count($header) ? '2' : '1';
    			$row_count = $row_num;

    			foreach($data as $row_data)
    			{
    				if(isset($row_data['merge_row']))
    				{ 
    					$objPHPExcel->getActiveSheet()->mergeCells('A'.$row_count.':'.get_letters_to_key((count($header) - 1)).$row_count)->setCellValue('A'.$row_count, $row_data['value']);

    					$objPHPExcel->getActiveSheet()->getStyle('A'.$row_count.':'.get_letters_to_key((count($header) - 1)).$row_count)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
    				}
    				else
    				{
    					foreach($row_data as $key => $column_value)
    					{
    						if(is_numeric($key))
    						{
    							if(in_array($key, $text_keys))
    							{
    								$objPHPExcel->getActiveSheet()->setCellValueExplicit(get_letters_to_key($key).$row_count, $column_value, PHPExcel_Cell_DataType::TYPE_STRING);
    							}
    							else
    							{
    								$objPHPExcel->getActiveSheet()->setCellValue(get_letters_to_key($key).$row_count, $column_value);
    							}
    						}
    					}
    				}

    				$row_count++;
    			}
    		}

    	    // Set auto width
    		foreach(range('A',get_letters_to_key(count($header) - 1)) as $columnID) 
    		{
    			$objPHPExcel->getActiveSheet()->getColumnDimension($columnID)->setAutoSize(true);
    		}

    		$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');

    		$objWriter->save($file_path);

    		$objPHPExcel->disconnectWorksheets();

    		unset($objPHPExcel,$objWriter);
    	}
    	catch(Exception $e)
    	{
    		throw new Exception($e->getMessage(), 1);
    	}
    }



    /*
    @Description: To get the letter based on key
    @Author     : Akshit
    @Input      : array key
    @Output     : Corresponding letter for Excel
    @Date       : 21-05-2019
    */
    function get_letters_to_key($key)
    {
    	$alphabet = range('A', 'Z');

    	if($key < 26)
    	{
    		return $alphabet[$key];
    	}
    	else
    	{
    		$key++;
    		$quotient 	= floor($key/26);
    		$remainder 	= floor($key%26);

    		$quotient--;
    		$remainder--;

    		return get_letters_to_key($quotient).get_letters_to_key($remainder);
    	}
    }

    /*
    @Description: To build next sequence file
    @Author     : Yogesh
    @Input      :  
    @Output     : 
    @Date       : 01-09-2017
    */

    function get_sequance_next_file($file_name)
    {
    	$new_file_name = pathinfo($file_name, PATHINFO_FILENAME);

    	$file_extension = pathinfo($file_name, PATHINFO_EXTENSION);

    	$new_file_name_array = explode("_",$new_file_name);

    	$index_length = (count($new_file_name_array)-1);

    	$new_index = 2;

    	if(is_numeric($new_file_name_array[$index_length]))
    	{
    		$new_file_name = str_replace(("_".$new_file_name_array[$index_length]),"",$new_file_name);

    		$new_index = $new_file_name_array[$index_length] + 1;
    	}

    	return ($new_file_name = "{$new_file_name}_{$new_index}.$file_extension");
    }

    /*
    @Description: To check file reached maximum size
    @Author     : Yogesh
    @Input      :  
    @Output     : 
    @Date       : 01-09-2017
    */

    function check_file_elisible_write($file_path,$max_size=52428800)
    {
    	$eliseble = true;
    	if(file_exists($file_path))
    	{
    		$file_size = filesize($file_path);
    		if($file_size>=$max_size)
    		{
    			$eliseble = false;
    		}
    	}
    	return $eliseble;
    }

    /*
    @Description: To merge array
    @Author     : Yogesh
    @Input      :  
    @Output     : 
    @Date       : 12-10-2017
    */


    function helper_array_merge($src_data=array(),$merge_array=array(),$preserve_key=true)
    {
    	$src_data = empty($src_data)?array():$src_data;
    	$merge_array = empty($merge_array)?array():$merge_array;
    	foreach ($merge_array as $key => $value)
    	{
    		if($preserve_key)
    		{
    			$src_data[$key] = $value;
    		}
    		else
    		{
    			$src_data[] = $value;
    		}
    	}
    	return $src_data;
    }

    function helper_array_filter($src_data=array())
    {
    	$src_data = empty($src_data)?array():$src_data;
    	foreach ($src_data as $key => $value)
    	{
    		if(is_null($value))
    		{
    			unset($src_data[$key]);
    		}
    	}
    	return $src_data;
    }

    function update_system_scheduler($id,$data)
    {
    	$CI = &get_instance();
    	$CI->load->model('Common_model');
    	return $CI->Common_model->update_master_by_array('system_scheduler_master',array('id'=>$id),$data);
    }


    function image_to_base64($image_path=NULL)
    {	
    	$base_64_content = base64_encode(@file_get_contents($image_path));
    	$return ='data:image/png;base64,'.$base_64_content;
    	return $return;
    }

    /*
    @Description: Update Products Quantity Flag
    @Author     : Harshad Hirapara
    @Input      : Product ID Array
    @Output     : 
    @Date       : 12-10-2017
    */

    function update_products_quantity_flag($product_ids=NULL)
    {	
    	$CI = &get_instance();
    	
    	$kit_product_ids = array();

    	if(count($product_ids)>0)
    	{	
    		$product_data = array_chunk($product_ids, 8000);

    		foreach ($product_data as $key => $product_id)
    		{
    			$CI->db->select('kit_product_id');
    			$CI->db->from('product_kit_mapping');
    			$CI->db->where_in('product_kit_mapping.product_id',$product_id);
    			$result = $CI->db->get()->result_array();

    			if(count($result)>0)
    			{
    				$kit_product_id = helper_array_column($result,NULL,'kit_product_id');
    				$kit_product_ids= array_merge($kit_product_ids,$kit_product_id);
    			}
    		}
    	}
    	
    	//////////////////////////

    	if(count($kit_product_ids)>0)
    	{
    		$product_ids = array_merge($product_ids,$kit_product_ids);
    	}

    	//////////////////////////

    	if(count($product_ids)>0)
    	{	
    		foreach ($product_ids as $key => $product_id) 
    		{
    			$update_data[] = array('actual_product_master_id'=>"$product_id",'is_quantity_updated'=>'1');
    		}

    		$CI->db->update_batch('product_master',$update_data,'actual_product_master_id');
    	}
    }


    /*
    @Description: function to get shadow kit product id
    @Author     : Harshad Hirapara
    @Input      : Product list
    @Output     : 
    @Date       : 12-10-2017
    */

    function get_product_kit_shadow_ids($product_ids=array())
    {	
    	$CI = &get_instance();
    	
    	$kit_product_ids = array();
    	$shadow_product_ids = array();

    	if(count($product_ids)>0)
    	{	
    		$product_data = array_chunk($product_ids, 8000);

    		foreach ($product_data as $key => $product_id)
    		{
    			$CI->db->select('kit_product_id');
    			$CI->db->from('product_kit_mapping');
    			$CI->db->where_in('product_kit_mapping.product_id',$product_id);
    			$result = $CI->db->get()->result_array();

    			if(count($result)>0)
    			{
    				$kit_product_id = helper_array_column($result,NULL,'kit_product_id');
    				$kit_product_ids= array_merge($kit_product_ids,$kit_product_id);
    				$product_id     = array_merge($product_id,$kit_product_id);
    			}

    			$CI->db->select('product_master.id as shadow_product_id');
    			$CI->db->from('product_master');
    			$CI->db->where_in('product_master.actual_product_master_id',$product_id);
    			$shadow_result = $CI->db->get()->result_array();

    			if(count($shadow_result)>0)
    			{
    				$shadow_product_id = helper_array_column($shadow_result,NULL,'shadow_product_id');
    				$shadow_product_ids= array_merge($shadow_product_ids,$shadow_product_id);
    			}
    		}
    	}
    	
    	//////////////////////////

    	if(count($kit_product_ids)>0 || count($shadow_product_ids)>0)
    	{
    		$product_ids = array_merge($product_ids,$kit_product_ids,$shadow_product_ids);

    		if(is_array($product_ids) && count($product_ids)>0)
    		{
    			$product_ids = array_unique(array_filter($product_ids));
    		}
    	}

    	return $product_ids;
    }


    /*
    @Description  : Get actual product master ids
    @Author       : Harshad Hirapara
    @Input        : Product Ids
    @Output       : Actual product master ids
    @Date         : 08-09-2018
    */

    function get_actual_product_master_ids($product_ids=array())
    {   
    	$CI = &get_instance();

    	$product_list=array();

    	if(count($product_ids)>0)
    	{
    		$CI->db->select('
    			product_master.id,
    			product_master.actual_product_master_id
    			');

    		$CI->db->from('product_master');

    		$CI->db->where_in('product_master.id',$product_ids);

    		$product_list = $CI->db->get()->result_array();

    		$product_list = helper_array_column($product_list,'id','actual_product_master_id');

    	}

    	return $product_list;
    }

    /*
    @Description: Sort location array based on warehouse and zone
    @Author     : Harshad Hirapara
    @Input      : Product list
    @Output     : 
    @Date       : 12-10-2017
    */

    function sort_location_array($products_details=array(),$warehouse_zone_list=array())
    {	
    	$CI = &get_instance();
    	$CI->load->model('inventory_model');
    	$product_sort =array();

    	if(count($products_details)>0)
    	{	
    		if(count($warehouse_zone_list)<=0)
    		{
    			$warehouse_zone_list = $CI->inventory_model->get_warehouse_zone_list();
    		}

    		$warehouse_zone_list = helper_array_column($warehouse_zone_list,function($value){ return strtolower($value['warehouse_name']);},'sort_rank');

			////////////////////////

    		$location_list =  array_filter(helper_array_column($products_details,NULL,function($value){return strtolower($value['location']);}));
    		
    		if(count($location_list)>0)
    		{
    			sort($location_list);
    		}

    		foreach ($products_details as $key => $product)
    		{	
				//if Product location is primary then sort first
    			if($product['sort_rank'] == "")
    			{
    				$products_details[$key]['sort_rank'] ='6';
    			}

    			if(isset($product['is_primary_location']) && $product['is_primary_location']=='1')
    			{	
    				$product['sort_rank'] = (0-count($products_details));
    			}

    			if(isset($product['location']) && is_not_empty($product['location']))
    			{
    				$location = trim(strtolower($product['location']));

    				$floor = explode('-', $location);

    				if(isset($floor[0]) && $floor[0]=='wav' && isset($floor[1]))
    				{
    					$final = $floor[0]."-".$floor[1];
    				}
    				elseif(isset($floor[0]))
    				{
    					$final = $floor[0];
    				}
    				else
    				{
    					$final = $location;
    				}

    				if(isset($warehouse_zone_list[$final]))
    				{
    					$product['zone_rank'] = $warehouse_zone_list[$final];
    				}
    				else
    				{
    					$product['zone_rank'] = count($products_details)+10;
    				}

    				if(in_array($location,$location_list))
    				{
    					$product['location_rank'] = array_search($location,$location_list);
    				}
    				else
    				{
    					$product['location_rank'] = count($products_details)+20;
    				}
    			}
    			else
    			{
    				$product['zone_rank'] = count($products_details)+10;
    				$product['location_rank'] = count($products_details)+20;
    			}

    			$product_sort[] = $product;
    		}
    	}
    	
		//Sort arraybased on product warehouse and zone
    	usort($product_sort, function($a, $b) {

    		$return = $a['is_primary_location'] - $b['is_primary_location'];

    		$return = $a['sort_rank'] - $b['sort_rank'];

    		if ($return == 0) 
    		{
    			$return = $a['zone_rank'] - $b['zone_rank'];
    		}

    		if ($return == 0) 
    		{
    			$return = $a['location_rank'] - $b['location_rank'];
    		}

    		return $return;
    	});
    	
    	return $product_sort;
    }

    function get_customer_payment_status($payment_term, $order_total, $paid_amount, $order_date)
    {
    	if($order_total > $paid_amount)
    	{
    		// If order total is not 0
    		if($order_total > 0)
    			$percentage = round(($paid_amount/$order_total)*100);
    		else
    			$percentage = 100;

    		return $percentage.'% Paid';
    	}
    	else
    	{
    		return 'Paid';
    	}

		// switch ($payment_term) {
		// 	case 'prepaid':
		// 		if($order_total > $paid_amount)
		// 		{
		// 			return 'Pending';
		// 		}
		// 		else
		// 		{
		// 			return 'Paid';
		// 		}
		// 		break;

		// 	default:
		// 		if($order_total > $paid_amount)
		// 		{
		// 			$percentage = round(($paid_amount/$order_total)*100);

		// 			return $percentage.'% Paid';
		// 		}
		// 		else
		// 		{
		// 			return 'Paid';
		// 		}
		// 		break;
		// }
    }

	/*
    @Description: convert unit from unit to to unit
    @Author     : Harshad Hirapara
    @Input      : Number, From Unit, To unit
    @Output     : converted unit number
    @Date       : 23-08-2018
    */
    function get_converted_unit($number,$from,$to,$return_number=TRUE)
    {		
    	$from = strtolower(trim($from));
    	$to   = strtolower(trim($to));

		//Pound - Length Unit Conversation
    	$convert['inches'] = array(
    		'inches'			=> $number,
    		'meters'            => ($number * 39.370),
    		'centimeters'       => ($number * 0.39370),
    		'foot'              => ($number * 12.000),
    		'feet'              => ($number * 12.000),
    		'hundredths-inches' => ($number / 100),
    		'millimeters'		=> ($number / 25.4),
    		'mm'		        => ($number / 25.4),
    	);

	  	//Pound - Weight Unit Conversation
    	$convert['pounds'] = array(
    		'pounds'			=> $number,
    		'hundredths-pounds' => ($number / 100),
    		'hundredths pounds' => ($number / 100),
    		'ounces'			=> ($number / 16),
    		'kilograms'		    => ($number / 0.453592),
    		'grams'				=> ($number / 453.592)
    	);

    	$return_number = ($return_number) ? $number : 0;

    	return isset($convert[$to][$from]) ? round($convert[$to][$from],4) : $return_number ;
    }

    function get_rakuten_condition_for_product_master($rakuten_id)
    {
    	switch($rakuten_id)
    	{
    		case '1' :
    		return 'new';
    		break;
    		case '2' :
    		case '3' :
    		case '4' :
    		case '5' :
    		return 'used';
    		break;
    		case '10' :
    		return 'refurbished';
    		break;
    		default :
    		return 'new';
    	}
    }

	/*
    @Description: get the value by checking if it is set
    @Author     : Akshit Arora
    @Input      : variable, keys, default
    @Output     : return the 
    @Date       : 23-08-2018
    */
    function get_value($variable, $keys = false, $default = NULL, $callable = false, $is_object = false)
    {
    	if($is_object)
    	{
    		// To build
    	}
    	else
    	{
    		if(is_array($keys))
    		{
    			// Do nothing
    		}
    		else
    		{
    			$keys = explode('|', $keys);
    		}

    		$value = $variable;

    		foreach($keys as $key)
    		{
    			if(isset($value[$key]))
    			{
    				if($key == end($keys))
    				{
    					if($callable && is_callable($callable))
    					{
    						return $callable($value[$key]);
    					}
    					else
    					{
    						return $value[$key];
    					}
    				}
    				else
    				{
    					$value = $value[$key];
    				}
    			}
    			else
    			{
    				break;
    			}
    		}
    	}

    	return $default;
    }

    /*
    @Description: Convert date to different timezone
    @Author     : Akshit Arora
    @Input      : 
    @Output     : return the 
    @Date       : 23-08-2018
    */
    function convert_timezone($date, $fromTimeZone = 'GMT', $toTimeZone = 'America/Los_Angeles', $format = 'Y-m-d H:i:s')
    {
    	try {
    		$dateTime = new DateTime ($date, new DateTimeZone($fromTimeZone));
    		$dateTime->setTimezone(new DateTimeZone($toTimeZone));
    		return $dateTime->format($format);
    	} catch (Exception $e) {
    		pr($e);
    		return '';
    	}
    }

    function get_keepa_time($keepa_time)
    {
    	$current_time = ($keepa_time + 21564000) * 60;

    	$current_date = new DateTime("@$current_time");

    	return convert_timezone($current_date->format('Y-m-d H:i:s'), 'UTC', 'America/Chicago');
    }

    /*
    @Description: Get freight class as per the weight
    @Author     : Akshit Arora
    @Input      : weight in lbs
    @Output     : freight class code
    @Date       : 05-03-2019
    */
    function get_freight_class($weight)
    {
    	$freight_class_master = array(
    		'1'		=> '400',
    		'2'		=> '300',
    		'4'		=> '250',
    		'6'		=> '175',
    		'8'		=> '125',
    		'10'	=> '100',
    		'12'	=> '92.5',
    		'15'	=> '85',
    		'22.5'	=> '70',
    		'30'	=> '65',
    		'other'	=> '60'
    	);

    	if($weight > 30)
    	{
    		return $freight_class_master['other'];
    	}
    	else
    	{
    		foreach($freight_class_master as $applicable_weight => $freight_code)
    		{
    			if($weight < $applicable_weight)
    			{
    				return $freight_code;
    			}
    		}
    	}

    	return '400';
    }

    /*
    @Description: Add value to array key
    @Author     : Akshit Arora
    @Input      : array name, array key, value to be added
    @Output     : array will be updated
    @Date       : 29-06-2019
    */
    function add_to_array_key(&$array_name, $array_key, $value = 0)
    {
    	if(isset($array_name[$array_key]))
    	{
    		$array_name[$array_key] += $value;
    	}
    	else
    	{
    		$array_name[$array_key] = $value;
    	}
    }

    /*
    @Description: Add Daily schedule report
    @Author     : Harshad Hirapara
    @Input      : array name, array key, value to be added
    @Output     : array will be updated
    @Date       : 29-06-2019
    */
    function insert_daily_backup_report($data=array())
    {	
    	$CI = &get_instance();

    	$file_path = get_value($data,'file_path');
    	
    	if($file_path!="")
    	{
    		$file_name   = basename($file_path);

    		$task_type   = get_value($data,'task_type');

    		$report_list = get_daily_backup_report_list();

    		$task_name   = get_value($report_list,$task_type);

    		if($task_name!="")
    		{
    			$new_file_path = FCPATH.'uploads/daily_backup_report/'.$file_name; 

    			$file_url = base_url().'uploads/daily_backup_report/'.$file_name; 

    			if(copy($file_path,$new_file_path))
    			{
    				$insert_array = array(
    					'report_type'   =>$task_type,
    					'report_name'   =>$task_name,
    					'file_path'     =>$file_url,
    					'inserted_date' =>get_inserted_date_time()
    				);

    				$CI->common_model->insert_all('daily_backup_report_file', $insert_array);
    			}
    		}
    	}
    }

    /*
    @Description: get the links of commonly used modules
    @Author     : Akshit Arora
    @Input      : id, module type
    @Output     : url of the module
    @Date       : 29-06-2019
    */
    function get_link($entity_id = 0, $entity_type = 'order')
    {
    	$link = base_url();
    	switch($entity_type)
    	{
    		case 'order':
    		$link .= 'order/detail?id='.helper_encrypt_url_key($entity_id);
    		break;
    		case 'product':
    		$link .= 'inventory/inventory_master/edit/'.helper_encrypt_url_key($entity_id);
    		break;
    		case 'po':
    		$link .= 'po/po/edit/'.helper_encrypt_url_key($entity_id);
    		break;
    		case 'vendor':
    		$link .= 'vendor/vendor/edit/'.helper_encrypt_url_key($entity_id);
    		break;
    		case 'pick_list':
    		$link .= 'pick/pick_list/product_list/'.helper_encrypt_url_key($entity_id);
    		break;
    	}

    	return $link;
    }

    /*
    @Description: get response to be sent in AJAX
    @Author     : Akshit Arora
    @Input      : message, status
    @Output     : array of message with status
    @Date       : 23-07-2019
    */
    function set_message($message = 'Something went wrong!', $status = 'error')
    {
    	return array(
    		'status' => $status,
    		'message' => $message
    	);
    }

    /*
    @Description: function to spilt sku
    @Author     : Harshad Hirapara
    @Input      : string
    @Output     : Spilt sku
    @Date       : 29-07-2019
    */

    function split_sku($sku=NULL,$occurence='2')
    {
    	$sku_array = explode('-', $sku);

    	if(count($sku_array)>0)
    	{
    		$sku_data = array_chunk($sku_array,$occurence);

    		$sku_detail = array();

    		foreach ($sku_data as $key => $sku_list) 
    		{	
    			$sku_detail[] = implode("-",$sku_list);
    		}

    		$sku = implode('-<br>',$sku_detail);
    	}

    	return $sku;
    }

    /*
    @Description: function to get the commission of the marketplace
    @Author     : Akshit Arora
    @Input      : selling price of the product, marketplace
    @Output     : Product commission
    @Date       : 19-08-2019
    */
    function get_product_commission($selling_price, $marketplace_type)
    {
    	$commision = 0;
    	$lowest_amazon_commision = 0.30;

    	switch ($marketplace_type)
    	{
    		case 'Amazon':
    		case 'Walmart':
    		case 'Jet':
    		case 'Newegg':
    		case 'Newegg Biz':
    		$commision = ($selling_price * 0.15);

    		if($commision < $lowest_amazon_commision && $marketplace_type == 'Amazon')
    		{
    			$commision = $lowest_amazon_commision;
    		}
    		break;
    		case 'Ebay':
    		$commision = ($selling_price * 0.09);
    			// $selling_price = $selling_price + $commision;
    		$commision += ($selling_price * 0.019);
    		$commision += 0.30;
    		break;
    	}

    	return $commision;
    }

    /*
    @Description: function to get default warehouse id
    @Author     : Harshad Hirapara
    @Input      : 
    @Output     : Product commission
    @Date       : 19-08-2019
    */
    function get_default_warehouse_id()
    {	
    	$CI = &get_instance();
    	
    	$CI->load->model('warehouse_manager_model');

    	$default_warehouse=$CI->warehouse_manager_model->get_default_warehouse_id();

    	return isset($default_warehouse['id']) ? $default_warehouse['id'] :"180";
    }

    /*
    @Description  : Get currency symbol and format in one function
    @Author       : Akshit Arora
    @Input        : value, currency
    @Output       : 
    @Date         : 7-11-2019
    */
    function currency_symbol_format($value, $currency = 'USD')
    {
    	$text = currency_symbol_icon($currency).currency_format(abs($value));

    	if($value < 0)
    	{
    		$text = '-'.$text;
    	}

    	return $text;
    }

    function cal_days_in_year($year)
    {
    	$days=0; 

    	for($month=1;$month<=12;$month++)
    	{ 
    		$days = $days + cal_days_in_month(CAL_GREGORIAN,$month,$year);
    	}

    	return $days;
    }

    function validate_location($location)
    {
    	$status=TRUE; 

    	if (strpos($location, '%') == true) 
    	{
    		$status=FALSE; 
    	}

    	if (strpos($location, '$') == true) 
    	{
    		$status=FALSE; 
    	}

    	return $status;
    }

	/*
	@Description: function to get global settings value
	@Author     : Harshad Hirapara
	@Input      : 
	@Output     : Global Setting
	@Date       : 20-01-2019
	*/

	function get_global_setting_data($setting_type=NULL)
	{	

		if($setting_type!="")
		{
			$CI = &get_instance();

			$CI->db->_protect_identifiers = TRUE;

			$setting_data=$CI->common_model->select_single_specific_field_by_key('global_settings','value','name',"$setting_type");

			return isset($setting_data['value']) ? $setting_data['value'] :"";
		}
	}


	/*
	@Description: Function to get system option
	@Author     : Harshad Hirapara
	@Input      : 
	@Output     : System Option
	@Date       : 20-01-2019
	*/

	function get_system_options($option_type=NULL)
	{	

		if($option_type!="")
		{
			$CI = &get_instance();

			$CI->db->_protect_identifiers = TRUE;

			$system_options=$CI->common_model->select_single_specific_field_by_key('system_options','value','key',"$option_type");

			return isset($system_options['value']) ? $system_options['value'] :"";
		}
	}

	/*
	@Description: Function to get system option
	@Author     : Harshad Hirapara
	@Input      : 
	@Output     : System Option
	@Date       : 20-01-2019
	*/

	function update_system_options($option_type=NULL,$update_data=NULL)
	{	
		if($option_type!="" && $update_data!="")
		{
			$CI = &get_instance();

			$CI->db->_protect_identifiers = TRUE;

			$where = array("key"=>$option_type);
			
			$update = array("value"=>$update_data);

			return $CI->common_model->update_by_where_array('system_options',$where,$update);
		}
	}

	/*
    @Description : Get warehouse id by warehouse system type
    @Author      : Harshad Hirapara
    @Input       : $where data
    @Date        : 20-01-2020
    */

    function get_warehouse_id($warehouse_system_type=NULL)
    {	
    	$warehouse_id=NULL;

    	if($warehouse_system_type!="")
    	{	
    		$CI = &get_instance();
    		$CI->db->select("warehouse_master.id");
    		$CI->db->from("warehouse_master");
    		$CI->db->where("warehouse_system_type",$warehouse_system_type);
    		$warehouse_data = $CI->db->get()->row_array();
    		$warehouse_id =  get_value($warehouse_data,'id');
    	}

    	return $warehouse_id;
    }

   
    /*
    @Description : Get PO Billing Address
    @Author      : Harshad Hirapara
    @Input       : PO Id, Vendor ID
    @Date        : 19-02-2020
    */

    function get_po_billing_address($po_id=NULL,$vendor_id=NULL)
    {	
    	$CI = &get_instance();

    	$po_billing_address = array();

    	$country_list = $CI->common_model->select_by_key("country_master",array()); 

    	$country_list= helper_array_column($country_list,"country_id","country_name");

    	if($po_id!="")
    	{	
    		$CI->db->select("po_billing_address_mapping.*");
    		$CI->db->from("po_billing_address_mapping");
    		$CI->db->where("po_billing_address_mapping.po_id",$po_id);
    		$po_billing_address = $CI->db->get()->row_array();

    		$po_billing_address = get_address_from_data($po_billing_address,$country_list);
    	}
    	
    	if($vendor_id!="" && count($po_billing_address)<=0)
    	{
    		$CI->db->select("vendor_po_address_mapping.*");
    		$CI->db->from("vendor_po_address_mapping");
    		$CI->db->where("vendor_po_address_mapping.vendor_id",$vendor_id);
    		$CI->db->where("vendor_po_address_mapping.address_type","billing");
    		$po_billing_address = $CI->db->get()->row_array();

    		$po_billing_address = get_address_from_data($po_billing_address,$country_list);
    	}
    	
    	if(count($po_billing_address)<=0)
    	{
    		$CI->db->select("general_settings.description");
    		$CI->db->from("general_settings");
    		$CI->db->where("general_settings.name","po_billing_address");
    		$po_billing_address = $CI->db->get()->row_array();

    		if(count($po_billing_address)>0)
    		{
    			$po_billing_address = json_decode(get_value($po_billing_address,'description','[]'),true);
    			$po_billing_address = helper_array_column($po_billing_address,function($value,$key){
    				return str_replace('bill_','',$key);
    			});
    		}

    		$po_billing_address = get_address_from_data($po_billing_address,$country_list);
    	}

    	if(count($po_billing_address)<=0)
    	{
    		$po_billing_address = array(
    			'company_name'	 =>'TNT Deals Inc',
				'first_name'     =>'Receiving',
				'last_name'      =>'Department',
				'address_line_1' =>'7734 W 99th Street',
				'address_line_2' => '',
				'city'           =>'Hickory Hills',
				'state'          =>'IL',
				'country_name'   =>'United States',
				'country'        =>'229',
				'zipcode'        =>'60457',
				'phone'          =>'708-599-3968'
    		);
    	}	
    	
    	if($po_id!="")
    	{	
    		$update_address_data = $po_billing_address;
    		$update_address_data['po_id']=$po_id;
    		unset($update_address_data['country_name']);
    		$CI->common_model->insert_on_duplicate_update_batch("po_billing_address_mapping",[$update_address_data]);
    	}

    	return $po_billing_address;
    }

    /*
    @Description : Get PO Shipping Address
    @Author      : Harshad Hirapara
    @Input       : PO Id, Vendor Id
    @Date        : 19-02-2020
    */

    function get_po_shipping_address($po_id=NULL,$vendor_id=NULL)
    {	
    	$CI = &get_instance();

    	$po_shipping_address = array();

    	$country_list = $CI->common_model->select_by_key("country_master",array()); 

    	$country_list= helper_array_column($country_list,"country_id","country_name");

    	if($po_id!="")
    	{	
    		$CI->db->select("po_address_mapping.*");
    		$CI->db->from("po_address_mapping");
    		$CI->db->where("po_address_mapping.po_id",$po_id);
    		$po_shipping_address = $CI->db->get()->row_array();

    		$po_shipping_address = get_address_from_data($po_shipping_address,$country_list);
    	}

    	if($vendor_id!="" && count($po_shipping_address)<=0)
    	{
    		$CI->db->select("vendor_po_address_mapping.*");
    		$CI->db->from("vendor_po_address_mapping");
    		$CI->db->where("vendor_po_address_mapping.vendor_id",$vendor_id);
    		$CI->db->where("vendor_po_address_mapping.address_type","shipping");
    		$po_shipping_address = $CI->db->get()->row_array();

    		$po_shipping_address = get_address_from_data($po_shipping_address,$country_list);
    	}

    	if(count($po_shipping_address)<=0)
    	{
    		$CI->db->select("general_settings.description");
    		$CI->db->from("general_settings");
    		$CI->db->where("general_settings.name","po_address");
    		$po_shipping_address = $CI->db->get()->row_array();

    		if(count($po_shipping_address)>0)
    		{
    			$po_shipping_address = json_decode(get_value($po_shipping_address,'description','[]'),true);
    		}

    		$po_shipping_address = get_address_from_data($po_shipping_address,$country_list);
    	}

    	if(count($po_shipping_address)<=0)
    	{
    		$po_shipping_address = array(
				'company_name'	 =>'TNT Deals Inc',
				'first_name'     =>'Receiving',
				'last_name'      =>'Department',
				'address_line_1' =>'7734 W 99th Street',
				'address_line_2' => '',
				'city'           =>'Hickory Hills',
				'state'          =>'IL',
				'country_name'   =>'United States',
				'country'        =>'229',
				'zipcode'        =>'60457',
				'phone'          =>'708-599-3968'
    		);
    	}
    
    	return $po_shipping_address;
    }

    /*
    @Description : Get address from data
    @Author      : Harshad Hirapara
    @Input       : $where data
    @Date        : 19-02-2020
    */

    function get_address_from_data($address_data=array(),$country_list=array())
    {
    	$final_address = array(
    		'company_name'	 =>get_value($address_data,'company_name'),
    		'first_name'     =>get_value($address_data,'first_name'),
    		'last_name'      =>get_value($address_data,'last_name'),
    		'address_line_1' =>get_value($address_data,'address_line_1'),
    		'address_line_2' =>get_value($address_data,'address_line_2'),
    		'city'           =>get_value($address_data,'city'),
    		'state'          =>get_value($address_data,'state'),
    		'country_name'   =>get_value($country_list,$address_data['country']),
    		'country'     	 =>get_value($address_data,'country'),
    		'zipcode'        =>get_value($address_data,'zipcode'),
    		'phone'          =>get_value($address_data,'phone')
    	);

    	return $final_address = array_filter($final_address);
    }

    /*
    @Description : Get square image
    @Author      : Harshad Hirapara
    @Input       : $where data
    @Date        : 27-01-2020
    */

	function create_square_image($originalFile, $targetFile,$is_resize=false,$new_width="1500") 
	{	
		if($originalFile!="")
		{
			$info = getimagesize($originalFile);
			$image_name = basename($originalFile);
			$mime = $info['mime'];
			$status = true;

			switch ($mime) 
			{
				case 'image/jpeg':
				$image_create_func = 'imagecreatefromjpeg';
				$image_save_func = 'imagejpeg';
				$new_image_ext = 'jpg';
				break;

				case 'image/png':
				$image_create_func = 'imagecreatefrompng';
				$image_save_func = 'imagepng';
				$new_image_ext = 'png';
				break;

				case 'image/gif':
				$image_create_func = 'imagecreatefromgif';
				$image_save_func = 'imagegif';
				$new_image_ext = 'gif';
				break;

				default: 
				$status =false;
			}

			if($status)
			{	
				// Making a temp image file 
				$temp_image_path = FCPATH.'uploads/temp/test_'.$image_name;

				if(file_exists($temp_image_path))
				{
					unlink($temp_image_path);
				}

				copy($originalFile,$temp_image_path);

				if(file_exists($temp_image_path))
				{
					$img = $image_create_func($temp_image_path);

					$width = imagesx($img); // image width
   					$height = imagesy($img); // image height

   					$square = max(array($width,$height));

   					if(($width!=$height) || ($square<="500"))
   					{
   						$square = ($square<="500") ?"500":$square;
   						$final = imagecreatetruecolor($square,$square);
   						$bg_color = imagecolorallocate ($final, 255, 255, 255);
   						imagefill($final, 0, 0, $bg_color);

   						imagecopyresampled($final, $img, intval(($square-$width)/2),intval(($square-$height)/2), 0, 0, $width, $height, $width, $height);

   						$image_save_func($final, "$targetFile");

   						if($is_resize && $new_width<=$square)
   						{	
   							custom_resize_image($new_width,$targetFile,$targetFile);
   						}

   						unlink($temp_image_path);

   						return $targetFile;
   					}
   					else
   					{	
   						copy($originalFile, $targetFile);

   						unlink($temp_image_path);
   						
   						return $targetFile;
   					}
   				}
			}
			else
			{
				return true;
			}
		}
		else
		{
			return false;
		}
	}

	/*
    @Description : custom resize image
    @Author      : Harshad Hirapara
    @Input       : $where data
    @Date        : 27-01-2020
    */

	function custom_resize_image($newWidth,$originalFile, $targetFile) 
	{	
		if(file_exists($originalFile))
		{
			$info = getimagesize($originalFile);
			$image_name = basename($originalFile);
			$mime = $info['mime'];
			$status = true;

			switch ($mime) 
			{
				case 'image/jpeg':
				$image_create_func = 'imagecreatefromjpeg';
				$image_save_func = 'imagejpeg';
				$new_image_ext = 'jpg';
				break;

				case 'image/png':
				$image_create_func = 'imagecreatefrompng';
				$image_save_func = 'imagepng';
				$new_image_ext = 'png';
				break;

				case 'image/gif':
				$image_create_func = 'imagecreatefromgif';
				$image_save_func = 'imagegif';
				$new_image_ext = 'gif';
				break;

				default: 
				$status =false;
			}

			if($status)
			{	
				// Making a temp image file 
				$temp_image_path = FCPATH.'uploads/temp/test_'.$image_name;

				if(file_exists($temp_image_path))
				{
					unlink($temp_image_path);
				}
				
				copy($originalFile,$temp_image_path);

				if(file_exists($temp_image_path))
				{
					$img = $image_create_func($temp_image_path);
					list($width, $height) = getimagesize($temp_image_path);

					$newHeight = ($height / $width) * $newWidth;
					$tmp = imagecreatetruecolor($newWidth, $newHeight);
					imagecopyresampled($tmp, $img, 0, 0, 0, 0, $newWidth, $newHeight, $width, $height);

					$image_save_func($tmp, "$targetFile");

					return $targetFile;
				}
			}
			else
			{
				return true;
			}
		}
		else
		{
			return false;
		}
	}

    /*
    @Description : Get order tax exempt form status
    @Author      : Harshad Hirapara
    @Input       : PO Id, Vendor ID
    @Date        : 19-02-2020
    */

    function get_order_tax_exempt_form_status($is_tax_exampt=NULL,$order_total_tax=NULL,$tax_form_id=NULL)
    {
    	$tax_exempt_status = FALSE;

    	if($tax_form_id!="")
    	{
    		$tax_exempt_status = "Yes";
    	}
    	elseif($tax_form_id=="" && $order_total_tax=="0")
    	{
    		if($is_tax_exampt=="1")
    		{
    			$tax_exempt_status =  "-";
    		}
    		else
    		{
    			$tax_exempt_status =  "No";
    		}
    	}
	    
    	return  $tax_exempt_status;    	
    }

     /*
    @Description: To build excel file
    @Author     : MUkesh
    @Input      :  file path, data
    @Output     : 
    @Date       : 30-03-2020
    */
    function write_excel_data($file_path, $header = array(), $data, $ActiveSheetTitle = 'Sheet1', $data_before_header = array(), $custom_settings = array())
    {
    	$CI 		=& get_instance();
    	$alphabet 	= range('A', 'Z');

    	$CI->load->library('excel/excel');

    	try
    	{
    		$objPHPExcel = new PHPExcel();

    		$objPHPExcel->setActiveSheetIndex(0);

    		$objPHPExcel->getActiveSheet()->setTitle($ActiveSheetTitle);

    		$row_num = 0;

    		if(count($data_before_header))
    		{
    			foreach($data_before_header as $data_row)
    			{
    				foreach($data_row as $key => $value)
    				{
    					// if(is_numeric($key))
    					// {
    					// 	$objPHPExcel->getActiveSheet()->setCellValue(get_letters_to_key($key).$row_num, $value);
    					// }
    					$objPHPExcel->getActiveSheet()->mergeCells('A1:C1')->setCellValue('A1','January 30 - January 31 - 2020');

    					$objPHPExcel->getActiveSheet()->mergeCells('E1:G1')->setCellValue('E1','February 28 - February 29 - 2020');
    					$objPHPExcel->getActiveSheet()->mergeCells('I1:J1')->setCellValue('I1','Order Totals');

    					$objPHPExcel->getActiveSheet()->mergeCells('I4:J4')->setCellValue('I4','Percentage Difference');

    					$objPHPExcel->getActiveSheet()->mergeCells('I5:J5')->setCellValue('I5','');
    				}

    				$row_num++;
    			}

    	    	// Leave a blank line
    			$row_num++;
    		}

    		if(count($header))
    		{
    			foreach($header as $key => $header_value)
    			{
    				$objPHPExcel->getActiveSheet()->setCellValue(get_letters_to_key($key).$row_num, $header_value);
    			}

    			$objPHPExcel->getActiveSheet()->getStyle('A'.$row_num.':'. get_letters_to_key(count($header) - 1) .$row_num)->getFont()->setBold(true);

    			$row_num++;
    		}

    		$text_keys = array();

    	    // Set value as text for the column (For the cases in UPC)
    		if(isset($custom_settings['set_as_text']) && is_array($custom_settings['set_as_text']))
    		{
    			foreach($custom_settings['set_as_text'] as $header_label) 
    			{
    				if(isset($header))
    				{
    					if(in_array($header_label, $header))
    					{
    						$text_keys[] = array_search($header_label, $header);
    					}
    				}
    			}
    		}

    		if(count($data))
    		{
    	    	// $row_count = count($header) ? '2' : '1';
    			$row_count = $row_num;

    			foreach($data as $row_data)
    			{
    				if(isset($row_data['merge_row']))
    				{ 
    					$objPHPExcel->getActiveSheet()->mergeCells('A'.$row_count.':'.get_letters_to_key((count($header) - 1)).$row_count)->setCellValue('A'.$row_count, $row_data['value']);

    					$objPHPExcel->getActiveSheet()->getStyle('A'.$row_count.':'.get_letters_to_key((count($header) - 1)).$row_count)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
    				}
    				else
    				{
    					foreach($row_data as $key => $column_value)
    					{
    						if(is_numeric($key))
    						{
    							if(in_array($key, $text_keys))
    							{
    								$objPHPExcel->getActiveSheet()->setCellValueExplicit(get_letters_to_key($key).$row_count, $column_value, PHPExcel_Cell_DataType::TYPE_STRING);
    							}
    							else
    							{
    								$objPHPExcel->getActiveSheet()->setCellValue(get_letters_to_key($key).$row_count, $column_value);
    							}
    						}
    					}
    				}

    				$row_count++;
    			}
    		}

    	    // Set auto width
    		foreach(range('A',get_letters_to_key(count($header) - 1)) as $columnID) 
    		{
    			$objPHPExcel->getActiveSheet()->getColumnDimension($columnID)->setAutoSize(true);
    		}

    		$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');

    		$objWriter->save($file_path);

    		$objPHPExcel->disconnectWorksheets();

    		unset($objPHPExcel,$objWriter);
    	}
    	catch(Exception $e)
    	{
    		throw new Exception($e->getMessage(), 1);
    	}
    }

    /*
    @Description: Get substraction value for the Report 
    @Author     : Bhavesh Chaudhari
    @Input      : val1,val2
    @Output     : result
    @Date       : 09-04-2020
    */


    function get_subtraction($val1 = 0, $val2 = 0)
	{
		if($val1 > $val2)
		{	
			$substract = $val1 - $val2;
			$result = '<td class="text-center" style="color:red">('.$substract.')</td>';
		}
		else 
		{
			$substract = $val2 - $val1;
			$result = '<td class="text-center">'.$substract.'</td>';
		}
		return $result;	
	}	

    /*
    @Description: Generate bulk print sku data
    @Author     : Harshad Hirapara
    @Input      : 
    @Output     : 
    @Date       : 09-04-2020
    */

    function generate_print_sku_file_name($product=array())
    {	
    	$CI = &get_instance();

    	$CI->load->library('pdf/pdf');  

        $file_url = NULL;
   
        if(is_array($product) && count($product) > 0)
        {   
            $data['print_data'][] = $product;

            $html_slip = $CI->load->view('print/batch_sku_print_label',$data,true);
           
            if($html_slip != '')
            {    
                $file_name_slip = "Batch-".$product['product_id']."_".time().'.pdf';

                $file_path = FCPATH.'uploads/sku_print_label/'.$file_name_slip;

                $file_url = base_url().'uploads/sku_print_label/'.$file_name_slip;

                $pdf_data = $CI->pdf->pdf_create($html_slip, $file_name_slip, FALSE);   

                file_put_contents($file_path, $pdf_data);
            }
        }

        return $file_url;
    }

   

    /*
    @Description: Get Product Image
    @Author     : Akshit Arora
    @Input      : 
    @Output     : 
    @Date       : 28-04-2020
    */
    function get_product_image($main_image, $main_image_url)
    {
    	$CI = &get_instance();

    	$images_path = $CI->config->item('images_path');

    	if($main_image != '' && file_exists($CI->config->item("product_images_thumb_path").$main_image))
    	{
    	    $product_image = $CI->config->item("product_images_url")."thumb/".$main_image;
    	}
    	else if($main_image_url != '')
    	{
    	    $product_image  = $main_image_url;
    	}
    	else
    	{
    	    $product_image = $images_path.NO_IMAGE;
    	}

    	return $product_image;
    }

function is_cron_time($time , $cron) 
{
    $cron_parts = explode(' ' , $cron);
    if(count($cron_parts) != 5)
    {
    	return false;
    }
    
    list($min , $hour , $day , $mon , $week) = explode(' ' , $cron);
    
    $to_check = array('min' => 'i' , 'hour' => 'G' , 'day' => 'j' , 'mon' => 'n' , 'week' => 'w');
    
    $ranges = array(
    	'min' => '0-59' ,
    	'hour' => '0-23' ,
    	'day' => '1-31' ,
    	'mon' => '1-12' ,
    	'week' => '0-6' ,
    );
    
    foreach($to_check as $part => $c)
    {
    	$val = $$part;
    	$values = array();
    	
    	/*
    		For patters like 0-23/2
    	*/
    	if(strpos($val , '/') !== false)
    	{
    		//Get the range and step
    		list($range , $steps) = explode('/' , $val);
    		
    		//Now get the start and stop
    		if($range == '*')
    		{
    			$range = $ranges[$part];
    		}
    		list($start , $stop) = explode('-' , $range);
    			
			for($i = $start ; $i <= $stop ; $i = $i + $steps)
			{
				$values[] = $i;
			}
    	}
    	/*
    		For patters like :
    		2
    		2,5,8
    		2-23
    	*/
    	else
    	{
    		$k = explode(',' , $val);
    		
    		foreach($k as $v)
    		{
    			if(strpos($v , '-') !== false)
    			{
    				list($start , $stop) = explode('-' , $v);
    			
					for($i = $start ; $i <= $stop ; $i++)
					{
						$values[] = $i;
					}
    			}
    			else
    			{
    				$values[] = $v;
    			}
    		}
    	}
    	
    	if ( !in_array( date($c , $time) , $values ) and (strval($val) != '*') ) 
		{
			return false;
		}
    }
    
    return true;
}

/*
@Description: Get list of date
@Author     : Bhavesh Chaudhari
@Input      : start and end date
@Output     : 
@Date       : 30-04-2020
*/
function get_date_list($start,$end)
{
	$interval = new DateInterval('P1D'); 

	$realEnd = new DateTime($end); 
	$realEnd->add($interval); 

	$period = new DatePeriod(new DateTime($start), $interval, $realEnd); 

    // Use loop to store date into array 
	foreach($period as $date) 
	{                  
		$date_array[] = $date->format('Y-m-d');  
	} 

	return $date_array;
}


/*
@Description: File Get contents new function 
@Author     : Harshad Hirapara
@Input      : url
@Output     : 
@Date       : 01-06-2020
*/

function file_get_contents_new($url)
{	
	if($url!="")
	{
		$arrContextOptions=array(
			"ssl"=>array(
				"verify_peer"=>false,
				"verify_peer_name"=>false,
			),
		);

		return file_get_contents($url,false,stream_context_create($arrContextOptions));
	}
}

function get_store_wise_edit_url($store,$product_id,$inventory_edit_link='')
{	
	$store_marketplace    = strtolower($store['store_marketplace']);
	$store_id             = $store['id'];
	$listing_product_link = '';

	if($store_marketplace=='ebay')
	{
		$listing_product_link = base_url()."listing_manager/ebay/edit/".helper_encrypt_url_key($product_id)."/".helper_encrypt_url_key($store_id)."?redirect_url={$inventory_edit_link}";
	}
	elseif($store_marketplace=='amazon')
	{	
		$listing_product_link = base_url()."listing_manager/amazon/listed_edit/".helper_encrypt_url_key($product_id)."/".helper_encrypt_url_key($store_id)."?redirect_url={$inventory_edit_link}";
	}
	elseif($store_marketplace=='newegg biz')
	{
		$listing_product_link = base_url()."listing_manager/newegg_biz/listed_edit/".helper_encrypt_url_key($product_id)."/".helper_encrypt_url_key($store_id)."?redirect_url={$inventory_edit_link}";
	}
	elseif($store_marketplace=='newegg')
	{
		$listing_product_link = base_url()."listing_manager/newegg/listed_edit/".helper_encrypt_url_key($product_id)."/".helper_encrypt_url_key($store_id)."?redirect_url={$inventory_edit_link}";
	}
	elseif($store_marketplace=='jet')
	{
		$listing_product_link = base_url()."listing_manager/jet/edit/".helper_encrypt_url_key($product_id)."?redirect_url={$inventory_edit_link}";
	}
	elseif($store_marketplace=='walmart')
	{
		$listing_product_link = base_url()."listing_manager/walmart/edit/".helper_encrypt_url_key($product_id)."?redirect_url={$inventory_edit_link}";
	}
	elseif($store_marketplace=='bonanza')
	{
		$listing_product_link = base_url()."listing_manager/bonanza/listed_edit/".helper_encrypt_url_key($product_id)."?redirect_url={$inventory_edit_link}";
	}
	elseif($store_marketplace=='rakuten')
	{
		$listing_product_link = base_url()."listing_manager/rakuten/listed_edit/".helper_encrypt_url_key($product_id)."?redirect_url={$inventory_edit_link}";
	}
	// elseif($store_marketplace=='tanga')
	// {
	// 	$listing_product_link = base_url()."listing_manager/tanga/listed_edit/".helper_encrypt_url_key($product_id)."?redirect_url={$inventory_edit_link}";
	// }

	return $listing_product_link;
}

 /*
	@Description  : Get week's start and end date by week number
	@Author       : Bhavesh Chaudhari
	@Input        : Start Week, Start Week Year, End Week, End Week Year, 
	@Output       : start date, end date
	@Date         : 12-06-2020
	*/
	function get_start_end_date_by_week_number($starWeek,$startYear,$endWeek='',$endYear='') {
		
	  	$dto = new DateTime();
	  	if($endWeek=='')
	  	{
	  		$result['start'] = $dto->setISODate($startYear,$starWeek, 1)->format('Y-m-d');
  			$result['end'] = $dto->setISODate($startYear,$starWeek, 6)->format('Y-m-d');
	  	}
	  	else
	  	{
	  		$result['start'] = $dto->setISODate($startYear,$starWeek, 1)->format('Y-m-d');
  			$result['end'] = $dto->setISODate($endYear,$endWeek, 6)->format('Y-m-d');
	  	}

	  	return $result;
	}

	/*
	@Description  : Get Time ago by date and time
	@Author       : Bhavesh Chaudhari
	@Input        : Date and time 
	@Output       : ago time
	@Date         : 18-06-2020
	*/	
	function time_elapsed_string($datetime, $full = false) {
	    $now = new DateTime;
	    $ago = new DateTime($datetime);
	    $diff = $now->diff($ago);

	    $diff->w = floor($diff->d / 7);
	    $diff->d -= $diff->w * 7;

	    $string = array(
	        'y' => 'year',
	        'm' => 'month',
	        'w' => 'week',
	        'd' => 'day',
	        'h' => 'hour',
	        'i' => 'minute',
	        's' => 'second',
	    );
	    foreach ($string as $k => &$v) {
	        if ($diff->$k) {
	            $v = $diff->$k . ' ' . $v . ($diff->$k > 1 ? 's' : '');
	        } else {
	            unset($string[$k]);
	        }
	    }

	    if (!$full) $string = array_slice($string, 0, 1);
	    return $string ? implode(', ', $string) . ' ago' : 'just now';
	}

	/*
	@Description	: Update Live shipping dashboard data
	@Author			: Harshad Hirapara
	@Input			: Log parameters
	@Output			: Order log insert into database
	@Date			: 28-07-2017
	*/

	function update_shipping_dashboard($update_data = array())
	{
		$status = FALSE;

		if(is_array($update_data) && count($update_data) > 0)
		{
			$CI = &get_instance();

			$shipping_data = array(
				"pick_list_id"                => NULL,
				"picking_bin_id"              => NULL,
				"shipping_user"               => NULL,
				"change_shipping_station"     => "0",
				"change_pick_list"            => "0",
				"change_picking_bin_location" => "0",
				"updated_time"                => get_inserted_date_time()
            );

			$where =array("shipping_user"=>$update_data['shipping_user']);

			$CI->common_model->update_by_where_array("shipping_dashboard_master",$where,$shipping_data);

			$status = $CI->common_model->insert_on_duplicate_update_batch("shipping_dashboard_master",array($update_data));
		}

		return $status;
	}


	/*
	@Description	: Get User Restriction 
	@Author			: Harshad Hirapara
	@Input			: Log parameters
	@Output			: Order log insert into database
	@Date			: 28-07-2017
	*/

	function get_user_restriction($restriction_type=NULL)
	{
		$CI = &get_instance();

		$user_list = $CI->common_model->get_user_list();

		$final_user_ids = helper_array_column($user_list,NULL,'id');

		if($restriction_type!="")
		{
			$CI->db->select("user_restriction_trans.user_id,user_restriction_master.restriction_type,user_restriction_master.user_restriction");

			$CI->db->from('user_restriction_master');

			$CI->db->join('user_restriction_trans', 'user_restriction_trans.user_restriction_id = user_restriction_master.id');

			$CI->db->where("user_restriction_master.is_active","1");

			$CI->db->where("user_restriction_master.restriction_type",$restriction_type);

			$user_restriction = $CI->db->get()->result_array();

			if(count($user_restriction)>0)
			{	
				$user_restriction_type = isset($user_restriction['0']['user_restriction'])?$user_restriction['0']['user_restriction']:"";

				$user_ids = helper_array_column($user_restriction,NULL,'user_id');

				if($user_restriction_type=="Include")
				{
					$final_user_ids = $user_ids;
				}
				elseif($user_restriction_type=="Exclude")
				{
					$final_user_ids = array_diff($final_user_ids, $user_ids);
				}
			}
		}

		return $final_user_ids;
	}

	/*
	@Description	: Get Start and End date
	@Author			: Harshad Hirapara
	@Input			: date parameters
	@Output			: Date
	@Date			: 08-10-2020
	*/

	function get_start_end_date($date_value='',$date_type="")
	{
		$date_data = NULL;

		if($date_value!="" && $date_type!="")
		{	
			$date_data = date("Y-m-d",strtotime("$date_value"));

			$start_date = " 00:00:00";

			$end_date = " 23:59:59";

			if($date_type=="start")
			{
				$date_data = $date_data.$start_date;
			}
			else
			{
				$date_data = $date_data.$end_date;	
			}

			return $date_data; 
		}
	}


    /*
    @Description: Function to write query file
    @Author     : Harshad Hirapara
    @Input      : 
    @Output     :
    @Date       : 30-11-2016
    */

    function create_query_file($feed='',$file_name='test.txt')
    {
        $feed_file_path = FEED_PATH.'/temp/'.time().'_'.$file_name;

        $feedHandle = fopen($feed_file_path, 'w');

        fclose($feedHandle);

        $feedHandle = fopen($feed_file_path, 'rw+');

        fwrite($feedHandle, $feed);

        rewind($feedHandle);
    }