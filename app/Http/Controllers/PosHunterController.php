<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\POSHunter;
use Illuminate\Support\Facades\Auth;

class PosHunterController extends Controller
{
    /**
     * Display the POS Hunter game.
     *
     * @return \Illuminate\View\View
     */
    public function displayGame()
    {
        if (Auth::check()) {
            $sentences = $this->fetchPosHSentences();
            return view('games.pos-hunter-game', compact('sentences'));
        } else {
            return view('home');
        }
    }
    public function fetchPosHSentences()
    {
        $sentences = POSHunter::inRandomOrder()->take(5)->get();

        return $sentences;
    }
    public function addPoints(Request $request)
    {
        $user = $request->user();
        // Get the score from the request
        $score = $request->input('score');

        $user->PosH_total += $score;
        $user->save();

        return response()->json(['message' => 'Points added successfully'], 200);
    }



}
