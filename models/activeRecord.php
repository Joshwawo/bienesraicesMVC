<?php 

    namespace Model;

    class ActiveRecord{
         //base de datos - al ser static el metodo tambien tiene que ser static
    protected static $conn;
    protected static $tabla ='';
    protected static $columnasDb = []; 

    protected static $errores = [];
    

    //Definir la conexion a la base de datos- Esto es un metodo estatico
    public static function setDb($database)
    {
        self::$conn = $database;
    }

  
 public function guardar() {
        if(!is_null($this->id)) {
            // actualizar
            $this->actualizar();
        } else {
            // Creando un nuevo registro
            $this->crear();
        }
    }

    public function crear()
    {
        //*Sanitizar los datos 
        $datos = $this->sanitizarDatos();

        $query = "INSERT INTO " .  static::$tabla  .  " ( ";
        $query .= join(', ', array_keys($datos));
        $query .= " )
        VALUES (' ";
        $query .= join("', '", array_values($datos));
        $query .= " ') ";

        $resultado = self::$conn->query($query);
        // debuggear($resultado);
        // debuggear($datos);
        // debuggear($query);
        if ($resultado) {
            // echo "Insertado Correctamente";
            //Este resultado = 1  es lo que el metodo $_GET va a poder imprimir un resultado
            header('location: /admin?resultado=1');
        }
    }

    public function actualizar()
    {
        //*Sanitizar los datos 
        $datos = $this->sanitizarDatos();

        $valores = [];
        foreach ($datos as $key => $value) {
            $valores[] = "{$key}='{$value}'";
        }

        $query = "UPDATE " . static::$tabla . " SET ";
        $query .= join(',', $valores);
        $query .= " WHERE id = '" . self::$conn->escape_string($this->id) . "' ";
        $query .= " LIMIT 1 ";

        $resultado = self::$conn->query($query);

        if ($resultado) {
            // echo "Insertado Correctamente";
            //Este resultado = 1  es lo que el metodo $_GET va a poder imprimir un resultado
            header('location: /admin?resultado=2');
        }
    }

    //*Eliminar un registro
    public function eliminar()
    {
        //Elimina la propiedad
        $query = "DELETE FROM " . static::$tabla . " WHERE id = " . self::$conn->escape_string($this->id) . " LIMIT 1";
        $resultado = self::$conn->query($query);

        if ($resultado) {

            $this->borrarImagen();

            header('location: /admin?resultado=3');
        }
    }

    //*Este va a interar sobre las culumnasDb
    //*Identificar y unir los atributos de la base de datos #2
    public function datos()
    {
        $datos = [];
        foreach(static::$columnasDb as $columna) {
            if ($columna === 'id') continue;
            $datos[$columna] = $this->$columna;
        }
        return $datos;
    }

    public function setImagen($imagen)
    {

        //Elimina la imagen previa
        if (!is_null($this->id)) {
           $this->borrarImagen();
        }

        //Asignar al tributo de la imagen el nombre de la imagen      
        if ($imagen) {
            $this->imagen = $imagen;
        }
    }

    //Elimina el archivo 
    public function borrarImagen()
    {
         //Comprobar si existe el archivo
         $existeArchivo = file_exists(CARPETA_IMAGENES . $this->imagen);
         if ($existeArchivo) {
             unlink(CARPETA_IMAGENES . $this->imagen);
         }
    }

    //*Este se va a encargar de sanitizar c/u #3
    public function sanitizarDatos()
    {
        $datos = $this->datos();
        $sanitizado = [];

        foreach ($datos as $key => $value) {
            $sanitizado[$key] = self::$conn->escape_string($value);
        }

        return $sanitizado;
    }

    //*Validacion
    public static function getErrores()
    {
        return static::$errores;
    }

    public function validar()
    {
        static::$errores = [];
        return static::$errores;
    }

    //Lista todos los registros
    public static function all()
    {
        
        $query = "SELECT * FROM " . static::$tabla;
        
        $resultado = self::consultarSQL($query);

        return $resultado;
    }

    //Obtiene determinado numero de registros
    public static function get($cantidad)
    {
        
        $query = "SELECT * FROM " . static::$tabla . " LIMIT " . $cantidad;

        
        
        $resultado = self::consultarSQL($query);

        return $resultado;
    }

    //busca un registro por su id
    public static function find($id)
    {
        //Consulta para obtener los datos de propiedad
        $query = "SELECT * FROM " . static::$tabla . " WHERE id = ${id}";

        $resultado = self::consultarSQL($query);

        return array_shift($resultado);
    }

    public static function consultarSQL($query)
    {
        //consultar la base de datos
        $resultado = self::$conn->query($query);
        //iterar los resultados
        $array = [];
        while ($registro = $resultado->fetch_assoc()) {
            $array[] = static::crearObjeto($registro);
        }

        //Liberar la memoria 
        $resultado->free();


        //Retornar los resultados
        return $array;
    }

    protected static function crearObjeto($registro)
    {

        //Una crear una propiedad de la clase padre
        $objeto = new static;

        // debuggear($objeto);
        foreach ($registro as $key => $value) {
            if (property_exists($objeto, $key)) {
                $objeto->$key = $value;
            }
        }
        // foreach($registro as )
        return $objeto;
    }

    //Sincroniza el objeto en memoria de los cambios realizados por el usuario
    public function sincronizar($args = [])
    {
        foreach ($args as $key => $value) {
            if (property_exists($this, $key) && !is_null($value)) {
                $this->$key = $value;
            }
        }
    }
    }

?>