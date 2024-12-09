<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\UserMission;
use App\Models\Mission;
use App\Models\User;
use App\Models\ClassicStudyQuiz;
use App\Models\UserQuizScore;
use Carbon\Carbon;
use App\Models\Room;
use App\Models\UsersOnRoom;




class DashboardController extends Controller
{
    public function index(Request $request)
    {
        if (Auth::check()) {
            $user = Auth::user();
            $userId = $user->id;
            $totalQuizzes = ClassicStudyQuiz::count();
            $userTotalQuizScores = UserQuizScore::where('user_id', $userId)->sum('score');
            if ($totalQuizzes == 0) {
                $quizzesCompletion = 0;
            } else {
                $quizzesCompletion = number_format(($userTotalQuizScores / $totalQuizzes) * 100, 0);
            }


            $usersByrankPOSH = User::orderBy('PosH_total', 'desc')->take(10)->get();
            $usersByrankSB = User::orderBy('SB_total', 'desc')->take(10)->get();

            // Fetch rooms the logged-in user is assigned to (from the 'users_on_rooms' table)
            $userRooms = UsersOnRoom::where('user_id', auth()->id())->pluck('room_id'); // Get the room IDs assigned to the user

            // Fetch rooms with null passcode or where the user is assigned to the room
            $rooms = Room::whereNull('passcode')
                ->orWhereIn('room_id', $userRooms) // Rooms where the user is assigned
                ->orWhere('creator_id', auth()->id()) // Rooms where the logged-in user is the creator
                ->orderByRaw('creator_id = ? DESC', [auth()->id()])  // Rooms where the logged-in user is the creator
                ->orderByRaw('FIND_IN_SET(room_id, ?) DESC', [implode(',', $userRooms->toArray())]) // Rooms where the logged-in user is assigned (if not creator)
                ->orderBy('passcode', 'asc') // Rooms with null passcode will appear last
                ->get();

            $today = Carbon::today();

            // Retrieve today's missions for the user
            $userMissions = UserMission::where('user_id', $userId)
                ->where('date', $today)
                ->with('mission')
                ->get();

            // If no missions are found for today, assign new ones
            if ($userMissions->isEmpty()) {
                $missions = Mission::all();
                foreach ($missions as $mission) {
                    UserMission::create([
                        'user_id' => $userId,
                        'mission_id' => $mission->id,
                        'completed' => false,
                        'date' => $today,
                    ]);
                }

                // Reload the missions after assignment
                $userMissions = UserMission::where('user_id', $userId)
                    ->where('date', $today)
                    ->with('mission')
                    ->get();
            }

            return view('dashboard.admin_dashboard', compact('user', 'rooms', 'userMissions', 'quizzesCompletion', 'usersByrankPOSH', 'usersByrankSB'));
        } else {
            return redirect('/');
        }
    }

    public function badgesShow()
    {
        if (Auth::check()) {
            $user = Auth::user();
            return view('dashboard.badges', compact('user'));
        } else {
            return redirect('/');
        }
    }
}
