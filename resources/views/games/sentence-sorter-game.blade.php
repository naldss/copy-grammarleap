<!DOCTYPE html>
<html lang="en">

<head>
    @include('head')
    <title>GrammarLeap | Sentence Sorter</title>
</head>

<body>
    <div class="sentence-sorter-container">
        <div class="game-name">Sentence Sorter</div>


        <div class="start-box">
            <div>
                <div class="start-button" onclick="start()">START SORTING</div>
                <a href='{{ route('dashboard') }}' class="exit">
                    ↩ Exit
                </a>
            </div>

            <div class="game-description">
                Sentence Sorter is a game where players are given a set of sentences. Players
                must place these sentences into their correct type of sentence.
            </div>
        </div>


        <div class="game-box-sentence-sorter">
            <div id="sentence-pool">
                <div class="question">Drag the sentences to their sentence type.</div>
                @foreach ($sentences as $sentence)
                    <div class="draggable-sentence" draggable="true" data-id="{{ $loop->index }}"
                        data-type="{{ $sentence->type }}">
                        {{ $sentence->sentence }}
                    </div>
                @endforeach
            </div>

            <!-- Bins for Each Sentence Type -->
            <div id="bins">
                @foreach (['declarative', 'interrogative', 'imperative', 'exclamatory'] as $type)
                    <div class="sentence-bin" data-type="{{ $type }}">
                        <h4>{{ ucfirst($type) }}</h4>
                        <div class="bin-content"></div>
                    </div>
                @endforeach
            </div>

            <!-- Submit Button -->
            <button id="check-answer" style="margin-top: 20px; padding: 10px 20px;">Check Answers</button>
        </div>
        <div id="answer-animation">GrammarLeap</div>
    </div>
    @include('games.results.result')

    <script>
        const animationDiv = document.getElementById('answer-animation');
        let resultDisplay = document.getElementById('result-display');

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
                document.querySelector('.game-box-sentence-sorter').style.display = 'flex';
            }, 500);
        }
        let score = 0;

        document.addEventListener('DOMContentLoaded', () => {
            const draggableItems = document.querySelectorAll('.draggable-sentence');
            const sentencePool = document.getElementById('sentence-pool');
            const bins = document.querySelectorAll('.sentence-bin');
            const binAssignments = {}; // Track sentence placement in bins

            // Event listeners for draggable sentences
            draggableItems.forEach(item => {
                item.addEventListener('dragstart', (event) => {
                    event.dataTransfer.setData('sentence-id', event.target.getAttribute('data-id'));
                    event.dataTransfer.setData('sentence-type', event.target.getAttribute(
                        'data-type'));
                });
            });

            // Allow sentences to be dragged back to the pool
            sentencePool.addEventListener('dragover', (event) => {
                event.preventDefault();
            });

            sentencePool.addEventListener('drop', (event) => {
                event.preventDefault();
                const sentenceId = event.dataTransfer.getData('sentence-id');
                const sentenceElement = document.querySelector(
                    `.draggable-sentence[data-id="${sentenceId}"]`);

                // Remove from bin if it's being dragged back to the pool
                Object.keys(binAssignments).forEach((binType) => {
                    if (binAssignments[binType] === sentenceId) {
                        delete binAssignments[binType];
                    }
                });

                sentencePool.appendChild(sentenceElement);
            });

            // Allow sentences to be dragged into bins
            bins.forEach(bin => {
                const binContent = bin.querySelector('.bin-content');

                bin.addEventListener('dragover', (event) => {
                    event.preventDefault();
                });

                bin.addEventListener('drop', (event) => {
                    event.preventDefault();
                    const sentenceId = event.dataTransfer.getData('sentence-id');
                    const sentenceType = event.dataTransfer.getData('sentence-type');
                    const binType = bin.getAttribute('data-type');
                    const sentenceElement = document.querySelector(
                        `.draggable-sentence[data-id="${sentenceId}"]`);

                    // Only allow one sentence in the bin
                    if (binContent.children.length > 0 && binAssignments[binType] !== sentenceId) {
                        alert('This bin already has a sentence.');
                        return;
                    }

                    // Remove the sentence from other bins if already assigned
                    Object.keys(binAssignments).forEach((assignedBinType) => {
                        if (binAssignments[assignedBinType] === sentenceId) {
                            delete binAssignments[assignedBinType];
                        }
                    });

                    // Assign sentence to this bin if it's not already there
                    binContent.appendChild(sentenceElement);
                    binAssignments[binType] = sentenceId;
                });
            });

            // Check answers
            document.getElementById('check-answer').addEventListener('click', () => {
                const totalBins = Object.keys(binAssignments).length;

                // Check if all bins are filled
                if (Object.keys(binAssignments).length < bins.length) {
                    alert('Please fill all the bins.');
                    return;
                }

                Object.entries(binAssignments).forEach(([binType, sentenceId]) => {
                    const sentenceElement = document.querySelector(
                        `.draggable-sentence[data-id="${sentenceId}"]`);
                    const correctType = sentenceElement.getAttribute('data-type');

                    if (binType === correctType) {
                        score++;
                        console.log(score);
                    }
                });

                percentage = score / 4 * 100;
                score = score / 4 * 10;
                if (percentage > 65) {
                    congrats_text.innerHTML = "Congratulations!";
                    win.style.display = "block"
                    if (percentage > 99) {
                        completeMission(5);
                    }
                } else {
                    congrats_text.innerHTML = "Keep it Up!";
                    lost.style.display = "block"
                }
                result_percentage.innerHTML = percentage.toFixed(1) + '%';
                points.innerHTML = `You Received ${score.toFixed(0)} points.`;
                openResult();

                fetch('{{ route('sentence-sorter-points') }}', {
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
                winConfetti(percentage);
            });
        });

        let congrats_text = document.querySelector('.congrats-text');
        let result_percentage = document.querySelector('.result-percentage');
        let points = document.querySelector('.points');
        let win = document.querySelector('.win');
        let lost = document.querySelector('.lost');

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

        function openResult() {
            resultDisplay.style.display = 'flex';
        }

        function closeResult() {
            window.location.reload();
            setTimeout(() => {
                resultDisplay.style.display = 'none';
            }, 1000);
        }
    </script>

</body>

</html>
