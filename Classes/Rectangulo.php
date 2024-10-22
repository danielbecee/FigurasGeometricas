<?php
require_once 'FiguraGeometrica.php';
class Rectangulo extends FiguraGeometrica
{

    public $lado2;

    function set_lado2($lado2)
    {

        $this->lado2 = $lado2;
    }
    //metodo para recoger
    function get_lado2()
    {
        return $this->lado2;
    }

    public function __construct($lado1, $lado2)
    {

        $this->tipoFigura = ('Rectangulo');
        $this->lado1 = $lado1;
        $this->lado2 = $lado2;
    }
    public function __destruct()
    {
        return 'Destruido';
    }

    public function calcularArea()
    {
        return $this->lado1 * $this->lado2;
    }

    public function calcularPerimetro()
    {
        return 2 * ($this->lado1 + $this->lado2);
    }

    public function __toString()
    {
        return $this->tipoFigura . ': <br>lado1 = ' . $this->lado1 . ', lado2 = ' . $this->lado2 . '<br>CalcularArea = ' . $this->calcularArea() . '<br>CalcularPerimetro = ' . $this->calcularPerimetro();
    }
}
