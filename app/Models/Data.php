<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Data extends Model
{
    use HasFactory;

    protected $table = 'tb_rs';

    protected $fillable = ['nama_rs','foto_rs', 'latlng','tipe_rs'];

    public $timestamps = false;


}