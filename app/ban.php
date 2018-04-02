<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ban extends Model
{
    public    $timestamps   = false;

    protected $table        = 'ban';
    protected $fillable     = ['b_ten', 'b_taomoi', 'b_capnhat', 'b_trangthai'];
    protected $guarded      = ['b_ma'];

    protected $primaryKey   = 'b_ma';

    protected $dates        = ['b_taomoi', 'b_capnhat'];
    protected $dateFormat   = 'Y-m-d H:i:s';
}
