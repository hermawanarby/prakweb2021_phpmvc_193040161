<?php 

class About extends Controller {
  public function index($nama = 'Hermawan', $pekerjaan = 'Mahasiswa', $umur = 20) 
  {
    $this->view('about/index');
  }

  public function page() 
  {
    $this->view('about/page');
  }
}