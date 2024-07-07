<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index(){
                $data['titulo'] = 'Coffe House';
                echo view('common/head', $data);
                echo view('common/navbar');
                echo view('frontend/inicio');
	}

        public function principal(){
                $data['titulo'] = 'Principal';
                echo view('common/head', $data);
                echo view('common/navbar');
                echo view('frontend/principal');
                echo view('common/footer');
        }

	public function quienes_somos(){
                $data['titulo'] = 'Quienes Somos';
                echo view('common/head', $data);
                echo view('common/navbar');
                echo view('frontend/quienes_somos');
                echo view('common/footer');
        }

        public function acerca_de(){
                $data['titulo'] = 'Acerca De';
                echo view('common/head', $data);
                echo view('common/navbar');
                echo view('frontend/acerca_de');
                echo view('common/footer');
        }

        public function productos(){
                $data['titulo'] = 'Productos';
                echo view('common/head', $data);
                echo view('common/navbar');
                echo view('frontend/productos');
                echo view('common/footer');
        }

        public function registro(){
                $data['titulo'] = 'Registro';
                echo view('common/head', $data);
                echo view('common/navbar');
                echo view('backend/usuario/registro');
        }

        public function login(){
                $data['titulo'] = 'Login';
                echo view('common/head', $data);
                echo view('common/navbar');
                echo view('backend/usuario/login');
        }
}
