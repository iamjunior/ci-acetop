<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Demo extends CI_Controller {

	public function index()
	{
		$this->load->view('demo/theme');
	}

	public function form()
	{
		$this->load->view('demo/theme');
	}

	public function error404(){
		$this->load->view('error404');
	}
}
