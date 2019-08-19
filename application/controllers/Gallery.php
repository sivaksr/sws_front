<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gallery extends CI_Controller
{
	
   public $header = '../views/admin/main-header.php';
   public $footer = '../views/admin/main-footer.php';
   public $sidebar = '../views/admin/sidebar.php';
   
	
	public function __construct()
	{
		parent::__construct();			
		$this->load->library('session');
		$this->load->model('Gallery_model','My_model');
		if($this->session->userdata('id') ==''){
			redirect(site_url());
		}
	
	}
	
	    public function index() {
                $this->load->view($this->header); 
				$this->load->view($this->sidebar);
				$data['record'] = $this->My_model->get_all_records();
		        $this->load->view('gallery-list-view',$data);
				$this->load->view($this->footer);
	    }
		
		public function addgallery() {
            $this->load->view($this->header); 
		    $this->load->view($this->sidebar);
			if ($this->input->post('submit')) {		
               if($_FILES['image']['name'] != ''){
				$config1['upload_path'] = './images/banners/';
				$config1['allowed_types'] = 'gif|jpeg|png|jpg';
				$config1['max_size'] = '0';
				$config1['max_width'] = '0';
				$config1['max_height'] = '0';
				$rand = substr(rand(1,1000000),0,3);
				$new_name = 'd-'.$rand.'-'.$_FILES['image']['name'];
				$config1['file_name'] = $new_name;
				$this->load->library('upload', $config1);
				if (!$this->upload->do_upload('image')){
					$error = array('error' => $this->upload->display_errors());
					echo "<pre>";
					print_r($error);
					exit();
				}
				else {
					$fdata = $this->upload->data();
					$data['image'] = $fdata['file_name'];
				}
			   }else{
				$data['image'] = '';
			  }
			  //echo '<pre>';print_r($data);exit;
					$result = $this->My_model->add_record($data);
					if($result){
						$this->session->set_flashdata('msg_succ', 'Added Successfully...');
						redirect('admin/gallery-list');
					}else{
						$data['msg'] = "Not Inserted...";
					}
				}
	
				$this->load->view('add-gallery-view');
				$this->load->view($this->footer);
	    }
		
		
	
	public function delete($id){ 
		$data['msg'] ='';
		if($id){
			$data['record'] = $this->My_model->get_single_record($id);
			$result = $this->My_model->delete_record($id);
			if($result){
				$this->session->set_flashdata('msg_succ', 'Deleted Successfully...');
				redirect('admin/gallery-list');
			}else{
				$this->session->set_flashdata('msg_error', 'Not Deleted...');
				redirect('admin/gallery-list');
			}
		}
	}
	
	
	
	
	
	

	
		
}