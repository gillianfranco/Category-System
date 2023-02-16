<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    use HasFactory;

    protected $guarded = ['id', 'catId', 'subcatId', 'prodNome', 'qtdeEmEstoque', 'qtdeVendida', 'created_at', 'updated_at'];
}
