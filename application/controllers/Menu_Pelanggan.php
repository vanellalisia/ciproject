<?php 
class Menu_Pelanggan extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('m_menu_pelanggan');
    }
    function index(){
        $data['makanan']=$this->m_menu_pelanggan->tampil_makanan_pelanggan()->result();
        $data['minuman']=$this->m_menu_pelanggan->tampil_minuman_pelanggan()->result();
        $data['snack']=$this->m_menu_pelanggan->tampil_snack_pelanggan()->result();
        $this->load->view('v_menu_pelanggan',$data);
        
    }

}
?>