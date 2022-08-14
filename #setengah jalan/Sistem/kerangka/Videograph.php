<?php

class Videograph extends Sambungan
{
  public function index()
  {
    $data['judul'] = 'TVID Production - {Videograph}';
    $this->menampilkan('_temp/Head', $data);
    // $this->menampilkan('_temp/Nav');
    $this->menampilkan('videos/index');
    $this->menampilkan('_temp/Foot');
  }
}
