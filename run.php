<?php
require_once('dbgid_ssht_init.php');
$url1='https://www.namiyt.com';
$url2='https://www.ssht.mobi';
$url3='https://realsht.pw';
$url4='https://realsht.mobi';
//config
//isi url pendek yang belakang nya aja
$short='sbsXV';
//isi url asli yang di short
$asli='https://github.com/memek12345';
//ganti url apabila link shortlink berubah
while(true){
ssht($url1,$short,$asli);
}
