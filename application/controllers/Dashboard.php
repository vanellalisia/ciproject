<?php 
class Dashboard extends CI_Controller {
    function __construct(){
        parent::__construct();
		$this->load->model('m_dashboard');

    }
    function index(){
        $this->load->view('v_dashboard');
    }
    function dashboard_pelanggan(){
        
    }
}
?>