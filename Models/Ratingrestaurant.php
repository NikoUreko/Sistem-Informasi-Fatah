<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ratingrestaurant extends Model
{
    use HasFactory;
    protected $table = 'ratingrestaurant';
    protected $primaryKey = 'id_ratingrestaurant';
    public $incrementing = true;
    protected $fillable = ['penilaian', 'ulasan'];
    public $timestamps = false;
}
