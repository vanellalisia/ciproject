<?php 
class m_pesanan extends CI_Model{
    function cek_urutan_pesanan($table, $tanggalpesan){
        return $this->db->query("SELECT * FROM pesanan WHERE tanggal_pesan LIKE '$tanggalpesan%'");
    }
    function tambah_pesanan($table, $data_pesanan){
        return $this->db->insest($table, $data_pesanan);
    }
    function tambah_detail_pesanan(){

    }
}
?>