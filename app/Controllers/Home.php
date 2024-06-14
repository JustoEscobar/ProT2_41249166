<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index(){

        echo view('common/head');
        echo view('common/navbar');
        echo view('frontend/principal');
        echo view('common/footer');
	}
}
