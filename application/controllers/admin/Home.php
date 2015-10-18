<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Home extends CI_Controller {
    
        function __construct(){
		parent::__construct();
	}
        
public function index(){
    if($this->session->userdata('role') == 'admin'){
    echo "Admin panel home";        
    }
    else{
        redirect('home');
    }

    
}
       
        
        
        
        
        
        
        
        
}        