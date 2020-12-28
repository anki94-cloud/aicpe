<?php
class Common_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        
    }

	/*
        @Description  : get multiple row from table by key as relations of columns
        @Author       : Chirag Thakkar
        @Output       : Listing
        @Date         : 26-12-2014
    */
	function select_by_key($table, $where)
	{
		$this->db->from($table);
		$this->db->where($where);
		$query = $this->db->get();
		return $query->result_array();
	}

	/*
        @Description  : get single row for specific fields only from table by key
        @Author       : Harshad Hirapara
        @Output       : Listing
        @Date         : 06-10-2016
    */
	function select_single_specific_field_by_key($table, $fields, $key, $value)
	{
		$this->db->select($fields);
		$this->db->from($table);
		$this->db->where($key, $value);
		$this->db->limit(1);
		$query = $this->db->get();
		$res = $query->result_array();
		if(count($res)>0)
		{
			return @$res['0'];
		}
	}
        
        /*
        @Description  : get single row from table by key
        @Author       : Shantanu used Mehul Modh code
        @Output       : Listing
        @Date         : 18-11-2016
        */
        
       function select_single_result($table,  $where_array , $return_type = 'object')
	{
		$this->db->select('*');
		$this->db->from($table);
		$this->db->where($where_array);
		$this->db->limit(1);
		$query = $this->db->get();
		if($return_type == 'object')
		{
			$result = $query->result();
		}
		else
		{
			$result = $query->result_array();
		}
		
		if(count($result) > 0)
		{
			return $result['0'];
		}	
		else
		{
			return array();
		}
	}

	/*
        @Description  : get multiple row from table with multiple where conditions
        @Author       : Mehul Modh
        @Output       : Listing
        @Date         : 26-12-2014
    */
	function select_fields_by_where_array($table, $where_array , $get_fields = array() ,$return_type = 'object', $order_by_array = array())
	{
		if(is_array($get_fields) && count($get_fields) > 0 )
		{
			$this->db->select($get_fields);
		}
		else
		{
			$this->db->select('*');
		}	
		
		$this->db->from($table);
		
		$this->db->where($where_array);

		if(count($order_by_array) > 0)
		{
			foreach($order_by_array as $order_by_detail)
			{
				$this->db->order_by($order_by_detail['field'] , $order_by_detail['direction']);
			}
		}	
		
		$query = $this->db->get();
		
		if($return_type == 'object')
		{
			$result = $query->result();
		}
		else
		{
			$result = $query->result_array();
		}
		
		return $result;
	}

	/*
        @Description  : Insert Batch
        @Author       : Harshad Hirapara
        @Date         : 06-10-2016
    */

	public function insert_batch($table,$data)
	{
		$this->db->insert_batch($table, $data);
		return $this->db->insert_id();
	}

	public function insert_on_duplicate_update_batch($table,$data,$update_key=array())
	{
		return $this->db->insert_on_duplicate_update_batch($table, $data,$update_key);
	}

	/*
        @Description  : Count table by Where
        @Author       : Harshad Hirapara
        @Date         : 06-10-2016
    */

	public function count_by_where_array($table,$where='')
	{
		$this->db->from($table);

		if($where!='') 
		{
			$this->db->where($where);
		}
		
		return $this->db->count_all_results(); 
	}

	/*
		@Description: Update all by multiple keys
		@Author     : Mehul Modh
		@Input      : 
		@Output     : 
		@Date     : 12-11-2016
    */
		
    function update_by_where_array($table, $where_array = array() , $data)
    {
        
   		if(count($where_array) > 0)
		{
			$this->db->where($where_array);
		}
		
		if($this->db->update($table, $data))
		{	
			return TRUE;
		}
		else
		{			
			return FALSE;
		}

	}

	/*
		@Description  : Update all by multiple keys
		@Author     : Mehul Modh
		@Input      : 
		@Output     : 
		@Date     : 12-11-2016
    */
		
    function update_by_where_in($table, $column = '', $where_in = array() , $data)
    {
   		if(count($where_in) > 0)
		{
			$this->db->where_in($column,$where_in);
		}
		
		$this->db->update($table, $data);
	}

	/*
		@Description  : Update all
		@Author       : Harshad Hirapara
		@Date         : 06-10-2016
    */
	public function update_master($table, $key, $value, $data)
	{
		
	   $this->db->where($key, $value);
	   if($this->db->update($table, $data))
	   {
	   		return TRUE;
	   }
	   else
	   {
	   		return FALSE;
	   }
	   
   	}
   	/*
        @Description  : get multiple row from table not in array
        @Author       : Harshad Hirapara
        @Output       : Listing
        @Date         : 06-10-2016
    */
	public function get_detail_not_in($table, $key, $ni_array,$fields='*')
	{
		$this->db->select($fields);
		$this->db->from($table);
		$this->db->where_not_in($key, $ni_array);
		$query = $this->db->get();
		return $query->result_array();
	}
	/*
        @Description  : select single key by where and order
        @Author       : Harshad Hirapara
        @Output       : Listing
        @Date         : 06-10-2016
    */

	public function select_single_by_key_limit($table,$where,$fields='*',$limit='',$order='')
	{
		$this->db->select($fields);
		$this->db->from($table);

		if($limit!='')
		{
		 	$this->db->limit($limit);
		}

		if($order!='')
		{
			$this->db->order_by($order);
		}
		
		$this->db->where($where);

		$query = $this->db->get();
		return $query->result_array();
	}

	/*
		@Description  : Insert data  
		@Author       : Harshad Hirapara
		@Date         : 06-10-2016
    */

	public function insert_all($table, $data)
	{

		$this->db->insert($table, $data);
		$id = $this->db->insert_id();

		////////////////////
		if($id)
		{
			return $id;
		}
		else
		{
			return FALSE;
		}
	}


	/*
		@Description  : update data as batch  
		@Author       : Harshad Hirapara
		@Date         : 14-10-2016
    */

	public function update_batch($table,$data,$key)
	{
		if($this->db->update_batch($table,$data,$key))
		{
			return TRUE;
		}
		else
		{
			return FALSE;
		}
	}

	public function update_batch_where($table,$data,$key,$where=array(),$limit_chunk=50)
	{
		$data_batch = array_chunk($data,$limit_chunk);
		foreach($data_batch as $data)
		{
			if(!empty($where))
			{
				foreach ($where as $key_where => $value)
				{
					if(is_numeric($key_where))
					{
						$this->db->where($value);
					}
					else
					{
						$this->db->where($key_where,$value);
					}
				}
			}
			$this->db->update_batch($table,$data,$key);
		}
	}

	/*
    @Description : Start transaction
    @Author      : Harshad Hirapara
    @Input       : 
    @Output      : 
    @Date        : 21-06-2018
    */

    function start_transaction()
    {
        $this->db->trans_start();
    }

	 /*
      @Description	: Function to Transaction Start for query.
      @Author			: Yogesh
      @Input			:
      @Output			:
      @Date			: 10-09-2016
     */

    function begin_transaction()
    {
        $this->db->trans_begin();
    }

    /*
      @Description	: Function to Transaction Rollback for query.
      @Author			: Yogesh
      @Input			:
      @Output			:
      @Date			: 15-11-2016
     */

    function rollback_transaction()
    {
         $this->db->trans_rollback();
    }

    /*
      @Description	: Function to Transaction Complete for query.
      @Author			: Yogesh
      @Input			:
      @Output			:
      @Date			: 10-09-2016
     */

    function complete_transaction()
    {
        $this->db->trans_complete();
    }


    /*
      @Description	: Function to Transaction Complete for query.
      @Author			: Yogesh
      @Input			:
      @Output			:
      @Date			: 10-09-2016
     */

    function commit_transaction()
    {
        $this->db->trans_commit();
    }
    /*
      @Description	: Function to Check Transaction Status.
      @Author			: Yogesh
      @Input			:
      @Output			:
      @Date			: 14-11-2016
     */

    function get_db_transaction_status()
    {
        return $this->db->trans_status();
    }

    /*
      @Description	: Function to debug database error.
      @Author			: Yogesh
      @Input			:
      @Output			:
      @Date			: 14-11-2016
     */

    function db_debug($status=FALSE)
    {
        $this->db->db_debug = $status;
    }

    function select_all($table)
	{
		$this->db->select('*');
		$this->db->from($table);

		$query = $this->db->get();
		return $query->result_array();
	}


	/*
      @Description    : Function to get module column mapping
      @Author		  : Yogesh Hotchandani
      @Input		  : module name user id
      @Output		  :
      @Date			  : 10-10-2016
     */

	function get_module_column_mapping($module,$user_id)
	{
		$this->db->select("*");

		$this->db->from("module_column_mapping");

		$this->db->where("module_column_mapping.module_name",$module);

		$this->db->where("module_column_mapping.user_id",$user_id);

		$result = $this->db->get()->result_array();

		if($result)
		{
			return unserialize($result["0"]["column_list"]);
		}
		else
		{
			return array();
		}
	}

	function get_module_columns($module)
	{
		$this->db->select("*");

		$this->db->from("module_column");

		$this->db->where("module_column.module",$module);

		$this->db->order_by("module_column.sort_order");

		return $result = $this->db->get()->result_array();
	}


	/*
      @Description    : Function to store module column mapping
      @Author		  : Yogesh Hotchandani
      @Input		  : module name user id and columnlist
      @Output		  :
      @Date			  : 10-10-2016
     */

	function insert_update_module_column_mapping($module,$user_id,$list)
	{
		$this->db->select("*");

		$this->db->from("module_column_mapping");

		$this->db->where("module_column_mapping.module_name",$module);

		$this->db->where("module_column_mapping.user_id",$user_id);

		$result = $this->db->get()->result_array();

		if($result)
		{
			$this->db->where("module_column_mapping.module_name",$module);

			$this->db->where("module_column_mapping.user_id",$user_id);

			$this->db->update("module_column_mapping",array("column_list"=>$list,"modified_date"=>get_inserted_date_time(),"modified_by"=>$user_id));
		}
		else
		{
			$this->db->insert("module_column_mapping",array("user_id"=>$user_id,"module_name"=>$module,"column_list"=>$list,"inserted_date"=>get_inserted_date_time(),"inserted_by"=>$user_id));
		}

	}


	public function delete_record($table,$condition,$protect_identifiers=false)
	{
		$where =   isset($condition["where"])?$condition["where"]:array();

		$where_in= isset($condition["where_in"])?$condition["where_in"]:array();

		$this->db->_protect_identifiers=$protect_identifiers;

		foreach ($where as $key => $value)
		{
			if(is_numeric($key))
			{
				$this->db->where($value);
			}
			else
			{
				$this->db->where($key,$value);
			}
		}
		
		foreach ($where_in as $key => $value)
		{
			if(is_array($value))
			{
				$this->db->where_in($key,$value);
			}
		}
		
		if($where || $where_in)
		$this->db->delete($table);
	}
        
        /*
		@Description  : delete all by multiple keys
		@Author       : Shantanu
		@Date         : 18-11-2016
        */
        
		function delete_by_where_array($table, $where_array)
		{
			if(count($where_array) > 0)
			{
				$this->db->where($where_array);
			}
			
			if($this->db->delete($table))
			{
				return TRUE;
			}
			else
			{
				return FALSE;
			}
		}

	/*
        @Description  : Select With Different Condition
        @Author       : Yogesh Hotchandani
        @Date         : 16-09-2015
    */

	public function select_from($table,$data=array("*"),$condition=array(),$is_return_array=true,$use_protech_identifier=false)
	{
		$where          =   isset($condition["where"])?$condition["where"]:array();
		
		$where_in       = isset($condition["where_in"])?$condition["where_in"]:array();
		
		$join           =	isset($condition["join"])?$condition["join"]:array();
		
		$having         = isset($condition["having"])?$condition["having"]:array();
		
		$group_by       = isset($condition["group_by"])?$condition["group_by"]:array();
		
		$order_by       = isset($condition["order_by"])?$condition["order_by"]:array();
		
		$limit          = isset($condition["limit"])?$condition["limit"]:array();
		
		$where_in_chunk = isset($condition["where_in_chunk"])?$condition["where_in_chunk"]:false;

		$where_in_chunk_limit = isset($condition["where_in_chunk_limit"])?$condition["where_in_chunk_limit"]:500;

		$this->db->_protect_identifiers=$use_protech_identifier;

		$this->db->select($data);

		$this->db->from($table);

		foreach ($where as $key => $value)
		{
			if(is_numeric($key))
			{
				$this->db->where($value);
			}
			else
			{
				$this->db->where($key,$value);
			}
		}
		foreach ($where_in as $key => $value)
		{
			if(is_array($value))
			{
				if($where_in_chunk && $where_in_chunk_limit)
				{
					$value = array_chunk($value,$where_in_chunk_limit);
					$this->db->group_start();
					foreach ($value as $value_key => $value_array)
					{
						if($value_key==0)
						{

							$this->db->where_in($key,$value_array);
						}
						else
						{
							$this->db->or_where_in($key,$value_array);	
						}
					}
					$this->db->group_end();	
				}
				else
				{
					$this->db->where_in($key,$value);
				}
			}
		}
		foreach ($join as $key => $value)
		{
			$this->db->join($value["table"],$value["condition"],$value["type"]);
		}
		foreach ($group_by as $key => $value)
		{
			$this->db->group_by($value);
		}
		foreach ($having as $key => $value)
		{
			$this->db->having($value);
		}
		
		foreach ($order_by as $key => $value)
		{
			$sort_direction = isset($value["direction"])?$value["direction"]:"";

			$sort_by = isset($value["sort_by"])?$value["sort_by"]:"";

			if(trim($sort_direction)!="" && trim($sort_by)!="")
			{
				$this->db->order_by($sort_by,$sort_direction);
			}
			else
			{
				$this->db->order_by($value);
			}
		}

		if(isset($limit) && !empty($limit))
		{
			if(is_array($limit))
			{
				if(isset($limit["start"]) && isset($limit["length"]))
				$this->db->limit($limit["length"],$limit["start"]);
			}
			else
			{
				$this->db->limit($limit);
			}
		}
		//echo $this->db->_compile_select();exit;
		if(!$is_return_array)
		return $this->db->get()->result();
		return $this->db->get()->result_array();
	}

	function update_master_by_array($table, $update_master_by_array, $data)
   {
   		//$data['modified_by']       = $this->logedin_user_id;
		foreach ($update_master_by_array as $key => $value)
		{
			$this->db->where($key, $value);
		}
		$this->db->update($table, $data);




		///////////////
		$this->session->set_flashdata('msg', 'Record Updated successfully');
		$this->session->set_flashdata('msg-type', 'success');
	}
        
    /*
    @Description : A common function to get number of rows table
    @Author      : Shantanu
    @Input       : table name, search criteria
    @Output      : matching fields
    @Date        : 24-12-2014
    */
        
    function get_number_of_rows_table($table,$fields,$where_array)
    {
        $this->db->select($fields);

        $this->db->from($table);

        $this->db->where($where_array);

        $query = $this->db->get();

        $num_rows = $query->num_rows();

        return $num_rows;
    }
    
    /*
    @Description : A common function to save / replace table data based on table name
    @Author      : Shantanu
    @Input       : table name, search criteria
    @Output      : matching fields
    @Date        : 24-12-2014
    */
    
    public function save($table, $new, $old = array('id' => 0)) 
    {		
        foreach ($old as $field => $value) 
        {
            if (is_string($value) && (strlen($value) == 10 OR strlen($value) == 16 OR strlen($value) == 19))
                if (preg_match("/([0-9]{1,2})-([0-9]{1,2})-([0-9]{4}) ([0-9]{1,2}):([0-9]{1,2}):([0-9]{1,2})/", $value, $regs)) 
                    $old[$field] = "$regs[3]-$regs[2]-$regs[1] $regs[4]:$regs[5]:$regs[6]";
                elseif (preg_match("/([0-9]{1,2})-([0-9]{1,2})-([0-9]{4}) ([0-9]{1,2}):([0-9]{1,2})/", $value, $regs)) 
                    $old[$field] = "$regs[3]-$regs[2]-$regs[1] $regs[4]:$regs[5]";
                elseif (preg_match("/([0-9]{1,2})-([0-9]{1,2})-([0-9]{4})/", $value, $regs)) 
                    $old[$field] = "$regs[3]-$regs[2]-$regs[1]";
        }
        foreach ($new as $field => $value) 
        {
            if (is_string($value) && (strlen($value) == 10 OR strlen($value) == 16 OR strlen($value) == 19))
                if (preg_match("/([0-9]{1,2})-([0-9]{1,2})-([0-9]{4}) ([0-9]{1,2}):([0-9]{1,2}):([0-9]{1,2})/", $value, $regs)) 
                        $new[$field] = "$regs[3]-$regs[2]-$regs[1] $regs[4]:$regs[5]:$regs[6]";
                elseif (preg_match("/([0-9]{1,2})-([0-9]{1,2})-([0-9]{4}) ([0-9]{1,2}):([0-9]{1,2})/", $value, $regs)) 
                        $new[$field] = "$regs[3]-$regs[2]-$regs[1] $regs[4]:$regs[5]";
                elseif (preg_match("/([0-9]{1,2})-([0-9]{1,2})-([0-9]{4})/", $value, $regs))
                        $new[$field] = "$regs[3]-$regs[2]-$regs[1]";
        }

        $diff_row = array_diff_assoc($new, $old);

        if (count($diff_row) <= 0)
            return $old['id'];

		
        if ($old['id'] == 0) 
        {
            $this->db->insert($table, $new);
            $query = $this->db->query('SELECT LAST_INSERT_ID()');
            $new_id = $query->row_array();
            $id = $new_id['LAST_INSERT_ID()'];
        }
        else 
        {
            
            $this->db->update($table, $new, "id = '" . $old['id'] . "'");			
            $id = $old['id'];
        }	
        return $id;
    }
    
    /*
    @Description : A common function to get field values of a table
    @Author      : Shantanu
    @Input       : table name, search criteria
    @Output      : matching fields
    @Date        : 24-12-2014
    */
    
    public function getField($table, $search, $search_field = 'id', $field = 'name') 
    {
        if (is_array($field))
            $this->db->select(implode(',', $field), FALSE);
        else
            $this->db->select($field, FALSE);

        if ($search === NULL)
            $query = $this->db->get($table);
        else if (is_array($search))
            $query = $this->db->get_where($table, $search);
        else
            $query = $this->db->get_where($table, array($search_field => $search));

        $row = $query->row_array();
        if ($row == FALSE)
            return FALSE;

        foreach ($row as $f => $v) 
        {
            if (is_string($v) && (strlen($v) == 10 OR strlen($v) == 19)) 
            {
                if (preg_match("/([0-9]{4})-([0-9]{1,2})-([0-9]{1,2}) ([0-9]{1,2}):([0-9]{1,2}):([0-9]{1,2})/", $v, $regs)) 
                    $row[$f] = "$regs[3]-$regs[2]-$regs[1] $regs[4]:$regs[5]:$regs[6]";
                else if (preg_match("/([0-9]{4})-([0-9]{1,2})-([0-9]{1,2})/", $v, $regs))
                    $row[$f] = "$regs[3]-$regs[2]-$regs[1]";
            }
        }
        if (is_array($field))
                return $row;

        return $row[$field];
    }

       

    /*
		@Description : Function to get countries
		@Author      : Mehul Modh
        @Input       : 
        @Output      : 
        @Date        : 11-01-2017
    */
	
	function get_country_list()
	{
		$country_list = array();
		
		/////////////////////
		
		$this->db->select();
		
		$this->db->from('country_master');
		
		$country_list = $this->db->get()->result();

		return $country_list;
	}

	/*
		@Description : Function to get all warehouse
		@Author      : Mehul Modh
        @Input       : 
        @Output      : 
        @Date        : 11-01-2017
    */
	
	function get_warehouse_list($only_active = TRUE)
	{
		$warehouse_list = array();
		
		/////////////////////
		
		$this->db->select('id,warehouse_name,warehouse_type,is_active,is_default_warehouse');
		
		$this->db->from('warehouse_master');

		if($only_active)
		{
			$this->db->where('is_active','0');
		}

        $this->db->order_by("warehouse_name","asc");
		
		$warehouse_list = $this->db->get()->result();

		return $warehouse_list;
	}

	/*
		@Description : Function to get users
		@Author      : Mehul Modh
        @Input       : 
        @Output      : 
        @Date        : 11-01-2017
    */
	
	function get_user_list($is_deleted=false)
	{
		$user_list = array();
		
		/////////////////////
		
		$this->db->select();
		
		$this->db->from('user_master');
		
		if($is_deleted == false)
		{

			$this->db->where('is_deleted','0');
		}
		
		$this->db->order_by('user_name','asc');

		$country_list = $this->db->get()->result();

		return $country_list;
	}

	function excute_query($query="")
	{
		$this->db->query($query);
	}

	/*
    @Description : Get menu as per logged in user
    @Author : Akshit Arora
    @Date : 12-5-2018
    */  
	public function get_menu()
	{
		$this->db->where('menu_master.is_active', '1');
		$this->db->group_by('menu_master.menu_id');
		$this->db->order_by('menu_master.parent_menu_id', 'ASC');
		$this->db->order_by('menu_master.menu_display_rank', 'ASC');
		
		return $this->db->get('menu_master')->result_array();
	}

	/*
    @Description : Get the accessible menu ids for the logged in user
    @Author : Akshit Arora
    @Date : 12-5-2018
    */
	public function get_accessible_menus($user_id, $is_custom_permitted = false)
	{
		$this->db->select('(CASE WHEN user_module_permissions.module_id IS NULL THEN module_attributes.menu_id WHEN user_module_permissions.attribute_id IS NULL THEN modules.menu_id END) as fetched_menu_id', false);
		$this->db->from('user_module_permissions');
		$this->db->join('modules', 'user_module_permissions.module_id = modules.id', 'left');
		$this->db->join('module_attributes', 'user_module_permissions.attribute_id = module_attributes.id', 'left');
		$this->db->having('fetched_menu_id IS NOT NULL');

		$this->db->where('user_module_permissions.user_group_id', $user_id);

		if($is_custom_permitted)
		{
			$this->db->where('user_module_permissions.permission_type', 'u');
		}
		else
		{
			$this->db->where('user_module_permissions.permission_type', 'g');
		}
		
		$response = $this->db->get()->result_array();

		$menu_ids = array_column($response, 'fetched_menu_id');

		return $menu_ids;
	}

	/*
    @Description : Get menu as per logged in user
    @Author : Akshit Arora
    @Date : 12-5-2018
    */
    public function check_restriction($page)
    {
    	$user = $this->db->get_where('user_master', 'id="'.$this->session->user['id'].'"')->row_array();

    	// If user is admin
    	if($user['user_type'] == 'Admin' || $page == 'dashboard' || $page == 'dashboard/access_restricted')
    		return false;

    	$query = 'SELECT `user_module_permissions`.`permission_type`, `user_module_permissions`.`user_group_id`, TRIM(TRAILING "/" FROM system_modules.link) AS module_link FROM ((select modules.id as module_id, NULL as attribute_id, modules.link from modules UNION select null as module_id, module_attributes.id as attribute_id, module_attributes.link from module_attributes) AS system_modules) LEFT JOIN `user_module_permissions` ON (`user_module_permissions`.`module_id` = `system_modules`.`module_id` or `user_module_permissions`.`attribute_id` = `system_modules`.`attribute_id`) HAVING `module_link` = "'.$page.'" ';

    	// pr($query);

    	$result = $this->db->query($query)->result_array();

    	// pr($result);

    	if(count($result) > 0)
    	{
    		foreach($result as $use_case)
    		{
    			// Check if the user has access, then let it go, else restrict
    			if($user['custom_permissions'] == '1')
    			{
    				if($use_case['permission_type'] == 'u' && $use_case['user_group_id'] == $user['id'])
    				{
    					return false;
    				}
    			}
    			else
    			{
    				if($use_case['permission_type'] == 'g' && $use_case['user_group_id'] == $user['group_id'])
    				{
    					return false;
    				}
    			}
    		}
    	}
    	else
    	{
    		// Module entry does not exists in database, let it go
    		return false;
    	}

    	return true;
    }

     /*
    @Description: Get Total Record Of Last Select Query Excuted
    @Author:      Yogesh Hotchandani
    @Input:       
    @Output:      
    @Date:        03-05-2017
     */
    function get_total_record()
    {
        $query = $this->db->query('SELECT FOUND_ROWS() AS Count');
        return (int)$query->row()->Count;
    }

    /* 	
      @Description: Function for get Field Value from table
      @Author: Sachin Koshti
      @Input: Table Name, Field Name which u want to get, Database field to compare, compare value
      @Output: Field value
      @Date: 26-07-2017
     */

    function get_field_from_table($table, $get_field, $db_field, $compare_value) {
        $this->db->select("$get_field");
        $this->db->from($table);
        $this->db->where($db_field, $compare_value);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            $return = $query->row();
            return $return->$get_field;
        } else {
            return NULL;
        }
    }

    /* ##### Start Email System Code ##### */

    /*
        @Description  : get multiple row from table with multiple where conditions
        @Author       : Mehul Modh
        @Output       : Listing
        @Date         : 26-12-2014
    */
	function select_by_where_master($table, $where_array = array() , $where_in_array = array() , $where_string = '' , $return_type = 'object', $fields = array())
	{		
		if(!empty($fields))
		{			
			$this->db->select($fields);
		}
		else
		{
			$this->db->select('*');
		}
		
		$this->db->from($table);
		
		if(count($where_array) > 0)
		{
			$this->db->where($where_array);
		}
		
		if($where_string != '')
		{
			$this->db->where($where_string);
		}
		
		if(count($where_in_array) > 0)
		{
			foreach($where_in_array as $where_in_detail)
			{
				if($where_in_detail['type'] == 'in')
				{
					$this->db->where_in($where_in_detail['field'], $where_in_detail['values']);
				}
				else if($where_in_detail['type'] == 'not_in')
				{
					$this->db->where_not_in($where_in_detail['field'], $where_in_detail['values']);
				}
			}
		}
		
		$query = $this->db->get();
		
		if($return_type == 'object')
		{
			$result = $query->result();
		}
		else
		{
			$result = $query->result_array();
		}
		
		return $result;
	}

	/*
    @Description  : Get Global Settings
    @Author       : Harshad Hirapara
    @Input        : N/A
    @Output       : Global Settings list
    @Date         : 17-08-2020
    */

    function get_global_setting_list()
    {
        $this->db->select('
            global_settings.name,
            global_settings.value
        ');

        $this->db->from('global_settings');

        $setting_list = $this->db->get()->result_array();

        $setting_list = helper_array_column($setting_list,'name','value');

        return $setting_list;
    }

    /*
    @Description  : Get User Settings
    @Author       : Harshad Hirapara
    @Input        : N/A
    @Output       : User Settings list
    @Date         : 17-08-2020
    */
    function get_user_setting_list($user_id=NULL)
    {	
    	$user_setting_list = array();

    	if($user_id!="")
    	{
    		$this->db->select('
    			user_master.id,
    			user_master.is_hazmat_user,
    			user_master.is_cost_update_eligible,
    			user_master.is_internal_status_update_eligible,
    			user_master.custom_permissions,
    			user_master.allow_to_ship_without_pick_list,
    			user_master.dont_alllow_change_picklist_without_complete,
    			user_master.dont_alllow_ship_without_picked,
    			user_master.multi_item_order_acknowledge,
    			user_master.restrictions,
    			user_master.allow_to_assign_pick_list
    		');

    		$this->db->from('user_master');

    		$this->db->where('user_master.id', $user_id);

    		$user_setting_list = $this->db->get()->row_array();
    	}
 
    	return $user_setting_list;
    }

    /* End Email System Code */
}
?>
