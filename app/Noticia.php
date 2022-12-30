<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Noticia extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'titulo', 'descricao', 'conteudo', 'publicado', 'slug', 'id_categoria'
    ];
}
