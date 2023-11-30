<?php
defined('BASEPATH') or exit('No direct script access allowed');
class ModelBerita extends CI_Model
{
    //manajemen berita
    public function getBerita()
    {
       return $this->db->get('berita');
    }

    public function beritaWhere($where)
    {
      return $this->db->get_where('berita', $where);
    }

    public function simpanBerita($data = null)
    {
       $this->db->insert('berita',$data);
    }

    public function updateBerita($data = null, $where = null)
    {
      $this->db->update('berita', $data, $where);
    }

    public function hapusBerita($where = null)
    {
       $this->db->delete('berita', $where);
    }

    public function total($field, $where)
    {
       $this->db->select_sum($field);
       if(!empty($where) && count($where) > 0){
           $this->db->where($where);
        }
        $this->db->from('berita');
        return $this->db->get()->row($field);
    }

}







