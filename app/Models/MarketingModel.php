<?php namespace App\Models;

use CodeIgniter\Model;

class MarketingModel extends Model
{
    protected $table = "marketing";

    protected $primaryKey = "ID";

    protected $allowedfields = ['NOME','AGE','SALARY'];

    protected $returntype = 'App\entities\marketing';


}