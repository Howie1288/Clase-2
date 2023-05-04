<?php

class Producto {
    # Definimos los atributos
    public string $nombre;
    public int $precio;
    public bool $disponible;

    # El metodo constructor se ejecuta al ejecutar la instancia 
    public function __construct(string $nombre, int $precio, bool $disponible){
        # Se les da valores a los atributos  con los mismos parametros 
        //que recibe el metodo constructor
        $this->nombre = $precio;
        $this->precio = $precio;
        $this->disponible = $disponible;
    }
    # Definimos los metodos 
    public function mostrarProducto(){
    echo " El producto es:" . $this->nombre . "y su precio es de:" . $this->precio;
    }
    
}
   // INSTANCIA DE LA CLASE EN EL PRIMER OBJETO
$producto = new Producto('Tablet', 200, true);

//LLAMANDO AL METODO MOSRTRAR PRODUCTOS, UTILIZANDO LAS SINTAXIS DE LA FLECHA
$producto -> mostrarProducto(); // Produce un error 

//IMPRESION EN PANTALLA DEL PRIMER OBJETO
echo "<pre>";
var_dump($producto);
echo "</pre>";

//IMPRESION EN PANTALLA DEL SEGUNDO OBJETO
echo "<pre>";
var_dump($producto2);
echo "</pre>";

































