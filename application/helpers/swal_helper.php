<?php
function set_notifikasi_swal($icon,$tittle,$text) 
{
    session()->set_flashdata('swal_icon','$icon');
	session()->set_flashdata('swal_title','$title');
	session()->set_flashdata('swal_text','$text');

}