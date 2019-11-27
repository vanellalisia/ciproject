<?php 
class Pesanan extends CI_Controller {
    function __construct(){
		parent::__construct();
		$this->load->model('m_pesanan2');
	}
	
    function index(){
        $data['pesanan']=$this->m_pesanan2->tampil_pengguna()->result(); //panggil function nya
        $this->load->view('v_pesanan', $data);
    }
	
	function editData($id_pesanan){
		$where = array('id_pesanan' => $id_pesanan);
		$data['pesananEdit'] = $this->m_pesanan->editRecord($where,'pesanan')->result();
		$this->load->view('v_edit_status_pesanan',$data);
	}
	
	
	
	
	
	
	
	
}
?>