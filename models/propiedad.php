<?php

namespace Model;

class Propiedad extends ActiveRecord
{
    protected static $tabla ='propiedades';
    protected static $columnasDb = ['id', 'titulo', 'precio', 'imagen', 'descripcion', 'habitaciones', 'wc', 'estacionamiento', 'creado', 'vendedorId']; //*sanitizado paso #1

    public $id;
    public $titulo;
    public $precio;
    public $imagen;
    public $descripcion;
    public $habitaciones;
    public $wc;
    public $estacionamiento;
    public $creado;
    public $vendedorId;

    public function __construct($args = []){
        //!nota - publico this/static con self hace la referencia a los atributos estaticos de la misma clase
        //Una validacion si no se encuentra nada en titulo se va a quedar como un string vacio
        $this->id = $args['id'] ?? null;
        $this->titulo = $args['titulo'] ?? '';
        $this->precio = $args['precio'] ?? '';
        $this->imagen = $args['imagen'] ?? '';
        $this->descripcion = $args['descripcion'] ?? '';
        $this->habitaciones = $args['habitaciones'] ?? '';
        $this->wc = $args['wc'] ?? '';
        $this->estacionamiento = $args['estacionamiento'] ?? '';
        $this->creado = date('Y/m/d');
        $this->vendedorId = $args['vendedorId'] ?? '';
    }
    public function validar()
    {
        if (!$this->titulo) {
            self::$errores[] = "Debes añadir un titulo";
        }
        if (!$this->precio) {
            self::$errores[] = "Debes añadir un precio";
        }

        
        if (strlen(!$this->descripcion) > 10) {
            self::$errores[] = "Debes añadir una descripcion y que sea mayor a 50 caracteres";
        }

        if (!$this->habitaciones) {
            self::$errores[] = "Debes añadir un numero de habitaciones";
        }
        if (!$this->wc) {
            self::$errores[] = "Debes añadir un numero de baños";
        }
        if (!$this->estacionamiento) {
            self::$errores[] = "Debes añadir un numero de habitaciones";
        }
        if (!$this->vendedorId) {
            self::$errores[] = "Debes elegir a un vendedor";
        }

        if (!$this->imagen) {
            self::$errores[] = "La Imagen es Obligatoria";
        }
        return self::$errores;
    }

}
