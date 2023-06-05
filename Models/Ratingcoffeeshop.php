<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ratingcoffeeshop extends Model
{
    use HasFactory;
    protected $table = 'ratingcoffeeshop';
    protected $primaryKey = 'id_ratingcoffeeshop';
    public $incrementing = true;
    protected $fillable = ['penilaian', 'ulasan'];
    public $timestamps = false;
}
