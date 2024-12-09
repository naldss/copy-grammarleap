{{-- resources/views/sentence_game.blade.php --}}
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sentence Builder | GrammarLeap</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
@include('dashboard.header2')

<body class="sb-body">
    <div class="sb-outer">
        <div class="top-access">
            <a href="{{ route('dashboard') }}" class="gobackhome">🏠︎ Exit</a>
            <div class="open-admin-access-box">
                <a href="javascript:void(0);" class="moreinfo" id="toggleAdminAccess">Open Admin Access →</a>
                <div id="adminAccessContainer" style="display: none;">
                    <a href="{{ route('sentence_builder.index') }}" class="moreinfo" id="editClassicStudyContent">Edit
                        Sentence Builder Contents</a>
                </div>
            </div>
        </div>
        <div class="sentence-builder-container">
            <div class="original-words-box">
                <div>
                    <span class="gamename">Sentence Builder | </span>
                    <span class="howto" onclick="howtomodal()">How To Play?</span>
                </div>
                <div class="sentence" id="words-div" data-correct-sentence="{{ $correctSentence }}">
                    @foreach ($explodedBrokenSentence as $index => $word)
                        <span class="word" data-index="{{ $index }}">{{ $word }}</span>
                    @endforeach
                </div>
            </div>
            <!-- Editable area -->
            <div class="fix-area">
                <div class="fix-area-box">
                    <div class="fix-area-name">Build Area</div>
                    <div class="fix-area-within">
                        <input type="text" id="edit-input" />
                        <div id="fix-button" onclick="saveWord()"></div>
                    </div>
                </div>

            </div>
            <div class="check-accuracy" onclick="checkAnswer()">Check Content ✔</div>
        </div>
        <div id="numerrors"></div>
        <div id="correct"></div>
        <div id="score"></div>
        <!-- Errors Display -->
        <div id="errors-div"></div>
        @include('games.resultModalSB')
    </div>



    <script>
        isAdmin = {{ $user->isAdmin }};

        if (isAdmin == 0) {
            document.getElementById('toggleAdminAccess').style.display = 'none';
        }

        document.addEventListener('DOMContentLoaded', function() {
            const toggleAdminAccess = document.getElementById('toggleAdminAccess');
            const adminAccessContainer = document.getElementById('adminAccessContainer');

            toggleAdminAccess.addEventListener('click', function() {
                if (adminAccessContainer.style.display === 'none' || adminAccessContainer.style.display ===
                    '') {
                    adminAccessContainer.style.display = 'flex';
                    toggleAdminAccess.textContent =
                        'Close Admin Access ←'; // Change text to "Close Admin Access"
                } else {
                    adminAccessContainer.style.display = 'none';
                    toggleAdminAccess.textContent =
                        'Open Admin Access  →'; // Change text back to "Open Admin Access"
                }
            });
        });





        let currentWordIndex = null;

        // Function to handle clicking a word
        document.querySelectorAll('.word').forEach((wordElement) => {
            wordElement.addEventListener('click', function() {
                currentWordIndex = this.getAttribute('data-index');
                document.getElementById('edit-input').value = this.innerText;
            });
        });

        // Function to save the edited word
        function saveWord() {
            const editedWord = document.getElementById('edit-input').value.trim();
            if (editedWord === "") {
                alert("Please enter a word.");
                return;
            }
            if (currentWordIndex !== null) {
                const wordToEdit = document.querySelector(`.word[data-index="${currentWordIndex}"]`);
                wordToEdit.innerText = editedWord;
                currentWordIndex = null;
                document.getElementById('edit-input').value = ''; // Clear input after saving
            }
        }

        var passed = 0;

        // Function to check the final answer
        function checkAnswer() {
            const correctSentence = document.getElementById('words-div').getAttribute('data-correct-sentence');
            const correctWords = correctSentence.split(' ');
            const userWords = Array.from(document.querySelectorAll('#words-div .word')).map(word => word.innerText);

            const errors = [];
            var numberOfCorrect = 0;
            for (let i = 0; i < correctWords.length; i++) {
                if (correctWords[i] !== userWords[i]) {
                    errors.push(`Error at word ${i + 1}: Expected "${correctWords[i]}", found "${userWords[i]}"`);
                } else {
                    numberOfCorrect += 1;
                }
            }

            // displayErrors(errors);

            var percentage = ((numberOfCorrect / {{ $numberOfWords }}) * 100).toFixed(2);
            var score = (((numberOfCorrect / {{ $numberOfWords }}) * 100) / 5).toFixed(2);
            var incorrect = (((errors.length / {{ $numberOfWords }}) * 100) / 5).toFixed(2);
            document.getElementById('numerrors').innerText = `Total errors: ${errors.length}`;
            document.getElementById('correct').innerText = `percentage of correct: ` + percentage;
            document.getElementById('score').innerText = `score: ` + score + `incorrect: ` + incorrect;

            document.getElementById("modalMissed").innerText = "Missed: " + errors.length;
            if (percentage >= 60) {
                passed = 1;
                document.getElementById("result").innerText = "PASSED!";
                document.getElementById("scoreminusplus").innerText = "You got " + score + " Points.";
                document.getElementById("modalRemark").innerText = "You got " + percentage + "% Correct.";
                fetch('{{ route('addPointsSentenceBuilder') }}', {
                        method: 'POST',
                        headers: {
                            'X-CSRF-TOKEN': '{{ csrf_token() }}',
                            'Content-Type': 'application/json'
                        },
                        body: JSON.stringify({
                            score: score
                        })
                    })
                    .then(response => {
                        if (!response.ok) {
                            console.error('Failed to add points:', response.statusText);
                        }
                    })
                    .catch(error => {
                        console.error('Error adding points:', error);
                    });

                if (percentage==100){
                    completeMission(6);
                }
            } else if (percentage < 60) {
                passed = 0;
                document.getElementById("result").innerText = "FAILED.";
                document.getElementById("result").style.color = "red";
                document.getElementById("scoreminusplus").innerText = "You were minused " + incorrect +
                    " points. \n You must surpass 60%.";
                document.getElementById("modalRemark").innerText = "You got " + percentage + "% Correct.";
                fetch('{{ route('minusPointsSentenceBuilder') }}', {
                        method: 'POST',
                        headers: {
                            'X-CSRF-TOKEN': '{{ csrf_token() }}',
                            'Content-Type': 'application/json'
                        },
                        body: JSON.stringify({
                            incorrect: incorrect
                        })
                    })
                    .then(response => {
                        if (!response.ok) {
                            console.error('Failed to minus points:', response.statusText);
                        }
                    })
                    .catch(error => {
                        console.error('Error minusing points:', error);
                    });
            }

            openModal();


        }

        // Function to display errors
        function displayErrors(errors) {
            const errorsDiv = document.getElementById('errors-div');
            errorsDiv.innerHTML = ""; // Clear previous errors

            if (errors.length === 0) {
                errorsDiv.innerHTML = "<p>No errors found! Your grammar is correct.</p>";
            } else {
                errors.forEach(error => {
                    const errorElement = document.createElement("p");
                    errorElement.textContent = error;
                    errorsDiv.appendChild(errorElement);
                });
            }
        }

        function tryAgain() {
            location.reload();
        }

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


        // Function to open modal
        function openModal() {
            if (passed == 1) {
                const defaults = {
                    spread: 380,
                    ticks: 1,
                    gravity: 0,
                    decay: 0.94,
                    startVelocity: 60,
                    shapes: ["star"],
                    colors: ["FFE400", "FFBD00", "E89400", "FFCA6C", "FDFFB8"],
                };

                function shoot() {
                    confetti({
                        ...defaults,
                        particleCount: 90,
                        scalar: 2,
                        shapes: ["star"],
                    });

                    confetti({
                        ...defaults,
                        particleCount: 50,
                        scalar: 1,
                        shapes: ["circle"],
                    });
                    confetti({
                        particleCount: 50,
                        spread: 200,
                        origin: {
                            y: 0.6
                        },
                    });
                }

                setTimeout(shoot, 0);
                setTimeout(shoot, 50);
                setTimeout(shoot, 100);



            } else {
                const defaults = {
                    spread: 360,
                    ticks: 10,
                    gravity: 0.5,
                    decay: 0.94,
                    startVelocity: 50,
                };

                function shoot() {
                    confetti({
                        ...defaults,
                        particleCount: 40,
                        scalar: 1.8,
                        shapes: ["triangle"],
                        colors: ["ff5e5e"],
                    });

                    confetti({
                        ...defaults,
                        particleCount: 40,
                        scalar: 2.5,
                        shapes: ["emoji"],
                        shapeOptions: {
                            emoji: {
                                value: ["❌"],
                            },
                        },
                    });
                }

                setTimeout(shoot, 0);
                setTimeout(shoot, 50);
                setTimeout(shoot, 100);
            }

            document.getElementById('resultModal').style.display = 'flex';
        }
    </script>
</body>

</html>
