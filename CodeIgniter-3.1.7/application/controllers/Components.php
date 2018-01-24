<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Components extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Components_model');
    }
    public function index()
    {
        $this->load->voew('components/index');
    }
    public function get($id = null)
    {
        if ($id !== null)
        {
            $component = $this-> Components_model -> getComponent($id);
            print_r($component);
        }
        else
        {
            show_404();
        }

    }
}