<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    use HasFactory;
    public $table='empleado';
    public $timestamps = false;
    
    public $primaryKey='idPrestamo';
    

}
