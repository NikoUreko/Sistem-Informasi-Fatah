<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    use HasFactory;
    protected $table = 'restaurant';
    protected $primaryKey = 'id_restaurant';
    public $incrementing = true;
    protected $fillable = ['nama', 'alamat'];
    public $timestamps = false;
}
