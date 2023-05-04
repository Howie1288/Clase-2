<?php

class Producto {
    # Definimos los atributos
    protected string $nombre;
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
    public function gmostrarProducto(){
    echo " El producto es:" . $this->nombre . "y su precio es de:" . $this->precio;
    }
    # Mdtodo Getter para la propiedad protegida de Nombre
    public function getNombre() : string {
        return $this->nombre;
    }
    # Metodo Setter para la propiedad Protegida de Nombre
    public function setNombre(string $nombre) {
        $this->nombre = $nombre;
    }
}

$producto = new Producto('Tablet', 200, true);
//$producto -> mostrarProducto();
echo $producto -> nombre; // Produce un error 
echo $producto -> getNombre(); // Obtiene el Nombre
$producto -> setNombre('Nuevo Nombre'); // Setea el Nombre
echo $producto -> getNombre(); //Obtiene el Nombre

?>