<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class EmergencyCallReceived extends Mailable
{
    use Queueable, SerializesModels;
    public $distressCall;
    /**
     * Create a new message instance.
     *
     * @return void
     */

     var $nombre ;
     var $fecha;
     var $descripcion;
     var $hectareas;
     var $hora;
    public function __construct($nombrerecibido, $fecharec,$horarec,$descripcionrec,$hectareasrec)
    {
        //
        $this->nombre = $nombrerecibido;
        $this->fecha = $fecharec;
        $this->descripcion = $nombrerecibido;
        $this->hora = $fecharec;
        $this->hectareas = $nombrerecibido;
        //$this->fecha = $fecharec;
        
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mails.emergency_call',
        ['nombre'=>$this->nombre,'fecha'=>$this->fecha,'Hora'=>$this->hora,'descripcion'=>$this->descripcion]);
    }
}
