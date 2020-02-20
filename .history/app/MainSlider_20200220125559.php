<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MainSlider extends Model
{
    protected $table = 'main_slider';
    protected fillable = ['caption','url']
}
