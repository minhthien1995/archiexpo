<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $table = 'menu';
    protected $guarded = [];
    public $timestamps = true;
}
