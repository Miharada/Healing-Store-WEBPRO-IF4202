<?php
class Admin extends CI_model{

    public function getAllAdmin(){
        return $this->db->get('admin')->result();
    }

    public function tambahAdmin(){
        $data = array(
            'id_admin' => $this->input->post('id_admin'),
            'username' => $this->input->post('username'),
            'password' => $this->input->post('password'),
			'email' => $this->input->post('email')
        );
        return $this->db->insert('admin',$data);
    }

    public function hapusAdmin(){
        $id_admin = $this->input->post('id_admin');
        $this->db->where('id_admin',$id_admin);
        return $this->db->delete('admin');
    }

    public function editAdmin(){
        $id = $this->input->post('id_admin');
        $data=array(
            'id_admin' => $this->input->post('id_admin'),
            'username' => $this->input->post('username'),
            'password' => $this->input->post('password'),
			'email' => $this->input->post('email')
        );
     

        $this->db->where('id_admin',$id);
        return $this->db->update('admin',$data);
    }
    
    public function cariAdmin(){
        $keyword = $this->input->post('keyword',true);
        return $this->db->get('admin')->result_array();
    }
}
?>
