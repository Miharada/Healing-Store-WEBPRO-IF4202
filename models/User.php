<?php
class User extends CI_model{

    public function getAllUser(){
        return $this->db->get('User')->result_array();
    }

    public function tambahUser($data){
        return $this->db->insert('User',$data);
    }

    public function hapusUser($id_user){
        $this->db->where('id_user',$iid_user);
        return $this->db->delete('User');
    }

    public function editUser($data,$id_user){
        $this->db->where('id_user',$id_user);
        return $this->db->update('User',$data);
    }
    
    public function cariUser(){
        $keyword = $this->input->post('keyword',true);
        return $this->db->get('User')->result_array();
    }
}
?>