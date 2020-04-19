<?php
class Register extends CI_model{

    public function cekUsername(){
        $username = $this->input->post('username');
        $this->db->select('username');
        $this->db->where('username',$username);
        $result = $this->db->get('user') -> result_array();
        if($result->num_rows() == 1){
            return true;
        }
        else{
            return false;
        }
    }
}
?>