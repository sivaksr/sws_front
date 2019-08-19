<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Careershome extends CI_Controller
{
	
  public $header = '../views/frantend/main-header.php';
   public $footer = '../views/frantend/main-footer.php';
	
	public function __construct()
	{
		parent::__construct();			
	
	
	}
	
	
	    public function index() {
		    $this->load->view($this->header);
		     $this->load->view('career-home-view');
			 $this->load->view($this->footer);
	    }
	
	
	
		
}