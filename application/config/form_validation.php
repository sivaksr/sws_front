<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
        $config = array(	
			
	       'contactform' => array(	 
						array(
								'field' => 'name',
								'label' => 'Name',
								'rules' => 'trim|required|xss_clean'
							),
                       array(
								'field' => 'email',
								'label' => 'Email',
								'rules' => 'trim|required|regex_match[/^[\w-.]{2,}@.{2,}$/]|valid_email|xss_clean'
							 ),	
					array(
								'field' => 'message',
								'label' => 'Message',
								'rules' => 'trim|required|xss_clean'
							),		 												 
	        )
    
  );    
/* End of file form_validation.php */
/* Location: ./application/config/form_validation.php */