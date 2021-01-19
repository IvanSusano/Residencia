<?php
namespace App\Models;
use CodeIgniter\Model;

class RolesModel extends Model
{
    protected $table      = 'roles';
    protected $primaryKey = 'id';

    protected $returnType     = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['usuarios', 'activo',];

    protected $useTimestamps = false;
    protected $createdField  = 'fecha_alta';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;

}

?>