<?php
require_once 'Empleado.php';

/**
 * Clase Desarrollador
 * Hereda de Empleado.
 */
class Desarrollador extends Empleado {

    private $lenguaje;

    public function __construct($nombre, $salario, $lenguaje) {
        parent::__construct($nombre, $salario);
        $this->lenguaje = $lenguaje;
    }

    // Sobrescritura de método
    public function calcularBono() {
        return $this->salario * 0.15;
    }

    // Método exclusivo
    public function mostrarLenguaje() {
        echo "Lenguaje principal: {$this->lenguaje}<br>";
    }
}
?>
