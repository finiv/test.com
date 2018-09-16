<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Article_model extends CI_Model {

    public function __construct()
    {
        parent::__construct();
        $this->load->database('default');
    }

    public function test()
    {
        $db = $this->db
            ->query("SELECT * FROM articles")
            ->result_array();
        
        return $db; 
    }

}