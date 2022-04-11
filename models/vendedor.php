<?php 

    namespace Model;

    class Vendedor extends ActiveRecord{

        protected static $tabla ='vendedores';
        protected static $columnasDb = ['id', 'nombre', 'apellido', 'telefono']; 

        public $id;
        public $nombre;
        public $apellido;
        public $telefono;

        public function __construct($args = []){
            //!nota - publico this/static con self hace la referencia a los atributos estaticos de la misma clase
            //Una validacion si no se encuentra nada en titulo se va a quedar como un string vacio
            $this->id = $args['id'] ?? null;
            $this->nombre = $args['nombre'] ?? '';
            $this->apellido = $args['apellido'] ?? '';
            $this->telefono = $args['telefono'] ?? '';
            
        }

        public function validar() {
            if(!$this->nombre) {
                self::$errores[] = "El Nombre es Obligatorio";
            }
    
            if(!$this->apellido) {
                self::$errores[] = "El Apellido es Obligatorio";
            }
    
            if(!$this->telefono) {
                self::$errores[] = "El Teléfono es Obligatorio";
            }

            

            if(!preg_match('/[0-9]{10}/', $this->telefono)){
                self::$errores[] = "Formato No Valido";


            }
    
            return self::$errores;
        }
    }
    
    

?>