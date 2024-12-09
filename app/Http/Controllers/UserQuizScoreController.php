<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserQuizScore;

class UserQuizScoreController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required',
            'cs_topic_id' => 'required',
            'score' => 'required|integer',
            'questions_length' => 'required|integer'
        ]);

        $quizScore = UserQuizScore::updateOrCreate(
            [
                'user_id' => $request->user_id,
                'cs_topic_id' => $request->cs_topic_id,
            ],
            [
                'score' => $request->score,
                'questions_length' => $request->questions_length,
            ]
        );

        return response()->json([
            'message' => 'Score recorded successfully.',
            // 'data' => $quizScore,
        ]);
    }
}
