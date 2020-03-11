<?php

class detergenti {
  public $categoria;
  public $marca;
  public $prezzo;
  public $formato;
  public $image;


  public function_construct($_categoria, $_formato, $_prezzo, $_marca) {
    $this->categoria = $_categoria;
    $this->formato = $_formato;
    $this->prezzo = $_prezzo;
    $this->marca = $_marca;
  }
}



 ?>
