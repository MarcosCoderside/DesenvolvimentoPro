<?php namespace App\Models;

use CodeIgniter\Model;

class UsersModel extends Model
{
    protected $table = "users";
    protected $primaryKey = "ID"; 
    protected $allowedFields = ['NOME', 'SOBRENOME','SALARY','FUNCAO'];
    protected $returnType = 'App\entities\users';
}