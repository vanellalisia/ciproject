<?php 
class Pesanan_Pelanggan extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('m_pesanan_pelanggan');
    }
}