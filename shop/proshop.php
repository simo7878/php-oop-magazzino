<?php


require_once __DIR__ . '/../traits/GetPosition.php';

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

$lineacars = new Product('detergente', 500, 35, 'powershell');
$lineacars-> = 'lavaincera';
$lineacars-> = 'cleencristalli';

$internoauto = new Product('detergente', 200, 20, 'powershell');
$internoauto-> = 'lavatappezzeria';
$internoauto-> = 'lucidacruscotto';



 ?>
