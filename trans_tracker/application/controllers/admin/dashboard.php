<?php
/**
* 
*
* @package		Genext
* @subpackage           Controller
* @author		Ritesh Singh
* @copyright	        Copyright (c) 2012 - 2013 
* @since		Version 1.0
* @purpose              To handle Dashboard for administrator
*/
class Dashboard extends CI_Controller {
	
    function __construct()
    {
        parent::__construct();
        if($this->session->userdata('is_logged_in')==false)
        {
        redirect('admin');
        }
		//$this->load->library('my_pagination');
		$this->load->model('admin/dashboard_model');	
    }

    public function index()
    {
           
           $data['title']="Dashboard";  
		$data['js']="dashboard";     	
        $this->load->view('admin/head',$data);	
        $this->load->view('admin/menu');
		$this->load->view('admin/dashboard/dashboard');
    }
	 public function signout() // logout
    {
        $this->session->sess_destroy();
        redirect('admin');
    }
    

}    	