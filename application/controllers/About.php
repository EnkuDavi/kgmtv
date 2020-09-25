<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {
	public function index()
	{
		$this->load->view('landing/header');
		$this->load->view('konten/about');
		$this->load->view('landing/footer');
	}
}
