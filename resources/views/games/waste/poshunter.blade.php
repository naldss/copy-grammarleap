<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POS Hunter | GrammarLeap</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://cdn.jsdelivr.net/npm/compromise@11"></script>
</head>
@include('dashboard.header2')

<body class="games-bg-posh">
    @include('games.howtoPOS')
    <div class="pos-outer">
        <div class="top-access">
            <a href="{{ route('dashboard') }}" class="gobackhome">🏠︎ Exit</a>
            <div class="open-admin-access-box">
                <a href="javascript:void(0);" class="moreinfo" id="toggleAdminAccess">Open Admin Access →</a>
                <div id="adminAccessContainer" style="display: none;">
                    <a href="{{ route('pos_hunter.index') }}" class="moreinfo" id="editClassicStudyContent">Edit
                        POS Hunter Contents</a>
                </div>
            </div>
        </div>

        <div class="poshunter-container">
            <div class="sentence-container" id="sentenceBox">
                <div>
                    <span class="gamename">POS Hunter | </span>
                    <span class="howto" onclick="howtomodal()">How To Play?</span>
                </div>
                <div class="sentence">
                    @foreach ($explodeSentence as $word)
                        <div class="word" draggable="true">{{ $word }} </div>
                    @endforeach
                </div>
            </div>
            <div class="boxes-container">
                <div class="box1">
                    <div class="pos-name">Noun</div>
                    <div class="pos-box" id="noun"></div>
                </div>
                <div class="box1">
                    <div class="pos-name">Pronoun</div>
                    <div class="pos-box" id="pronoun"></div>
                </div>
                <div class="box1">
                    <div class="pos-name">Verb</div>
                    <div class="pos-box" id="verb"></div>
                </div>
                <div class="box1">
                    <div class="pos-name">Adjective</div>
                    <div class="pos-box" id="adjective"></div>
                </div>
                <div class="box1">
                    <div class="pos-name">Adverb</div>
                    <div class="pos-box" id="adverb"></div>
                </div>
                <div class="box1">
                    <div class="pos-name">Preposition</div>
                    <div class="pos-box" id="preposition"></div>
                </div>
                <div class="box1">
                    <div class="pos-name">Conjunction</div>
                    <div class="pos-box" id="conjunction"></div>
                </div>
                <div class="box1">
                    <div class="pos-name">Interjection</div>
                    <div class="pos-box" id="interjection"></div>
                </div>
            </div>
            <div class="check-accuracy" onclick="compareWords()" id="showresult">Check Accuracy ✔</div>
        </div>
        @include('games.resultModal')
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





        var sentenceBox = document.getElementById("sentenceBox");
        var words = document.getElementsByClassName("word");
        var boxes = document.querySelectorAll('.pos-box');

        for (var i = 0; i < words.length; i++) {
            words[i].addEventListener('dragstart', function(e) {
                e.target.classList.add('dragged');
                e.dataTransfer.setData('text/plain', e.target.textContent);
            });

            words[i].addEventListener('dragend', function(e) {
                e.target.classList.remove('dragged');
            });
        }

        for (var i = 0; i < boxes.length; i++) {
            boxes[i].addEventListener('dragover', function(e) {
                e.preventDefault();
            });

            boxes[i].addEventListener('drop', function(e) {
                e.preventDefault();
                var data = e.dataTransfer.getData('text/plain');
                if (!this.querySelector('.word[data-text="' + data + '"]')) {
                    var newItem = document.createElement('span');
                    newItem.textContent = data;
                    newItem.classList.add('word');
                    newItem.setAttribute('data-text', data);
                    this.appendChild(newItem);
                    makeWordsDraggable();
                }
            });

            if (boxes[i] !== sentenceBox) {
                boxes[i].addEventListener('dragleave', function(e) {
                    e.preventDefault();
                    var draggedWord = document.querySelector('.word.dragged');
                    if (draggedWord && draggedWord.parentNode === this) {
                        draggedWord.parentNode.removeChild(draggedWord);
                    }
                });
            }
        }

        function makeWordsDraggable() {
            var newWords = document.querySelectorAll('.pos-box .word');
            for (var i = 0; i < newWords.length; i++) {
                newWords[i].setAttribute('draggable', 'true');
                newWords[i].addEventListener('dragstart', function(e) {
                    e.target.classList.add('dragged');
                    e.dataTransfer.setData('text/plain', e.target.textContent);
                });

                newWords[i].addEventListener('dragend', function(e) {
                    e.target.classList.remove('dragged');
                });
            }
        }

        sentenceBox.addEventListener('drop', function(e) {
            e.preventDefault();
            var data = e.dataTransfer.getData('text/plain');
            var newItem = document.createElement('span');
            newItem.textContent = data;
            newItem.classList.add('word', 'dragged');
            this.appendChild(newItem);
            makeWordsDraggable();
        });

        function countPos() {
            var wordsInBox = document.getElementById('sentenceBox').getElementsByClassName('word');
            var count = 0;
            Array.from(wordsInBox).forEach(function(wordElement) {
                var word = wordElement.innerText.trim();
                var doc = nlp(word);
                var tagsDoc = doc.out('tags')[0].tags;
                var partsOfSpeech = ['Noun', 'Pronoun', 'Verb', 'Adjective', 'Adverb', 'Preposition', 'Conjunction',
                    'Interjection'
                ];
                if (tagsDoc.some(tag => partsOfSpeech.includes(tag))) {
                    count++;
                }
            });
            return count;
        }

        var passed = 0;

        function compareWords() {
            // Get the tagged words
            var taggedWords = [];
            var sentence = document.getElementById('sentenceBox').innerText.trim();
            var doc = nlp(sentence);
            doc.sentences().forEach(function(sentence) {
                taggedWords = taggedWords.concat(sentence.terms().out('tags'));
            });

            // Object to hold counts of each part of speech
            var counts = {
                noun: 0,
                pronoun: 0,
                verb: 0,
                adjective: 0,
                adverb: 0,
                preposition: 0,
                conjunction: 0,
                interjection: 0
            };

            // Iterate through each box and count the occurrences of each part of speech
            boxes.forEach(function(box) {
                var pos = box.id;
                var wordsInBox = box.querySelectorAll('.word');
                for (var i = 0; i < wordsInBox.length; i++) {
                    var word = wordsInBox[i].textContent.trim();
                    var taggedWord = taggedWords.find(function(taggedWord) {
                        return taggedWord.text === word;
                    });
                    if (taggedWord && taggedWord.tags.includes(pos.charAt(0).toUpperCase() + pos.slice(1))) {
                        // If the word's tag matches the box's part of speech, increment the count
                        counts[pos]++;
                    }
                }
            });

            // Calculate the total count of words belonging to the 8 parts of speech
            var totalCount = Object.values(counts).reduce((acc, cur) => acc + cur, 0);

            var numOfPos = countPos();

            // Calculate the percentage of correct matches
            var percentage = (totalCount / numOfPos) * 100;

            // Calculate the score based on the percentage
            var score = Math.round(percentage / 5); // 20 points for 100%, 0 points for 0%
            var incorrect = ((((numOfPos - totalCount) / numOfPos) * 100) / 5).toFixed(2);

            document.getElementById("modalMissed").innerText = "Missed: " + (numOfPos - totalCount);

            if (percentage >= 60) {
                passed = 1;
                document.getElementById("result").innerText = "PASSED!";
                document.getElementById("scoreminusplus").innerText = "You got " + score + " Points.";
                document.getElementById("modalRemark").innerText = "You got " + percentage.toFixed(2) +
                    "% Correct.";
                // Send an AJAX request to add points
                fetch('{{ route('add.points-pos') }}', {
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

                if (percentage == 100) {
                    completeMission(5);
                }
            } else if (percentage < 60) {
                document.getElementById("result").innerText = "FAILED.";
                document.getElementById("result").style.color = "red";
                document.getElementById("scoreminusplus").innerText = "You were minused " + incorrect +
                    " points. \n You must surpass 60%.";
                document.getElementById("modalRemark").innerText = "You got " + percentage.toFixed(2) + "% Correct.";
                fetch('{{ route('minus.points-pos') }}', {
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
                            console.error('Failed to add points:', response.statusText);
                        }
                    })
                    .catch(error => {
                        console.error('Error adding points:', error);
                    });
            } else {
                document.getElementById("result").innerText = "what?!.";
            }

            // Display the modal
            openModal();

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

        function tryAgain() {
            location.reload();
        }

        function howtomodal() {
            document.getElementById('howtoPOS').style.display = 'flex';
        }

        function closehowto() {
            document.getElementById('howtoPOS').style.display = 'none';
        }
    </script>
</body>

</html>
