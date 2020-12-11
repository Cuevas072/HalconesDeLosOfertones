<?php namespace App\Models;

use CodeIgniter\Model;

class comsModel extends Model
{
    protected $table      = 'comentarios';
    protected $primaryKey = 'id';

    protected $returnType     = 'array'; 
    protected $useSoftDeletes = true; 

    protected $allowedFields = ['comentario','idUsuario'];

    protected $useTimestamps = false;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at'; 

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;
}