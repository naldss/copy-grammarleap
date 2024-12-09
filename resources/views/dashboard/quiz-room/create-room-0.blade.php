<div class="add-room-modal">
    <form method="POST" action="{{ route('rooms.store') }}" class="room-details-box">
        @csrf
        <div class="box-title">Enter Room Details</div>
        <input type="hidden" name="creator_id" value="{{ auth()->id() }}">
        <div class="room-details-namepass">
            <input type="text" class="form-control" id="room_name" name="room_name" required
                placeholder="Enter Room Name">
            <input type="text" class="form-control" name="passcode" placeholder="Enter Passcode to Make Private">
        </div>

        <textarea class="form-control" id="room_description" name="room_description" rows="2"
            placeholder="Quiz Room Description"></textarea>

            <div style="display: flex; gap: 1vh">
                <button type="submit" class="button-blue">Create Room</button>
                <span id="cancel" class="button-blue red">Cancel</span>
            </div>
    </form>
</div>
<script>
    document.getElementById('cancel').addEventListener('click', function() {
        document.querySelector('.add-room-modal').style.display = "none";
    });
</script>
