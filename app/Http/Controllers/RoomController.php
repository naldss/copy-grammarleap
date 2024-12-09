<?php

namespace App\Http\Controllers;

use App\Models\QuizOnRoom;
use App\Models\Room;
use App\Models\UserQuizRoomScore;
use App\Models\UsersOnRoom;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;

class RoomController extends Controller
{
    // Store a new room
    public function store(Request $request)
    {
        $request->validate([
            'creator_id' => 'required|exists:users,id',
            'room_name' => 'required|string|max:100',
            'room_description' => 'nullable|string',
            'passcode' => 'nullable|string|max:50',
        ]);

        $room = Room::create($request->all());
        return redirect()->route('dashboard');
    }

    public function getUserIdByEmail(Request $request)
    {
        $request->validate([
            'user_email' => 'required|email|exists:users,email',
        ]);

        $user = User::where('email', $request->user_email)->first();

        if ($user) {
            return response()->json([
                'success' => true,
                'user_id' => $user->id,  // Return the user ID
            ]);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'User not found.',
            ]);
        }
    }

    public function addUserToRoom(Request $request)
    {
        // Get the room_id and user_email from the request
        $roomId = $request->input('room_id');
        $userEmail = $request->input('user_email');

        // Find the user by email
        $user = User::where('email', $userEmail)->first();

        if (!$user) {
            // If user not found, return a failure response
            return response()->json([
                'success' => false,
                'message' => 'User not found.'

            ]);
        }

        // Check if the user is already in the room
        $userInRoom = DB::table('users_on_rooms')
            ->where('room_id', $roomId)
            ->where('user_id', $user->id)
            ->exists();

        if ($userInRoom) {
            // If the user is already added to the room, return a message
            return response()->json([
                'success' => false,
                'message' => 'User already in the room.'
            ]);
        }


        // Add the user to the room (assuming you have a pivot table for users and rooms)
        DB::table('users_on_rooms')->insert([
            'room_id' => $roomId,
            'user_id' => $user->id,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Return success response
        return response()->json([
            'success' => true,
            'message' => 'User added successfully'
        ]);
    }

    public function show($room_id)
    {
        $userId = auth()->id();
        $userQuizScore = UserQuizRoomScore::where('room_id', $room_id)
            ->where('user_id', $userId)
            ->first();
        $hasTakenQuiz = UserQuizRoomScore::where('room_id', $room_id)
            ->where('user_id', $userId)
            ->exists();
        // Retrieve the room
        // $quiz_scores = UserQuizRoomScore::where('room_id', $room_id)->get();

        $quiz_scores = UserQuizRoomScore::where('room_id', $room_id)
        ->orderBy('score', 'desc')
        ->get();






        // Get the total number of quizzes for the room
        $total_quizzes = QuizOnRoom::where('room_id', $room_id)->count();

        // Attach user details and percentage accuracy to each score
        foreach ($quiz_scores as $quiz_score) {
            $quiz_score->user = User::find($quiz_score->user_id); // Get user details
            $quiz_score->total_points = $total_quizzes; // Add total quizzes
            $quiz_score->accuracy = $total_quizzes > 0
                ? round(($quiz_score->score / $total_quizzes) * 100, 2)
                : 0; // Calculate percentage
        }

        $room = Room::findOrFail($room_id);
        $users = User::all();
        $quizzes = QuizOnRoom::where('room_id', $room_id)->get();
        // Get all users associated with the room (using the 'UsersOnRoom' pivot table)
        $users_on_room = UsersOnRoom::where('room_id', $room_id)->get();

        // Initialize an empty array to store user emails
        $userEmails = [];

        // Loop through users on the room and fetch their email
        foreach ($users_on_room as $userRoom) {
            $user = User::find($userRoom->user_id);
            if ($user) {
                $userEmails[] = $user->email;
            }
        }

        // Check if the authenticated user is the creator of the room
        if (auth()->check() && auth()->user()->id === $room->creator_id) {
            // Return the creator-specific view
            return view('dashboard.quiz-room.quiz-rooms.creator-room', compact('quiz_scores', 'total_quizzes', 'users', 'room', 'quizzes', 'users_on_room', 'userEmails'));
        } else {
            // Return the viewer-specific view
            return view('dashboard.quiz-room.quiz-rooms.viewer-room', compact('userQuizScore','hasTakenQuiz', 'quiz_scores', 'total_quizzes', 'users', 'room', 'quizzes', 'users_on_room', 'userEmails'));
        }
    }



    public function index()
    {
        if (auth()->check()) {
            return redirect()->route('dashboard');
        }

        return redirect()->route('login');
    }


    // Delete a room
    public function destroy($room_id)
    {
        $room = Room::findOrFail($room_id);
        $room->delete();

        return response()->json(null, 204);
    }

    public function createRoomPage()
    {
        return view('dashboard.quiz-room.create-room');
    }


}
