<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Live extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('video_model');
	}

	public function index()
	{
	
		$video = $this->video_model->get();
		$live = $this->video_model->getLive();
		$data = ["video" => $video, "live" => $live];
		$this->load->view('landing/header');
		$this->load->view('konten/live',$data);
		$this->load->view('landing/footer');
	
	}

	public function view($id)
	{
		$live = $this->video_model->getById($id);
		$video = $this->video_model->get();
		$data = ["video" => $video, "live" => $live];
		$this->load->view('landing/header');
		$this->load->view('konten/live',$data);
		$this->load->view('landing/footer');
	}
}
