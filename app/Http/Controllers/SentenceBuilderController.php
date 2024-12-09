<?php

namespace App\Http\Controllers;

use App\Models\SentenceBuilder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class SentenceBuilderController extends Controller
{
    public function showGame()
    {
        $user = Auth::user();

        $contentLevel = "";

        if ($user->SB_total < 600) {
            $contentLevel = "easy";
        } elseif ($user->SB_total < 1200) {
            $contentLevel = "medium";
        } else {
            $contentLevel = "hard";
        }

        // Fetch a random sentence to present to the user
        $correctSentence = SentenceBuilder::where('difficulty', $contentLevel)
            ->inRandomOrder()
            ->first()->sentence;
        $brokenSentence = $this->introduceErrors($correctSentence);

        $explodedBrokenSentence = explode(' ', $brokenSentence['corrupted_sentence']);
        $numberOfWords = count(explode(' ', $correctSentence));

        return view('games.sentence-builder-game', compact('user', 'correctSentence', 'explodedBrokenSentence', 'numberOfWords'));
    }

    public function addPointsSentenceBuilder(Request $request)
    {
        $user = $request->user();
        // Get the score from the request
        $score = $request->input('score');

        $user->SB_total += $score;
        $user->save();

        // You can return a response if needed
        return response()->json(['message' => 'Points added successfully'], 200);
    }

    public function minusPointsSentenceBuilder(Request $request)
    {
        $user = $request->user();
        // Get the score from the request
        $incorrect = $request->input('incorrect');

        $user->SB_total -= $incorrect;
        if ($user->SB_total < 1) {
            $user->SB_total = 0;
        }
        $user->save();

        // You can return a response if needed
        return response()->json(['message' => 'Points added successfully'], 200);
    }

    private function introduceErrors($sentence)
    {
        // Split the sentence into words
        $words = explode(' ', $sentence);
        $errors = [];

        // Introduce capitalization errors for any word in the sentence
        foreach ($words as &$word) {
            // Randomly decide to change capitalization
            if (rand(0, 1) === 1) {
                if (ctype_upper($word[0])) {
                    $word = strtolower($word);
                } else {
                    $word = ucfirst($word);
                }
            }
        }

        // Introduce pluralization errors for words ending in 's'
        foreach ($words as &$word) {
            if (substr($word, -1) !== '.' && substr($word, -1) !== ',') {
                if (substr($word, -1) === 's' && rand(0, 1) === 1) {
                    $word = rtrim($word, 's');
                } elseif (!str_ends_with($word, 's') && rand(0, 1) === 1) {
                    $word .= 's';
                }
            }
        }

        foreach ($words as &$word) {
            if (substr($word, -1) === '.' && rand(0, 1) === 1) {
                $word = rtrim($word, '.') . '';
            } elseif (substr($word, -1) !== '.' && rand(0, 5) === 1) {
                $word = $word .= '.';
            }
        }



        // Rebuild the sentence from the modified words
        $corruptedSentence = implode(' ', $words);

        return [
            'corrupted_sentence' => $corruptedSentence,
            'errors' => $errors
        ];
    }

    public function csvUploadSBContent()
    {
        if (Auth::check()) {

            return view('games.adminAccessGames.csv-sentence-builder');
        } else {
            return redirect('/');
        }
    }


    public function index()
    {
        $sentenceBuilder = SentenceBuilder::all();
        return view('games.adminAccessGames.SBTable', compact('sentenceBuilder'));
    }

    public function create()
    {
        $sentenceBuilder = SentenceBuilder::all();
        return view('games.adminAccessGames.SBAddEdit', compact('sentenceBuilder'));
    }

    public function store(Request $request)
    {
        // Check if a CSV file is uploaded
        if ($request->hasFile('csv_file')) {
            $file = $request->file('csv_file');

            // Validate that the file is a CSV
            $request->validate([
                'csv_file' => 'required|file|mimes:csv,txt|max:2048',
            ]);

            // Read the CSV file
            $data = array_map('str_getcsv', file($file->getRealPath()));
            // Skip the header row and prepare the data for insertion
            array_shift($data); // Remove the header row

            foreach ($data as $row) {
                // Ensure that the row has the expected number of columns
                if (count($row) < 2) {
                    continue; // Skip any row that doesn't have enough data
                }

                // Clean the sentence and difficulty to remove invalid characters
                $sentence = isset($row[0]) ? mb_convert_encoding($row[0], 'UTF-8', 'UTF-8') : null;
                $difficulty = isset($row[1]) ? mb_convert_encoding($row[1], 'UTF-8', 'UTF-8') : null;

                // Create a new SentenceBuilder entry
                SentenceBuilder::create([
                    'sentence' => $sentence,
                    'difficulty' => $difficulty,
                ]);
            }

            return redirect()->route('sentence_builder.index')->with('success', 'Sentence Builder content created successfully from CSV!');
        } else {
            // Validate normal input fields if no CSV is uploaded
            $validated = $request->validate([
                'sentence' => 'required|string',
                'difficulty' => 'required|string|max:255',
            ]);

            // Create a new SentenceBuilder entry
            SentenceBuilder::create($validated);

            return redirect()->route('sentence_builder.index')->with('success', 'Sentence Builder content created successfully.');
        }
    }

    public function edit(SentenceBuilder $SentenceBuilder)
    {
        return view('games.adminAccessGames.SBAddEdit', compact('SentenceBuilder'));
    }


    public function update(Request $request, SentenceBuilder $SentenceBuilder)
    {
        $validated = $request->validate([
            'sentence' => 'required|string',
            'difficulty' => 'required|string|max:255',
        ]);

        $SentenceBuilder->update($validated);

        return redirect()->route('sentence_builder.index')->with('success', 'Sentence Builder content created successfully.');
    }

    public function destroy(SentenceBuilder $SentenceBuilder)
    {
        $SentenceBuilder->delete();

        return redirect()->route('sentence_builder.index')->with('success', 'Sentence Builder content deleted successfully.');
    }

}
