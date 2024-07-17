<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pendidikan extends Model
{
    use HasFactory;
    protected $table = "pendidikan";
    protected $fillable = ['judul','tipe','tgl_mulai','tgl_akhir','info1',
                            'info2','info3','isi'];
}
