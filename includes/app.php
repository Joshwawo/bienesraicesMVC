<?php

require 'funciones.php';
// require '/includes/config/database.php';
// require '/laragon/www/bienesraices/includes/config/database.php';
// require '/bienesraices/includes/config/database.php';

require __DIR__ . '/config/database.php';
// require '\bienesraices\includes\config';
require __DIR__ . '/../vendor/autoload.php';

//Conectarnos a la base de datos
$conn = conectarDB();

use Model\ActiveRecord;

// $propiedad = new Propiedad;

ActiveRecord::setDb($conn);


// define('TEMPLATES_URL', __DIR__ . '/templates');
// define('FUNCIONALES_URL', __DIR__ . 'funciones.php');
