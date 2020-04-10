<?php   
class transaksi extends CI_model{

    public function tambahTransaksi($data){
        return $this->db->insert('transaksi',$data);
    }
    
    public function getAllTransaksi(){
        return $this->db->get('transaksi')->result_array();
    }
}
?>