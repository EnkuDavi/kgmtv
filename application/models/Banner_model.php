<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Banner_model extends CI_Model
{
    public function getBannerActive()
    {
        $this->db->select();
        $this->db->from('banner');
        $this->db->where('status','Aktif');
        $query = $this->db->get();
        return $query;
    }

    public function getBanner()
    {
        $this->db->select();
        $this->db->from('banner');
        $query = $this->db->get();
        return $query;
    }

    public function add($post)
    {
        $params = [
            "judul_banner" => htmlspecialchars($post['judul']),
            "deskripsi" => htmlspecialchars($post['deskripsi']),
            "sumber" => htmlspecialchars($post['source']),
            "kategori" => htmlspecialchars($post['kategori']),
            "layout" => $post['layout'],
            "status" => htmlspecialchars($post['status'])
        ];

        $this->db->insert('banner',$params);
    }

    public function hapus($id)
    {
        $this->db->where('banner_id',$id);
        $this->db->delete('banner');
    }
}