<?php
class login extends CI_model{

    public function check_username($username){
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
    public function login($data){
        $x=get_profile($data['username']);
        if($x['password'] == $data['password']){
            return true;
        }
        else{
            return false;
        }
    }

    public function get_profile($username){
        $this->db->where('username'.$username);
        return $this->db->get('user');
    }
}
?>