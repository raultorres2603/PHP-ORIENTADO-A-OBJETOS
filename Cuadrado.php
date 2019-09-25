<?php
require ('./Punto.php');

class Cuadrado {
private $origen;
private $lado;

/* Constructor */
    public function Cuadrado(Punto $origen, $lado) {
        $this->origen = $origen;
        $this->lado = $lado;
    }

    /* Getter's y Setter's */
    public function setOrigen(Punto $origen) {
        $this->origen = $origen;
    }

    public function getOrigen()
    {
        return $this->origen;
    }

    public function setLado($lado)
    {
        $this->lado = $lado;
    }

    public function getLado()
    {
        return $this->lado;
    }

    /* Funciones */

    public function area() {
        return(pow($this->getLado(),2));
    }
}