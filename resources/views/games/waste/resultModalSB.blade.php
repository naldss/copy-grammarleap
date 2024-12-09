<head>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://cdn.jsdelivr.net/npm/@tsparticles/confetti@3.0.3/tsparticles.confetti.bundle.min.js"></script>
</head>
<div id="resultModal" class="modal" style="display:none;">
    <div class="modal-content-result">
        <h2 id="result"></h2>
        <div id="scoreminusplus"></div>
        <p id="modalRemark"></p>
        <div id="modalPosCounts" hidden></div>
        <p id="modalMissed"></p>
        <div class="buttonTryAgain" onclick="tryAgain()">
            <div class="iconTryAgain"></div>
            <span class="tryAgain">Next Sentence</span>
        </div>
        <a href="{{ route('dashboard') }}" class="buttonTryAgain" id="modalexit">🏠︎ Exit</a>
    </div>
</div>
