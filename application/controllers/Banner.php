<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Banner extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('banner_model');
	}

	public function index()
	{
		check_not_login();
		$data['banner'] = $this->banner_model->getBanner();
		$this->template->load('template','banner/banner_data',$data);
	}

	public function add()
	{
		$this->template->load('template','banner/banner_form');
	}

	public function add_banner()
	{
		$post = $this->input->post(NUll, True);
		$config['upload_path'] = './uploads/layout/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['max_size'] = 2048;
		$config['file_name'] = 'Layout-'.substr(md5(rand()),0,10);
		$this->load->library('upload',$config);

		if(isset($_POST['add_banner']))
		{
			if(@$_FILES['layout']['name'] != NULL)
			{
				if($this->upload->do_upload('layout'))
				{
					$post['layout'] = $this->upload->data('file_name');
					$this->banner_model->add($post);
					if($this->db->affected_rows() > 0)
					{
						echo"<script>alert('Data berhasil di simpan');
								window.location ='" .site_url('banner'). "';
									</script>";
					}else{
						echo"<script>alert('Data gagal di simpan');
								window.location ='" .site_url('banner/add'). "';
									</script>";
					}
				}else{
					$error = $this->upload->display_errors();
					echo"<script>alert('Error $error');
								window.location ='" .site_url('banner/add'). "';
									</script>";
				}
			}
		}
	}

	public function del($id)
	{
		$this->banner_model->hapus($id);
        if($this->db->affected_rows() > 0)
        {
            echo"<script>alert('Video berhasil di hapus');
                    window.location ='" .site_url('video'). "';
                    </script>";
        }else{
            echo"<script>alert('Video gagal di hapus');
                    window.location ='" .site_url('video'). "';
                    </script>";
        }
	}
}
