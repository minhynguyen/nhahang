<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class chitietcombo extends Model
{
     public    $timestamps   = false;

    protected $table        = 'chitietcombo';
    protected $fillable     = ['cb_soluong', 'cb_gia'];
    protected $guarded      = ['ma_ma', 'cb_ma'];

    protected $primaryKey   = ['ma_ma', 'cb_ma'];
    public    $incrementing = false;
}
