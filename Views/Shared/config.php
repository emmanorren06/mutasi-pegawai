<?php
$page = (isset($_GET['page']))? $_GET['page'] : '';
switch($page){
  case 'home': // $page == home (jika isi dari $page adalah home)
  include "views/home.php"; // load file home.php yang ada di folder views
  break;
  
  case 'berita': // $page == berita (jika isi dari $page adalah berita)
  include "views/usulanpegawai.php"; // load file berita.php yang ada di folder views
  break;
  
//   case 'tentang': // $page == tentang (jika isi dari $page adalah tentang)
//   include "views/tentang.php"; // load file tentang.php yang ada di folder views
//   break;
  
  default: // Ini untuk set default jika isi dari $page tidak ada pada 3 kondisi diatas
  include "views/home.php";
}
?>