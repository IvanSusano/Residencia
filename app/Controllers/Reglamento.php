<?php

namespace App\Controllers;


use App\Controllers\BaseControllers;
use App\Models\ReglamentoModel;

//La que nos ayuda a que se muestra en la vista multas las multas de la base de datos
class Reglamento extends BaseController

{
    protected $reglamento;

    public function __construct()
    {
        $this->reglamento = new ReglamentoModel;
    }
//En la base de datos tiene que estar con el numero 1 activo para que el reglamento si no no se muestra en la vista reglameto    
    public function index($activo = 1)
    {
        $reglamento = $this->reglamento->where('activo',$activo)->findAll();
        $data = ['titulo '=> 'Reglamento','datos' => $reglamento ];
    
        echo view('header');
        echo view('reglamento/reglamento', $data);
        echo view('footer');
    }

//ver las multas eliminadas 
public function eliminados($activo = 0)
{
    $reglamento = $this->reglamento->where('activo',$activo)->findAll();
    $data = ['titulo '=> 'reglamento eliminados','datos' => $reglamento];

    echo view('header');
    echo view('reglamento/eliminados_r', $data);
    echo view('footer');
}

    //para ver la vista de agregar 
    public function nuevo ()
    {
        $data = ['titulo '=> 'Agregar Reglamento'];

        echo view('header');
        echo view('reglamento/nuevos_r', $data);
        echo view('footer');
    }
//Para poder insertar un nueva regla 
    public function insertar()
    {
        if($this->request->getMethod() == "post" && $this->validate(['titulo'=> 'required', 'capitulo'=> 'required', 'artículo'=> 'required', 'descripción'=> 'required'])){

        $this->reglamento->save(['titulo' => $this->request->getPost('titulo'),'capitulo' => 
        $this->request->getPost('capitulo'), 'artículo' => $this->request->getPost('artículo'),
        'descripción' => $this->request->getPost('descripción'), ]);
//Para poder derijirme con el url de mi tabla
        return redirect()->to(base_url().'/reglamento');
     } else {
        $data = ['titulo '=> 'Agregar Reglamento'];

        echo view('header');
        echo view('reglamento/nuevos_r', $data);
        echo view('footer');
    }
}

//Para mostras la vista de editar
    public function editar ($id)
    {
        $reglamento = $this->reglamento->where('id',$id)->first();
        $data = ['titulo '=> 'Editar Reglamento', 'datos' => $reglamento];

        echo view('header');
        echo view('reglamento/editar_r', $data);
        echo view('footer');
    }
//Para poder insertar un nueva multa en
    public function actualizar()
    {
        $this->reglamento->update($this->request->getPost('id'), ['titulo' => $this->request->getPost('titulo'),'capitulo' => 
        $this->request->getPost('capitulo'), 'artículo' => $this->request->getPost('artículo'),
        'descripción' => $this->request->getPost('descripción'), ]);
//Para poder derijirme con el url de mi tabla
        return redirect()->to(base_url().'/reglamento');
    }

    public function eliminar()
    {
        $this->reglamento->update('id', ['activo' => 0]);
//Para poder derijirme con el url de mi tabla
        return redirect()->to(base_url().'/reglamento');
    }

    public function reingresar($id)
    {
        $this->multas->update($id, ['activo' => 1]);
         return redirect()->to(base_url().'/multas');
    }
}
