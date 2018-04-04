<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class nhanvien extends Model
{
    public    $timestamps   = false;

    protected $table        = 'nhanvien';
    protected $fillable     = ['nv_ten', 'nv_diachi', 'nv_sdt', 'nv_email', 'nv_taomoi', 'nv_capnhat', 'nv_trangthai'];
    protected $guarded      = ['nv_ma'];

    protected $primaryKey   = 'nv_ma';

    protected $dates        = ['nv_taomoi', 'nv_capnhat'];
    protected $dateFormat   = 'Y-m-d H:i:s';
}
