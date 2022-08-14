<?php

class Sambungan
{
  public function menampilkan($file_tampilan, $data = [])
  {
    include_once '../Sistem/tampilan/' . $file_tampilan . '.php';
  }

  public function meta($file_database)
  {
    include_once '../Sistem/dbs/' . $file_database . '.php';
    return new $file_database;
  }
}
