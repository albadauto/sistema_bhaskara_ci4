<?php

namespace App\Models;

use CodeIgniter\Model;

class CalculoModel extends Model
{
    protected $table = 'tb_calculo';
    protected $primaryKey = 'id';
    protected $returnType = 'array';
    protected $allowedFields = [
        'tb_a',
        'tb_b',
        'tb_c',
        'tb_delta',
        'tb_result',
        'tb_result2'
    ];
}