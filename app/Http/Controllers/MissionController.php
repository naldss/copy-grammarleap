<?php

// app/Http/Controllers/MissionController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mission;
use App\Models\UserMission;
use Carbon\Carbon;
use Auth;

class MissionController extends Controller
{
    public function completeMission($MissionId)
    {
        $user = Auth::user();
        $userMission = UserMission::where('mission_id', $MissionId)
            ->where('date', Carbon::today())
            ->where('user_id', $user->id)  // Filter by user ID
            ->firstOrFail();


        $userMission->update(['completed' => true]);

        return redirect()->back()->with('status', 'Mission completed!');
    }

    public function addPointsFromClaimPoints($MissionId)
    {
        $user = Auth::user();
        $userMission = UserMission::where('mission_id', $MissionId)
            ->where('date', Carbon::today())
            ->where('user_id', $user->id)  // Filter by user ID
            ->firstOrFail();

        // Check the mission ID and add points accordingly
        if ($userMission->mission_id == 1) {
            // $user->SB_total += 20;
            $userMission->update(['claimed' => true]);
        } elseif ($userMission->mission_id == 2) {
            $user->PosH_total += 20;
            $userMission->update(['claimed' => true]);
        } elseif ($userMission->mission_id == 3) {
            $user->SB_total += 20;
            $userMission->update(['claimed' => true]);
        } elseif ($userMission->mission_id == 4) {
            $user->TC_total += 20;
            $userMission->update(['claimed' => true]);
        } elseif ($userMission->mission_id == 5) {
            $user->SS_total += 20;
            $userMission->update(['claimed' => true]);
        }

        // Save the updated user points
        $user->save();

        return response()->json(['status' => 'success']); // Return success response
    }
}
