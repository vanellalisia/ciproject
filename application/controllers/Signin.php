<?php 
class Signin extends CI_Controller{
    function __construct(){
		parent::__construct();		
		$this->load->model('m_signin');
		
    }
    function index(){	
		$this->load->view('v_signin');
    }
    
	
	
	
	
}
?>