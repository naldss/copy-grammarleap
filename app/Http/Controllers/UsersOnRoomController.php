<?php

namespace App\Http\Controllers;

use App\Models\UsersOnRoom;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Room;


class UsersOnRoomController extends Controller
{
    // Store a user in a room
    public function store(Request $request)
    {
        // Validate the passcode input
        $request->validate([
            'passcode' => 'required|string',  // Make sure passcode is provided
        ]);

        // Find the room by passcode
        $room = Room::where('passcode', $request->passcode)->first();

        // Check if the room exists
        if (!$room) {
            return back()->withErrors(['passcode' => 'Room does not exist.']);
        }

        // Create a new entry in the users_on_rooms table with the room_id and user_id
        $usersOnRoom = UsersOnRoom::create([
            'room_id' => $room->room_id,   // Get the room_id of the found room
            'user_id' => Auth::id(),       // Use the authenticated user's ID
        ]);

        // Return a success response (could redirect or return a message as needed)
        return redirect()->route('rooms.show', ['room' => $room->room_id])
            ->with('success', 'Successfully joined the room!');
    }

    // Get all users in a room
    public function getUsersInRoom($room_id)
    {
        $usersOnRoom = UsersOnRoom::where('room_id', $room_id)->get();
        return response()->json($usersOnRoom);
    }

    // Get all rooms a user is in
    public function getRoomsForUser($user_id)
    {
        $rooms = UsersOnRoom::where('user_id', $user_id)->get();
        return response()->json($rooms);
    }

    // Remove a user from a room
    public function destroy($room_id, $email)
    {
        // Get the user ID from the email
        $user = User::where('email', $email)->firstOrFail();
        $user_id = $user->id;

        $userOnRoom = UsersOnRoom::where('room_id', $room_id)
            ->where('user_id', $user_id)
            ->firstOrFail();
        $userOnRoom->delete();

        return response()->json(null, 204);
    }
}
