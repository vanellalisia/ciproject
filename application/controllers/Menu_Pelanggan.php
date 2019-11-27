<?php 
class Menu_Pelanggan extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('m_menu_pelanggan');
    }
    function index(){
        $data['makanan']=$this->m_menu_pelanggan->tampil_makanan_pelanggan()->result();
        $data["jumlah_makanan"] = $this->m_menu_pelanggan->tampil_makanan_pelanggan()->num_rows();
        $data['minuman']=$this->m_menu_pelanggan->tampil_minuman_pelanggan()->result();
        $data["jumlah_minuman"] = $this->m_menu_pelanggan->tampil_minuman_pelanggan()->num_rows();
        $data['snack']=$this->m_menu_pelanggan->tampil_snack_pelanggan()->result();
        $data["jumlah_snack"] = $this->m_menu_pelanggan->tampil_snack_pelanggan()->num_rows();
        $this->load->view('v_menu_pelanggan',$data);
        
    }
    function ambil_pesanan_menu(){
        $this->load->model('m_pesanan');
        $this->load->model('m_menu');

        $bataslooping = $this->input->post('jumlah_menu');
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
        
        $menu_terpesan = array();
        $counter = 0;
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
                    $stok_menu=$this->m_menu->ambilstok("menu",$id_menu)->result_array();
                    $stock=$stok_menu[0]['jumlah_stock_menu'];
                    echo $stock;

                    $stok_sisa=$stock-$pesanan;
                    $data_stok=array('jumlah_stock_menu'=>$stok_sisa);
                    $where_menu = array(
                        "id_menu"=>$id_menu
                    );
                    $this->m_menu->update_stok('menu',$data_stok, $where_menu);

                    $this->m_pesanan->tambah_detail_pesanan('detail_pesanan',$data);

                    $result = $this->m_menu->tampil_detail_menu($id_menu)->result_array();
                    $data_tampil_pesanan_yangbarudipesan["menu_terpesan"][$counter] = array(
                        "nama_menu" => $result[0]["nama_menu"],
                        "jumlah_menu" => $pesanan
                    );
                    $counter++;
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
            //$this->m_pesanan->update_stok_menu('menu', $id_menu, $pesanan);
            $this->load->view('v_detail_pesanan_pelanggan', $data_tampil_pesanan_yangbarudipesan);
    }
    
   
}
?>