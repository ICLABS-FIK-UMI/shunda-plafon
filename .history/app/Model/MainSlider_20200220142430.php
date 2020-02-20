<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class MainSlider extends Model
{
   protected $table = 'main_slider';
   protected $fillable = ['caption','url','updated_at','create_at','slug'];
}
