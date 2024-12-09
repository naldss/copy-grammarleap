<!-- resources/views/quiz-page.blade.php -->

<!DOCTYPE html>
<html lang="en">

<head>
    @include('head')
    <title>Quiz Page</title>
</head>

<body class="background">
    <div class="room-quiz-container">
        <div class="game-name">Quiz Content</div>

        <div class="quiz-content-box">
            <div class="quiz-question">No Items Created Yet</div>
            <div class="choices-box">
            </div>

        </div>

    </div>

    <div id="answer-animation">GrammarLeap</div>

</body>
@include('games.results.result')
<script>
    const quizContent = @json($quizzes);
    const room = @json($room);
    const roomId = room.room_id;
    const userId = {{ auth()->id() }};

    console.log(roomId);
    console.log(userId);

    currentQuizIndex = 0;

    let score = 0;

    let resultDisplay = document.getElementById('result-display');
    let congrats_text = document.querySelector('.congrats-text');
    let result_percentage = document.querySelector('.result-percentage');
    let points = document.querySelector('.points');
    let win = document.querySelector('.win');
    let lost = document.querySelector('.lost');


    // Initial call to load the first item
    loadNextItem();


    // Function to load the next quiz item
    function loadNextItem() {
        let selectedItem = null;

        // Check if quizContent is null, undefined, or an empty array
        if (!quizContent || quizContent.length === 0) {
            // Code to execute if quizContent is null or not found
            console.log("No quizzes found.");
            // You can display a message to the user, redirect, or perform other actions here
        } else {
            if (currentQuizIndex >= quizContent.length) {

                let percentage = score / quizContent.length * 100;

                percentage = percentage.toFixed(1);
                if (percentage > 65) {
                    congrats_text.innerHTML = "Congratulations!";
                    win.style.display = "block"
                } else {
                    congrats_text.innerHTML = "Keep it Up!";
                    lost.style.display = "block"
                }
                result_percentage.innerHTML = percentage + '%';
                points.innerHTML = `You Got ${score.toFixed(0)} Correct Over ${quizContent.length}.`;


                fetch('{{ route('user-quiz-room-scores.store') }}', {
                        method: 'POST',
                        headers: {
                            'X-CSRF-TOKEN': '{{ csrf_token() }}',
                            'Content-Type': 'application/json'
                        },
                        body: JSON.stringify({
                            room_id: roomId, 
                            user_id: userId,
                            score: score
                        })
                    })
                    .then(response => {
                        if (!response.ok) {
                            console.error('Failed to store points:', response.statusText);
                        }
                    })
                    .catch(error => {
                        console.error('Error storing points:', error);
                    });

                openResult();
                winConfetti(percentage);
            } else {
                // Get the current quiz item
                const currentQuiz = quizContent[currentQuizIndex];

                // Update the quiz question
                const quizQuestion = document.querySelector('.quiz-question');
                quizQuestion.textContent = currentQuiz.question;

                // Update the choices
                const choicesBox = document.querySelector('.choices-box');
                // Clear any existing choices
                choicesBox.innerHTML = '';

                // List of choices to append
                const choices = [currentQuiz.choice1, currentQuiz.choice2, currentQuiz.choice3, currentQuiz.choice4];

                choices.forEach(choice => {
                    if (choice) { // Skip null choices
                        const choiceElement = document.createElement('div');
                        choiceElement.className = 'choices'; // Add styling class if needed
                        choiceElement.textContent = choice;

                        // Add an event listener for selection (optional)
                        choiceElement.addEventListener('click', () => {
                            // alert(`You selected: ${choice}`);
                            selectedItem = choice;
                            checkAnswer(selectedItem, currentQuiz.answer); // Check the selected answer
                            // loadNextItem(); // Automatically move to the next quiz after selection
                        });

                        choicesBox.appendChild(choiceElement);
                    }
                });
            }
        }
    }

    function checkAnswer(userAnswer, correctAnswer) {
        // Find all choice elements
        const choiceElements = document.querySelectorAll('.choices');

        choiceElements.forEach(choice => {
            if (choice.textContent === correctAnswer) {
                // Highlight the correct answer in green
                choice.style.backgroundColor = "#93C572";
                choice.style.color = "white";
            } else if (choice.textContent !== correctAnswer) {
                // Reduce the opacity of the wrong answers
                choice.style.opacity = "0.35";
            }
        });

        // Increment score if the answer is correct
        if (userAnswer === correctAnswer) {
            score++;
        }
        isCorrect(userAnswer, correctAnswer);
        // Add a delay before proceeding to the next question

        currentQuizIndex++;

        setTimeout(() => {
            closeAnimation();
        }, 2000);
        setTimeout(() => {
            loadNextItem();
        }, 2500);
    }



    function isCorrect(a, b) {
        if (a === b) {
            confetti({
                particleCount: 80,
                spread: 360,
                angle: 270,
                startVelocity: 50,
                shapes: ["star"],
                colors: ["FFE400", "FFBD00", "E89400", "FFCA6C", "FDFFB8"],
            });
        }
    }

    function openResult() {
        resultDisplay.style.display = 'flex';
    }

    function closeResult() {
        // Get the current room_id from the URL
        const roomId = window.location.pathname.split('/').pop(); // Extracts the last part of the URL

        // Redirect to the rooms route
        window.location.href = `/rooms/${roomId}`;
        setTimeout(() => {
            resultDisplay.style.display = 'none';
        }, 1000);
    }

    const animationDiv = document.getElementById('answer-animation');

    function closeAnimation() {
        animationDiv.style.display = "flex";
        animationDiv.classList.add('slide-right');

        setTimeout(() => {
            animationDiv.style.display = "none";
            animationDiv.classList.remove('slide-right');
        }, 790);
    }
</script>

</html>
