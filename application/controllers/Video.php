<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Video extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('video_model');
    }

	public function index()
	{
        check_not_login();
        $data['video'] = $this->video_model->get();
		$this->template->load('template','video/video_data',$data);
    }
    
    public function add()
    {
        $this->template->load('template','video/video_form');
    }

    public function add_video()
    {
        $post = $this->input->post(NULL , True);
        if(isset($_POST['add_video']))
        {
            $this->video_model->add($post);
            if($this->db->affected_rows() > 0)
            {
                echo"<script>alert('Video berhasil di tambah');
                        window.location ='" .site_url('video'). "';
                        </script>";
            }else{
                echo"<script>alert('Video gagal di tambah');
                        window.location ='" .site_url('video/add'). "';
                        </script>";
            }
        }
    }

    public function edit()
    {
        $post = $this->input->post(Null, TRUE);
        if(isset($_POST['updateVideo']))
        {
            $this->video_model->update($post);
            if($this->db->affected_rows() > 0)
            {
                echo"<script>alert('Video berhasil di Update');
                        window.location ='" .site_url('video'). "';
                        </script>";
            }else{
                echo"<script>alert('Video gagal di Update');
                        window.location ='" .site_url('video'). "';
                        </script>";
            }
        }
    }

    public function del($id)
    {
        $this->video_model->hapus($id);
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
