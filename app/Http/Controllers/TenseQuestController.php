<?php

namespace App\Http\Controllers;

use Auth;
use App\Models\TenseQuestSentence;
use Illuminate\Http\Request;

class TenseQuestController extends Controller
{
    public function displayGame()
    {
        if (Auth::check()) {
            $sentences = $this->fetchTQSentence();
            return view('games.tense-quest-game', compact('sentences'));
        } else {
            return redirect()->route('home');
        }
    }
    public function fetchTQSentence()
    {
        $sentences = TenseQuestSentence::inRandomOrder()->take(3)->get();

        return $sentences;
    }

    public function addPoints(Request $request)
    {
        $user = $request->user();
        // Get the score from the request
        $score = $request->input('score');

        $user->TC_total += $score;
        $user->save();

        return response()->json(['message' => 'Points added successfully'], 200);
    }
}
