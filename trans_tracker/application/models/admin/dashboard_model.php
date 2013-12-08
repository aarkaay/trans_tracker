<?php
/**
* NVTF
*
* @package		NVTF
* @subpackage           Controller
* @author		Ritesh Singh
* @copyright	        Copyright (c) 2012 - 2013 
* @since		Version 1.0
* @purpose              To handle authentication for administrator
*/

class Dashboard_model extends CI_Model
{
    function __construct()
    {
        $this->load->database();
    }

    public function get_user_type($type_name)
    {
      $this->db->order_by("u_id", "desc");  
      $query = $this->db->get_where('user',array('u_type' => $type_name));
      return $query->result_array();
    }
    public function get_total_count($field,$table,$year)
    {
    $query="SELECT tots.*
FROM (
    SELECT
        YEAR($field) AS year,
        MONTH($field) AS month,
        COUNT(*) AS count
    FROM $table
    WHERE year($field)=$year
    GROUP BY year, month
) AS tots, (SELECT @var := 0) AS inc";
    $result=$this->db->query($query);
    return $result->result_array();
    }
    public function get_month_count($table,$sum,$field,$year,$month)
    {  
      $this->db->select_sum($sum);
      $where="month(".$field.") = ".$month." and year(".$field.")=".$year."";
      $this->db->where($where);
      $query = $this->db->get($table);
      //$this->db->get($table);
      //echo $this->db->last_query();
      //return $this->db->count_all_results();
      $result= $query->row_array();
      if(empty($result[$sum]))
      {
      return 0;
      }
      else
      {
      return $result[$sum];
      }
    }
    public function updateRead($table,$field)
    { 
      $data = array(
               $field => '1'
            );

	//$this->db->where($field_id, $id);
	$this->db->update($table, $data, $field = 0 );
    }
    //updateRead
    public function get_count($table,$field)
    { 
      $query = $this->db->get_where($table,array($field => '0'));
      return $query->result_array();
    }
     
    public function list_user($user_type,$count,$field='',$order='',$offset='',$perpage)
    {
	if($count==1)
	{
	   $this->db->select('*');
	   $this->db->join('resume', 'resume.re_userid = user.u_id','left');
	   //$this->db->join('resume', 'resume.re_userid = user.u_id','left');
	   //$query = $this->db->get_where('user',array('u_type' => $user_type));
           $query = $this->db->get('user');
           return $query->result_array();


	}
	else
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
        $this->db->join('resume', 'resume.re_userid = user.u_id','left');
        $this->db->order_by("u_id", "desc");
	//$query = $this->db->get_where('user',array('u_type' => $user_type),$perpage, $offset);
        $query = $this->db->get('user',$perpage, $offset);
        return $query->result_array();
	}
     
    }
    public function get_donation()
    {  
      $query = $this->db->get('donation');
      return $query->result_array();
    }
    public function get_raffle()
    {
      $query = $this->db->get_where('raffle',array('r_eventStatus' => 'Active'));
      return $query->result_array();
    }
    public function get_payment()
    {
      $query = $this->db->get('payment');
      return $query->result_array();
    
    }

	

}