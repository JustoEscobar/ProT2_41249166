<?php
namespace App\Controllers;
Use App\Models\usuario_model;
Use CodeIgniter\Controller;

class usuario_controller extends Controller{
    public function __construct()
    {
        helper(['form','url']);
    }

    public function create(){
        $dato['titulo'] = 'Registro';
        echo view('common/head', $dato);
        echo view('common/navbar');
        echo view('backend/usuario/registro');
        echo view('common/footer');
        echo view('common/scripts');
    }
    public function formValidation(){
        $input = $this->validate([
            'nombre' => 'required|min_length[3]',
            'apellido' => 'required|min_length[3]|max_length[25]',
            'usuario' => 'required|min_length[3]',
            'email' => 'required|min_length[4]|max_length[100]|valid_email|is_unique[usuario.email]',
            'password' => 'required|min_length[3]|max_length[10]'
        ],
        );
        $formModel = new usuario_model();
        if (!$input){
            $data['titulo'] = 'Registro';
            echo view('common/head', $data);
            echo view('common/navbar');
            echo view('backend/usuario/registro', ['validation' =>$this->validator]);
            echo view('common/footer');
            echo view('common/scripts');
        } else{
            $formModel->save([
                'nombre' => $this->request->getVar('nombre'),
                'apellido' => $this->request->getVar('apellido'),
                'usuario' => $this->request->getVar('usuario'),
                'email' => $this->request->getVar('email'),
                'password' => password_hash($this->request->getVar('password'),PASSWORD_DEFAULT)
            ]);
            session()->setFlashdata('success','Usuario registrado con exito');
            return $this->response->redirect('registro');
        }
    }
}

