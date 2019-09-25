<?php
include('./Punto.php');

class Circulo {
   private $origen;
   private $radio;

   /* Constructores */

    public function Circulo(Punto $origen,$radio) {
        $this->origen = $origen;
        $this->radio  = $radio;
    }

    /* Getter's y Setter's */

    public function getOrigen() {
        return($this->origen);
    }

    public function getRadio()
    {
        return ($this->radio);
    }

    public function setOrigen(Punto $origen)
    {
        $this->origen = $origen;
    }

    public function setRadio($radio)
    {
        $this->radio = $radio;
    }

    /* Funciones */

    public function mover(Punto $origen) {
        $this->setOrigen($origen);
    }

    public function area() {
        return(3.141592 * pow($this->getRadio(),2));
    }

    public function longitud() {
        return(2*3.141592*$this->getRadio());
    }

    public function escalar($radio) {
        $this->setRadio($radio);
    }

    public function escalarAlDado($radio) {
        $this->radio = $this->getRadio() + $radio;
    }
}