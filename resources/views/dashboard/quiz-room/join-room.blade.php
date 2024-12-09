<div class="join-room add-room-modal" id="join-room-modal">
    <form method="POST" action="{{ route('users-on-rooms.store') }}" class="room-details-box">
        @csrf
        <div class="box-title">Join a Room</div>
        <input type="hidden" name="creator_id" value="{{ auth()->id() }}">
        <div class="room-details-namepass">
            <input type="text" class="form-control" name="passcode" placeholder="Enter Room Passcode">
        </div>

        <div style="display: flex; gap: 1vh">
            <button type="submit" class="button-blue">Create Room</button>
            <span id="cancel1" class="button-blue red">Cancel</span>
        </div>
    </form>
</div>
<script>
    document.getElementById('cancel1').addEventListener('click', function() {
        document.querySelector('#join-room-modal').style.display = "none";
    });
</script>
