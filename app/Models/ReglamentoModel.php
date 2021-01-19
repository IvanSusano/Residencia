<?php
namespace App\Models;
use CodeIgniter\Model;

class ReglamentoModel extends Model
{
    protected $table      = 'reglamento';
    protected $primaryKey = 'id';

    protected $returnType     = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['titulo', 'capitulo', 'artículo', 'descripción'];

    protected $useTimestamps = false;
    protected $createdField  = 'fecha_alta';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;

}

?>