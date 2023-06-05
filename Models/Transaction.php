<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;
    protected $table = 'transaction';
    protected $primaryKey = 'id_transaction';
    public $incrementing = true;
    protected $fillable = ['nama', 'barang', 'tipepemesanan','tipepembayaran','ttlharga'];
    public $timestamps = false;
}
