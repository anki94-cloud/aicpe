<?php
class MY_Controller extends CI_Controller
{
	public $per_page_option = array(10=>10, 25=>25, 50=>50, 100=>100);
	public function __construct()
	{
		parent::__construct();

		if(!isset($this->log_in_user_id))
		{
			$this->log_in_user_id = $this->input->get("no_login")=="1"?"1":NULL;
		}

		$this->log_in_user_id = isset($this->log_in_user_id)?$this->log_in_user_id:helper_check_admin_login();

		$this->user_session = $this->session->user;

		$current_page = uri_string();

		$this->current_page = $current_page;

		// $is_restricted = $this->common_model->check_restriction($current_page);

		$is_restricted = false;   // TODO: Remove this after everything is done

		if($is_restricted)
		{
			redirect('dashboard/access_restricted');
		}

		// ini_set('error_reporting', E_ALL & ~E_NOTICE & ~E_STRICT & ~E_DEPRECATED);

		$this->load->model('user_model');

		$this->level_classes = array('', 'nav-second-level', 'nav-third-level', 'nav-fourth-level', 'nav-fifth-level','nav-sixth-level');
		$this->level = 0;

		$this->if_string_exists=FALSE;
		/////////////////////////////
		
		$this->check_url_string();

		$this->user_log_activity();

		$this->log_user_login_time();

		if(isset($_GET['debug']) && $_GET['debug'] == '1')
	    {
	        $this->output->enable_profiler(TRUE);
	    }
	}

	/*
		@Description  : This function use for insert user's activity in database
		@Created By   : Mehul Modh
		@Input        : 
	    @Output       :
	    @Date         : 26-10-2019
	*/

	function user_log_activity()
	{
		if(isset($this->user_session['id']))
		{
	    	if($this->if_string_exists === FALSE)
	    	{	
	    		$url = $this->config->site_url($this->uri->uri_string());

	    		$current_full_url = $_SERVER['QUERY_STRING'] ? $url.'?'.$_SERVER['QUERY_STRING'] : $url;

	    		$insert_activity = array(

					'pid'			=>	getmypid(),
					'url'			=>	$current_full_url,
					'user_id'		=>	$this->user_session['id'],
					'ip_address'	=>	$this->input->ip_address(),
					'segments'		=>	serialize($this->uri->segments),
					'data'			=>	serialize($_REQUEST),
					'inserted_date'	=>	date('Y-m-d H:i:s')

				);

				$this->db->insert('user_browse_activity', $insert_activity);
				$this->db->reset_query();

 				$this->db->where('user_master.id',$this->user_session['id']);
 				$this->db->update('user_master',array("last_activity_date"=>get_inserted_date_time()));

 				set_cookie("user_ideal_time",strtotime(get_inserted_date_time()),3600*12);
	    	}
		}
	}
	
        /*
	@Description	: Function to render view
	@Author			: Yogesh Hotchandani
	@Input			: 
	@Output			: 
	@Date			: 01-10-2016
	*/
        
	public function c_render($content = "",$data = array())
	{

		$extra_config                = array();
		$extra_config["css_path"]    = $this->config->item('css_path');
		$extra_config["js_path"]     = $this->config->item('js_path');
		$extra_config["images_path"] = $this->config->item('images_path');
		$extra_config["font_path"]   = $this->config->item('font_path');
		$extra_config['system_menu'] = $this->get_menu();
		$extra_config['load_vue']    = isset($this->load_vue) && $this->load_vue==TRUE  ? 'yes':'no';

		//  Menu Array For Checking 
		$extra_config['system_search_menu'] = $this->menu_search();

		//pr($extra_config['system_search_menu']);

		if(!$data)
		{
			$data=array();
		}
		$data += $extra_config;
		$this->load->view('includes/header',$data);
		$this->load->view($content,$data);
		$this->load->view('includes/footer',$data);
	}

	/*
	@Description	: Function to make array for search dropdown
	@Author			: Akshit Arora
	@Input			: 
	@Output			: 
	@Date			: 03-12-2018
	*/
	public function menu_search()
	{	
		if(isset($this->menu_data))
		{
			// Get all menu items and sort as per their parent ids
			$menu_items = $this->menu_data;
		}
		else
		{
			$menu_items = $this->common_model->get_menu();
		}
		
		$menu_items = helper_array_column_multiple_key($menu_items, array('parent_menu_id'), true);

		// Get root items
		$root_items = $menu_items[0];

		// Initialize parent tag
		$this->parent_tag = '';

		// Run the loop to add all the children of root elements
		foreach($root_items as $key => $root)
		{
			$root_items[$key]['child'] = $this->get_all_children($menu_items[$root['menu_id']], $menu_items);
		}

		return $root_items;
	}

	/*
	@Description	: Recursive function to get menu child for search
	@Author			: Akshit Arora
	@Input			: 
	@Output			: 
	@Date			: 03-12-2018
	*/
	public function get_all_children($child_menu_items, $menu_items, $append_parent = false)
	{
		// Initialize the array
		$menu_array = array();

		// Get all parent ids
		$parent_keys = array_keys($menu_items);

		// start the loop for child items
		foreach($child_menu_items as $key => $item)
		{
			// If parent found in the child item, recurse the function
			if(in_array($item['menu_id'], $parent_keys))
			{
				// Make a backup of parent name tag
				$tag_backup = $this->parent_tag;

				// Apply the current parent in parent name
				$this->parent_tag .= $item['menu_name'].' -> ';

				// recurse the function append parent name
				$menu_array = array_merge($menu_array, $this->get_all_children($menu_items[$item['menu_id']], $menu_items, true));

				//Revert to earlier tag
				$this->parent_tag = $tag_backup;
			}
			else
			{
				// If to append the parent name, add it
				if($append_parent)
				{
					$item['menu_name'] = $this->parent_tag.$item['menu_name'];
				}

				$menu_array[] = $item;
			}
		}

		// Return the menu array
		return $menu_array;
	}

	/*
	@Description	: Function to get the menu 
	@Author			: Akshit Arora
	@Input			: 
	@Output			: 
	@Date			: 9-5-2018
	*/
	public function get_menu()
	{
		$user = $this->user_model->get_user_info($this->session->user['id']);

		$user = $user[0];

		$menu_items = $this->menu_data = $this->common_model->get_menu();
		$this->menu_items = $menu_items;

		$accessible_menus = array();
		// TODO: Remove this when we ned to enable restrictions
		// if($user['user_type'] != 'Admin')
		// {
		// 	if($user['custom_permissions'] == '1')
		// 	{
		// 		$accessible_menus = $this->common_model->get_accessible_menus($user['id'], true);
		// 	}
		// 	else
		// 	{
		// 		$accessible_menus = $this->common_model->get_accessible_menus($user['group_id']);
		// 	}

		// 	$accessible_menus = array_filter($this->get_parent_menus($menu_items, $accessible_menus));
		// }
		$accessible_menus = array(); // TODO: Remove this when we need to enable restriction
		$menu_for_view = $this->build_menu($menu_items, '', 0, $accessible_menus);
		return $menu_for_view;
	}

	/*
	@Description	: Function to get the parent menu ids
	@Author			: Akshit Arora
	@Input			: menu items
	@Output			: menu whose access is given
	@Date			: 21-5-2018
	*/
	public function get_parent_menus($menu_items, $accessible_menus)
	{
		$menu_items = helper_array_column($menu_items, 'menu_id');

		foreach($accessible_menus as $menu_id)
		{
			if(!in_array($menu_items[$menu_id]['parent_menu_id'], $accessible_menus) && $menu_items[$menu_id]['parent_menu_id'] != 0)
			{
				array_push($accessible_menus, $menu_items[$menu_id]['parent_menu_id']);

				if($menu_items[$menu_id]['parent_menu_id'] != '0')
				{
					$accessible_menus = $this->get_parent_menus($menu_items, $accessible_menus);
				}
			}
		}

		return $accessible_menus;
	}

	public function build_menu($menu_array, $menu_for_view = '', $parent = 0, $accessible_menus = array())
	{
		$this->level++;
		$parent_ids = array_column($menu_array, 'parent_menu_id');

		foreach($menu_array as $menu_item)
		{
			// Skip those menus whose permission is not granted
			if(count($accessible_menus) > 0 && !in_array($menu_item['menu_id'], $accessible_menus))
			{
				continue;
			}

			if($menu_item['parent_menu_id'] == $parent)
			{
				$menu_for_view .= '<li>';

				// If the element has child elements
				if(in_array($menu_item['menu_id'], $parent_ids))
				{
					$link = 'javascript:void(0)';

					$icon = is_not_empty($menu_item['icon_image']) ? '<i class="'.$menu_item['icon_image'].'"></i>' : '';
					$content = $icon.' <span class="hide-menu">'.$menu_item['menu_name'].'<span class="fa arrow"></span></span>';
					$menu_for_view.='<a href="'.$link.'">'.$content.'</a>';

					$menu_for_view.='<ul class="nav '.$this->level_classes[$this->level].'">';

					$menu_for_view.=$this->build_menu($menu_array, '', $menu_item['menu_id'], $accessible_menus);

					$menu_for_view.='</ul>';
				}
				else
				{
					$link = $menu_item['is_external_link'] == '0' ? base_url().$menu_item['menu_link'] : $menu_item['menu_link'];
					$icon = is_not_empty($menu_item['icon_image']) ? '<i class="'.$menu_item['icon_image'].'"></i>' : '';
					$content = $icon.'<span class="hide-menu">'.$menu_item['menu_name'].'</span>';
					$target = $menu_item['is_open_new_tab'] == '1' ? 'target="_blank"' : '';

					$classes = '';
					if($this->current_page == $menu_item['menu_link'])
					{
						$classes = 'class="active"';
					}

					$menu_for_view.='<a href="'.$link.'" '.$target.' '.$classes.'>'.$content.'</a>';
				}
				// Close the li
				$menu_for_view.'</li>';
			}
		}
		$this->level--;
		return $menu_for_view;
	}

	/*
	@Description	: Function to build the menu
	@Author			: Akshit Arora
	@Input			: 
	@Output			: 
	@Date			: 9-5-2018
	*/
	public function build_menu2($menu_array, $menu_for_view = '', $parent = 0, $accessible_menus = array())
	{
		$parent_ids = array_column($menu_array, 'parent_menu_id');

		$images_path = $this->config->item('images_path');

		foreach($menu_array as $menu_item)
		{
			if(count($accessible_menus) > 0 && !in_array($menu_item['menu_id'], $accessible_menus))
			{
				continue;
			}

			if($menu_item['parent_menu_id'] == $parent)
			{
				$is_root = false;
				$menu_for_view .= '<li>';

				if($menu_item['parent_menu_id'] == 0)
				{
					// Root menu
					// $placement = $menu_item['menu_name'] == 'Dashboard' ? 'right' : 'top';
					// $menu_for_view.='<li data-toggle="tooltip" title="'.$menu_item['menu_name'].'" data-placement="'.$placement.'">';

					$is_root = true;
				}
				else
				{
					// Child element
					// $menu_for_view.='<li>';
				}

				if(in_array($menu_item['menu_id'], $parent_ids))
				{
					// Has child menus
					$link = "javascript:void(0)";
					$content = $is_root ? '<i class="icon"><img src="'.$images_path.$menu_item['icon_image'].'.png" alt=""></i>' : $menu_item['menu_name'];
					$target = $menu_item['is_open_new_tab'] == '1' ? 'target="_blank"' : '';
					$menu_for_view.='<a href="'.$link.'" '.$target.'>'.$content.'</a>';

					if($menu_item['menu_name'] == 'Order Settings')
					{
						$menu_for_view.='<ul style="margin-top: 60px;">';
					}
					elseif($menu_item['menu_name'] == 'Inventory Reports')
					{
						$menu_for_view.='<ul style="margin-top: 105px;">';
					}
					elseif($menu_item['menu_name'] == 'Order Reports')
					{
						$menu_for_view.='<ul style="margin-top: 130px;">';
					}
					else
					{
						$menu_for_view.='<ul>';
					}
					
					$menu_for_view.=$this->build_menu($menu_array, '', $menu_item['menu_id'], $accessible_menus);
					$menu_for_view.='</ul>';
				}
				else
				{
					// Has no child
					$link = $menu_item['is_external_link'] == '0' ? base_url().$menu_item['menu_link'] : $menu_item['menu_link'];
					$content = $is_root ? '<i class="icon"><img src="'.$images_path.$menu_item['icon_image'].'.png" alt=""></i>' : $menu_item['menu_name'];
					$target = $menu_item['is_open_new_tab'] == '1' ? 'target="_blank"' : '';

					$menu_for_view.='<a href="'.$link.'" '.$target.'>'.$content.'</a>';
				}
				// Close the li
				$menu_for_view.'</li>';
			}
		}

		return $menu_for_view;
	}

        /*
	@Description	:Function to render view with ajax
	@Author			: Yogesh Hotchandani
	@Input			: 
	@Date			: 01-10-2016
	*/
        
	public function s_render($content = "",$data = array(),$return=false)
	{
		$extra_config                = array();
		$extra_config["css_path"]    = $this->config->item('css_path');
		$extra_config["js_path"]     = $this->config->item('js_path');
		$extra_config["images_path"] = $this->config->item('images_path');
		$extra_config["font_path"]   = $this->config->item('font_path');
		if(!$data)
		{
			$data=array();
		}
		$data += $extra_config;
		if($return == true)
		{
			return $this->load->view($content,$data,true);
		}
		else
		{
			$this->load->view($content,$data,false);
		}
	}
        
	/*
	@Description	: Function to get custom pagination from CI Pagination library
	@Author			: Yogesh Hotchandani
	@Input			: Pagination Variables
	@Output			: Pagination HTML
	@Date			: 01-10-2016
	*/
	
	public function get_pagination($base_url = '', $suffix = '', $total_rows = 0, $uri_segment = 3, $per_page = 0, $num_links = 2,$page_query_string=FALSE)
	{
		$config['uri_segment']        = $uri_segment;
		
		$config['base_url']           = $base_url;
		
		$config['suffix']             = $suffix;
		
		$config['per_page']           = $per_page;
		
		$config['num_links']          = $num_links;
		
		$config['total_rows']         = $total_rows;
		$config['base_url']           = $base_url;
		
		$config['suffix']             = $suffix;
		
		$config['per_page']           = $per_page;
		
		$config['num_links']          = $num_links;
		
		$config['total_rows']         = $total_rows;
		
		$config['page_query_string']  = $page_query_string;

		if($page_query_string)
		$config['query_string_segment']  = "page";

		
		$config['anchor_class']       = 'paginate_button';
		
		$config['first_link_class']   = 'first paginate_button';
		
		$config['prev_link_class']    = 'previous paginate_button';
		
		$config['next_link_class']    = 'next paginate_button';
		
		$config['last_link_class']    = 'last paginate_button';
		
		$config['active_link_class']  = 'paginate_active paginate_button';
		
		$config['disable_link_class'] = 'paginate_button paginate_button_disabled disabled';
		
		$config['first_tag_open']     = '<li>';
		
		$config['first_tag_close']    = '</li>';
		
		$config['num_tag_open']       = '<li>';
		
		$config['num_tag_close']      = '</li>';
		
		$config['next_tag_open']      = '<li>';
		
		$config['next_tag_close']     = '</li>';
		
		$config['prev_tag_open']      = '<li>';
		
		$config['prev_tag_close']     = '</li>';
		
		$config['last_tag_open']      = '<li>';
		
		$config['last_tag_close']     = '</li>';
		
		$config['cur_tag_open']       = '<li class="active">';
		
		$config['cur_tag_close']      = '</li>';
		
		$config['full_tag_open']      = '<ul class="pagination">';
		
		$config['full_tag_close']     = '</ul>';

		$this->load->library('Pagination_Custom');
		
		$this->pagination_custom->initialize($config);
		
		return $this->pagination_custom->create_links();
	}

	/*
    @Description : Page of restricted access.
    @Author      : Akshit Arora
    @Output      : Shows access restricted page
    @Date        : 12-05-2018
    */
	public function access_restricted()
	{
		$this->PAGE_HEADER_DATA = get_page_header_data("page_restricted");

		$this->c_render('errors/page_restricted');
	}

	/*
    @Description : Sets the variables for pagination
    @Author      : Akshit Arora
    @input 		 : $page_config = array(
			'paging_url'		=> Pagination URL (excluding base_url), 
			'page_segment'		=> Page Segment (int)
			'per_page_option'	=> per page options
			'per_page'			=> default per page system,
			'total_records' 	=> number of records,
			'list'				=> path of view of list,
			'default_sort'		=> default sorting column,
			'default_direction' => default sorting direction,
			'list_ajax'			=> path of view of ajax list,
			'data'				=> data to sent with view
		);
    @Output      : views
    @Date        : 17-05-2018
    */
	public function set_pagination($page_config)
	{
		extract($page_config);

		$data['per_page_option'] 	= isset($per_page_option) ? $per_page_option : $this->per_page_option;
		$data['paging_url'] 		= base_url().$paging_url;
		$data['page'] 				= (int)$this->input->get('page') > 0 ? (int)$this->input->get('page') : ( ($this->uri->segment($page_segment)) ? intval($this->uri->segment($page_segment)) : 1 ) ;
		$data['per_page'] 			= (int) isset($per_page) ? $per_page : $this->get_request_params('per_page', 50);
		$data['from_records'] 		= (($data['page']-1)* $data['per_page']) + 1;
		$data['total_records'] 		= $total_records;
		$data['to_records'] 		= $data['page']*$data['per_page'] > $total_records ? $total_records : $data['page']*$data['per_page'];
		$data['to_records'] 		= $data['page']*$data['per_page'] > $data['total_records'] ? $data['total_records'] : $data['page']*$data['per_page'];
		$data['sort_by'] 			= $this->get_request_params('sort_by', $default_sort);
		$data['sort_direction'] 	= $this->get_request_params('sort_direction', $default_direction);

		if($this->input->post('request') == 'ajax' )
		{
			$data['pagination'] = $this->get_pagination($data['paging_url'], '', $data['total_records'], $page_segment, $data['per_page'],3,FALSE);

			$this->s_render($list_ajax,$data);
		}
		else
		{
			$data['pagination'] = $this->get_pagination($data['paging_url'], '', $data['total_records'], $page_segment, $data['per_page'],3,TRUE);

			$this->c_render($list, $data);
		}

	}

	/*
    @Description : Get page level config variables
    @Author      : Akshit Arora
    @input 		 : config name required, default value if config not found
    @Output      : config value
    @Date        : 17-05-2018
    */
	public function get_page_vars($config_name, $default_value = null, $page_segment = false)
	{
		switch ($config_name) 
		{
			case 'page':
				return (int)$this->input->get('page') > 0 ? (int)$this->input->get('page') : ( ($this->uri->segment($page_segment)) ? intval($this->uri->segment($page_segment)) : 1 ) ;
				break;

			case 'per_page':
				return (int) $this->get_request_params('per_page', $default_value);
				break;

			case 'sort_by':
				return $this->get_request_params('sort_by', $default_value);
				break;

			case 'sort_direction':
				return $this->get_request_params('sort_direction', $default_value);
				break;

		}
	}

	/*
    @Description : Get parameters from get/post
    @Author      : Akshit Arora
    @input 		 : key whose value is required, default value if key not found
    @Output      : key value
    @Date        : 17-05-2018
    */
	public function get_request_params($key, $default_value = '')
	{
		$response = $this->input->get($key) != '' ? $this->input->get($key) : ($this->input->post($key) ? $this->input->post($key) : $default_value);

		return $response;
	}

	/*
    @Description : Log User Login Time
    @Author      : Harshad Hirapara
    @input 		 : Log User Login Time
    @Output      : N/A
    @Date        : 05-04-2020
    */
	public function log_user_login_time()
	{		
		if($this->if_string_exists === FALSE && isset($this->user_session['id']))
		{
			$this->load->model('report/employee_working_hrs_report_model');

			$user_id    = $this->log_in_user_id;
			
			$today_date = date('Y-m-d');

			if(!isset($_SESSION['user_shift_time_updated']))
			{
				$user_log = $this->employee_working_hrs_report_model->get_user_log_in_details($user_id,$today_date);
				
				if(count($user_log)<=0)
				{	
					$task_name = 'StartUp';
					$system_task_type = 'general';

					$department_task_detail = $this->employee_working_hrs_report_model->get_departmentid_task_id($task_name,$system_task_type);

					if(count($department_task_detail)>0)
					{
						$task_id 	   = get_value($department_task_detail,'id');
						$department_id = get_value($department_task_detail,'department_id');
						$user_id       = $this->log_in_user_id;
						$start_time    = date("H:i:s");
						$working_date  = date('Y-m-d');

						if($user_id!="" && $working_date!="" && $start_time!="")
						{	
							if($user_id!="")
							{
								$today_date  = date('Y-m-d');
								$record = $this->employee_working_hrs_report_model->check_user_today_task($user_id,$today_date);
							}

							$insert_data =array(
								'user_id'       => $user_id,
								'department_id' => $department_id,
								'task_type_id'  => $task_id,
								'date'          => $working_date,
								'start_time'    => $start_time,
								'end_time'      => NULL,
								'inserted_by'   => $this->log_in_user_id,
								'inserted_date' => get_inserted_date_time()
							);

							$insert_log_in_detail =array(
								'user_id'          => $user_id,
								'login_time'       => get_inserted_date_time(),
								'shift_start_time' => get_inserted_date_time(),
								'inserted_by'      => $this->log_in_user_id,
								'inserted_date'    => get_inserted_date_time()
							);

							if(count($insert_data)>0)
							{
								$this->common_model->insert_all('employee_working_hrs',$insert_data);
							}

							if(count($insert_log_in_detail)>0)
							{
								$this->common_model->insert_all('user_login_details',$insert_log_in_detail);
							}
						}
					}
				}
				elseif(count($user_log)>0)
				{	
					if(get_value($user_log,'is_shift_updated')=="1")
					{
						$this->session->set_userdata('user_shift_time_updated',"yes");
					}
				}
			}
		}
	}

	/*
    @Description : Log User Login Time
    @Author      : Harshad Hirapara
    @input 		 : Log User Login Time
    @Output      : N/A
    @Date        : 05-04-2020
    */
	public function check_url_string()
	{
		$url = $this->config->site_url($this->uri->uri_string());
		
		$current_full_url = $_SERVER['QUERY_STRING'] ? $url.'?'.$_SERVER['QUERY_STRING'] : $url;

		$check_strings = array('get_user_job_task_timer','get_verify_shift_time_modal','user_assistance','/system_scheduler/1');

		$this->if_string_exists = FALSE;

		foreach ($check_strings as $key => $value) 
		{
			if(strpos($current_full_url, $value) !== FALSE)
			{
				$this->if_string_exists = TRUE;
				break;
			}
		}
	}
}