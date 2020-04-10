<?php
class Obat extends CI_model{

    public function getAllObat(){
        return $this->db->get('Obat')->result_array();
    }

    public function tambahObat($data){
        return $this->db->insert('Obat',$data);
    }

    public function hapusObat($id_obat){
        $this->db->where('id_obat',$id_obat);
        return $this->db->delete('Obat');
    }

    public function editObat($data,$id_obat){
        $this->db->where('id_obat',$id_obat);
        return $this->db->update('Obat',$data);
    }
    
    public function cariObat(){
        $keyword = $this->input->post('keyword',true);
        return $this->db->get('Obat')->result_array();
    }
}
?>