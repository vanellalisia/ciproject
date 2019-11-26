<?php 
class m_pesanan extends CI_Model{
    function cek_urutan_pesanan($table, $tanggalpesan){
        return $this->db->query("SELECT * FROM pesanan WHERE tanggal_pesan=$tanggalpesan");
    }
    function tambah_pesanan($table, $data_pesanan){
        return $this->db->insert($table, $data_pesanan);
    }
    function tambah_detail_pesanan($table, $data){
        return $this->db->insert($table, $data);
    }
    function update_stok_menu($table, $id_menu, $pesanan){
        $this->db->trans_begin();
        $this->query->db("UPDATE menu SET jumlah_stock_menu=jumlah_stock_menu-'$pesanan' WHERE id_menu='$id_menu'");
        if($this->db->trans_status() == FALSE){
            $this->db->trans_rollback();
        }else{
            $this->db->trans_commit();
        }
    }
}
