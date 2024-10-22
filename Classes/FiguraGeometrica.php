<?php


class FiguraGeometrica {

    public $tipoFigura ;
    public $lado1;

    function set_tipoFigura($tipoFigura)
    {

        $this->tipoFigura = $tipoFigura;
    }
    //metodo para recoger
    function get_tipoFigura()
    {
        return $this->tipoFigura;
    }
    function set_lado1($lado1)
    {

        $this->lado1 = $lado1;
    }
    //metodo para recoger
    function get_lado1()
    {
        return $this->lado1;
    }

    public function __construct($tipoFigura, $lado1)
  {

    $this->tipoFigura = $tipoFigura;
    $this->lado1 = $lado1;
  }

  public function __destruct()
  {
    echo "Objeto de la clase Producto destruido.\n";
  }

  public function calcularArea(){
    echo "Calcular Area";
  }

    
}
