<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class phieudattiec extends Model
{
    public    $timestamps   = false;

    protected $table        = 'phieudattiec';
    protected $fillable     = ['nv_ma', 'pdt_ghichu', 'pdt_thoigian', 'pdt_taomoi', 'pdt_capnhat', 'pdt_trangthai', 'pdt_coc'];
    protected $guarded      = ['pdt_ma'];

    protected $primaryKey   = 'pdt_ma';

    protected $dates        = ['pdt_thoigian', 'pdt_taomoi', 'pdt_capnhat'];
    protected $dateFormat   = 'Y-m-d H:i:s';
}
