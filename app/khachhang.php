<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class khachhang extends Model
{
    public    $timestamps   = false;

    protected $table        = 'khachhang';
    protected $fillable     = ['kh_ten', 'kh_email', 'kh_sdt', 'kh_diachi', 'kh_taomoi', 'kh_capnhat', 'kh_trangthai'];
    protected $guarded      = ['kh_ma'];

    protected $primaryKey   = 'kh_ma';

    protected $dates        = ['kh_taomoi', 'kh_capnhat'];
    protected $dateFormat   = 'Y-m-d H:i:s';
}
