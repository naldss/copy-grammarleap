<?php

namespace App\Http\Controllers;

use App\Models\QuizOnRoom;
use Illuminate\Http\Request;

class QuizOnRoomController extends Controller
{
    // Store a new quiz in a room
    public function store(Request $request)
    {
        $request->validate([
            'room_id' => 'required|exists:rooms,room_id',
            'question' => 'required|string',
            'choice1' => 'required|string',
            'choice2' => 'required|string',
            'choice3' => 'nullable|string',
            'choice4' => 'nullable|string',
            'answer' => 'required|string',
        ]);

        $quizOnRoom = QuizOnRoom::create($request->all());
        return redirect()->back()->with('success', 'Quiz item added successfully!');
    }

    // Get all quizzes in a room
    public function getQuizzesInRoom($room_id)
    {
        $quizzesInRoom = QuizOnRoom::where('room_id', $room_id)->get();
        return response()->json($quizzesInRoom);
    }

    // Get a single quiz by quiz_id
    public function show($quiz_id)
    {
        return QuizOnRoom::findOrFail($quiz_id);
    }

    // Delete a quiz from a room
    public function destroy($quiz_id)
    {
        $quizOnRoom = QuizOnRoom::findOrFail($quiz_id);
        $quizOnRoom->delete();

        return response()->json(null, 204);
    }
}
