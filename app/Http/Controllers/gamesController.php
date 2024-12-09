<?php

namespace App\Http\Controllers;

use App\Models\PosHunter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\SentenceBuilder;
use Symfony\Component\Process\Exception\ProcessFailedException;
use Symfony\Component\Process\Process;
use Illuminate\Support\Facades\DB;

class gamesController extends Controller
{
    public function PosHunterGame()
    {
        if (Auth::check()) {
            // Get a random sentence from the database
            $user = Auth::user();

            $contentLevel = "";

            if ($user->PosH_total < 600) {
                $contentLevel = "easy";
            } elseif ($user->PosH_total < 1200) {
                $contentLevel = "medium";
            } else {
                $contentLevel = "hard";
            }

            $randomSentence = POSHunter::where('difficulty', $contentLevel)
                ->inRandomOrder()
                ->first();
            $explodeSentence = explode(' ', $randomSentence->sentence);

            return view('games.poshunter', compact('randomSentence', 'explodeSentence', 'user'));
        } else {
            return redirect('/');
        }

    }

    public function addPointsPosHunter(Request $request)
    {
        $user = $request->user();
        // Get the score from the request
        $score = $request->input('score');

        $user->PosH_total += $score;
        $user->save();

        // You can return a response if needed
        return response()->json(['message' => 'Points added successfully'], 200);
    }
    public function minusPointsPosHunter(Request $request)
    {

        $user = $request->user();
        // Get the score from the request
        $incorrect = $request->input('incorrect');

        $user->PosH_total -= $incorrect;
        if ($user->PosH_total < 1) {
            $user->PosH_total = 0;
        }
        $user->save();

        // You can return a response if needed
        return response()->json(['message' => 'Points added successfully'], 200);
    }


    public function csvUploadPOSHContent()
    {
        if (Auth::check()) {

            return view('games.adminAccessGames.csv-poshunter');
        } else {
            return redirect('/');
        }
    }


    public function index()
    {
        $poshunter = PosHunter::all();
        return view('games.adminAccessGames.posHunterTable', compact('poshunter'));
    }

    public function create()
    {
        $poshunter = PosHunter::all();
        return view('games.adminAccessGames.posHunterAddEdit', compact('poshunter'));
    }

    public function store(Request $request)
    {
        // Check if a CSV file is uploaded
        if ($request->hasFile('csv_file')) {
            // Validate that the file is a CSV
            $request->validate([
                'csv_file' => 'required|file|mimes:csv,txt|max:2048',
            ]);

            // Read the CSV file
            $data = array_map('str_getcsv', file($request->file('csv_file')->getRealPath()));
            // Skip the header row and prepare the data for insertion
            array_shift($data); // Remove the header row

            foreach ($data as $row) {
                // Adjust the following indices based on your CSV structure
                PosHunter::create([
                    'sentence' => $row[0],      // Adjust according to your CSV structure
                    'difficulty' => $row[1],    // Adjust according to your CSV structure
                ]);
            }

            return redirect()->route('pos_hunter.index')->with('success', 'POS Hunter content added successfully from CSV!');
        } else {
            // Validate normal input fields if no CSV is uploaded
            $validated = $request->validate([
                'sentence' => 'required|string',
                'difficulty' => 'required|string|max:255',
            ]);

            PosHunter::create($validated);

            return redirect()->route('pos_hunter.index')->with('success', 'POS Hunter content created successfully.');
        }
    }

    public function edit(PosHunter $PosHunter)
    {
        return view('games.adminAccessGames.posHunterAddEdit', compact('PosHunter'));
    }


    public function update(Request $request, PosHunter $PosHunter)
    {
        $validated = $request->validate([
            'sentence' => 'required|string',
            'difficulty' => 'required|string|max:255',
        ]);

        $PosHunter->update($validated);

        return redirect()->route('pos_hunter.index')->with('success', 'POS Hunter content created successfully.');
    }

    public function destroy(PosHunter $PosHunter)
    {
        $PosHunter->delete();

        return redirect()->route('pos_hunter.index')->with('success', 'POS Hunter content deleted successfully.');
    }



}