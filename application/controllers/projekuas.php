<?php 
defined('BASEPATH') or exit ('no direct script access allowed');
class projekuas extends CI_Controller{
    public function __construct(){
        parent::__construct();
    
    $this->load->model(['ModelUsersekolah', 'ModelBerita','ModelFile']); 
 }

    public function index(){
        
        $this->load->view('projek/beranda');
        $this->load->view('projek/footer');
        
    }
    public function visimisi(){
        $this->load->view('projek/visimisi');
        $this->load->view('projek/footer');
        
    }

    public function  ekstrakulikuler(){
        $this->load->view('projek/ekstrakulikuler');
        $this->load->view('projek/footer');
    }

    public function jurusan(){
        $this->load->view('projek/jurusan');
        $this->load->view('projek/footer');
    }

    public function berita(){
        $data['user'] = $this->db->query("SELECT * FROM berita")->result_array();
        $this->load->view('projek/berita',$data);
        $this->load->view('projek/footer');
    }

    public function lihatberita($Where){
        $data['idberita'] = $Where;
        $data['user'] = $this->db->query("SELECT * FROM berita WHERE idberita = $Where")->result_array();
        $this->load->view('projek/pramuka',$data);
        $this->load->view('projek/footer');
        $this->load->view('projek/linkcss');
    }
    public function file(){
        $data['user'] = $this->db->query("SELECT * FROM file")->result_array();
        $this->load->view('projek/fileview',$data);
        $this->load->view('projek/footer');
        $this->load->view('projek/linkcss');
    }
    public function sejarah(){
        $this->load->view('projek/sejarah');
        $this->load->view('projek/footer');
        $this->load->view('projek/linkcss');
        
    }
    public function profil(){
        $this->load->view('projek/profil');
        $this->load->view('projek/linkcss');
        $this->load->view('projek/footer');
      
        
    }




}
