<?php
class Pelanggan extends CI_model{

    public function getAllPelanggan(){
        return $this->db->get('pelanggan')->result();
    }
  

    public function tambahPelanggan(){
        $data = array(
            'username' => $this->input->post('username'),
            'alamat' => $this->input->post('alamat'),
            'password' => $this->input->post('password'),
            'no_hp' => $this->input->post('no_hp'),
			'email' => $this->input->post('email')
        );
        return $this->db->insert('pelanggan',$data);
    }

    public function hapusPelanggan(){
        $username = $this->input->post('username');
        $this->db->where('username',$username);
        return $this->db->delete('pelanggan');
    }

    public function editPelanggan(){
        $id = $this->input->post('username');
        $data=array(
            'username' => $this->input->post('username'),
            'alamat' => $this->input->post('alamat'),
            'password' => $this->input->post('password'),
            'no_hp' => $this->input->post('no_hp'),
			'email' => $this->input->post('email')
        );
     

        $this->db->where('username',$id);
        return $this->db->update('pelanggan',$data);
    }
    
    public function getPelanggan($username){
        $this->db->where('username',$username);
        return $this->db->get('pelanggan')->result_array();
    }
}
?>
