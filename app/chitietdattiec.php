<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class chitietdattiec extends Model
{
    public    $timestamps   = false;

    protected $table        = 'chitietdattiec';
    protected $fillable     = ['ma_soluong', 'pdt_coc'];
    protected $guarded      = ['ma_ma', 'pdt_ma'];

    protected $primaryKey   = ['ma_ma', 'pdt_ma'];
    public    $incrementing = false;
}
