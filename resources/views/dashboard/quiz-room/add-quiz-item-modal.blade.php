<div class="add-quiz-item-modal-background" style="display: none;">
    <div class="add-quiz-item-modal-box">
        <div class="box-title-2">Add a Quiz Item</div>
        <form id="add-quiz-form" method="POST" action="{{ route('quiz-on-rooms.store') }}">
            @csrf
            <input type="hidden" name="room_id" value="{{ $room->room_id }}">
            <textarea class="form-control" name="question" placeholder="Enter Question" rows="1" required></textarea>
            <br>
            <!-- Choices -->
            <div>Select the radio button of the correct answer.</div>
            <div class="choice-lane">
                <input type="radio" name="correct" value="choice1" required>
                <textarea class="form-control" name="choice1" placeholder="Enter Choice 1" rows="1" required></textarea>
            </div>
            <div class="choice-lane">
                <input type="radio" name="correct" value="choice2" required>
                <textarea class="form-control" name="choice2" placeholder="Enter Choice 2" rows="1" required></textarea>
            </div>
            <div id="additional-choices">
                <div class="choice-lane">
                    <input type="radio" name="correct" value="choice3">
                    <textarea class="form-control" name="choice3" placeholder="Enter Choice 3" rows="1"></textarea>
                </div>
                <div class="choice-lane">
                    <input type="radio" name="correct" value="choice4">
                    <textarea class="form-control" name="choice4" placeholder="Enter Choice 4" rows="1"></textarea>
                </div>
            </div>

            <input type="hidden" name="answer" id="correct-answer">

            <!-- Modal Buttons -->
            <div class="add-cancel-box">
                <button type="button" class="create-room blue" onclick="prepareForm()">Add Quiz</button>
                <button type="button" class="create-room red" onclick="cancelQuizItem()">Cancel</button>
            </div>
        </form>
    </div>
</div>

<script>
    function prepareForm() {
        // Get the selected correct answer
        const selectedCorrect = document.querySelector('input[name="correct"]:checked');
        if (!selectedCorrect) {
            alert("Please select the correct answer.");
            return;
        }

        // Set the correct answer's value in the hidden input field
        const correctAnswerField = document.getElementById('correct-answer');
        correctAnswerField.value = document.querySelector(`textarea[name="${selectedCorrect.value}"]`).value;

        // Submit the form
        document.getElementById('add-quiz-form').submit();
    }

    function cancelQuizItem() {
        document.querySelector('.add-quiz-item-modal-background').style.display = 'none';
        document.getElementById('add-quiz-form').reset();
    }
</script>
