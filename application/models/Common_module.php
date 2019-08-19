<?php 
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Common_module extends CI_Model {
	
      public $tbl_banners ='tbl_banner';
      public $tbl_gallery ='tbl_gallery';
      public $contact_us ='contact_us';
  

	
	public function __construct() {
        parent::__construct();
    }
	
	
	public function get_banners(){
	    $this->db->select('*');
		$this->db->from($this->tbl_banners);
		$this->db->order_by('id','desc');
		$this->db->where("delete","N");
		$this->db->where("status",1);
		$query = $this->db->get();
		$result = $query->result_array();
		return $result;
    }
	
	public function add_record(){	
		$set_array = array(
			'name'             => $this->input->post('name'),
			'email'              => $this->input->post('email'),
			'message'           => $this->input->post('message'),
			'created'            => date('Y-m-d')
		);
		$result = $this->db->insert($this->contact_us, $set_array); 
		return $result;
	}
	
	public function get_gallery_records(){
	    $this->db->select('*');
		$this->db->from($this->tbl_gallery);
		$this->db->order_by('id','desc');
		$query = $this->db->get();
		$result = $query->result_array();
		return $result;
    }

	
	
}