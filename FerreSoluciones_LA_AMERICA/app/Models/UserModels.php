
<?php namespace App\Models;

use CodeIgniter\Model;

class UserModels extends Model{
    protected $table ='usuarios';
    protected $allowedfields = ['Id_usuario','nombre','nombreususario','contraseña'];

}