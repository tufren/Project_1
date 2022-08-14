<?php

class Beranda extends Sambungan
{
    public function index()
    {
        $data['judul'] = 'TVID Production - Capacity of Creativity (Stay Creative)';
        $this->menampilkan('_temp/Head', $data);
        $this->menampilkan('_temp/Nav');
        // $this->menampilkan('_temp/Front');
        $this->menampilkan('beranda/index');
        $this->menampilkan('_temp/Foot');
    }
}
