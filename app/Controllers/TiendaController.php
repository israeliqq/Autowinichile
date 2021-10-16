<?php 
namespace App\Controllers;

use CodeIgniter\Controller;

class TiendaController extends Controller{

    
    public function index()
	{
		$datos['header'] = view('template/header');
        $datos['footer'] = view('template/footer');
		return view('tienda/inicio', $datos);
	}
}