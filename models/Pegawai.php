<?php
class Pegawai extends CI_model{

    public function getAllPegawai(){
        return $this->db->get('pgw')->result_array();
    }

    public function tambahPegawai($data){
        return $this->db->insert('pgw',$data);
    }

    public function hapusPegawai($id_pegawai){
        $this->db->where('id_pegawai',$id_pegawai);
        return $this->db->delete('pgw');
    }

    public function editPegawai($data,$id_pegawai){
        $this->db->where('id_pegawai',$id_pegawai);
        return $this->db->update('pgw',$data);
    }
    
    public function cariPegawai(){
        $keyword = $this->input->post('keyword',true);
        return $this->db->get('pgw')->result_array();
    }
}
?>
