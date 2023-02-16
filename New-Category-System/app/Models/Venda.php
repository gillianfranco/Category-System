<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venda extends Model
{
    use HasFactory;

    protected $guarded = ['id', 'prodNome', 'catId', 'subcatId', 'prodId', 'qtdeVendida', 'clienteNome', 'created_at', 'updated_at'];
}
