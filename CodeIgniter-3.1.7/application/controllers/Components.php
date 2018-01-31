<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once 'application/class/Component.php';
class Components extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Components_model');
    }
    public function index()
    {
        $this->load->view('components/index', array(
            'components' => $this->Components_model -> getAllComponents()
        ));
    }
    public function get($id = null)
    {
        $this-> isAllowed();
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
        $this->load->view('components/add');
        $this->isAllowed();

        $component =  new Component($this ->input -> post('name'), $this ->input ->post('price'));
        if (!$component -> isValid())
        {
            http_response_code(400);
            return;
        }
        if ($component->price > 0)
        {
            $newComponent = $this->Components_model ->addComponent($component);
        }
        else
        {
            return null;
        }
    }
    private function isAllowed()
    {
        if ($this-> input -> is_ajax_request() && !$this ->input -> get('format'))
        {
            http_response_code(404);
            exit();
        }
    }
}