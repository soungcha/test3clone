<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class Talent extends Model
{
    //
    protected $table="t_talents";
    protected $primaryKey = "linkmd5id";
    public $timestamps = false;
    protected $guarded=[];
}
