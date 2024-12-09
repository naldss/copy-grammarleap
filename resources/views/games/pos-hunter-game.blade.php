<!DOCTYPE html>
<html lang="en">

<head>
    @include('head')
    <title>GrammarLeap | POS Hunter</title>
</head>

<body>
    <div class="game-container" id="pos-hunter-background">
        <div class="game-name">Parts of Speech Hunter</div>
        <div class="start-box">
            
            <div>
                <div class="start-button" onclick="start()">START HUNTING</div>
                <a href='{{ route('dashboard') }}' class="exit">
                    ↩ Exit
                </a>
            </div>
            <div class="game-description">
                POS Hunter is an interactive game where players identify parts of speech in sentences. Players will be
                presented with sentences and has select words that aligns with the correct parts of speech.
            </div>
        </div>

        <div class="pos-hunter-game">
            <div id="sentence-display" class="sentence"></div>
            <hr>
            <div id="question" class="question"></div>
            <div class="final-answer">
                <button onclick="submitAnswer()">Final Answer</button>
            </div>
        </div>
        <div id="answer-animation">GrammarLeap</div>

        @include('games.results.result')
    </div>
</body>

<script>
    let currentSentenceIndex = 0;
    let selectedWord = [];
    let randomTag;
    const sentences = @json($sentences);
    let allTags = [];

    function start() {
        // Hide the start box
        document.querySelector('.start-box').style.display = 'none';

        setTimeout(() => {
            // Show the game container
            document.querySelector('.pos-hunter-game').style.display = 'flex';
        }, 500);

        // Load the first sentence
        loadSentence();
    }



    sentences.forEach(function(sentence) {
        let sentenceText = sentence.sentence;
        let words = sentenceText.split(' ');
        let sentenceTags = [];

        words.forEach(function(word) {
            let wordTag = nlp(word);
            let tags = wordTag.out('tags')[0];

            let wordTags = tags.tags;
            // console.log(tags.tags);

            wordTags.forEach(wordtag => {
                sentenceTags.push(wordtag);
            });
        });

        allTags.push(sentenceTags);
        // console.log('sentencetags:'+sentenceText);
        // console.log(sentenceTags);
        // console.log('');
    });
    // console.log('alltags:');
    // console.log(allTags);



    function loadQuestion(sentenceIndex) {
        let tags = allTags[sentenceIndex];
        // List of valid parts of speech
        let partsOfSpeech = ["Noun", "Pronoun", "Verb", "Adjective", "Adverb", "Preposition", "Conjunction", "Modal"];

        do {
            let intersection = tags.filter(tag => partsOfSpeech.includes(tag));
            let randomWordIndex = Math.floor(Math.random() * intersection.length);

            randomTag = intersection[randomWordIndex];
        } while (randomTag === undefined || randomTag === 'undefined');

        console.log(randomTag);

        const questionDisplay = document.getElementById('question');
        questionDisplay.innerHTML = 'Select words that represent "' + randomTag + '".';
    }

    function loadSentence() {
        // Get current sentence
        closeAnimation();

        setTimeout(() => {
            const sentence = sentences[currentSentenceIndex].sentence;

            // Split sentence into words and display them
            const words = sentence.split(' ');
            const sentenceDisplay = document.getElementById('sentence-display');
            sentenceDisplay.innerHTML = '';
            words.forEach((word, index) => {
                const wordSpan = document.createElement('span');
                wordSpan.textContent = word;
                wordSpan.classList.add('word');
                wordSpan.onclick = () => selectWord(index);
                sentenceDisplay.appendChild(wordSpan);
            });

            selectedWord = []; // Reset selected word

            loadQuestion(currentSentenceIndex);
        }, 500);
    }

    function selectWord(index) {
        const words = document.querySelectorAll('.word');
        const wordElement = words[index];

        if (wordElement.classList.contains('selected')) {
            // If the word is already selected, deselect it and remove from the array
            wordElement.classList.remove('selected');
            selectedWord = selectedWord.filter((i) => i !== index);
        } else {
            // Select the clicked word and add to the array
            wordElement.classList.add('selected');
            selectedWord.push(index);
            console.log(selectedWord);
        }
    }

    let score = 0;
    const animationDiv = document.getElementById('answer-animation');

    function closeAnimation() {
        animationDiv.style.display = "flex";
        animationDiv.classList.add('slide-right');

        setTimeout(() => {
            animationDiv.style.display = "none";
            animationDiv.classList.remove('slide-right');
        }, 790);
    }

    let congrats_text = document.querySelector('.congrats-text');
    let result_percentage = document.querySelector('.result-percentage');
    let points = document.querySelector('.points');
    let win = document.querySelector('.win');
    let lost = document.querySelector('.lost');

    function checkSelectedWords() {
        let a = 0; // Count for matches
        let b = 0; // Count for non-matches
        let c = nlp(sentences[currentSentenceIndex].sentence)
            .match(`#${randomTag}`)
            .length;

        // Loop through each selected word index
        selectedWord.forEach((index) => {
            const word = document.querySelectorAll('.word')[index].textContent;

            // Use compromise NLP library to analyze the word
            let taggedWord = nlp(word);

            // Check if the word contains the required tag
            if (taggedWord.has(`#${randomTag}`)) {
                a++; // Increment 'a' for match
            } else {
                b++; // Increment 'b' for non-match
            }
        });

        return {
            matched: a,
            notMatched: b,
            numOfOccurences: c
        };
    }

    userAccuracy = 0;
    let occurences = 0;

    function submitAnswer() {
        if (selectedWord === null) {
            alert('Please select a word first.');
            return;
        }

        const results = checkSelectedWords();
        correct = results.matched;
        incorrect = results.notMatched;
        occurences += results.numOfOccurences;

        if (incorrect <= correct) {
            score += (correct - incorrect);
        } else {
            score += 0;
        }

        console.log(`Matched: ${results.matched}, Not Matched: ${results.notMatched}`);

        console.log('score: ' + score);

        accuracyScore = score / occurences * 100;
        console.log(accuracyScore);

        currentSentenceIndex++;
        if (currentSentenceIndex <= sentences.length - 1) {
            loadSentence();
        } else {
            percentage = accuracyScore.toFixed(1);
            if (percentage > 65 && score > 4) {
                congrats_text.innerHTML = "Congratulations!";
                win.style.display = "block"
                if (percentage > 99 && score >= correct) {
                    completeMission(2);
                }
            } else {
                congrats_text.innerHTML = "Keep it Up!";
                lost.style.display = "block"
            }
            result_percentage.innerHTML = percentage + '%';
            points.innerHTML = `You Received ${score.toFixed(0)} points.`;


            fetch('{{ route('pos-hunter-points') }}', {
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
    }

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

</html>
