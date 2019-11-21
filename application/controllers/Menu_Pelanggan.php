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
        $this->load->model('m_pesanan');
        $bataslooping = $this->input->post('$i');
        $totalharga=0;
        $tanggalpesan=date("l"."Y,m,d");
        $urutanpesan=$this->m_pesanan->cek_urutan_pesanan("pesanan",$tanggalpesan)->num_rows();
        $id_pesanan=$tanggalpesan.$urutanpesan;
        //bikin id_pesanan simana id_pesana itu dr tanggalpesan+uturan
        //urutan pesanan itu masuk dlm model dimana Select * from pesanan where tanggal_pesan=tgl hr ini di controllernya pk num_rows
        //id_pesanan di ambil untuk bisa ambil detail pesanan
        //$data[]=$this->m_pesanan->tambah_pesanan()->result;
        
        $waktupesan=date("h:i:s");
        $tanggalambil=date("l "."d/m/Y", strtotime("tomorrow"));
        $waktuambil=$this->input->post('waktuambil');
        $keteranganpesan=$this->input->post('keteranganpesanan');
        $pesanan=0;
       
        for($a=1; $a>= $bataslooping ; $a++)
        {
                $harga=$this->input->post('harga_menu'.$a);
                $pesanan.$a =$this->input->post('pesanbanyakmakanan'.$a);
                $pesananberurut= $pesanan.$a; 
                $totalharga=$totalharga+$harga*$pesananberurut;
                $data = array (
                    'id_menu' => $this->input->post('id_menu'.$a),
                    'id_pesanan' => $id_pesanan,
                    'jumlah_pesanan' => $pesananberurut,
                    'keterangan_pesanan' => $keteranganpesan
                );
                if(($pesanan.$a) != '0'){
                $this->m_pesanan->tambah_detail_pesanan('detail_pesanan',$data);

                //insert data ke tabel pesanan

                }
        }//total harga sudah daoat baru masukin ke tabel pesanan
        $data_pesanan=array(
            'id_pesanan'=>$id_pesanan,
            'tanggal_pesan'=>$tanggalpesan,
            'tanggal_ambil'=>$tanggalambil,
            'waktu_pesan'=>$waktupesan,
            'waktu_ambil'=>$waktuambil,
            'total_harga'=>$totalharga
        );
            $this->m_pesanan->tambah_pesanan('pesanan',$data_pesanan);
            $waktuambil=$this->input-post('waktuambil');
            $data =  $this->m_menu_pelanggan->tampil_pesanan();
            $this->load->view('v_pesan_pilihwaktu',$data);
    }
   
}
?>