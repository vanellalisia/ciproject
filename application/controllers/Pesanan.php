<?php 
class Pesanan extends CI_Controller {
    function __construct(){
		parent::__construct();
		$this->load->model('m_pesanan2');
	}
	
    function index(){
        $data['pengguna']=$this->m_pengguna->tampil_pengguna()->result(); //panggil function nya
        $this->load->view('v_pengguna', $data);
    }
	
	
	
	
	
	
	
	
}
?>