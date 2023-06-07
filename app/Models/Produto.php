<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Produto extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'produto';

    protected $fillable = [
        'nome',
        'preco',
        'foto'
    ];

    public function pedidos()
    {
        return $this->hasMany(Produto::class, 'produto_id');
    }

}
