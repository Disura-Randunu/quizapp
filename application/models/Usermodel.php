<?php

class Usermodel extends CI_Model
{
    private static $ADMIN_USER_ROLE = 1;
    private static $GNERAL_USER_ROLE = 2;

    private $table = "users";

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function save_user($email, $username, $password, $role)
    {
        $data = array(
            'email' => $email,
            'username' => $username,
            'password' => $password,
            'role' => $role
        );
        return $this->db->insert($this->table, $data);
    }

    public function get_user_by_username($username)
    {
        $this->db->where('username', $username);
        $query = $this->db->get($this->table);
        if ($query->num_rows() === 1) {
            return $query->row();
        } else {
            return false;
        }
    }

    public function get_user_by_id($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->get($this->table);
        if ($query->num_rows() === 1) {
            return $query->row();
        } else {
            return false;
        }
    }

    public function login($username, $password)
    {
        $user = $this->get_user_by_username($username);
        if ($user && password_verify($password, $user->password)) {
            $this->session->is_logged_in = true;
            $this->session->username = $username;
            
            $payload = array('username' => $username, 'password' => $user->password);
            set_cookie('jwt_token', generate_jwt(false, $payload), 7200);

            return true;
        } else {
            return false;
        }
    }

    public function logout()
    {
        $this->session->is_logged_in = false;
        $this->session->username = null;
        delete_cookie('jwt_token');
    }

    public function is_logged_in()
    {
        if (isset($this->session->is_logged_in)) {
            return $this->session->is_logged_in;
        } else {
            return false;
        }
    }

    public function signup($email, $username, $password, $role)
    {
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        if ($this->save_user($email, $username, $hashed_password, $role)) {
            $this->session->is_logged_in = true;
            $this->session->username = $username;

            $payload = array('username' => $username, 'password' => $hashed_password);
            set_cookie('jwt_token', generate_jwt(false, $payload), 7200);

            return true;
        } else {
            return false;
        }
    }
}
