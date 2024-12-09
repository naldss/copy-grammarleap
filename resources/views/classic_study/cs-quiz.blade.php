<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Classic Study Quiz</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <meta name="csrf-token" content="{{ csrf_token() }}">

</head>

@include('dashboard.header2')

<body class="background">
    <div class="cs-quiz-container">
        <div id="quiz-result-congrats">
            <div id="congrats"></div>
            <div id="display-score"></div>
            <a href="{{ route('classicstudy') }}" class="backtoCS">← Back to Classic Study</a>
        </div>
        <div id="quiz-container">
            <div id="question-text"></div>
            <div class="choices" id="choices">
                <div class="choices-vertical">
                    <div class="choice" data-value="0" id="label0"></div>
                    <div class="choice" data-value="1" id="label1"></div>
                </div>
                <div class="choices-vertical">
                    <div class="choice" data-value="2" id="label2"></div>
                    <div class="choice" data-value="3" id="label3"></div>
                </div>
            </div>
            <button id="next-btn">Next</button>
        </div>
    </div>
</body>

<script src="https://cdn.jsdelivr.net/npm/@tsparticles/confetti@3.0.3/tsparticles.confetti.bundle.min.js"></script>
<script>
    const questions = [
        @foreach ($quizzes as $item)
            {
                text: `{{ addslashes($item->question) }}`,
                options: [
                    `{{ addslashes($item->choice_1) }}`,
                    `{{ addslashes($item->choice_2) }}`,
                    `{{ addslashes($item->choice_3) }}`,
                    `{{ addslashes($item->choice_4) }}`
                ],
                correct: `{{ addslashes($item->correct_choice) }}`
            },
        @endforeach
    ];

    // Shuffle and select 5 random quizzes if there are more than 5
    let randomQuizzes = questions; // Default to all questions
    if (questions.length > 5) {
        const shuffled = questions.sort(() => 0.5 - Math.random());
        randomQuizzes = shuffled.slice(0, 5);
    }

    let currentQuestion = 0;
    let selectedAnswer = null;
    let score = 0;

    function loadQuestion() {
        const question = randomQuizzes[currentQuestion];
        document.getElementById("question-text").innerText = decodeHtml(question.text);

        for (let i = 0; i < 4; i++) {
            const choiceElement = document.getElementById("label" + i);
            choiceElement.innerText = decodeHtml(question.options[i]);
            choiceElement.classList.remove("selected"); // Reset selected state
        }

        selectedAnswer = null;
    }

    // Function to decode HTML entities (optional, if needed)
    function decodeHtml(html) {
        const txt = document.createElement("textarea");
        txt.innerHTML = html;
        return txt.value;
    }



    // Event delegation to handle choice selection
    document.getElementById("choices").addEventListener("click", function(e) {
        if (e.target.classList.contains("choice")) {
            // Reset all choices' styles
            document.querySelectorAll(".choice").forEach(choice => choice.classList.remove("selected"));

            // Mark the clicked choice as selected
            e.target.classList.add("selected");
            selectedAnswer = e.target.innerText; // Use innerText to get the selected answer as a string
        }
    });

    document.getElementById("next-btn").addEventListener("click", function() {
        if (selectedAnswer === null) {
            alert("Please select an answer.");
            return;
        }

        // Check if the selected answer matches the correct answer
        if (selectedAnswer === randomQuizzes[currentQuestion].correct) {
            score++;
        }

        currentQuestion++;
        if (currentQuestion < randomQuizzes.length) {
            loadQuestion();
        } else {

            var percentage = (score / randomQuizzes.length) * 100;
            if (percentage > 59) {
                document.getElementById('congrats').innerHTML = "Quiz Complete, Congratulations!";
            } else {
                document.getElementById('congrats').innerHTML = "Quiz Complete, Keep it up!";
            }
            confetti({
                particleCount: 100,
                spread: 70,
                gravity: 0.5,
                origin: {
                    y: 0.6
                },
            });
            document.getElementById("quiz-container").style.display = 'none';

            document.getElementById('quiz-result-congrats').style.display = 'flex';
            document.getElementById('display-score').innerHTML =
                `Your score: ${score} out of ${randomQuizzes.length}`;

            // Submit the score
            submitQuizScore(score, {{ auth()->id() }},
                {{ $quizzes->first()->topic_id }}); // Pass user ID and topic ID

            completeMission(4);
        }
    });

    function completeMission(MissionId) {
        fetch('{{ route('missions.complete', ['MissionId' => '__MISSION_ID__']) }}'.replace('__MISSION_ID__',
                MissionId), {
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}',
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify({})
            })
            .then(response => response.json())
            .then(data => {
                if (data.status === 'success') {
                    alert('A mission was completed!');
                }
            })
            .catch(error => {
                console.error('Error completing mission:', error);
            });
    }

    async function submitQuizScore(score, userId, csTopicId, questions_length) {
        try {
            const response = await fetch('/user-quiz-scores', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute(
                        'content')
                },
                body: JSON.stringify({
                    user_id: userId,
                    cs_topic_id: csTopicId,
                    score: score,
                    questions_length: questions.length
                })
            });

            const data = await response.json();
            if (response.ok) {
                console.log('Score submitted successfully:', data);
            } else {
                console.error('Error submitting score:', data.message);
                alert("Error saving your score. Please try again.");
            }
        } catch (error) {
            console.error('Error:', error);
            alert("An error occurred while submitting your score.");
        }
    }
    loadQuestion();
    console.log(questions);


    // Decode HTML entities function
    // function decodeHtml(html) {
    //     var txt = document.createElement('textarea');
    //     txt.innerHTML = html;
    //     return txt.value;
    // }

    // const questions = [
    //     @foreach ($quizzes as $item)
    //         {
    //             text: `{{ addslashes($item->question) }}`,
    //             options: [
    //                 `{{ addslashes($item->choice_1) }}`,
    //                 `{{ addslashes($item->choice_2) }}`,
    //                 `{{ addslashes($item->choice_3) }}`,
    //                 `{{ addslashes($item->choice_4) }}`
    //             ],
    //             correct: `{{ addslashes($item->correct_choice) }}`
    //         },
    //     @endforeach
    // ];

    // let randomQuizzes = questions;
    // if (quizzes.length > 5) {
    //     const shuffled = quizzes.sort(() => 0.5 - Math.random());
    //     randomQuizzes = shuffled.slice(0, 5);
    // }

    // let currentQuestion = 0;
    // let selectedAnswer = null;
    // let score = 0;

    // function loadQuestion() {
    //     const question = questions[currentQuestion];
    //     document.getElementById("question-text").innerText = decodeHtml(question.text);

    //     for (let i = 0; i < 4; i++) {
    //         const choiceElement = document.getElementById("label" + i);
    //         choiceElement.innerText = decodeHtml(question.options[i]);
    //         choiceElement.classList.remove("selected"); // Reset selected state
    //     }

    //     selectedAnswer = null;
    // }




    // Quiz questions populated from the server-side variable $quizzes
    // const questions = [
    //     @foreach ($quizzes as $item)
    //         {
    //             text: `{{ $item->question }}`,
    //             options: [
    //                 `{{ $item->choice_1 }}`,
    //                 `{{ $item->choice_2 }}`,
    //                 `{{ $item->choice_3 }}`,
    //                 `{{ $item->choice_4 }}`
    //             ],
    //             correct: `{{ $item->correct_choice }}`
    //         },
    //     @endforeach
    // ];

    // let currentQuestion = 0;
    // let selectedAnswer = null;
    // let score = 0;

    // function loadQuestion() {
    //     const question = questions[currentQuestion];
    //     document.getElementById("question-text").innerText = question.text;

    //     for (let i = 0; i < 4; i++) {
    //         const choiceElement = document.getElementById("label" + i);
    //         choiceElement.innerText = question.options[i];
    //         choiceElement.classList.remove("selected"); // Reset selected state
    //     }

    //     selectedAnswer = null;
    // }

    // // Event delegation to handle choice selection
    // document.getElementById("choices").addEventListener("click", function(e) {
    //     if (e.target.classList.contains("choice")) {
    //         // Reset all choices' styles
    //         document.querySelectorAll(".choice").forEach(choice => choice.classList.remove("selected"));

    //         // Mark the clicked choice as selected
    //         e.target.classList.add("selected");
    //         selectedAnswer = e.target.innerText; // Use innerText to get the selected answer as a string
    //     }
    // });

    // document.getElementById("next-btn").addEventListener("click", function() {
    //     if (selectedAnswer === null) {
    //         alert("Please select an answer.");
    //         return;
    //     }

    //     // Check if the selected answer matches the correct answer
    //     if (selectedAnswer === questions[currentQuestion].correct) {
    //         score++;
    //     }

    //     currentQuestion++;
    //     if (currentQuestion < questions.length) {
    //         loadQuestion();
    //     } else {

    //         var percentage = (score / questions.length) * 100;
    //         if (percentage > 59) {
    //             document.getElementById('congrats').innerHTML = "Quiz Complete, Congratulations!";
    //         } else {
    //             document.getElementById('congrats').innerHTML = "Quiz Complete, Keep it up!";
    //         }
    //         confetti({
    //             particleCount: 100,
    //             spread: 70,
    //             gravity: 0.5,
    //             origin: {
    //                 y: 0.6
    //             },
    //         });
    //         document.getElementById("quiz-container").style.display = 'none';

    //         document.getElementById('quiz-result-congrats').style.display = 'flex';
    //         document.getElementById('display-score').innerHTML =
    //             `Your score: ${score} out of ${questions.length}`;


    //         // Submit the score
    //         submitQuizScore(score, {{ auth()->id() }},
    //             {{ $quizzes->first()->topic_id }}); // Pass user ID and topic ID
    //         console.log(` {{ auth()->id() }}, {{ $quizzes->first()->topic_id }}`);

    //         completeMission(4);
    //     }
    // });

    // function completeMission(MissionId) {
    //     fetch('{{ route('missions.complete', ['MissionId' => '__MISSION_ID__']) }}'.replace('__MISSION_ID__',
    //             MissionId), {
    //             method: 'POST',
    //             headers: {
    //                 'X-CSRF-TOKEN': '{{ csrf_token() }}',
    //                 'Content-Type': 'application/json'
    //             },
    //             body: JSON.stringify({})
    //         })
    //         .then(response => response.json())
    //         .then(data => {
    //             if (data.status === 'success') {
    //                 alert('A mission was completed!');
    //             }
    //         })
    //         .catch(error => {
    //             console.error('Error completing mission:', error);
    //         });
    // }

    // async function submitQuizScore(score, userId, csTopicId, questions_length) {
    //     try {
    //         const response = await fetch('/user-quiz-scores', {
    //             method: 'POST',
    //             headers: {
    //                 'Content-Type': 'application/json',
    //                 'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute(
    //                     'content')
    //             },
    //             body: JSON.stringify({
    //                 user_id: userId,
    //                 cs_topic_id: csTopicId,
    //                 score: score,
    //                 questions_length: questions.length
    //             })
    //         });

    //         const data = await response.json();
    //         if (response.ok) {
    //             console.log('Score submitted successfully:', data);
    //             // alert("Your score has been saved successfully.");
    //         } else {
    //             console.error('Error submitting score:', data.message);
    //             alert("Error saving your score. Please try again.");
    //         }
    //     } catch (error) {
    //         console.error('Error:', error);
    //         alert("An error occurred while submitting your score.");
    //     }
    // }
    // loadQuestion();
</script>

</html>
