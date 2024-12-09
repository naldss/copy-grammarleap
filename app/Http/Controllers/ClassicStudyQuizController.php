<?php
namespace App\Http\Controllers;

use App\Models\ClassicStudyQuiz;
use Illuminate\Http\Request;
use App\Models\ClassicStudy;
use Illuminate\Support\Facades\Auth;


class ClassicStudyQuizController extends Controller
{
    public function index()
    {
        $quizzes = ClassicStudyQuiz::all();
        $allContent = ClassicStudy::all();
        return view('classic_study.cs_admin_quizzes', compact('quizzes', 'allContent'));
    }

    public function csQuiz($id) {
        $quizzes = ClassicStudyQuiz::where('topic_id', $id)->get();
        return view('classic_study.cs-quiz', compact('quizzes'));
    }

    public function csvUploadQuizContent()
    {
        if (Auth::check()) {

            return view('classic_study.cs-quiz-csv');
        } else {
            return redirect('/');
        }
    }






    public function create()
    {
        $allContent = ClassicStudy::all();
        return view('classic_study.cs_admin_quiz_create', compact( 'allContent'));
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
            // Clean and assign values from the CSV row
            ClassicStudyQuiz::create([
                'topic_id' => (int) $row[0], // Ensure it's an integer
                'question' => $row[1],
                'choice_1' => $row[2],
                'choice_2' => $row[3],
                'choice_3' => $row[4],
                'choice_4' => $row[5],
                'correct_choice' => $row[6],
            ]);
        }

        return redirect()->route('classic_study_quiz.index')->with('success', 'Quizzes created successfully from CSV!');
    } else {
        // Validate normal input fields if no CSV is uploaded
        $validated = $request->validate([
            'topic_id' => 'required|integer',
            'question' => 'required|string|max:255',
            'choice_1' => 'required|string|max:255',
            'choice_2' => 'required|string|max:255',
            'choice_3' => 'required|string|max:255',
            'choice_4' => 'required|string|max:255',
            'correct_choice' => 'required|string|max:255',
        ]);

        ClassicStudyQuiz::create($validated);

        return redirect()->route('classic_study_quiz.index')->with('success', 'Quiz created successfully.');
    }
}

    public function edit(ClassicStudyQuiz $classicStudyQuiz)
    {
        $allContent = ClassicStudy::all();
        return view('classic_study.cs_admin_quiz_edit', compact('classicStudyQuiz', 'allContent'));
    }

    public function update(Request $request, ClassicStudyQuiz $classicStudyQuiz)
    {
        $validated = $request->validate([
            'topic_id' => 'required|integer',
            'question' => 'required|string|max:255',
            'choice_1' => 'required|string|max:255',
            'choice_2' => 'required|string|max:255',
            'choice_3' => 'required|string|max:255',
            'choice_4' => 'required|string|max:255',
            'correct_choice' => 'required|string|max:255',
        ]);

        $classicStudyQuiz->update($validated);

        return redirect()->route('classic_study_quiz.index')->with('success', 'Quiz updated successfully.');
    }

    public function destroy(ClassicStudyQuiz $classicStudyQuiz)
    {
        $classicStudyQuiz->delete();

        return redirect()->route('classic_study_quiz.index')->with('success', 'Quiz deleted successfully.');
    }
}
