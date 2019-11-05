<?php 
class Pengguna extends CI_Controller {
    function __construct(){
		parent::__construct();
		$this->load->model('m_pengguna');
		/**if($this->session->userdata('status') != "login"){
			redirect('Login');
	}**/
}
    function index(){
        $data['pengguna']=$this->m_pengguna->tampil_pengguna()->result(); //panggil function nya
        $this->load->view('v_pengguna', $data);
    }
	
	function tambahData(){
		$this->load->view('v_input_pengguna');
	}
	
	function insertData(){
		$id = $this->input->post('id');
		$nama = $this->input->post('nama');
		$jabatan = $this->input->post('jabatan');
		$email = $this->input->post('email');
		$sandi = $this->input->post('sandi');
		$telp = $this->input->post('telp');
		$alamat = $this->input->post('alamat');
		$status = $this->input->post('status');
		$tanggal = $this->input->post('tanggal');
		
		$data = array(
			'id_pengguna'		=>	$id,
			'nama_pengguna'		=>	$nama,
			'email_pengguna'	=>	$email,
			'kata_sandi'		=>	$sandi,
			'nomor_telepon'		=>	$telp,
			'alamat_pengguna'		=>	$alamat,
			'status_pengguna'		=>	$status,
			'tanggal_masuk'		=>	$tanggal
			);
		$data2 = array(
			'id_pengguna'		=>	$id,
			'id_jabatan'		=>	$jabatan
			);	
		
		$this->m_pengguna->insertTable('pengguna' ,$data);
		$this->m_pengguna->insertTable('detail_pengguna' ,$data2);
		redirect('Pengguna');	
	}
	
	
	function editData($id_pengguna){
		$where = array('id_pengguna' => $id_pengguna);
		$data['penggunaEdit'] = $this->m_pengguna->editRecord($where,'pengguna')->result();
		$this->load->view('v_edit_pengguna',$data);
	}
	
	function updateData(){
		$id = $this->input->post('id');
		$nama = $this->input->post('nama');
		$jabatan = $this->input->post('jabatan');
		$email = $this->input->post('email');
		$sandi = $this->input->post('sandi');
		$telp = $this->input->post('telp');
		$alamat = $this->input->post('alamat');
		$status = $this->input->post('status');
		$tanggal = $this->input->post('tanggal');
		
		$data = array(
			'id_pengguna'		=>	$id,
			'nama_pengguna'		=>	$nama,
			'email_pengguna'	=>	$email,
			'kata_sandi'		=>	$sandi,
			'nomor_telepon'		=>	$telp,
			'alamat_pengguna'		=>	$alamat,
			'status_pengguna'		=>	$status,
			'tanggal_masuk'		=>	$tanggal
			);
		$data2 = array(
			'id_pengguna'		=>	$id,
			'id_jabatan'		=>	$jabatan
			);
			
		$where = array(
			'id_pengguna' => $id
		);
			
		$this->m_pengguna->updateRecord($where,$data,'pengguna');
		$this->m_pengguna->updateRecord($where,$data2,'detail_pengguna');
		
		redirect('Pengguna');
	}
	
	
	function hapusData($id_pengguna){
		$where = array('id_pengguna' => $id_pengguna);
		$this->m_pengguna->hapusRecord($where,'pengguna');
		redirect('Pengguna');
	}
}
?>