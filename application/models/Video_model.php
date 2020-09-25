<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Video_model extends CI_Model
{
    public function get()
    {
        return $this->db->get('video');
    }

    public function getById($id)
    {
        $this->db->select();
        $this->db->from('video');
        $this->db->where('video_id', $id);
        $query = $this->db->get();
        return $query;
    }

    public function getLive()
    {
        $this->db->select();
        $this->db->from('video');
        $this->db->where('kategori','live');
        $query = $this->db->get();
        return $query;
    }

    public function getVideoPopuler()
    {
        $this->db->select('video_id,url,judul,created');
        $this->db->from('video');
        $this->db->where('kategori','populer');
        $this->db->order_by('created','DESC');
        $query = $this->db->get();
        return $query;
    }

    public function getVideoTerbaru()
    {
        $this->db->select('video_id,url,judul,created');
        $this->db->from('video');
        $this->db->where('kategori','terbaru');
        $this->db->order_by('created','DESC');
        $query = $this->db->get();
        return $query;
    }

    public function add($post)
    {
        $params = [
            "judul" => htmlspecialchars($post['judul']),
            "deskripsi" =>htmlspecialchars(($post['deskripsi'])),
            "kategori" => htmlspecialchars(($post['kategori'])),
            "url" => $post['url']
        ];

        $this->db->insert('video', $params);
    }

    public function update($post)
    {
        $params = [
            "judul" => htmlspecialchars($post['judul']),
            "deskripsi" =>htmlspecialchars(($post['deskripsi'])),
            "kategori" => htmlspecialchars(($post['kategori'])),
            "url" => $post['url']
        ];

        $this->db->where('video_id',$post['id']);
        $this->db->update('video',$params);
    }

    public function hapus($id)
    {
        $this->db->where('video_id',$id);
        $this->db->delete('video');
    }
}