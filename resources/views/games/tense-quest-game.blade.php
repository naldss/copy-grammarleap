<!DOCTYPE html>
<html lang="en">

<head>
    @include('head')
    <title>GrammarLeap | Tense Challenge</title>
</head>

<body>
    <div class="tense-challenge-container">

        <div class="game-name">Tense Challenge</div>
        <div class="start-box">
            <div>
                <div class="start-button" onclick="start()">START CHALLENGE</div>
                <a href='{{ route('dashboard') }}' class="exit">
                    ↩ Exit
                </a>
            </div>

            <div class="game-description">
                Tense Challenge is a game where players are given a sentence where one verb is in its base form. Players
                must correct the tense of the word in order to satisfy the tense of the sentence.
            </div>
        </div>

        <div class="tense-challenge-game">
            <div class="sentence">
                <!-- The sentence will be displayed with the editable word -->
            </div>
            <div class="question">
                Edit the verb to be a <span id="tense-output"></span>
            </div>
            <button id="check-verb-btn">Check Verb</button>
        </div>
    </div>

    <div id="answer-animation">GrammarLeap</div>

    @include('games.results.nextword')
    @include('games.results.result')

    <script>
        const animationDiv = document.getElementById('answer-animation');

        function closeAnimation() {
            animationDiv.style.display = "flex";
            animationDiv.classList.add('slide-right');

            setTimeout(() => {
                animationDiv.style.display = "none";
                animationDiv.classList.remove('slide-right');
            }, 790);
        }

        function start() {
            // Hide the start box
            document.querySelector('.start-box').style.display = 'none';
            closeAnimation();

            setTimeout(() => {
                // Show the game container
                document.querySelector('.tense-challenge-game').style.display = 'flex';
            }, 500);

            // Load the first sentence
            loadNextSentence();
        }

        const patterns = [{
                tense: "Simple Present",
                regex: /\b(?:do|does)\b\s?\w+|\b\w+s\b(?!\s(?:was|is|are|were))/i
            },
            {
                tense: "Present Continuous",
                regex: /\b(?:am|is|are)\b\s\w+ing\b/i
            },
            {
                tense: "Present Perfect",
                regex: /\b(?:have|has)\b\s\w+ed\b(?!\sbeen)/i
            },
            {
                tense: "Present Perfect Continuous",
                regex: /\b(?:have|has)\b\sbeen\s\w+ing\b/i
            },
            {
                tense: "Simple Past",
                regex: /\b\w+ed\b(?!\s(?:have|had))/i
            },
            {
                tense: "Past Continuous",
                regex: /\b(?:was|were)\b\s\w+ing\b/i
            },
            {
                tense: "Past Perfect",
                regex: /\bhad\b\s\w+ed\b(?!\sbeen)/i
            },
            {
                tense: "Past Perfect Continuous",
                regex: /\bhad\b\sbeen\s\w+ing\b/i
            },
            {
                tense: "Future Perfect",
                regex: /\b(?:will|shall)\b\shave\s\w+ed\b/i
            },
            {
                tense: "Simple Future",
                regex: /\b(?:will|shall)\b\s\w+\b(?!\shave)/i
            },
            {
                tense: "Future Continuous",
                regex: /\b(?:will|shall)\b\sbe\s\w+ing\b/i
            },
            {
                tense: "Future Perfect Continuous",
                regex: /\b(?:will|shall)\b\shave\sbeen\s\w+ing\b/i
            }
        ];

        const detectTense = (sentence) => {
            let detectedTense = "Unknown";

            // First, check using regex patterns
            patterns.forEach(pattern => {
                if (pattern.regex.test(sentence)) {
                    detectedTense = pattern.tense;
                }
            });

            return detectedTense;
        };

        const sentences = @json($sentences); // Assuming sentences are passed to the page
        const displaysentence = document.querySelector('.sentence');
        const scoreBox = document.querySelector('.score-box');
        const validTenses = ['PastTense', 'PresentTense', 'FutureTense', 'Auxiliary'];
        let currentIndex = 0;


        function loadNextSentence() {

            console.log(currentIndex + ' | ' + sentences.length);

            let checkVerbButton = document.getElementById('check-verb-btn');
            let feedbackParagraph = document.getElementById('feedback');

            const sentenceWithTags = nlp(sentences[currentIndex].sentence).out('tags');
            let selectedwords = [];

            sentenceWithTags.forEach(wordWithTags => {
                const wordText = wordWithTags.text;
                const wordtags = wordWithTags.tags;

                // Check if the word is a verb and if it is part of a valid tense
                const isVerb = wordtags.includes('Verb');
                const isValidTense = wordtags.some(tag => validTenses.includes(tag)); // Check for a valid tense

                // If it is a verb and belongs to a valid tense, select the word
                if (isVerb && isValidTense) {
                    const wordSelected = wordText;
                    const normalizedWord = nlp(wordSelected).verbs().toInfinitive().out('text');

                    if (wordSelected !== normalizedWord) {
                        selectedwords.push({
                            word: wordSelected,
                            baseForm: normalizedWord
                        });
                    }
                }
            });

            let randomIndex = Math.floor(Math.random() * selectedwords.length);
            let selectedword = selectedwords[randomIndex]; // Fresh selectedword for each iteration

            const editableWord =
                `<span contenteditable="true" id="verb-edit" class="editable-word" data-placeholder="${selectedword.baseForm}"></span>`;
            // Replace the selected word in the sentence with the input field
            let currentSentence = sentences[currentIndex].sentence.replace(selectedword.word, editableWord);
            // Display the updated sentence with the editable word
            displaysentence.innerHTML = currentSentence;

            // Display the detected tense in the 'tense' div
            const tenseOutput = document.getElementById('tense-output');
            tenseOutput.textContent = detectTense(sentences[currentIndex].sentence);

            checkVerbButton.replaceWith(checkVerbButton.cloneNode(true)); // Reset button to remove old listeners
            checkVerbButton = document.getElementById('check-verb-btn'); // Reassign after cloning

            checkVerbButton.addEventListener('click', function() {
                const editedVerb = document.querySelector('.editable-word').textContent.trim();

                if (!editedVerb || editedVerb.trim() === "") {
                    alert('Please input the correct verb.');
                    return;
                }



                feedbackParagraph.style.display = 'flex';

                if (editedVerb === selectedword.word) {
                    feedbackParagraph.textContent = "You Correct!";
                    score++;
                    verbresultconfetti();
                    console.log("user verb: " + editedVerb + " --- correct verb: " + selectedword.word);
                } else {
                    feedbackParagraph.textContent = `Incorrect, Correct Verb: ${selectedword.word}`;
                    console.log("user verb: " + editedVerb + " --- correct verb: " + selectedword.word);
                }
                currentIndex++;

                setTimeout(() => {
                    feedbackParagraph.style.display = 'none';
                }, 2000);

                if (!(currentIndex < sentences.length)) {
                    openResult();
                    percentage = score / sentences.length * 100;
                    score = score / sentences.length * 10;
                    if (percentage > 65) {
                        congrats_text.innerHTML = "Congratulations!";
                        win.style.display = "block"
                        if (percentage > 99) {
                            completeMission(4);
                        }
                    } else {
                        congrats_text.innerHTML = "Keep it Up!";
                        lost.style.display = "block"
                    }

                    fetch('{{ route('tense-quest-points') }}', {
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

                    result_percentage.innerHTML = percentage.toFixed(1) + '%';
                    points.innerHTML = `You Received ${score.toFixed(0)} points.`;
                    winConfetti(percentage);
                } else {
                    loadNextSentence();
                }
            });
        }

        let score = 0;

        let congrats_text = document.querySelector('.congrats-text');
        let result_percentage = document.querySelector('.result-percentage');
        let points = document.querySelector('.points');
        let win = document.querySelector('.win');
        let lost = document.querySelector('.lost');

        let resultDisplay = document.getElementById('result-display');

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
</body>

</html>
