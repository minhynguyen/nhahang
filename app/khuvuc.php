<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class khuvuc extends Model
{
    public    $timestamps   = false;

    protected $table        = 'khuvuc';
    protected $fillable     = ['kv_ten', 'kv_taomoi', 'kv_capnhat', 'kv_trangthai'];
    protected $guarded      = ['kv_ma'];

    protected $primaryKey   = 'kv_ma';

    protected $dates        = ['kv_taomoi', 'kv_capnhat'];
    protected $dateFormat   = 'Y-m-d H:i:s';
}
