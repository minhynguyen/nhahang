<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class monan extends Model
{
    public    $timestamps   = false;

    protected $table        = 'monan';
    protected $fillable     = ['ma_mota', 'ma_hinhanh', 'ma_dongia', 'ma_taomoi', 'ma_capnhat', 'ma_trangthai'];
    protected $guarded      = ['ma_ma'];

    protected $primaryKey   = 'ma_ma';

    protected $dates        = ['ma_taomoi', 'ma_capnhat'];
    protected $dateFormat   = 'Y-m-d H:i:s';
}
