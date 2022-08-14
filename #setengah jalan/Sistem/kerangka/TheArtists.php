<?php

class TheArtists extends Sambungan
{
  public function index()
  {
    $data['judul'] = 'TVID Production - {The Artists}';
    $this->menampilkan('_temp/Head', $data);
    // $this->menampilkan('_temp/Nav');
    $this->menampilkan('artists/index');
    $this->menampilkan('_temp/Foot');
  }
}
