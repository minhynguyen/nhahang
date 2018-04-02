<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class nhanvien extends Model
{
    public    $timestamps   = false;

    protected $table        = 'nhanvien';
    protected $fillable     = ['nv_ten', 'nv_diachi', 'nv_sdt', 'nv_email', 'lma_taomoi', 'lma_capnhat', 'lma_trangthai'];
    protected $guarded      = ['nv_ma'];

    protected $primaryKey   = 'nv_ma';

    protected $dates        = ['lma_taomoi', 'lma_capnhat'];
    protected $dateFormat   = 'Y-m-d H:i:s';
}
