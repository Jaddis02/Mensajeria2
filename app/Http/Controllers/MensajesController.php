<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mensaje;
use Illuminate\Support\Facades\Session;

class MensajesController extends Controller
{
    public function mostrarMensajes(){
        return  view('templates/header').
                view('listadoMensajes').
                view('templates/footer');
    }

    public function enviarMensajes(Request $request) {
        
        //obtenemos el mensaje recibido
        $texto = $request->get('mensajeEnvio');
        
        //Creamos una variable vacía de tipo Mensaje
        $mensaje = new Mensaje();
        $mensaje->texto = $texto;

        //Mensaje
        $session = Session();
        $usuario = $session->get('nombre');

        $mensaje->usuario = $usuario;

        $mensaje->save();

        echo 'Mensaje enviado y guardado';

    }
}
