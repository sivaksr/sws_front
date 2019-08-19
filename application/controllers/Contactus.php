<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contactus extends CI_Controller
{
	
  public $header = '../views/frantend/main-header.php';
   public $footer = '../views/frantend/main-footer.php';
	
	public function __construct()
	{
		parent::__construct();			
	    $this->load->model('Common_module');
	    $this->load->library('form_validation');
		$this->load->helper('security');
		$this->form_validation->set_error_delimiters('<div class="error" style="color:red;">', '</div>');
		error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
		error_reporting(0);
		ini_set('display_errors','off');
	}
	
	
	
	    public function index() {
		    $this->load->view($this->header);
			
			if($this->input->post('submit')){
			if($this->form_validation->run('contactform')== TRUE){
			    $result = $this->Common_module->add_record();
				if($result){
					$this->session->set_flashdata('msg_succ', 'Thank you for contacting us. We will get back to you soon.');
					redirect('contact-us');
				}else{
					$data['msg'] = "Some error occured. Please try again later.";
				}
			}
			}
			
		     $this->load->view('contact-us-view');
			 $this->load->view($this->footer);
	    }
	
	
	
		
}