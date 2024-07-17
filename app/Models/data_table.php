<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class data_table extends Model
{
    use HasFactory;
    protected $table = 'datatable';

    // The attributes that are mass assignable.
    protected $fillable = [
        'nama',
        'provinsi',
        'email',
        'isi',
        'posisi',
        'perusahaan',
        'tgl_masuk',
        'tgl_keluar',
        'jobdesk',
        'sekolah',
        'jurusan',
        'tgl_mulai',
        'tgl_akhir',
        'ipk',
        'softskill',
        'hardskill',
        'bahasa',
    ];

    // If you want to handle the date columns as Carbon instances
    protected $dates = [
        'tgl_masuk',
        'tgl_keluar',
        'tgl_mulai',
        'tgl_akhir',
    ];
}
