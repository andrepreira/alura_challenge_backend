<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Receitas extends Model
{
    protected $fillable = ['descricao','valor'];
}
