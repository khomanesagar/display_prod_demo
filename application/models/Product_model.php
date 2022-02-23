<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Product_model extends CI_Model {
	
    public function getProductList() {
        $this->db->select(array('p.product_id', 'p.sku', 'p.price', 'p.name', 'p.image'));
        $this->db->from('product as p');
        $this->db->where('p.status', '1');
        $this->db->limit(4);
        $query = $this->db->get();
        return $query->result_array();
    }

}
