<?php
class user_model extends CI_Model{
    public function register($enc_password){

        $data = array(
            'username' => $this->input->post('username'),
            'password' => $enc_password
        );

        return $this->db->insert('users', $data);
    }

    public function login($username, $password){

        //$this->db->where('username', $username);
        //$this->db->where('password', $password);
        $sqlquery = "SELECT * FROM users WHERE username = ?";
        $myquery = $this->db->query($sqlquery, array($username));
        //$row = $myquery->row();
        //$result = $this->db->get('user');

        if($myquery->num_rows() == 1){
            $pw = $myquery->row(0)->password;
            if(password_verify($password, $pw)){

            return $myquery->row(0)->username;
            }else{
                return false;
            }
        }else{
            return false;
        }

    }
}
