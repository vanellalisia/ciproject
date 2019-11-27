<?php 
class m_pesanan2 extends CI_Model{
    function tampil_pengguna(){
		return $this->db->query('select a.id_pesanan, a.total_harga, a.tanggal_pesan, a.tanggal_ambil, a.waktu_pesan,a.waktu_ambil, a.status_pesanan, b.id_menu, b.id_pesanan, b.jumlah_pesanan, b.keterangan_pesanan, c.id_menu, c.nama_menu  FROM pesanan a JOIN detail_pesanan b ON a.id_pesanan = b.id_pesanan JOIN menu c ON b.id_menu = c.id_menu');
	}
	
	function editRecord($where, $table){
		return $this->db->get_where($table,$where);
	}
	
	function updateRecord($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}
	
}
