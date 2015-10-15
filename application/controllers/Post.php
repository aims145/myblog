<?php
class Post extends CI_Controller {
    
        function __construct(){
		parent::__construct();
	}

        public function index()
        {
//            
//            if($this->session->userdata('username')){
//                redirect('home');
//            }else{
//                $this->load->view('login');
//            }
            
            
        }
        
        
        
        public function addpost(){
            $this->load->view('header');
            $this->load->view('post');
            $this->load->view('footer');
        }
}