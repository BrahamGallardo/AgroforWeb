<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

class CorreoController extends Controller
{
    //
     public function enviar(Request $request){
         $pathToFile="";
         $containfile=false;
         $destinatario="dunklen.bosen@gmail.com";
         $asunto="Cita";
         $contenido=$request->input("message");

         $data=array('contenido'=>$contenido);
         $r=Mail::send('welcome',$data,function($message)use ($asunto,$destinatario,$containfile,$pathToFile){
             $message->from('braham.gc@gmail.com','Abraham');
             $message->to($destinatario)->subject($asunto);
             if($containfile){
                 $message->attach($pathToFile);
             }
         });
         if($r){
             return view("welcome")->with("msj","Correo Enviado");
         }
         else {
             return view("welcome")->with("msj","Error!!!!!!!!!!!!!!");
         }
     }
     public function send(){
         $msg = array(
             'name' => $_POST['name'],
             'dir' => $_POST['dir'],
             'email' => $_POST['email'],
             'subject' => $_POST['subject'],
             'message' => $_POST['message']
         );
         $to_name = 'Administrador';
         $to_email = 'braham.gc@gmail.com';
         $from = $msg['email'];
         Mail::send('emails.contact',$msg,function($message) use ($to_name, $to_email, $from){
             $message->to($to_email, $to_name)
                     ->subject('solicitud de contacto');
             $message->from($from,'Solicitante');
         });
     }
     public function insertar_cita(Request $request)
     {
      /*$nombre2 = 'Perro';
      $nombre = $request->input('name');
      $email = $request->input('email');
      //$fecha = $request->input('date');
      $hora = $request->input('hora');
      // contraseña encriptada
      //$pass = bcrypt($request->input('pass'));
      // contraseña no encriptada
      //$pass = $request->input('pass');
      $fecha = $request->input('fecha');
      $descripcion = $request->textarea('message');
      $hectareas = $request->input('subject');
      //$direccion = $request->input('dir');

      CitasM::create(['nombre' => $nombre, 'email' => $email,'fecha' => $fecha, 'hora' =>$hora,
      'tamanio' =>$hectareas,'descripcion' =>$descripcion]);
      Mail::to($email)->send(new EmergencyCallReceived($nombre,$fecha,$hora,$descripcion,$hectareas));*/

      return view('vistaCita');

      //echo ($nombre);
      //return redirect()->to($hora);



     }

}
