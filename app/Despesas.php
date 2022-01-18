<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Despesas extends Model
{
    protected $fillable = ['descricao','valor'];
}
