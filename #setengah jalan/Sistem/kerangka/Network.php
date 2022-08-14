<?php 

class Network extends Sambungan
{
  public function index()
  {
    $data['judul'] = 'TVID Production - {Network}';
    $this->menampilkan('_temp/Head');
    // $this->menampilkan('_temp/Nav');
    $this->menampilkan('net/index');
    $this->menampilkan('_temp/Foot');
  }
}