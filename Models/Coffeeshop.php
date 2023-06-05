<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coffeeshop extends Model
{
    use HasFactory;
    protected $table = 'coffeeshop';
    protected $primaryKey = 'id_coffeeshop';
    public $incrementing = true;
    protected $fillable = ['nama', 'alamat'];
    public $timestamps = false;
}
