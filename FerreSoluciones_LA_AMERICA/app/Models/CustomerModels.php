<?php namespace App\Models;

use CodeIgniter\Model;

class ClientsModel extends Model{
    protected $table ='cliente';
    protected $allowedfields = ['id_cliente','cedula_cliente','nombre_cliente','apellidos_cliente','nombre_usuario','TRIAL_COLUMN8','TRIAL_COLUMN9','TRIAL_COLUMN10'];

}