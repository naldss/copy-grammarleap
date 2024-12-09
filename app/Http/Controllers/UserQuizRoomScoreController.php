<?php

namespace App\Http\Controllers;
use App\Models\UserQuizRoomScore;


use Illuminate\Http\Request;

class UserQuizRoomScoreController extends Controller
{

    public function store(Request $request)
    {
        $request->validate([
            'room_id' => 'required|exists:rooms,room_id',
            'user_id' => 'required|exists:users,id',
            'score' => 'required|integer',
        ]);

        // Create or update the quiz score
        $userQuizRoomScore = UserQuizRoomScore::updateOrCreate(
            ['room_id' => $request->room_id, 'user_id' => $request->user_id],
            ['score' => $request->score]
        );

        return response()->json($userQuizRoomScore, 201);
    }

}
