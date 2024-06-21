<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index(){

        echo view('common/head');
        echo view('common/navbar');
        echo view('frontend/inicio');
        echo view('common/footer');
	}

	public function quienes_somos(){

        echo view('common/head');
        echo view('common/navbar');
        echo view('frontend/quienes_somos');
        echo view('common/footer');
        }

        public function acerca_de(){

        echo view('common/head');
        echo view('common/navbar');
        echo view('frontend/acerca_de');
        echo view('common/footer');
        }

        public function productos(){

        echo view('common/head');
        echo view('common/navbar');
        echo view('frontend/productos');
        echo view('common/footer');
        }

        public function registro(){

        echo view('common/head');
        echo view('common/navbar');
        echo view('frontend/registro');
        echo view('common/footer');
        }

        public function login(){

        echo view('common/head');
        echo view('common/navbar');
        echo view('frontend/login');
        echo view('common/footer');
        }
}
