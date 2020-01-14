<?php namespace App\Models;

use CodeIgniter\Model;

class MarketingModel extends Model
{
    protected $table = "marketing";
    protected $primaryKey = "ID";
    protected $allowedFields = ['NOME','AGE','SALARY'];
    protected $returnType = 'App\entities\marketing';
}