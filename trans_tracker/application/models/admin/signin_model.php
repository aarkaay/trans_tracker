<?php
/**
* NVTF
*
* @package		nextgen
* @subpackage           Controller
* @author		Ritesh Singh
* @copyright	        Copyright (c) 2012 - 2013 
* @since		Version 1.0
* @purpose              To handle authentication for administrator
*/

class Signin_model extends CI_Model
{
    function __construct()
    {
        $this->load->database();
        //$this->load->library('my_procedure');
        //$this->output->enable_profiler(TRUE);
    }

    public function check_login()
    {
        $username=$this->input->post('username');
        $password=md5($this->input->post('password'));

            $this->db->where('a_email',$username);
            $this->db->where('a_password',$password);
            $query=$this->db->get('admin_users');

        if($query->num_rows()==1)
        {
            return $query->row_array(); 
        }
    }

    function randomPrefix($length)
    {
            $random= "";

            srand((double)microtime()*1000000);

            $data = "AbcDE123IJKLMN67QRSTUVWXYZ";
            $data .= "aBCdefghijklmn123opq45rs67tuv89wxyz";
            $data .= "0FGH45OP89";

            for($i = 0; $i < $length; $i++)
            {
                $random .= substr($data, (rand()%(strlen($data))), 1);
            }

        return $random;
    }		

}
