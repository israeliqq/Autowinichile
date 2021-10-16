<?php 
namespace App\Models;

use CodeIgniter\Model;

class UsuarioModel extends Model{
    protected $table      = 'usuario';
    protected $primaryKey = 'id';
    protected $allowedFields = ['email', 'password','nombre', 'apellido', 'rut', 'pais', 'region', 'ciudad', 'telefono', 'rol'];

 

}