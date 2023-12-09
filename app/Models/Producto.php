<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;
    public $table='producto';
    public $timestamps = false;
    public $primaryKey= 'idProducto';
}
