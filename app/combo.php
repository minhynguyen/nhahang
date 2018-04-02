<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class combo extends Model
{
  	public    $timestamps   = false;

    protected $table        = 'combo';
    protected $fillable     = ['cb_ten', 'cb_mota', 'cb_taomoi', 'cb_capnhat', 'cb_trangthai'];
    protected $guarded      = ['cb_ma'];

    protected $primaryKey   = 'cb_ma';

    protected $dates        = ['cb_taomoi', 'cb_capnhat'];
    protected $dateFormat   = 'Y-m-d H:i:s';
}
