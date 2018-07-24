<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
   protected function published()
   {
       return self::get();
   }
   public function player()
   {
       return $this->hasMany(Player::class);
   }
}
