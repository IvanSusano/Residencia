<?php

namespace App\Controllers;


use App\Controllers\BaseControllers;
use App\Models\UsuariosModel;
use App\Models\RolesModel;

class Usuarios extends BaseController

{
    protected $usuarios, $roles;
    protected $reglas;

    public function __construct()
        {
            $this->usuarios = new UsuariosModel();
            $this->roles = new RolesModel();
            helper(['form']);

            $this->reglas = [
                'usuarios' => [
                    'rules' => 'required|is_unique[usuarios.usuarios]',
                    'errors' => [
                        'required' => 'El campo {field} es obligatorio.',
                        'is_unique' => 'El campo {field} debe ser unico.'
                    ]
                ],
                'password' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'El campo {field} es obligatorio.'
                    ]
                ],
                
                    'repassword' => [
                        'rules' => 'required|matches[password]',
                        'errors' => [
                            'required' => 'El campo {field} es obligatorio.',
                            'required' => 'Las contraseñas no coinciden.'
                        ]
                    ],
                        'id_rol' => [
                            'rules' => 'required',
                            'errors' => [
                                'required' => 'El campo {field} es obligatorio.'
                            ]
                        ]
            ];
                
        }
 //En la base de datos tiene que estarc con el numeor 1 activo la multa si no no se muestra en la vista multas    
public function index($activo = 1)
{
     $usuarios = $this->usuarios->where('activo',$activo)->findAll();
     $data = ['titulo '=> 'Usuarios','datos' => $usuarios];
 
     echo view('header');
     echo view('usuarios/usuarios', $data);
     echo view('footer');
 }
//ver las multas eliminadas 
 public function eliminados($activo = 0)
 {
     $usuarios = $this->usuarios->where('activo',$activo)->findAll();
     $data = ['titulo '=> 'Usuarios eliminados','datos' => $usuarios];
 
     echo view('header');
     echo view('usuarios/eliminados_u', $data);
     echo view('footer');
 }

 //para ver la vista de agregar 
 public function nuevo ()
 {
    $roles = $this->roles->where('activo', 1)->findAll();
    $data = ['titulo '=> 'Agregar Usuario', 'roles' => $roles];

     echo view('header');
     echo view('usuarios/nuevos_u', $data);
     echo view('footer');
 }
//Para poder insertar un nueva multa en
public function insertar()
{
    if($this->request->getMethod() == "post" && $this->validate($this->reglas)){
        $has = password_hash($this->request->getPost('password'), PASSWORD_DEFAULT);
    
    $this->usuarios->save([
    'usarios' => $this->request->getPost('usuarios'),
    'paswword' => $has, 
    'id_roles' => $this->request->getPost('id_roles'),
    'activo' => 1 ]);

    return redirect()->to(base_url().'/usuarios');
} else {

    $roles = $this->roles->where('activo', 1)->findAll();
    $data = ['titulo '=> 'Agregar Usuario', 'roles' => $roles];


    $data = ['titulo '=> 'Agregar usuarios', 'validation' => $this->validator];

    echo view('header');
    echo view('usuarios/nuevas_m', $data);
    echo view('footer');
}

 }

//Para mostras la vista de editar
 public function editar ($id)
 {
     $usuarios = $this->multas->where('id',$id)->first();
     $data = ['titulo '=> 'Editar Usuarios', 'datos' => $usuarios];

     echo view('header');
     echo view('usuarios/editar_u', $data);
     echo view('footer');
 }
//Para poder insertar un nueva multa en
 public function actualizar()
 {
     $this->usuarios->update($this->request->getPost('id'), ['id' => $this->request->getPost('id'),'usuarios' => 
     $this->request->getPost('usuarios'), ]);
//Para poder derijirme con el url de mi tabla
     return redirect()->to(base_url().'/usuarios');
 }
 public function eliminar($id)
 {
     $this->usuarios->update($id, ['activo' => 0]);
      return redirect()->to(base_url().'/usuarios');
 }
 

 public function reingresar($id)
 {
     $this->usuarios->update($id, ['activo' => 1]);
      return redirect()->to(base_url().'/usuarios');
 }
 
}
   
