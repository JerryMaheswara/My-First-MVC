<?php

namespace system\libs;
use system\libs\database;

class Model
{


  function __construct() {
    $this->db = new Database();

    // echo '<pre>';
    // print_r($this);
  }

//////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////
/////////////////////////////// ntar pindahin ke model turunannya aja ////////
//////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////
  public function run()
  {
    $sth = $this->db->prepare("SELECT * FROM users ");
    $sth->execute();
    
    $data = $sth->fetchAll();

    print_r($data);
    
  }

}