<?php

class Registrasi extends Sambungan
{
  public function index()
  {
    $data['judul'] = 'Daftar';
    $this->menampilkan('_temp/Head', $data);
    // $this->menampilkan('_temp/Nav');
    $this->menampilkan('pengguna/registrasi');
    $this->menampilkan('_temp/Foot');
  }
}
