<?php

function cek_login()
{
    $ci = get_instance();

    if ($this->session->userdata('is_login') == false) {
        $ci->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Anda harus login terlebih dahulu!</div>');
        redirect('adminsekolah');
    }
} 
function cek_user() 
{ 
    	$ci = get_instance(); 
    	$role_id = $ci->session->userdata('role_id'); 
    	if ($role_id != 1) 
    { 
    	$ci->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Akses tidak diizinkan </div>'); redirect('home'); 
    } 
}