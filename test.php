<?php

require_once __DIR__ . '/env.php';

use Raiz\Principal;

$principal = new Principal();
$resultado = $principal->validar();

if ($resultado !== true) {
  throw new Exception('Test fallido: el resultado de validar() no es `true`.');
}

echo "¡El test se completó con éxito!\n";
