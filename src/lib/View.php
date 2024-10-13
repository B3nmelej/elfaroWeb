<?php

namespace Johnn\ElFaroPhpProject\lib;

class View{

  function render(string $name, array $data = []){
    $this->d = $data;
    require 'src/views/' . $nombre . 'php';
  }

}
