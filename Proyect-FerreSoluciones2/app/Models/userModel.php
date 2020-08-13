<?php namespace App\Models;

use CodeIgniter\Model;

class userModel extends Model
{
    protected $table = 'usuarios';
    protected $primaryKey = 'Id_usuario';

    protected $allowedFields = ['Id_usuario','nombre', 'nombreususario','correo','contraseña'];
}
