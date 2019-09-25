<?php


class Punto {
    private $x;
    private $y;

    /**
     * @return mixed
     */
    public function getX()
    {
        return $this->x;
    }

    /**
     * @return mixed
     */
    public function getY()
    {
        return $this->y;
    }

    /**
     * @param mixed $x
     */
    public function setX($x)
    {
        $this->x = $x;
    }

    /**
     * @param mixed $y
     */
    public function setY($y)
    {
        $this->y = $y;
    }

    /** Funciones */

    public function mover($x,$y) {
        $this->setX($x);
        $this->setY($y);
    }

    public function distancia(Punto $p) {
        $dx = $this->getX() - $p->getX();
        $dy = $this->getY() - $p->getY();

        return(sqrt(pow($dx,2) + pow($dy,2)));
    }

    public function toString() {
        return('X: ' . $this->getX() . ' Y: ' . $this->getY());
    }
}