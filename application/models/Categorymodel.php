<?php

class Categorymodel extends CI_Model
{
    private $table = "categories";

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function get_all_categories()
    {
        $query = $this->db->get($this->table);
        return $query->result_array();
    }

    public function get_category($id)
    {
        $this->db->where('id', $id);
        $query =  $this->db->get($this->table);

        if ($query->num_rows() === 1) {
            return $query->row();
        } else {
            return false;
        }
    }

    public function save_category($name, $image = false)
    {
        $data = array(
            'code' => uniqid("category_"),
            'name' => $name
        );

        if ($image) {
            $data['image'] = $image;
        }

        if ($this->db->insert($this->table, $data)) {
            return array('id' => $this->db->insert_id());
        } else {
            return false;
        }
    }

    public function update_category($id, $name = false, $image = false)
    {
        if (!$name && !$image) {
            return false;
        }

        if ($name) {
            $this->db->set('name', $name);
        }

        if ($image) {
            $this->db->set('image', $image);
        }

        $this->db->where('id', $id);
        return $this->db->update($this->table);
    }

    public function delete_category($id)
    {
        $this->db->where('id', $id);
        return $this->db->delete($this->table);
    }



    // public function get_all_category_codes()
    // {
    //     $categories = $this->get_all_categories();
    //     return array_column($categories, 'code');
    // }

}
