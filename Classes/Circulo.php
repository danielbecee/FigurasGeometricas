<?php

require_once 'FiguraGeometrica.php';
class Circulo extends FiguraGeometrica
{
    public $pi = 3.1415;

    public function __construct($lado1)
    {   
        $this->tipoFigura=('Circulo');
        $this->lado1 = $lado1;
    }
    public function __destruct()
    {
        return 'destruido';
    }
    public function calcularArea()
    {
        return $this->pi * ($this->lado1 * $this->lado1);
    }

    public function calcularPerimetro()
    {

        return 2 * $this->pi * $this->lado1;
    }

    public function __toString()
    {
        return  $this->tipoFigura .'<br> radio ='.$this->lado1.''. '<br>El area es : ' . $this->calcularArea() . '<br>El perimetro es : ' . $this->calcularPerimetro();
    }
}