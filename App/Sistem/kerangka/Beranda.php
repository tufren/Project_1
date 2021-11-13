<?php

class Beranda extends Sambungan
{
    public function index()
    {
        $data['judul'] = 'TVID Production';
        $this->menampilkan('_temp/Head', $data);
        // $this->menampilkan('_temp/Nav');
        $this->menampilkan('beranda/index');
        $this->menampilkan('_temp/Foot');
    }
}
