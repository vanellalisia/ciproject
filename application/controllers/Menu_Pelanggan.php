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
    function ambil_pesanan_menu(){
        $bataslooping = $this->input->post($i);
        $totalharga=0;
        //bikin id_pesanan simana id_pesana itu dr tanggalpesan+uturan
        //urutan pesanan itu masuk dlm model dimana Select * from pesanan where tanggal_pesan=tgl hr ini di controllernya pk num_rows
        //id_pesanan di ambil untuk bisa ambil detail pesanan
        for($a=1; $a>= $bataslooping ; $a++)
        {
                $harga=$this->input->post('harga_menu'.$a);
                $pesanan.$a =$this->input->post('pesanbanyakmakanan'.$a); 
                $totalharga=$totalharga+$harga*$pesanan.$a;
                $data = array (
                    'id_menu' => $this->input->post('id_menu'.$a)

                );
                if(($pesanan.$a) != '0'){
                $this->m_pesanan->insertdata($pesanan,'detail_pesanan',$data);

                //insert data ke tabel pesanan

                }
        }
            $waktuambil=$this->input-post('waktuambil');
            $data =  $this->m_menu_pelanggan->tampil_pesanan();
            $this->load->view('v_pesan_pilihwaktu',$data);
    }
   
}
?>