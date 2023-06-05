<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    use HasFactory;
    protected $table = 'food';
    protected $primaryKey = 'id_food';
    public $incrementing = true;
    protected $fillable = ['nama', 'diskon', 'harga'];
    public $timestamps = false;
}

