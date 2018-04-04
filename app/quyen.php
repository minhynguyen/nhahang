<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class quyen extends Model
{
    const CREATED_AT ='q_taomoi';
    const UPDATED_AT ='q_capnhat';
    
    protected $table = 'quyen';
    protected $fillable = ['q_ten', 'q_diengiai', 'q_taomoi', 'q_capnhat', 'q_trangthai'];
    protected $guarded = ['q_ma'];
    protected $primaryKey = 'q_ma';
    protected $dates =['q_taomoi', 'q_capnhat'];
    protected $dateFormat = 'Y-m-d H:i:s';
}
