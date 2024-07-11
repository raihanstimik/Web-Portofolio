<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class form extends Model
{
    use HasFactory;
    protected $table = "form";
    protected $fillable = ['nama','provinsi','email','isi','posisi','perusahaan',
                            'tgl_mulai','tgl_akhir','jobdesk','sekolah','jurusan',
                            'tgl_mulai2','tgl_akhir2','ipk','isi2','softskill',
                            'hardskill','bahasa'];
}
