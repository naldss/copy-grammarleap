<!DOCTYPE html>
<html lang="en">

<head>
    @include('head')
    <title>{{ $room->room_name }}</title>
</head>
@include('dashboard.header')
@include('dashboard.quiz-room.add-quiz-item-modal')

<body class="background">
    <div class="create-room-body">
        <div class="game-name">Quiz Room Creator View</div>

        <div class="create-room-container">
            <div class="create-room-left">
                <div class="room-details-box-creator-view">
                    <div class="room-details-namepass-creator-view">
                        <div>
                            <div class="box-title-2">{{ $room->room_name }}</div>
                            <div class="room-details-description">{{ $room->room_description }}</div>
                        </div>

                        <a href="{{ route('takequiz', ['room_id' => $room->room_id]) }}"
                            class="quiz-room-take-quiz small">
                            Take Quiz
                        </a>
                    </div>
                </div>

                <!-- Div 1: Quiz Items -->
                <div class="manage-quizzes-box">
                    <div class="manage-quizzes-box-top">
                        <div class="box-title-2">Manage Quiz Items</div>
                        <button type="button" id="add-quiz-item" class="create-room blue">Add a Quiz Item</button>
                    </div>
                    <div class="quiz-item-list">
                        @if ($quizzes->isEmpty())
                            <div class="no-items-added">
                                No Items Added.
                            </div>
                        @else
                            @foreach ($quizzes as $index => $quiz)
                                <div class="quiz-item-box"
                                    @if ($index % 2 == 0) style="background-color: white" @endif>
                                    <strong>Question: </strong>
                                    <div class="quiz-item-question">
                                        {{ $quiz->question }}
                                    </div>
                                    <strong>Choices:</strong>
                                    <div class="quiz-item-choices">
                                        @foreach (['choice1', 'choice2', 'choice3', 'choice4'] as $choice)
                                            @if (!is_null($quiz->$choice))
                                                <div class="div @if ($quiz->answer == $quiz->$choice) bold-choice @endif">
                                                    • {{ $quiz->$choice }}
                                                </div>
                                            @endif
                                        @endforeach
                                    </div>
                                </div>
                            @endforeach
                        @endif
                    </div>

                </div>
            </div>

            <!-- Div 2: Users -->
            <div class="create-room-right">
                <div class="box-title-2">Manage Users</div>

                <!-- Add a User -->
                <div>
                    <label class="inside-title">Add a User:</label>
                    <div class="add-user-box">
                        <input type="hidden" id="room_id" value="{{ $room->room_id }}">

                        <input type="text" id="user_email" class="form-control input-font" placeholder="Enter email">

                        <button type="button" class="create-room green" onclick="addUser()">Add</button>
                    </div>
                    <div id="message-box"></div>
                </div>



                <!-- List of Added Users -->
                <div class="mt-3">
                    <div class="inside-title">Users in the room:</div>
                    <div class="quiz-item-list">
                        @foreach ($userEmails as $index => $userEmail)
                            <div class="quiz-item-box"
                                @if ($index % 2 == 0) style="background-color: white" @endif>
                                {{ $userEmail }}</div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <div class="quiz-room-users-list-box">
            <div class="box-title-2">Users Quiz Scores</div>
            <div class="quiz-room-users-list">

                @if ($quiz_scores->isEmpty())
                    <p>No scores available for this room.</p>
                @else
                    @foreach ($quiz_scores as $index => $quiz_score)
                        <div class="users-result-box"
                            @if ($index % 2 == 1) style="background-color: rgb(244, 244, 255)" @endif>
                            <div class="leaderboard-rank-quiz-room">{{ $index + 1 }}</div>
                            <div class="quiz-result-list-name">
                                {{ $quiz_score->user ? $quiz_score->user->first_name . ' ' . $quiz_score->user->last_name : 'Unknown User' }}
                            </div>
                            <div class="quiz-result-box">
                                {{ $quiz_score->score }}/{{ $quiz_score->total_points }} points |
                                {{ $quiz_score->accuracy }}% accuracy
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </div>

</body>
@include('dashboard.footer')

<script>
    function addUser() {
        const room_id = document.getElementById('room_id').value;
        const user_email = document.getElementById('user_email').value;
        const messageBox = document.getElementById('message-box');

        // Check if the email input is not empty
        if (user_email.trim() === '') {
            messageBox.innerHTML = '<p style="color: red;">Enter Email Address.</p>';
            return;
        }

        // Prepare data to send in AJAX request
        const formData = new FormData();
        formData.append('room_id', room_id);
        formData.append('user_email', user_email);

        // Make an AJAX request to add the user
        fetch('/add-user-to-room', {
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}' // CSRF protection for Laravel
                },
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    messageBox.innerHTML = data.message;
                } else {
                    messageBox.innerHTML = data.message;
                }
            })
            .catch(error => {
                messageBox.innerHTML = 'An error occurred. Please try again.';
            });
    }

    // Add event listener for adding a quiz item
    document.getElementById('add-quiz-item').addEventListener('click', function() {
        // Show the modal for quiz input
        const modalBackground = document.querySelector('.add-quiz-item-modal-background');
        modalBackground.style.display = 'flex';

        // Reset the modal inputs
        document.querySelector('#quiz-question').value = '';
        document.querySelectorAll('.quiz-choice').forEach(choiceInput => {
            choiceInput.value = '';
            choiceInput.previousElementSibling.checked = false;
        });

        // Reset choice count
        currentChoiceCount = 2; // Always start with 2 choices
        document.getElementById('add-choice-btn').style.display = 'inline'; // Ensure the button is visible
    });
</script>

</html>
