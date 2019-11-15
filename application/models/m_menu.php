<?php 
class m_menu extends CI_Model{
    function tampil_menu_petugas(){
		return $this->db->query('select a.id_jenis_menu, a.nama_jenis_menu, b.id_menu, b.id_jenis_menu, b.nama_menu, b.jumlah_stock_menu, b.harga_menu FROM jenis_menu a JOIN menu b ON a.id_jenis_menu = b.id_jenis_menu ');
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
		$query = $this->db->get_where('menu',$where);
		if($query->num_rows()>0){
			foreach($query->result() as $data){
				$output=array(
					'id_menu' => $data->id_menu);
			}
		}
		return $output;
		
		
		
		
		
		
	}
	
	
}

?>