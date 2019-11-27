<?php 
class Signin extends CI_Controller{
    function __construct(){
		parent::__construct();		
		$this->load->model('m_signin');
		
    }
    function index(){	
		$this->load->view('v_signin');
    }
    
	function insertData(){
		$name = $this->input->post('nama');
		$email = $this->input->post('email');
		$password = $this->input->post('sandi');
		$telepon=$this->input->post('telepon');
		$alamat=$this->input->post('alamat');
		$jabatan = "PL";

		$urutanpengguna=$this->m_pengguna->cekJumlah('detail_pengguna',$jabatan)->num_rows();
		
		$data = array(
			'id_pengguna'		=>	$id,
			'nama_pengguna'		=>	$nama,
			'nomor_telepon'		=>  $telepon,
			'alamat_pengguna'	=>	$alamat,
			'email_pengguna'	=>	$email,
			'kata_sandi'		=>	$sandi
			);
		$data2 = array(
			'id_pengguna'		=>	$id,
			'id_jabatan'		=>	$jabatan
			);	
		
		$this->m_signin->insertTable('pengguna' ,$data);
		$this->m_signin->insertTable('detail_pengguna' ,$data2);
		redirect('Pengguna');
		
		
	}
	
	
	
	
}
?>