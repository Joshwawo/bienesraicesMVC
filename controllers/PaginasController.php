<?php

namespace Controllers;

use MVC\Router;
use Model\Propiedad;
use PHPMailer\PHPMailer\PHPMailer;



class PaginasController
{

    public static function index(Router $router)
    {
        $propiedades = Propiedad::get(3);
        $caca = true;
        $router->render('/paginas/index', [
            'propiedades' => $propiedades,
            'caca' => $caca
        ]);
    }

    public static function nosotros(Router $router)
    {
        $router->render('paginas/nosotros', []);
    }

    public static function propiedades(Router $router)
    {
        $propiedades = propiedad::all();


        $router->render('paginas/propiedades', [
            'propiedades' => $propiedades

        ]);
    }
    public static function propiedad(Router $router)
    {
        $id = validarORedireccionar('/propiedades');

        $propiedad = propiedad::find($id);

        $router->render('paginas/propiedad', [
            'propiedad' => $propiedad
        ]);
    }



    public static function blog(Router $router)
    {
        $router->render('paginas/blog', []);
    }
    public static function entrada(Router $router)
    {
        $router->render('/paginas/entrada');
    }


    public static function contacto(Router $router)
    {

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            
            $respuestas = $_POST['contacto'];
            

            //Crear una instancia de phpmailer
            $mail = new PHPMailer();
            //Configurar SMTP
            $mail->isSMTP();
            $mail->Host = 'smtp.mailtrap.io';
            $mail->SMTPAuth = true;
            $mail->Username = '95c125451f0f10';
            $mail->Password = '17cc5bffc5f441';
            $mail->SMTPSecure = 'tls';
            $mail->Port = 2525;

            //Configurar el contenido del email
            $mail->setFrom('jopaly654@hotmail.com');
            $mail->addAddress('jopaly654@hotmail.com', 'BienesRaices.com');
            $mail->Subject = 'Tienes un Nuevo Mensaje';

            //Habilitar HTML
            $mail->isHTML(true);
            $mail->CharSet = 'UTF-8';

            //Definir Contenido
            $contenido = '<html>';
            $contenido .= '<p> Tienes un Nuevo Mensaje </p>';
            $contenido .= '<p> Nombre: ' . $respuestas['nombre']  .' </p>';
            $contenido .= '<p> Email: ' . $respuestas['email']  .' </p>';
            $contenido .= '<p> Telefono: ' . $respuestas['telefono']  .' </p>';
            $contenido .= '<p> Mensaje: ' . $respuestas['mensaje']  .' </p>';
            $contenido .= '<p> Vende o Compra: ' . $respuestas['opciones']  .' </p>';
            $contenido .= '<p> Precio o Presupuesto: $ ' . $respuestas['precio']  .' </p>';
            $contenido .= '<p> Fecha Contacto ' . $respuestas['fecha']  .' </p>';
            $contenido .= '<p> Hora' . $respuestas['hora']  .' </p>';
            $contenido .= '</html>';

            $mail->Body = $contenido;
            $mail->AltBody = 'Esto es texto alternativo sin HTML';


            //Enviar el Email
            if ($mail->send()){
                echo "Mensaje Enviado Correctamente";
            }else{
                echo "El Mensaje No se Pudo Enviar";
            }

        }

        $router->render('paginas/contacto');
    }
}
