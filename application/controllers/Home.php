<?php
class Home extends CI_Controller {
        function __construct(){
		parent::__construct();
		
	}
    
    
        public function index()
        {
//            if($this->session->userdata('username')){
            
            $this->load->view('header');
            $this->load->view('home');
            $this->load->view('footer');
            
//            }  else {
//                redirect('login');
//            }
            
        }
        
        public function logout(){
		$this->session->sess_destroy();
		redirect('home');
	}
}