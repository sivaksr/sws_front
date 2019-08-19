<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Adminlogin extends CI_Controller
{
	

   
	
	public function __construct()
	{
		parent::__construct();			
		$this->load->library('session');
		$this->load->model('Login_model','My_model');
	
	}
	
	    public function index() {	
		    if($this->input->post('submit')){
					$email_not_exist = $this->My_model->get_login_email_not_exist();
					if(!empty($email_not_exist)){
						$result = $this->My_model->get_login();
						if(!empty($result)){						
							$this->session->set_userdata('id',$result['id']);
							$this->session->set_userdata('email', $result['email']);
							$this->session->set_userdata('pwd', $result['pwd']);	
							redirect('admin/add-slider','refresh');							
						}else{
							$this->session->set_flashdata('msg_error', 'Please enter a valid Username and Password');
						}
					}else{
						$this->session->set_flashdata('msg_error', 'Please enter a valid Username and Password.');
					}	
			    
		    }
		     $this->load->view('admin-login');
	    }
	
	
	

	
		
}