<?php

namespace App\Controllers;
use App\Models\ClientesModel;
class ClientesController extends BaseController
{
    public function index(): string
    {
        $clientes = new ClientesModel();
        $datos['datos']=$clientes->findAll();
        return view('clientes',$datos);
    }
    public function nuevoCliente(): string 
    {
        return view('clientes_nuevos');
    }
    
    public function agregarCliente() 
    {
       $datos=[
            'cliente_id' => $this->request->getVar('txtId'),
            'nombre' => $this->request->getVar('txtNombre'),
            'apellido' => $this->request->getVar('txtApellido'),
            'correo_electronico' => $this->request->getVar('txtCorreo'),
            'calle_avenida' => $this->request->getVar('txtCalleAvenida'),
            'no_casa' => $this->request->getVar('txtNoCasa'),
            'zona' => $this->request->getVar('txtZona')
        ];

        //crear objeto de tipo ClientesModel
        $clientes = new ClientesModel();
        $clientes->insert($datos); //insert into cliente values(...);
        echo "Datos guardados";
        return redirect()->route('clientes');
    }
}
