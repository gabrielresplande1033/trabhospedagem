<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    protected $table = 'hotel';

    protected $fillable = [
        'nome',
        'nota',
        'endereco',
        'descricao'
    ];

//    public function postoDeSaude()
//    {
//        return $this->belongsTo(PostoDeSaude::class, 'id_posto_saude');
//    }
//
//    public function vacina()
//    {
//        return $this->belongsTo(Vacina::class, 'id_vacina');
//    }
}
