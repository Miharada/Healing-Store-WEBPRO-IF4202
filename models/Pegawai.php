<?php
class Pegawai extends CI_model{

    public function getAllPegawai(){
        return $this->db->get('Pegawai')->result_array();
    }

    public function tambahPegawai($data){
        return $this->db->insert('Pegawai',$data);
    }

    public function hapusPegawai($id_pegawai){
        $this->db->where('id_pegawai',$id_pegawai);
        return $this->db->delete('Pegawai');
    }

    public function editPegawai($data,$id_pegawai){
        $this->db->where('id_pegawai',$id_pegawai);
        return $this->db->update('Pegawai',$data);
    }
    
    public function cariPegawai(){
        $keyword = $this->input->post('keyword',true);
        return $this->db->get('Pegawai')->result_array();
    }
}
?>