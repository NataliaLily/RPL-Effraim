<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categori extends Model
{
    use HasFactory;

    protected $table = 'categoris';

    protected $primaryKey = 'id';

    //model ini bisa di tambah tambah lagi
}
