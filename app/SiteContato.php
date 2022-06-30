<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SiteContato extends Model
{
    protected $fillable = ['nome', 'telefone', 'email', 'motivo_contato', 'mensagem']; //isso permite informar quais atributos pode ser preenchidos em massa
}
