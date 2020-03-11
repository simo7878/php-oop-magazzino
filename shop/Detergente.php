<?php


require_once __DIR__ . '/../traits/GetPosition.php';

class Detergente {
  public $categoria;
  public $marca;
  public $prezzo;
  public $formato;
  public $inci;


  function __construct($_categoria, $_formato, $_prezzo, $_marca) {
    $this->categoria = $_categoria;
    $this->formato = $_formato;
    $this->prezzo = $_prezzo;
    $this->marca = $_marca;
  }

}

$lineacars = new Detergente('shampoo', '500ml', 35, 'powershell');
$lineacars-> = 'shampooauto';


$internoauto = new Detergente('shampoo', '200ml', 20, 'powershell');
$internoauto-> = 'lavatappezzeria';




 ?>
