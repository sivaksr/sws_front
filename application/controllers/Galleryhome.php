<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Galleryhome extends CI_Controller
{
	
  public $header = '../views/frantend/main-header.php';
   public $footer = '../views/frantend/main-footer.php';
	
	public function __construct()
	{
		parent::__construct();			
	 $this->load->model('Common_module');
	
	}
	
	
	
	    public function index() {
		    $this->load->view($this->header);
			$data['record'] = $this->Common_module->get_gallery_records();
			//echo '<pre>';print_r($data);exit;
		    $this->load->view('gallery-home-view',$data);
			$this->load->view($this->footer);
	    }
	
	
	
		
}