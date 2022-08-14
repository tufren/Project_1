<?php

class Authenticated extends Sambungan
{
    public function index()
    {
        $data['judul'] = 'TVID Production - {Login}';
        $this->menampilkan('_temp/Head', $data);
        // $this->menampilkan('_temp/Nav');
        $this->menampilkan('authentication/index');
        $this->menampilkan('_temp/Foot');
    }
}
