<?php
/**
 * Clase base Empleado
 * Contiene atributos y métodos comunes para todos los empleados.
 */
class Empleado {

    protected $nombre;
    protected $salario;

    public function __construct($nombre, $salario) {
        $this->nombre = $nombre;
        $this->salario = $salario;
    }

    public function mostrarInformacion() {
        echo "Nombre: {$this->nombre}<br>";
        echo "Salario: $" . number_format($this->salario, 2) . "<br>";
    }

    public function calcularBono() {
        return $this->salario * 0.05;
    }
}
?>
