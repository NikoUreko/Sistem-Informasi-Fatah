<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employer extends Model
{
    use HasFactory;
    protected $table = 'employer';
    protected $primaryKey = 'id_employer';
    public $incrementing = true;
    protected $fillable = ['nama', 'alamat', 'umur'];
    public $timestamps = false;
}
