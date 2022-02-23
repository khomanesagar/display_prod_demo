<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Product extends CI_Controller {

    public function __construct() {
        parent::__construct();
        //load model
        $this->load->model('Product_model', 'prod');
    }
	
    public function index() {
        $data = array();
        $data['products'] = $this->prod->getProductList();
        $this->load->view('product/index', $data);
    }

}
