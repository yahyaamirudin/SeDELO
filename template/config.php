<?php
$page = (isset($_GET['page']))? $_GET['page'] : '';
switch($page){
  case 'beranda': // $page == home (jika isi dari $page adalah home)
  include "pages/beranda.php"; // load file home.php yang ada di folder views
  break;
  
  case 'timeline': // $page == berita (jika isi dari $page adalah berita)
  include "pages/timeline.php"; // load file berita.php yang ada di folder views
  break;

  case 'listlomba': // $page == berita (jika isi dari $page adalah berita)
    include "pages/listlomba.php"; // load file berita.php yang ada di folder views
    break;

  case 'detail': // $page == berita (jika isi dari $page adalah berita)
    include "pages/detail.php"; // load file berita.php yang ada di folder views
    break; 
  
//   case 'tentang': // $page == tentang (jika isi dari $page adalah tentang)
//   include "views/tentang.php"; // load file tentang.php yang ada di folder views
//   break;
  
  // case 'case_selanjutnya':
  // include "views/case_selanjutnya.php";
  // break;
  
  // case 'case_selanjutnya':
  // include "views/case_selanjutnya.php";
  // break;
  
  // case 'case_selanjutnya':
  // include "views/case_selanjutnya.php";
  // break;
  
  default: // Ini untuk set default jika isi dari $page tidak ada pada 3 kondisi diatas
  include "pages/beranda.php";
}
?>
