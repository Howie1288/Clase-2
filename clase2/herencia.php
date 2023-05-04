<?php

class Transporte{
    protected int $ruedas;
    protected int $capacidad;
    public function __construct(int $ruedas, int $capacidad)
    {
        $this->ruedas = $ruedas;
        $this->capacidad = $capacidad;
    }
    public function getInfo() : string {
        return "El transporte tiene " . $this-> ruedas . "ruedas y una capacidad de " . $this->capacidad . "personas "; 
    }
    public function getRuedas() : int {
        return $this->ruedas;
    }
}

class Bicicleta extends Transporte {
    public function getInfo() : string{
        return "El transporte tiene " . $this->ruedas . "ruedas y una capacidad de " . $this->capacidad . "personas y No GASTA GASOLINA ";
    }
}

class Automovil extends Transporte {

    protected string $transmision;
    public function __construct(int $ruedas, int $capacidad, string $transmision)

    {
        $this ->ruedas = $ruedas;
        $this ->capacidad = $capacidad;
        $this ->transmision = $transmision;
    }
    public function getTransmision() : string{
        return $this-> transmision;
    }

}

// INSTANCIA DEL PRIMER OBJETO
$bicicleta = new Bicicleta(2, 1);
// EJECUTANDO EL METODO HEREDADO DE TRANSPORTE
echo $bicicleta -> getInfo();
echo $bicicleta -> getRuedas();


echo "<br>";


// INSTANCIA DEL SEGUNDO OBJETO, CON EL ATRIBUTO ORIGINAL
$auto = new Automovil(4,4, 'Manual');
//METODO HEREDADO DE TRANSPORTE
echo $auto -> getInfo();
//METODO DE LA CLASE AUTOMOVIL
echo $auto -> getTransmision();


?>