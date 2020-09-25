<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
	public function index()
	{
		$this->load->view('login');
    }
    
    public function login()
    {
        $this->form_validation->set_rules('username','Username','required|trim');
        $this->form_validation->set_rules('password','Password','required|trim');
        $post = $this->input->post(NULL, TRUE);
        if(isset($post['login'])){
            $this->load->model('User_m');
            $query = $this->User_m->login($post);
            if($query->num_rows() > 0){
                $row = $query->row();
                $params = array(
                    'user_id' => $row->user_id,
                    'level' => $row->level
                );
                $this->session->set_userdata($params);
                echo "<script>
                    alert('Login berhasil');
                    window.location = '" . site_url('dashboard') . "';
                </script>";
            }else{
                echo "<script>
                        alert('Login Gagal');
                        window.location = '" . site_url('auth') . "';
                    </script>";
            }
        }
    }

    public function logout()
    {
        $params = array('user_id','level');
        $this->session->unset_userdata($params);
        redirect('auth');
    }

}
