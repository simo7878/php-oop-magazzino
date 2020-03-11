<?php


require_once __DIR__ . '/../traits/GetPosition.php';
//creare una classe per un prodotto generico
require_once'traits/Autorizzazione.php'

class Detergente {
  use Autorizzazione;
  public $categoria;
  public $marca;
  public $prezzo;
  public $formato;
  public $inci;

//funzione per passare gli attributi principali
  function __construct($_autorizzazione, $_categoria, $_formato, $_prezzo, $_marca) {
    if(!empty($_autorizzazione)) {
      $this->getAutorizzazione($_autorizzazione);
    }
    if ($this->autorizzato == false) {
      die('non hai autorizzazione');
    }
    if (!is float($_prezzo)) {
      die('non è un decimale');
    }elseif (strlen($_categoria) !== 10) {
      die('non è un codice');

    }elseif (empty($_categoria)) {
      die('non è una categoria');
    }
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
