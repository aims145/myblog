<?php
class Register extends CI_Controller {
    
        function __construct(){
		parent::__construct();
	}

        public function index(){
            $this->load->view('register');
        }
        
        public function submit(){
            
        }
}