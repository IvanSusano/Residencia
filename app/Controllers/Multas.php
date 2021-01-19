<?php

namespace App\Controllers;


use App\Controllers\BaseControllers;
use App\Models\MultasModel;

//La que nos ayuda a que se muestra en la vista multas las multas de la base de datos
class Multas extends BaseController

{
    protected $multas;

    public function __construct()
    {
        $this->multas = new MultasModel();
    }
//En la base de datos tiene que estarc con el numeor 1 activo la multa si no no se muestra en la vista multas    
    public function index($activo = 1)
    {
        $multas = $this->multas->where('activo',$activo)->findAll();
        $data = ['titulo '=> 'Multas','datos' => $multas];
    
        echo view('header');
        echo view('multas/multas', $data);
        echo view('footer');
    }
//ver las multas eliminadas 
    public function eliminados($activo = 0)
    {
        $multas = $this->multas->where('activo',$activo)->findAll();
        $data = ['titulo '=> 'Multas eliminadas','datos' => $multas];
    
        echo view('header');
        echo view('multas/eliminados', $data);
        echo view('footer');
    }

    //para ver la vista de agregar 
    public function nuevo ()
    {
        $data = ['titulo '=> 'Agregar Multa'];

        echo view('header');
        echo view('multas/nuevas_m', $data);
        echo view('footer');
    }
//Para poder insertar un nueva multa en
    public function insertar()
    {
        if($this->request->getMethod() == "post" && $this->validate(['Articulo'=> 'required', 'Descripción'=> 'required', 'Uma'=> 'required', 'Costo'=> 'required'])){

        
        $this->multas->save(['Articulo' => $this->request->getPost('Articulo'),
        'Descripción' => $this->request->getPost('Descripción'), 
        'Uma' => $this->request->getPost('Uma'),
        'Costo' => $this->request->getPost('Costo')]);
        return redirect()->to(base_url().'/multas');
    } else {
        $data = ['titulo '=> 'Agregar Multa', 'validation' => $this->validator];

        echo view('header');
        echo view('multas/nuevas_m', $data);
        echo view('footer');
    }

    }

//Para mostras la vista de editar
    public function editar ($id)
    {
        $multa = $this->multas->where('id',$id)->first();
        $data = ['titulo '=> 'Editar Multa', 'datos' => $multa];

        echo view('header');
        echo view('multas/editar', $data);
        echo view('footer');
    }
//Para poder insertar un nueva multa en
    public function actualizar()
    {
        $this->multas->update($this->request->getPost('id'), ['Articulo' => $this->request->getPost('Articulo'),'Descripción' => 
        $this->request->getPost('Descripción'), 'Uma' => $this->request->getPost('Uma'),
        'Costo' => $this->request->getPost('Costo'), ]);
//Para poder derijirme con el url de mi tabla
        return redirect()->to(base_url().'/multas');
    }
    public function eliminar($id)
    {
        $this->multas->update($id, ['activo' => 0]);
         return redirect()->to(base_url().'/multas');
    }
    

    public function reingresar($id)
    {
        $this->multas->update($id, ['activo' => 1]);
         return redirect()->to(base_url().'/multas');
    }
    
}
