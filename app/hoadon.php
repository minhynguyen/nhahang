<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class hoadon extends Model
{
    public    $timestamps   = false;

    protected $table        = 'hoadon';
    protected $fillable     = ['kh_ma', 'nv_ma', 'hd_tongtien', 'hd_taomoi', 'hd_capnhat', 'hd_trangthai'];
    protected $guarded      = ['hd_ma'];

    protected $primaryKey   = 'hd_ma';

    protected $dates        = ['hd_taomoi', 'hd_capnhat'];
    protected $dateFormat   = 'Y-m-d H:i:s';
}
