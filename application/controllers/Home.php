<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model(['video_model','banner_model']);
	}

	public function index()
	{
		$VideoBaru = $this->video_model->getVideoTerbaru();
		$VideoPopuler = $this->video_model->getVideoPopuler();
		$Banner = $this->banner_model->getBannerActive();
		$data = ["videoBaru" => $VideoBaru, "videoPopuler" => $VideoPopuler, "banner" => $Banner];
		$this->load->view('landing/header');
		$this->load->view('konten/home',$data);
		$this->load->view('landing/footer');
	}

	public function terbaru()
	{
		$data['videoTerbaru'] = $this->video_model->getVideoTerbaru();
		$this->load->view('landing/header');
		$this->load->view('konten/terbaru',$data);
		$this->load->view('landing/footer');
	}

	public function populer()
	{
		$data['videoPopuler'] = $this->video_model->getVideoPopuler();
		$this->load->view('landing/header');
		$this->load->view('konten/populer',$data);	
		$this->load->view('landing/footer');
	}
}
