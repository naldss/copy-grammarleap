<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\QuizOnRoom;
use App\Models\Room;


class TakeQuizController extends Controller
{
    public function index($room_id)
    {
        // Retrieve all quizzes related to the provided room_id
        $quizzes = QuizOnRoom::where('room_id', $room_id)->get();
        $room = Room::findOrFail($room_id);

        // Return the view with quizzes data
        return view('dashboard.quiz-room.quiz-rooms.quiz-page', compact('quizzes', 'room'));
    }
}
