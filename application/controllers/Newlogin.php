<?php
class Newlogin extends CI_Controller {
    
        function __construct(){
		parent::__construct();
	}

        public function index($msg = NULL)
        {
            $data['msg'] = $msg;
            if($this->session->userdata('username')){
                redirect('home');
            }else{
                $this->load->view('newlogin', $data);
            }
            
            
        }
        
}