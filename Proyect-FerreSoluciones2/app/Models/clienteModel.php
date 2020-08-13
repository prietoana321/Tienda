<?php namespace App\Models;

use CodeIgniter\Model;

class clienteModel extends Model
{
    protected $table = 'cliente';
    protected $primaryKey = 'id_cliente';

    protected $allowedFields = ['id_cliente','cedula_cliente', 'nombre_cliente',
     'apellidos_cliente','nombre_usuario','TRIAL_COLUMN6','TRIAL_COLUMN8', 'TRIAL_COLUMN9','TRIAL_COLUMN10'];
}
