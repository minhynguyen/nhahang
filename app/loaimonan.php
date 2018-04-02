<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class loaimonan extends Model
{
    public    $timestamps   = false;

    protected $table        = 'loaimonan';
    protected $fillable     = ['lma_ten', 'lma_taomoi', 'lma_capnhat', 'lma_trangthai'];
    protected $guarded      = ['lma_ma'];

    protected $primaryKey   = 'lma_ma';

    protected $dates        = ['lma_taomoi', 'lma_capnhat'];
    protected $dateFormat   = 'Y-m-d H:i:s';
}
