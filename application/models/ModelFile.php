<?php
defined('BASEPATH') or exit('No direct script access allowed');
class ModelFile extends CI_Model
{
    //manajemen file
    public function getFile()
    {
       return $this->db->get('file');
    }

    public function fileWhere($where)
    {
      return $this->db->get_where('file', $where);
    }

    public function simpanFile($data = null)
    {
       $this->db->insert('file',$data);
    }

    public function updateFile($data = null, $where = null)
    {
      $this->db->update('file', $data, $where);
    }

    public function hapusFile($where = null)
    {
       $this->db->delete('file', $where);
    }

    public function total($field, $where)
    {
       $this->db->select_sum($field);
       if(!empty($where) && count($where) > 0){
           $this->db->where($where);
        }
        $this->db->from('file');
        return $this->db->get()->row($field);
    }
}






