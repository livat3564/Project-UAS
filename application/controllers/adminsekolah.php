<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Adminsekolah extends CI_Controller
{
 public function index()
 {
 //jika statusnya sudah login, maka tidak bisa mengakses
//halaman login alias dikembalikan ke tampilan user
 if($this->session->userdata('ussername')){
 redirect('home');
 }
 $this->form_validation->set_rules('ussername', 'nama', 
 'required|trim', [
  'required' => '<script>alert("Username Harus diisi");</script>',
  'valid_email' => 'ussername Tidak Benar!!'
  ]);
  $this->form_validation->set_rules('password', 'Password', 
 'required|trim', [
  'required' => '<script>alert("password Harus diisi");</script>'
  ]);
  if ($this->form_validation->run() == false) {

  //kata 'login' merupakan nilai dari variabel judul dalam  array $data dikirimkan ke view aute_header
  $this->load->view('projek/formlogin');
  } else {
  $this->_login();
  }
  }
 private function _login()
  {
  $ussername = htmlspecialchars($this->input->post('ussername', 
 true));
  $password = $this->input->post('password', true);
  $user = $this->ModelUsersekolah->cekData(['ussername' => $ussername])->row_array();
  //jika usernya ada
  if ($user) {
  //jika user sudah aktif
 {
  //cek password
  if (password_verify($password, $user['password'])){
      $data = array(
      'ussername' => $user['ussername'],
      );
      $this->session->set_userdata($data);
      redirect('home');
      } else {
      $this->session->set_flashdata('pesan', '<div 
    class="alert alert-danger alert-message" role="alert">Password 
    salah!!</div>');
      redirect('adminsekolah');
 
    }
   
 }
 
}else {
$this->session->set_flashdata('pesan', '<div 
class="alert alert-danger alert-message" role="alert">Username tidak ditemukan!!</div>');
redirect('adminsekolah');

}
}
public function blok()
{
$this->load->view('projek/blok');
}
public function gagal()
{
$this->load->view('projek/gagal');
}
public function logout(){
$this->session->unset_userdata('ussername');
redirect('adminsekolah');
}

}
