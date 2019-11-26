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
        $bataslooping = $this->input->post('i');
        $id_pengguna=$this->session->userdata('id_pengguna');
        $tanggalpesan=date("Ymd");
        $urutanpesan=$this->m_pesanan->cek_urutan_pesanan("pesanan",$tanggalpesan)->num_rows();//ini knp selalu 0
        $urutanidpesan=$urutanpesan+1;
        $id_pesanan=$tanggalpesan.$urutanidpesan;
        $waktupesan=date("h:i:s");
        $tanggalambil=date("ymd", strtotime("tomorrow"));
        $waktuambil=$this->input->post('waktuambil');
        $keteranganpesan=$this->input->post('keteranganpesanan');
        //nama_menu=$this->input>post('nama_menu');
        $totalharga=0; 

        for($a=0 ;$a< $bataslooping ; $a++)
        { 
                $harga=$this->input->post('harga_menu'.$a);
                $pesanan =$this->input->post('pesanbanyakmakanan'.$a);
                $id_menu =$this->input->post('id_menu'.$a);

               $totalharga=$totalharga+$harga*$pesanan;
               
                $data = array (
                    'id_menu' => $id_menu,
                    'id_pesanan' => $id_pesanan,
                    'jumlah_pesanan' => $pesanan,
                    'keterangan_pesanan' => $keteranganpesan
                );
                if($pesanan != '0'){
                $this->m_pesanan->tambah_detail_pesanan('detail_pesanan',$data);

                }
        }
        $data_pesanan=array(
            'id_pesanan'=>$id_pesanan,
            'id_pengguna'=>$id_pengguna,
            'tanggal_pesan'=>$tanggalpesan,
            'tanggal_ambil'=>$tanggalambil,
            'waktu_pesan'=>$waktupesan,
            'waktu_ambil'=>$waktuambil,
            'total_harga'=>$totalharga
        );
        $pesanan =$this->input->post('pesanbanyakmakanan'.$a);
        $id_menu =$this->input->post('id_menu'.$a);
        $data_tampil_pesanan_yangbarudipesan['pesanan_detail'][]=array(
            'id_menu' => $id_menu,

            'id_pesanan' => $id_pesanan,
            'jumlah_pesanan' => $pesanan,
            'keterangan_pesanan' => $keteranganpesan,
            'total_harga'=>$totalharga,
            'tanggal_ambil'=>$tanggalambil,
            'waktu_ambil'=>$waktuambil
        );
        

            $this->m_pesanan->tambah_pesanan('pesanan',$data_pesanan);
            $this->m_pesanan->update_stok_menu('menu', $id_menu, $pesanan);
            $this->load->view('v_detail_pesanan_pelanggan', $data_tampil_pesanan_yangbarudipesan);
    }
    
   
}
?>