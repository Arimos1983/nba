<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
   protected function published()
   {
       return self::get();
   }
   public function players()
   {
       return $this->hasMany(Player::class);
   }
   public function comments()
   {
       return $this->hasMany(Comment::class);
   }
}
