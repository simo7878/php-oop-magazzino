<?php
//si inserisce una sola volta
require_once 'Detergente.php';

//creare una nuova variabile in cui si passano gli attributi principali
$lineacars = new Detergente('mmmm','shampoo', '500ml', 35, 'powershell');
//var_damp($lineacars);
$lineacars->categoria = 'shampooauto';

$internoauto = new Detergente('mmmm','pasta', '200ml', 20, 'powershell');
$internoauto-> = 'lavatappezzeria';
?>
