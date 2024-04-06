<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SelectDish extends Model
{

    use HasFactory;
    protected $table = 'selectdish';
    protected $fillable = ['name', 'email', 'dish_name', 'created_at', 'updated_at'];
}
