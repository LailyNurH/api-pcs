<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ModelAdmin extends CI_Model {
    
    
    public function getAdminData()
    {
        $this->load->database();
        $data = $this->db->get('admin');
        return $data->result_array();
    }
    
}
