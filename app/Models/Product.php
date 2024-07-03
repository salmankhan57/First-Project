<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table="table_products";
    protected $id="id";
    protected $fillable= [
        'p_name',
        'p_price',
        'p_des',
        'p_image',
    ];
}
