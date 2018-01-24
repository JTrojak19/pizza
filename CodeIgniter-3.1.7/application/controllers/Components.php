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
        $component = $this-> Components_model -> getComponent(1);
        $component->bigPizza();
        print_r($component);
    }
}