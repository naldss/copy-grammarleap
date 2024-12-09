<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\SentenceSorterSentence;


class SentenceSorterController extends Controller
{
    public function displayGame()
    {
        if (Auth::check()) {
            $sentences = $this->fetchSSSentence();
            return view('games.sentence-sorter-game', compact('sentences'));
        } else {
            return redirect()->route('home');
        }
    }
    public function fetchSSSentence()
    {
        $types = ['declarative', 'interrogative', 'imperative', 'exclamatory'];

        $sentences = collect();

        foreach ($types as $type) {
            $sentence = SentenceSorterSentence::where('type', $type)
                ->inRandomOrder()
                ->first();

            if ($sentence) {
                $sentences->push($sentence);
            }
        }

        return $sentences;
    }

    public function addPoints(Request $request)
    {
        $user = $request->user();
        // Get the score from the request
        $score = $request->input('score');

        $user->SS_total += $score;
        $user->save();

        return response()->json(['message' => 'Points added successfully'], 200);
    }
}
