<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function index()
	{
		// $this->load->model('Article_model');

		// $articles = $this->Article_model->test();
        $this->load->helper('url');
		$this->load->view('registration');
	}

	public function reg()
	{
		error_log(print_r(__FUNCTION__,1));
	}
}
