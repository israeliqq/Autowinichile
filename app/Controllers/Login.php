<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UsuarioModel;

class Login extends Controller
{

    public function __construct(){
		date_default_timezone_set("Chile/Continental");
	}

    public function index()
    {
        $Usuario = new UsuarioModel();
        $datos['usuario'] = $Usuario->orderBy('id','ASC')->findAll();
        $datos['header'] = view('template/header');
        $datos['footer'] = view('template/footer');
        return view('usuario/login', $datos);
    }

    public function registrar()
    {

        $Usuario = new UsuarioModel();

        $datosUsuario = array(
            'email' 		=> $_POST['email'],
            'password'		=> $_POST['pass1'],
            'nombre' 		=> $_POST['nombre'],
            'apellido' 	    => $_POST['apellido'],
            'rut' 			=> $_POST['rut'],
            'pais' 			=> $_POST['pais'],
            'region' 		=> $_POST['region'],
            'ciudad' 		=> $_POST['ciudad'],
            'telefono' 		=> $_POST['telefono'],
            'rol'		    => 'administrador',
        );


        //print_r($datosUsuario); 
        $Usuario->insert($datosUsuario);


        
        $datos['usuario'] = $Usuario->orderBy('id','ASC')->findAll();
        $datos['header'] = view('template/header');
        $datos['footer'] = view('template/footer');
        return view('usuario/listarUsuarios', $datos);
    }

    public function ingresar()
    {
        $Usuario = new UsuarioModel();
        $datos['usuario'] = $Usuario->orderBy('id','ASC')->findAll();
        $datos['header'] = view('template/header');
        $datos['footer'] = view('template/footer');
        return view('usuario/crear', $datos);
    }
    
    public function eliminar()
    {
        $Usuario = new UsuarioModel();
        $datos['usuario'] = $Usuario->orderBy('id','ASC')->findAll();
        $datos['header'] = view('template/header');
        $datos['footer'] = view('template/footer');
        return view('usuario/crear', $datos);
    }
    
    public function editar()
    {
        $Usuario = new UsuarioModel();
        $datos['usuario'] = $Usuario->orderBy('id','ASC')->findAll();
        $datos['header'] = view('template/header');
        $datos['footer'] = view('template/footer');
        return view('usuario/crear', $datos);
    }

    public function listar()
    {
        $Usuario = new UsuarioModel();
        $datos['usuario'] = $Usuario->orderBy('id','ASC')->findAll();
        $datos['header'] = view('template/header');
        $datos['footer'] = view('template/footer');
        return view('usuario/listarUsuarios', $datos);
    }

}