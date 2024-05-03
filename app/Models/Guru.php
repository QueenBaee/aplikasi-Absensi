<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    use HasFactory;
    protected $table = 'tb_guru';
    protected $primaryKey = 'id';
    public $incrementing = true;
    protected $fillable = ['nip','nama_guru', 'alamat', 'no_hp'];
    public $timestamps = false;
}
