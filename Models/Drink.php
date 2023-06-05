<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Drink extends Model
{
    use HasFactory;
    protected $table = 'drink';
    protected $primaryKey = 'id_drink';
    public $incrementing = true;
    protected $fillable = ['nama', 'diskon', 'harga'];
    public $timestamps = false;
}
