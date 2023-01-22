<?php

class Rolemodel extends CI_Model
{
    private $table = "roles";

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function get_role_by_code($code)
    {
        $this->db->where('code', $code);
        $query =  $this->db->get($this->table);

        if ($query->num_rows() === 1) {
            return $query->row();
        } else {
            return false;
        }
    }
}