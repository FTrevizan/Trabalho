<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Carteira extends Model
{
    protected $table = 'carteiras';
    protected $fillable = ['nome', 'saldo', 'imagem', 'user_id'];

  
}
