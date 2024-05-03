<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Absensi extends Model
{
    use HasFactory;    
    protected $table = 'tb_absensi';
    protected $primaryKey = 'id';
    public $incrementing = true;
    protected $fillable = ['nama_guru', 'waktu','keterangan'];
    public $timestamps = false;
}
