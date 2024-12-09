<div id="feedback">The word is incorrect</div>
<script>
    function verbresultconfetti() {
        const defaults = {
            spread: 360,
            ticks: 80,
            gravity: 0,
            decay: 0.94,
            startVelocity: 30,
        };

        confetti({
            ...defaults,
            particleCount: 100,
            scalar: 1,
        });
    }
</script>
