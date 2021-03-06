<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Player;


class PlayersController extends Controller
{
    public function show($id)
    {
        $player = Player::with('team')->where('id',$id)->first();
        return view('/player', compact('player'));
    }
}
