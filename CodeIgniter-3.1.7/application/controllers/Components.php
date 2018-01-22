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
        print_r($this->Components_model->getComponent(1));
    }
}