<?php 
class Menu extends CI_Controller {
    function __construct(){
		parent::__construct();
        $this->load->model('m_menu');
    }
    function index(){
        $data['menu']=$this->m_menu->tampil_menu_petugas()->result(); //panggil function nya
        $this->load->view('v_menu_petugas', $data);
    }
	
	function tambahData(){
		$this->load->view('v_input_menu_petugas');
	}
	
	function insertData(){
		$id = $this->input->post('id');
		$nama = $this->input->post('nama');
		$jenis = $this->input->post('jenis');
		$stok = $this->input->post('stok');
		$harga = $this->input->post('harga');
		
		$data = array(
			'id_menu'		=>	$id,
			'nama_menu'		=>	$nama,
			'id_jenis_menu'		=>	$jenis,
			'jumlah_stock_menu'		=>	$stok,
			'harga_menu'		=>	$harga
			);
		$this->m_menu->insertTable('menu',$data);
		redirect('Menu');	
	}
	
	
	function editData($id_menu){
		$where = array('id_menu' => $id_menu);
		$data['menuEdit'] = $this->m_menu->editRecord($where,'menu')->result();
		$this->load->view('v_edit_menu', $data);
	}
	
	function updateData(){
		$id = $this->input->post('id');
		$nama = $this->input->post('nama');
		$jenis = $this->input->post('jenis');
		$stok = $this->input->post('stok');
		$harga = $this->input->post('harga');
		
		$data = array(
			'id_menu'		=>	$id,
			'nama_menu'		=>	$nama,
			'id_jenis_menu'		=>	$jenis,
			'jumlah_stock_menu'		=>	$stok,
			'harga_menu'		=>	$harga
			);
		
		$where = array(
			'id_menu' => $id
		);
			
		$this->m_menu->updateRecord($where,$data,'menu');
		redirect('Menu');
	}
	
	
	function hapusData($id_menu){
		$where = array('id_menu' => $id_menu);
		$this->m_menu->hapusRecord($where,'menu');
		redirect('Menu');
	}
	
	function getMenuByAjax(){
		$id = $this->input->post('id_menu');
		$where = array('id_menu'=>$id);
		$data = $this->m_menu->get_menu_by_ajax($where);
		echo json_encode($data);
	}
	
	
	
	
}
?>