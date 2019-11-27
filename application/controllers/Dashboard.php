<?php 
class Dashboard extends CI_Controller {
    function __construct(){
        parent::__construct();
		$this->load->model('m_dashboard');

    }
    function index(){
        $tanggal_ambil=date("Y-m-d", strtotime("tomorrow"));
        $data_dashboard['pengguna_aktif_dashboard']=$this->m_dashboard->tampil_pengguna_aktif();
        $data_dashboard['pengguna_dashboard']=$this->m_dashboard->tampil_pengguna_dashboard();
        $data_dashboard['pesanan_dashboard']=$this->m_dashboard->tampil_pesanan_dashboard("pesanan", $tanggal_ambil);
        $this->load->view('v_dashboard',$data_dashboard);
    }
    function dashboard_pelanggan(){
        $this->load->view('v_index_pelanggan');
    }
    
}
?>