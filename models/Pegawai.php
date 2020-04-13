<?php
class Pegawai extends CI_model{

    public function getAllPegawai(){
        return $this->db->get('pgw')->result();
    }

    public function tambahPegawai(){
        $data = array(
            'id_pegawai' => $this->input->post('id_pegawai'),
            'nama_pegawai' => $this->input->post('nama_pegawai'),
            'alamat' => $this->input->post('alamat'),
            'no_hp' => $this->input->post('no_hp')
        );
        return $this->db->insert('pgw',$data);
    }

    public function hapusPegawai(){
        $id_pegawai = $this->input->post('id_pegawai');
        $this->db->where('id_pegawai',$id_pegawai);
        return $this->db->delete('pgw');
    }

    public function editPegawai(){
        $id = $this->input->post('id_pegawai');
        $data=array(
            'id_pegawai' => $this->input->post('id_pegawai'),
            'nama_pegawai' => $this->input->post('nama_pegawai'),
            'alamat' => $this->input->post('alamat'),
            'no_hp' => $this->input->post('no_hp')
        );
     

        $this->db->where('id_pegawai',$id);
        return $this->db->update('pgw',$data);
    }
    
    public function cariPegawai(){
        $keyword = $this->input->post('keyword',true);
        return $this->db->get('pgw')->result_array();
    }
}
?>
