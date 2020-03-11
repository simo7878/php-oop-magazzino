<?php
require_once 'Detergente.php';
class Shampoo extends Detergente {
  public $composizione;
  public $utilizzo;
//con parent si riprendono gli orgomenti del genitore
  function __construct($_categoria, $_formato, $_prezzo,$_marca, $composizione, $utilizzo );
  parent ::__construct($_categoria, $_formato, $_prezzo,$_marca);
  if (empty($composizione)) {
    die('non è stata specificata la composizione');

  }elseif (empty($utilizzo)) {
    die('non è stata specificata l\utilizzo');
  }

}

 ?>
