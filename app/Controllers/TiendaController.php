<?php 
namespace App\Controllers;

use CodeIgniter\Controller;

class TiendaController extends Controller{

    public function index()
    {
       
        return view('usuario/login');
    }


}