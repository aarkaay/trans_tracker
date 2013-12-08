<?php
/**
* NVTF
*
* @package		Nextgen
* @subpackage           Controller
* @author		Ritesh Singh
* @copyright	        Copyright (c) 2012 - 2013 
* @since		Version 1.0
* @purpose              To handle login functionality for admin
*/

class Signin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->model('admin/signin_model');
        if($this->session->userdata('is_logged_in')==1)
        {
            redirect('admin/dashboard');
        }

    }
	/*
	 * To display login form for the admin panel
	 */
    public function index() 
    {
        $data['title']="Login";  
		$data['js']="index";     	
        $this->load->view('admin/head',$data);	
        $this->load->view('admin/login');

    }

    public function login_check() // to check authentication 
    {
        $this->form_validation->set_rules('username','Email','required');
        $this->form_validation->set_rules('password','Password','required');
        if($this->form_validation->run()===FALSE)
        {
            $this->index();
        }
        else
        {
            $query=$this->signin_model->check_login();
			
            if($query) 
            {							      	
                $data = array(
                        'admin_id' => $query['a_id'],
                        'admin_email' => $query['a_email'],
                        'admin_fname' => $query['a_fname'],
                        'admin_lname' => $query['a_lname'],
                        'is_logged_in' => true
                         );
                $this->session->set_userdata($data);
                redirect('admin/dashboard/');
            }
            else 
            {
                $this->session->set_flashdata('error', 'Invalid Username and Password');
                redirect('admin');
            }
        }
    }



   

}
