<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once 'application/class/Component.php';
class Components_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    public function getComponent($id)
    {
        $component = $this->db->where('id', $id)->get('components');

        if ($component -> num_rows() > 0) {
            return $component->result('Component')[0];
        }

        return null;
    }
    public function getAllComponents()
    {
        $component = $this->db->get('components');

        if ($component -> num_rows() > 0)
        {
            return $component->result('Component');
        }
    }
}