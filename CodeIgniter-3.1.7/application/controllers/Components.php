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
        $this->load->view('components/index', [
            'components' => $this->Components_model -> getAllComponents()
        ]);
    }
    public function get($id = null)
    {
        if ($this-> input -> is_ajax_request())
        {
            return;
        }
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
    public function add()
    {

    }
}