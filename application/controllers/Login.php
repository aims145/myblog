<?php
class Login extends CI_Controller {
    
        function __construct(){
		parent::__construct();
	}

        public function index($msg = NULL)
        {
            $data['msg'] = $msg;
            if($this->session->userdata('username')){
                redirect('home');
            }else{
                $this->load->view('login', $data);
            }
            
            
        }
        public function process(){
            // Load the model
		$this->load->model('Login_model');
		// Validate the user can login
		$result = $this->Login_model->validate();
		// Now we verify the result
		if(! $result){
			// If user did not validate, then show them login page again
			$msg = '<font color=red>Invalid username and/or password.</font><br />';
			$this->index($msg);
		}else{
			// If user did validate, 
			// Send them to members area
			redirect('home');
		}				
        }
}