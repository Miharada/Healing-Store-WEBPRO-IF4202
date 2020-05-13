<?php
class Transaksi extends CI_model{

    public function getAllTransaksi(){
        return $this->db->get('transaksi')->result();
    }

    public function tambahTransaksi(){
        $data = array(
            'id_transaksi' => $this->input->post('id_transaksi'),
            'username' => $this->session->userdata('username'),
            'tgl_transaksi' => date('y-m-d'),
            'jumlah' => $this->session->userdata('quantity1')
        );
        return $this->db->insert('transaksi',$data);
    }

    public function hapusTransaksi(){
        $id_transaksi = $this->input->post('id_transaksi');
        $this->db->where('id_transaksi',$id_transaksi);
        return $this->db->delete('transaksi');
    }

    public function cariTransaksi(){
        $keyword = $this->input->post('keyword',true);
        return $this->db->get('transaksi')->result_array();
    }
}
?>
