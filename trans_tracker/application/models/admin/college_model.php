<?php

/**
 * 
 *
 * @package		Genext
 * @subpackage           Controller
 * @author		Ritesh Singh
 * @copyright	        Copyright (c) 2012 - 2013 
 * @since		Version 1.0
 * @purpose              To handle Master model for administrator
 */
class College_model extends CI_Model {

    function __construct() {
        $this->load->database();
    }
    

    //Getting the total number of count for pagination
    public function getCount()
    {
    
        $this->db->select('*');
        $this->db->join('resume', 'resume.re_userid = user.u_id','left');
        if (isset($_GET['search'])) {
            $search = htmlentities($_GET['search']);
            $where = $this->searchString($search);
	    
            $query = $this->db->get_where('user', $where);
        } else {
            //$this->db->from('event');
            
            $query = $this->db->get('user');
        }

        return $query->result();
    }

    //Lsiting the page with the parameter passed
    public function getCollegeList($id, $field, $order, $offset, $perpage) 
    {
        if (isset($_GET['offset']) && $_GET['offset'] != '') {
            $offset = $_GET['offset'] + 0;
        } else {
            $offset = 0;
        }
        if (isset($_GET['field']) && $_GET['field'] != '') {
            $field = $_GET['field'];
            $order = $_GET['order'];
        } else {
            $field = '';
            $order = '';
        }
        $this->db->select('*');
        if (isset($_GET['search']) && $field != '') {
            $search = htmlentities($_GET['search']);
            $where = $this->searchString($search);
            
            $this->db->order_by($field, $order);
            $query = $this->db->get_where('user', $where,$perpage, $offset);
            //$query = $this->db->get(CUSTOMERS,$perpage,$offset);
        } elseif (isset($_GET['search'])) {
            $search = htmlentities($_GET['search']);
            $where = $this->searchString($search);
            
            $query = $this->db->get_where('user', $where,$perpage, $offset);
        } elseif ($field != '') {
            
            $this->db->order_by($field, $order);
            $query = $this->db->get('user', $perpage, $offset);
        } else {
            //$this->db->order_by("mc_id", "desc");
            $query = $this->db->get('college_category', $perpage, $offset);
            
        }

        return $query->result_array();
    }

    //Searching the string 
    public function searchString($search)
    {

        $searchstring = 'u_fname LIKE \'%' . $search . '%\' OR `u_lname` LIKE \'%' . $search . '%\' OR `u_email` LIKE \'%' . $search . '%\' OR `u_ssn` LIKE \'%' . $search . '%\' OR `u_status` LIKE \'%' . $search . '%\'';
        return $searchstring;
    }
    public function getJobDetails($id)
   {

	$this->db->order_by("d_dateadd", "desc");
      $query = $this->db->get_where('job',array('j_userid' => $id));
      return $query->result_array();

   }
    public function master_insert($data,$tablename)
   {
		$this->db->insert($tablename, $data);    
   }
   public function getMaster($tablename,$where=FALSE)
   {
   	  if($where)
	  {
	  	$this->db->where($where,NULL, FALSE);
	  }
      $query = $this->db->get($tablename);
      return $query->result_array(); 
   }
   
   //Lsiting the page with the parameter passed
    public function getStateList($id, $field, $order, $offset, $perpage) 
    {
        if (isset($_GET['offset']) && $_GET['offset'] != '') {
            $offset = $_GET['offset'] + 0;
        } else {
            $offset = 0;
        }
        if (isset($_GET['field']) && $_GET['field'] != '') {
            $field = $_GET['field'];
            $order = $_GET['order'];
        } else {
            $field = '';
            $order = '';
        }
        $this->db->select('*');
		$this->db->join('master_country', 'master_country.mc_id = master_state.ms_cid');
        if (isset($_GET['search']) && $field != '') {
            $search = htmlentities($_GET['search']);
            $where = $this->searchString($search);
            
            $this->db->order_by($field, $order);
            $query = $this->db->get_where('user', $where,$perpage, $offset);
            //$query = $this->db->get(CUSTOMERS,$perpage,$offset);
        } elseif (isset($_GET['search'])) {
            $search = htmlentities($_GET['search']);
            $where = $this->searchString($search);
            
            $query = $this->db->get_where('user', $where,$perpage, $offset);
        } elseif ($field != '') {
            
            $this->db->order_by($field, $order);
            $query = $this->db->get('user', $perpage, $offset);
        } else {
            //$this->db->order_by("mc_id", "desc");
            $query = $this->db->get('master_state', $perpage, $offset);
            
        }

        return $query->result_array();
    }
   
	//Lsiting the page with the parameter passed
    public function getCityList($id, $field, $order, $offset, $perpage) 
    {
        if (isset($_GET['offset']) && $_GET['offset'] != '') {
            $offset = $_GET['offset'] + 0;
        } else {
            $offset = 0;
        }
        if (isset($_GET['field']) && $_GET['field'] != '') {
            $field = $_GET['field'];
            $order = $_GET['order'];
        } else {
            $field = '';
            $order = '';
        }
        $this->db->select('*');
		$this->db->join('master_country', 'master_country.mc_id = master_city.mci_cid');
		$this->db->join('master_state', 'master_state.ms_id = master_city.mci_sid');
        if (isset($_GET['search']) && $field != '') {
            $search = htmlentities($_GET['search']);
            $where = $this->searchString($search);
            
            $this->db->order_by($field, $order);
            $query = $this->db->get_where('user', $where,$perpage, $offset);
            //$query = $this->db->get(CUSTOMERS,$perpage,$offset);
        } elseif (isset($_GET['search'])) {
            $search = htmlentities($_GET['search']);
            $where = $this->searchString($search);
            
            $query = $this->db->get_where('user', $where,$perpage, $offset);
        } elseif ($field != '') {
            
            $this->db->order_by($field, $order);
            $query = $this->db->get('user', $perpage, $offset);
        } else {
            //$this->db->order_by("mc_id", "desc");
            $query = $this->db->get('master_city', $perpage, $offset);
            
        }

        return $query->result_array();
    }
   
}
