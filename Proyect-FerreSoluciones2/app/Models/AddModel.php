<?php namespace App\Models;

use CodeIgniter\Model;

class AddModel extends Model
{
    protected $table = 'productos';
    protected $primaryKey = 'id_producto';

    protected $allowedFields = ['id_producto','nom_producto', 'cat_producto',
     'medida','tipo','TRIAL_COLUMN6','TRIAL_COLUMN7', 'TRIAL_COLUMN8','TRIAL_COLUMN9','TRIAL_COLUMN10','TRIAL_COLUMN11','Imagen','Unidades'];
}
