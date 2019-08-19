<?php
if(!defined('BASEPATH')) exit ('No direct script access allowed');

class Login_model extends CI_model
{
  public $login = 'login_tble';
  
	public function __construct()
	{
		parent:: __construct();
	}
	
   	
	
   public function get_login_email_not_exist(){
	    $username = $this->input->post('email');
		$query = $this->db->select('*')->from($this->login)->where("(email = '$username')")->get(); 
	    $result = $query->row_array();
		return $result;
	}			
	
    public function get_login(){
	    $username = $this->input->post('email');
		$query = $this->db->select('*')->from($this->login)->where(['email' =>$username,'pwd'=>$this->input->post('pwd')])->get(); 
	    $result = $query->row_array();
		return $result;
	}		
			
}