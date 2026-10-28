<?php
require_once 'Empleado.php';

/**
 * Clase Gerente
 * Hereda de Empleado.
 */
class Gerente extends Empleado {

    private $departamento;

    public function __construct($nombre, $salario, $departamento) {
        parent::__construct($nombre, $salario);
        $this->departamento = $departamento;
    }

    // Sobrescritura de método
    public function calcularBono() {
        return $this->salario * 0.20;
    }

    // Método exclusivo
    public function mostrarDepartamento() {
        echo "Departamento: {$this->departamento}<br>";
    }
}
?>
