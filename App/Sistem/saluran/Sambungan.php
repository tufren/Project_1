<?php

class Sambungan
{
    public function menampilkan($view, $data = [])
    {
        include_once '../Sistem/tampilan/' . $view . '.php';
    }

    // public function dabes($meta)
    // {
    // 	include_once '../application/dbs/' . $meta . '.php';
    // 	return new $meta;
    // }
}
