<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class profile extends Model
{
    //jika profile dia pakai 's' protected $table = 'profile';
    protected $fillable= ['nama','nik','alumni','nik','alamat','tgl_lahir','agama','deskripsi'];
}
