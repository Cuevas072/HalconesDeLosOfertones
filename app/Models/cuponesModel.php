<?php namespace App\Models;

use CodeIgniter\Model;

class cuponesModel extends Model
{
    protected $table      = 'cupon';
    protected $primaryKey = 'id';

    protected $returnType     = 'array'; 
    protected $useSoftDeletes = true; 

    protected $allowedFields = ['nombreP', 'precio', 'categoria','link',
    'des','idUsuario'];

    protected $useTimestamps = false;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at'; 

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;
}