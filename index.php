<?php

require_once 'Desarrollador.php';
require_once 'Gerente.php';

echo "<h2>Información del Desarrollador</h2>";

$dev = new Desarrollador(
    "Pedro Ávila",
    25000,
    "PHP"
);

$dev->mostrarInformacion();
$dev->mostrarLenguaje();
echo "Bono: $" . number_format($dev->calcularBono(), 2);

echo "<hr>";

echo "<h2>Información del Gerente</h2>";

$ger = new Gerente(
    "María López",
    35000,
    "Tecnologías de Información"
);

$ger->mostrarInformacion();
$ger->mostrarDepartamento();
echo "Bono: $" . number_format($ger->calcularBono(), 2);

?>
