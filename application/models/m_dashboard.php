<?php 
class m_dashboard extends CI_Model{
    function tampil_pengguna_dashboard(){
		return $this->db->query("SELECT * FROM pengguna 
        JOIN detail_pengguna 
        ON pengguna.id_pengguna=detail_pengguna.id_pengguna 
        WHERE id_jabatan='PL'")->num_rows();
    }
    function tampil_pesanan_dashboard($table, $tanggal_ambil){
        return $this->db->query("SELECT * FROM pesanan WHERE tanggal_ambil='$tanggal_ambil'")->num_rows();
    }
    function tampil_pengguna_aktif(){
        return $this->db->query("SELECT * FROM pengguna WHERE status_pengguna='1'")->num_rows();
    }
}
?>