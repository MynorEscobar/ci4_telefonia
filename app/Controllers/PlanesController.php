<?php

namespace App\Controllers;
use App\Models\PlanesModel;

class PlanesController extends BaseController
{
    public function index(): string
    {
        $planes = new PlanesModel();
        
        /* select * from planes = findAll()*/
        $datos['datos']=$planes->findAll();
        
        //print_r($datos);

        return view('planes',$datos);
    }
    public function nuevoPlan():string 
    {
        return view('planes_nuevos');
    }
    public function agregarPlan()
    {
        $id = $this->request->getVar('txtId');
        //echo "<br>Id = ". $id;
        $nombre=$this->request->getVar('txtNombre');
        //echo "<br>nombre = ". $nombre;
        $pago = $this->request->getVar('txtPagoMensual');
        //echo "<br>Pago =". $pago;
        $minutos = $this->request->getVar('txtCantidadMinutos');
        //echo "<br>Minutos = ". $minutos;
        $mensajes = $this->request->getvar('txtCantidadMensajes');
        //echo "<br>Mensajes = ". $mensajes;
        $planes = new PlanesModel();
        $datos=[
            'plan_id'=>$id,
            'nombre'=>$nombre,
            'pago_mensual'=>$pago,
            'cantidad_minutos'=>$minutos,
            'cantidad_mensajes'=>$mensajes
        ];
        $planes->insert($datos);
        echo "Datos guardados";
        echo "<a href='planes'> Regresar </a>";
        
    }
}