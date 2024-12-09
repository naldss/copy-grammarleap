<div class="quiz-room">
    <div class="quiz-box-top">
        <div class="quiz-room-title">Quiz Rooms</div>
        <div style="display: flex; gap: 1vh;">
            <div id="joinRoomButton" class="create-room blue">Join a Room</div>
            <div id="createRoomButton" class="create-room blue">Create a Room</div>
        </div>

    </div>

    <div class="rooms-box">
        @foreach ($rooms as $room)
            <a href="{{ route('rooms.show', ['room' => $room->room_id]) }}" class="room-box">
                <div>
                    <div class="room-name">
                        {{-- @if ($room->passcode == null)
                            🌐
                        @endif --}}
                        {{ $room->room_name }}
                    </div>
                    <div class="creator">
                        @if ($room->creator_id == $user->id)
                            ★
                        @endif
                        Creator:
                        {{ $room->creator ? $room->creator->first_name . ' ' . $room->creator->last_name : 'N/A' }}
                    </div>
                </div>
                <div>

                    @if (!is_null($room->passcode))
                        👤
                        @if ($room->users()->count() == 0)
                            0
                        @else
                            {{ $room->users()->count() }}
                        @endif
                    @else
                        🌐 Public
                    @endif


                </div>
            </a>
        @endforeach
    </div>

</div>
<script></script>
