<!DOCTYPE html>
<html lang="en">

<head>
    @include('head')
    <title>GrammarLeap | POS Hunter</title>
</head>

<body>
    <div class="game-container" id="sentence-builder-background">
        <div class="game-name">Sentence Builder</div>
        <div class="start-box">
            <div>
                <div class="start-button" onclick="start()">START BUILDING</div>
                <a href='{{ route('dashboard') }}' class="exit">
                    ↩ Exit
                </a>
            </div>

            <div class="game-description">
                Sentence Builder is a game where players identify and correct incorrectly structured sentences. Players
                will be
                presented with sentences and students has to correct their.
            </div>
        </div>

        <div class="pos-hunter-game">
            <div class="sentence" id="words-div" data-correct-sentence="{{ $correctSentence }}">
                @foreach ($explodedBrokenSentence as $index => $word)
                    <span class="word" data-index="{{ $index }}">{{ $word }}</span>
                @endforeach
            </div>
            <div class="fix-area-within">
                <input type="text" id="edit-input" placeholder="Select a Word." />
                <div id="fix-button" onclick="saveWord()"></div>
            </div>
            <button onclick="checkAnswer()">Submit Answer ►</button>
        </div>

        <div id="answer-animation">GrammarLeap</div>

        @include('games.results.result')
    </div>
</body>

<script>
    let selectedWord = null;
    const sentence = @json($correctSentence);
    let congrats_text = document.querySelector('.congrats-text');
    let result_percentage = document.querySelector('.result-percentage');
    let points = document.querySelector('.points');
    let win = document.querySelector('.win');
    let lost = document.querySelector('.lost');
    let score = 0;
    const animationDiv = document.getElementById('answer-animation');

    function start() {
        // Hide the start box
        document.querySelector('.start-box').style.display = 'none';

        setTimeout(() => {
            // Show the game container
            document.querySelector('.pos-hunter-game').style.display = 'flex';
        }, 500);

        closeAnimation();
    }

    // Function to handle clicking a word
    document.querySelectorAll('.word').forEach((wordElement) => {
        wordElement.addEventListener('click', function() {
            currentWordIndex = this.getAttribute('data-index');
            selectWord(currentWordIndex);
            document.getElementById('edit-input').value = this.innerText;
        });
    });

    // Function to save the edited word
    function saveWord() {
        document.querySelectorAll('.word')[selectedWord].classList.remove('selected');
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


    function checkAnswer() {
        const correctSentence = "{{ $correctSentence }}";
        console.log(correctSentence);
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

        var percentage = ((numberOfCorrect / {{ $numberOfWords }}) * 100).toFixed(1);
        score += (((numberOfCorrect / {{ $numberOfWords }}) * 100) / 10);

        if (percentage > 65) {
            congrats_text.innerHTML = "Congratulations!";
            win.style.display = "block"
            if (percentage == 100) {
                completeMission(3);
            }
        } else {
            congrats_text.innerHTML = "Keep it Up!";
            lost.style.display = "block"
        }
        result_percentage.innerHTML = percentage + '%';
        points.innerHTML = `You Received ${score.toFixed(0)} points.`;

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

        openResult();
        winConfetti(percentage);
    }

    function selectWord(index) {
        // Deselect previously selected word
        if (selectedWord !== null) {
            document.querySelectorAll('.word')[selectedWord].classList.remove('selected');
        }

        // Select the new word
        selectedWord = index;
        document.querySelectorAll('.word')[index].classList.add('selected');
    }

    let resultDisplay = document.getElementById('result-display');

    function closeAnimation() {
        animationDiv.style.display = "flex";
        animationDiv.classList.add('slide-right');

        setTimeout(() => {
            animationDiv.style.display = "none";
            animationDiv.classList.remove('slide-right');
        }, 790);
    }

    function openResult() {
        resultDisplay.style.display = 'flex';
    }

    function closeResult() {
        window.location.reload();
        setTimeout(() => {
            resultDisplay.style.display = 'none';
        }, 1000);
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
</script>

</html>
