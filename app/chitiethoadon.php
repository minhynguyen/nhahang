<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class chitiethoadon extends Model
{
    public    $timestamps   = false;

    protected $table        = 'chitiethoadon';
    protected $fillable     = ['cthd_soluong', 'cthd_dongia'];
    protected $guarded      = ['ma_ma', 'hd_ma'];

    protected $primaryKey   = ['ma_ma', 'hd_ma'];
    public    $incrementing = false;
}
