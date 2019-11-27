<?php 
class m_menu extends CI_Model{
    function tampil_menu_petugas(){
		return $this->db->query('select a.id_jenis_menu, a.nama_jenis_menu, b.id_menu, b.id_jenis_menu, b.nama_menu, b.jumlah_stock_menu, b.harga_menu FROM jenis_menu a JOIN menu b ON a.id_jenis_menu = b.id_jenis_menu ');
    }
	function cek_urutan_menu($table, $jenis){
		return $this->db->query("SELECT id_menu FROM menu WHERE $jenis");
	}
	
	function insertTable($a,$b){
		$this->db->insert($a,$b);
	}
	
	function editRecord($where, $table){
		return $this->db->get_where($table,$where);
	}
	
	function updateRecord($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	} 
	
	function hapusRecord($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}
	
	function get_menu_by_ajax($where){
		
		$query 		= $this->db->query("SELECT *  FROM menu WHErE LEFT(id_menu, 2)  = '$where'");
		$data  	= $query->num_rows() + 1;
		$output=array(

					'id_menu' 	=> $where . sprintf("%03d", $data) );
				

    return $output;
	
		
	}
	function ambilstok($table, $data){
		return $this->db->query("SELECT jumlah_stock_menu FROM menu WHERE id_menu='$data'");
	}
	function update_stok($table,$data, $where){
		$this->db->where($where);
		$this->db->update($table,$data);
	}
	function tampil_detail_menu($id_menu){
		$where = array(
			"id_menu" => $id_menu
		);
		return $this->db->get_where("menu",$where);
	}
	
}

?>