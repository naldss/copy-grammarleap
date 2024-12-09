<?php

namespace App\Http\Controllers;
use App\Models\UserQuizScore;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\ClassicStudy;
use App\Models\ClassicStudyQuiz;


class ClassicStudyController extends Controller
{
    public function classicStudyPage(Request $request)
    {
        if (Auth::check()) {
            $user = Auth::user();
            $allContent = ClassicStudy::orderBy('sequence_num')->get();
            $quizzes = ClassicStudyQuiz::all();

            return view('classic_study.cs_page', compact('user', 'allContent', 'quizzes'));
        } else {
            return redirect('/');
        }
    }

    public function details($id)
    {
        // Fetch the content item by ID
        $content = ClassicStudy::findOrFail($id);
        return view('classic_study.cs-content', compact('content'));
    }






    public function classicStudyEdit(Request $request)
    {
        if (Auth::check()) {
            $user = Auth::user();
            $allContent = ClassicStudy::orderBy('sequence_num')->get();

            return view('classic_study.cs_admin_access', compact('user', 'allContent'));
        } else {
            return redirect('/');
        }
    }

    public function deleteDataClassicStudy($id)
    {
        $content = ClassicStudy::find($id);

        if ($content) {
            if ($content->image) {
                \Storage::disk('public')->delete($content->image);
            }
            $content->delete();
            return redirect()->route('classicstudyedit')->with('success', 'Topic deleted successfully!');
        }
    }

    public function showAddForm()
    {
        return view('classic_study.add-edit');
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
                // Check if the row has enough columns
                if (count($row) < 5) { // Adjust this number based on your expected column count
                    continue; // Skip this row or handle it as needed
                }

                // Clean definition to remove invalid characters
                $definition = isset($row[3]) ? mb_convert_encoding($row[3], 'UTF-8', 'UTF-8') : null;

                ClassicStudy::create([
                    'topic_level' => $row[0],
                    'sequence_num' => (int) $row[1], // Ensure it's an integer
                    'topic_title' => $row[2],
                    'definition' => $definition,
                    'image_description' => $row[4] ?? null, // Handle image description if present
                ]);
            }

            return redirect()->route('classicstudyedit')->with('success', 'Classic Studies added successfully from CSV!');
        } else {
            // Validate normal input fields if no CSV is uploaded
            $validatedData = $request->validate([
                'topic_level' => 'required|string',
                'sequence_num' => 'required|integer',
                'topic_title' => 'required|string|max:255',
                'definition' => 'required|string',
                'image_description' => 'nullable|string',
                'image' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048',
            ]);

            if ($request->hasFile('image')) {
                $imagePath = $request->file('image')->store('topic_images', 'public');
                $validatedData['image'] = $imagePath;
            }

            ClassicStudy::create($validatedData);

            return redirect()->route('classicstudyedit')->with('success', 'Classic Study added successfully!');
        }
    }

    public function csvUploadCSContent()
    {
        if (Auth::check()) {
            $user = Auth::user();
            $allContent = ClassicStudy::orderBy('sequence_num')->get();

            return view('classic_study.cs_admin_add_cs_content_csv', compact('user', 'allContent'));
        } else {
            return redirect('/');
        }
    }


    public function edit($id)
    {
        $classicStudy = ClassicStudy::findOrFail($id);
        return view('classic_study.add-edit', compact('classicStudy'));
    }

    public function update(Request $request, $id)
    {
        $classicStudy = ClassicStudy::findOrFail($id);

        // Validate the request
        $validatedData = $request->validate([
            'topic_level' => 'required|string',
            'sequence_num' => 'required|integer',
            'topic_title' => 'required|string|max:255',
            'definition' => 'required|string',
            'image_description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('topic_images', 'public');
            $validatedData['image'] = $imagePath;
        }

        // Update the ClassicStudy record
        $classicStudy->update($validatedData);

        return redirect()->route('classicstudyedit')->with('success', 'Classic Study updated successfully!');
    }
}
