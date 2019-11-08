<?php 
class Menu_Pelanggan extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('m_menu_pelanggan');
    }
    function index(){
        $data['menu']=$this->m_menu_pelanggan->tampil_menu_pelanggan()->result();
        $this->load->view('v_menu_pelanggan',$data);
    }

}
?>