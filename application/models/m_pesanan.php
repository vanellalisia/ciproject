<?php 
class m_pesanan extends CI_Model{
    function cek_urutan_pesanan($table, $tanggalpesan){
        $this->db->query("SELECT * FROM pesanan WHERE tanggal_pesan='$tanggalpesan'");
    }
}
?>