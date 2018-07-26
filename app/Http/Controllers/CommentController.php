<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Team;
use App\Comment;

class CommentController extends Controller
{
    public function store(Team $team)
    {   
        $this->validate(request(),[
            'content' => 'required|min:10'
        ]);

        Comment::create([
            'content' => request('content'),
            'user_id' => auth()->user()->id,
            'team_id' => $team->id
        ]);
        return redirect('/teams/'.$team->id);
    }
}
