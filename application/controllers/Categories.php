<?php
defined('BASEPATH') OR exit('No direct script access allowed');
define('CR_NAME', 'Categories');

class Categories extends Panel_Controller
{
    function index()
    {
        $this->load->model('CatModel');
        $data = array('user' => $this->user , 'categories'=> $this->CatModel->getAllCats());
        $this->load->view('categories', $data);
    }
}

?>