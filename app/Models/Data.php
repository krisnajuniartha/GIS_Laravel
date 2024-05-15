<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Data extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_rs'; // Primary key di tabel Anda

    protected $table = 'tb_rs';

    protected $fillable = ['nama_rs','foto_rs', 'latlng','tipe_rs'];

    public $timestamps = false;


}