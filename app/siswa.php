<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class siswa extends Model
{
    protected $table = 'siswas';
    protected $fillable = ['nis','nama','tempat_lahir','tanggal_lahir','alamat','cita_cita','hobi'];
}
