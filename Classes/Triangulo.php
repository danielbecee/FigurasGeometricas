<?php
require_once 'FiguraGeometrica.php';

class Triangulo extends FiguraGeometrica
{
  public $lado2;
  public $lado3;

  function set_lado2($lado2)
  {

    $this->lado2 = $lado2;
  }
  //metodo para recoger
  function get_lado2()
  {
    return $this->lado2;
  }
  function set_lado3($lado3)
  {

    $this->lado3 = $lado3;
  }
  //metodo para recoger
  function get_lado3()
  {
    return $this->lado3;
  }

  public function __construct($lado1, $lado2, $lado3)
  {
    $this->tipoFigura = 'Triangulo';
    $this->lado1 = $lado1;
    $this->lado2 = $lado2;
    $this->lado3 = $lado3;
  }

  public function calcularArea()
  {
    return ($this->lado1 + $this->lado2 + $this->lado3) / 2;
  }
  public function calcularPerimetro()
  {
    return $this->lado1 + $this->lado2 + $this->lado3;
  }
  public function __toString()
  {
    // return $this->tipoFigura.": Lado = ". $this->lado2.$this->lado3. ", Area = ". $this->calcularArea(). ", Perimetro = ". $this->calcularPerimetro();
    return $this->tipoFigura . ": <br>Lado = " . $this->lado1 ."<br>Lado2 = ". $this->lado2 ."<br>Lado3= ". $this->lado3.
    "<br> Area = " . $this->calcularArea() . "<br> Perimetro = " . $this->calcularPerimetro();
  }
  public function __destruct()
  {
    echo "Objeto de la clase Producto destruido.\n";
  }
}


 

