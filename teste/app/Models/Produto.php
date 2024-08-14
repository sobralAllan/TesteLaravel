<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    use HasFactory;
    //Sempre devo especificar a tabela relacionada
    protected $table = "produtos";

}//fim da classe
