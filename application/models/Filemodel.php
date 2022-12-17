<?php

class Filemodel extends CI_Model
{

    // private $table = "files";
    // private $uploads_folder = 'uploads';

    public function save_file($entity = false)
    {
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'jpg|png';
        $config['max_size'] = '10000';
        $config['file_name'] = uniqid($entity ? $entity . '_' : 'other_');
        // $config['max_width'] = '1024';
        // $config['max_height'] = '768';

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('file')) {
            return array('file_name' => $this->upload->data()['file_name']);
        } else {
            return false;
        }
    }

    public function get_file_path($file_name)
    {
        $file_path = base_url("uploads/{$file_name}");

        if (file_exists($file_path)) {
            return $file_path;
        } else {
            return false;
        }
    }
}

// if (!$this->upload->do_upload('file')) {
//     return false;
//     // $error = array('error' => $this->upload->display_errors());
// } else {
//     return true;
//     // $data = array('upload_data' => $this->upload->data());
//     // echo print_r($data);
//     // echo '----------';
//     // echo $this->upload->data()['file_name'];
//     // echo '<img src=' . '"' . dirname(APPPATH) . DIRECTORY_SEPARATOR . $this->uploads_folder . DIRECTORY_SEPARATOR . $this->upload->data()['file_name']. '"' . '/>'; //set_realpath(APPPATH . '..' . PATH . 'uploads');
//     // echo '<img src=' . strval($this->upload->data()['full_path']) . '>'; //set_realpath(APPPATH . '..' . PATH . 'uploads');
//     // echo ; //set_realpath(APPPATH . '..' . PATH . 'uploads');
// }