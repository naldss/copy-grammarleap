<div onclick="closeResult()" id="result-display" class="score-box">

    <div class="congrats-text">what</div>
    <div class="score-box-horizontal">
        <img class="win" src="{{ Vite::asset('resources/Images/Games/results/smiley-emoji.gif') }}"
            style="display: none">
        <img class="lost" src="{{ Vite::asset('resources/Images/Games/results/sad-gif.gif') }}" style="display: none">
        <div>
            <div class="result">
                <div class="correct">Performance Score</div>
                <div class="result-percentage">
                    none%
                </div>
            </div>

        </div>

    </div>
    <div class="points">You Received none.</div>

    <div class="cursor-text">Click Anywhere to Exit.</div>
</div>
<script>
    // Get the elements
    const hoverArea = document.querySelector('.score-box');
    const cursorText = document.querySelector('.cursor-text');

    // Event listener for mouseenter on the hover area
    hoverArea.addEventListener('mouseenter', () => {
        cursorText.style.display = 'block'; // Show the cursor text when hover starts
    });

    // Event listener for mousemove on the entire document
    document.addEventListener('mousemove', (e) => {
        // Position the text near the cursor
        cursorText.style.left = e.pageX + 10 + 'px'; // 10px offset from the cursor
        cursorText.style.top = e.pageY + 10 + 'px'; // 10px offset from the cursor
    });

    // Event listener for mouseleave to hide the text
    hoverArea.addEventListener('mouseleave', () => {
        cursorText.style.display = 'none'; // Hide the cursor text when hover ends
    });




    function winConfetti(percentage) {
        if (percentage > 65) {
            const duration = 4 * 1000,
                animationEnd = Date.now() + duration,
                defaults = {
                    startVelocity: 30,
                    spread: 300,
                    ticks: 10,
                    zIndex: 999,
                };

            function randomInRange(min, max) {
                return Math.random() * (max - min) + min;
            }

            const interval = setInterval(function() {
                const timeLeft = animationEnd - Date.now();

                if (timeLeft <= 0) {
                    return clearInterval(interval);
                }

                const particleCount = 50 * (timeLeft / duration);

                // since particles fall down, start a bit higher than random
                confetti(
                    Object.assign({}, defaults, {
                        particleCount,
                        origin: {
                            x: randomInRange(0.1, 0.3),
                            y: Math.random() - 0.2
                        },
                    })
                );
                confetti(
                    Object.assign({}, defaults, {
                        particleCount,
                        origin: {
                            x: randomInRange(0.7, 0.9),
                            y: Math.random() - 0.2
                        },
                    })
                );
            }, 250);
        } else {
            confetti({
                particleCount: 100,
                spread: 70,
                origin: {
                    y: 0.6
                },
            });
        }

    }
</script>
