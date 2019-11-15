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
    function ambil_pesanan_menu($i){
        $bataslooping = $this->input->post($i);

        for($a=1; $a>= $bataslooping ; $a++)
        {
                $pesanan.$a =$this->input->post('pesanbanyakmakanan'.$a); 

                $data = array (
                    'nama_menu' => $this->input->post('nama_menu'),
                    'harga_menu' => $this->input->post('harga_menu')

                );
                if(($pesanan.$a) != '0'){
                //$this->M-Menu->insertData($pesanan,'pesanan',$data);//insert data ke tabel pesanan
                }
        }
            $data =  $this->m_menu_pelanggan->tampil_pesanan();
            $this->load->view('v_pesan_pilihwaktu',$data);
    }
   
}
?>