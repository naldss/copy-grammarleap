<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GrammarLeap | Home</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

@include('dashboard.header')
@include('dashboard.quiz-room.create-room-0')
@include('dashboard.quiz-room.join-room')


<body class="background">
    <div class="dashboard-container">
        <div class="dashboard-left">
            <div class="profile-box">
                <div class="profile-name">
                    {{ ucfirst(strtolower($user->first_name)) }}
                    {{ ucfirst(strtolower($user->last_name)) }}
                </div>
                <hr>
                <div class="moreinfo" id="openmoreinfo"">Show More Information ↓</div>
                <div id="information">
                    @if ($user->isAdmin)
                        <div class="adminaccess">
                            ✔ Admin Access
                        </div>
                    @endif
                    <div>Email: {{ $user->email }}</div>
                    <div>Birthday: {{ $user->birthday }}</div>
                    <div>Sex: {{ ucfirst(strtolower($user->gender)) }}</div>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                    <a href="#"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <div class="logout-button">
                            ↩ Logout
                        </div>
                    </a>
                </div>
            </div>
            <div class="apps-container">
                {{-- <a href="{{ route('classicstudy') }}" class="apps" id="apps-classic-study">
                    <div class="apps-opacity">
                        <div class="app-logo" id="classic-study"></div>
                        <div class="app-name-dashboard">
                            <div>Classic</div>
                            <div>Study</div>
                        </div>
                        <div class="app-details">Quizzes Completion: {{ $quizzesCompletion }}%</div>
                    </div>
                </a> --}}

                <a href="{{ route('pos-hunter-display') }}" class="apps" id="apps-pos-hunter">
                    <div class="apps-opacity">
                        <div class="app-logo" id="pos-hunter"></div>
                        <div class="app-name-dashboard">
                            <div>POS</div>
                            <div>Hunter</div>
                        </div>
                        <div class="app-details">Mastery Points: {{ $user->PosH_total }}</div>
                    </div>
                </a>

                <a href="{{ route('sentencebuilder') }}" class="apps" id="apps-sentence-builder">
                    <div class="apps-opacity">
                        <div class="app-logo" id="sentence-builder"></div>
                        <div class="app-name-dashboard">
                            <div>Sentence</div>
                            <div>Builder</div>
                        </div>
                        <div class="app-details">Mastery Points: {{ $user->SB_total }}</div>
                    </div>
                </a>
                <a href="{{ route('tense-quest-display') }}" class="apps" id="apps-tense-challenge">
                    <div class="apps-opacity">
                        <div class="app-logo" id="tense-challenge"></div>
                        <div class="app-name-dashboard">
                            <div>Tense</div>
                            <div>Challenge</div>
                        </div>
                        <div class="app-details">Mastery Points: {{ $user->TC_total }}</div>
                    </div>
                </a>
                <a href="{{ route('sentence-sorter-display') }}" class="apps" id="apps-sentence-sorter">
                    <div class="apps-opacity">
                        <div class="app-logo" id="sentence-sorter"></div>
                        <div class="app-name-dashboard">
                            <div>Sentence</div>
                            <div>Sorter</div>
                        </div>
                        <div class="app-details">Mastery Points: {{ $user->SS_total }}</div>
                    </div>
                </a>
            </div>
            @include('dashboard.quiz-room.quiz-room-list')
        </div>
        <div class="dashboard-right">
            <div class="goals-box">
                <div class="badges-title">
                    Daily Missions
                </div>

                <div class="mission-container">
                    @if ($userMissions->isNotEmpty())
                        @foreach ($userMissions as $userMission)
                            <div class="mission-box"
                                @if ($userMission->claimed) style="background-color: rgb(247, 245, 253); border: #00000020 solid .1vh; box-shadow: none;" @endif>
                                <div class="mission-title">{{ $userMission->mission->title }}</div>
                                <div class="mission-description">{{ $userMission->mission->description }}</div>
                                <div class="mission-status-claim">
                                    <div class="mission-status">Status:
                                        {{ $userMission->completed ? 'Completed ✔' : 'Not Completed' }}</div>
                                    @if ($userMission->completed)
                                        @if ($userMission->claimed)
                                            <button class="mission-claim" disabled>Points Claimed</button>
                                        @elseif (!$userMission->claimed)
                                            <button data-mission-id="{{ $userMission->mission_id }}"
                                                onclick="submitClaimPoints(this)" class="mission-claim">Claim
                                                Points</button>
                                        @endif
                                    @endif
                                </div>
                            </div>
                            <div>
                            </div>
                        @endforeach
                    @else
                        <p>No missions available.</p>
                    @endif
                    <div class="note">
                        Note: Missions refresh everyday.
                    </div>

                </div>
            </div>


            <div class="leaderboard-box">
                <div class="leaderboard-head">
                    <div id="previous" class="leaderboard-button">◄</div>
                    <div class="leaderboard-title" id="game-title">POS Hunter Leaderboard</div>
                    <div id="next" class="leaderboard-button">►</div>
                </div>
                <div id="leaderboard-content">
                    <!-- The leaderboard content will be loaded here -->
                </div>
            </div>
            {{-- <a class="game-badges-box" href="{{ route('showbadges') }}">
                <div class="badges-title">Badges</div>
                <hr>
                <div class="badge-box">
                    <div class="level-badges-posh" id="level-div-posh"></div>
                    <div class="badge-details">
                        <div class="badges-game-name">POS Hunter</div>
                        <div id="user-badge-level-posh"> </div>
                    </div>
                </div>
                <div class="badge-box">
                    <div class="level-badges-sb" id="level-div-sb"></div>
                    <div class="badge-details">
                        <div class="badges-game-name">Sentence Builder</div>
                        <div id="user-badge-level-sb"> </div>
                    </div>
                </div>
                <hr>
                <div class="aboutbadges">Click area to learn more about badges.</div>
            </a> --}}

        </div>
    </div>
</body>
@include('dashboard.footer')
<script>
    @if (session('success'))
        alert("{{ session('success') }}");
    @endif

    // Check for error messages
    @if ($errors->any())
        @foreach ($errors->all() as $error)
            alert("{{ $error }}");
        @endforeach
    @endif






    document.getElementById('createRoomButton').addEventListener('click', function() {
        document.querySelector('.add-room-modal').style.display = "flex";
    });
    document.getElementById('joinRoomButton').addEventListener('click', function() {
        document.querySelector('.join-room').style.display = "flex";
    });

    // List of available games and their corresponding routes
    const games = [{
            name: "POS Hunter",
            route: "/posh-leaderboard"
        },
        {
            name: "Sentence Builder",
            route: "/sentence-builder-leaderboard"
        },
        {
            name: "Tense Challenge",
            route: "/tense-challenge-leaderboard"
        },
        {
            name: "Sentence Sorter",
            route: "/sentence-sorter-leaderboard"
        },
        // Add more games and their routes as needed
    ];
    

    let currentGameIndex = 0; // Start with the first game

    // Function to fetch leaderboard data for the current game
    function fetchLeaderboard() {
        const currentGame = games[currentGameIndex];
        const leaderboardTitle = document.getElementById('game-title');
        const leaderboardContent = document.getElementById('leaderboard-content');

        // Update the title based on the current game
        leaderboardTitle.textContent = currentGame.name + " Leaderboard";

        // Use fetch API to get leaderboard data for the current game
        fetch(currentGame.route)
            .then(response => response.text())
            .then(data => {
                leaderboardContent.innerHTML = data; // Update the leaderboard content
            })
            .catch(error => console.error('Error loading leaderboard:', error));
    }

    // Event listener for the "previous" button
    document.getElementById('previous').addEventListener('click', () => {
        currentGameIndex = (currentGameIndex - 1 + games.length) % games.length; // Go to the previous game
        fetchLeaderboard(); // Fetch the new leaderboard data
    });

    // Event listener for the "next" button
    document.getElementById('next').addEventListener('click', () => {
        currentGameIndex = (currentGameIndex + 1) % games.length; // Go to the next game
        fetchLeaderboard(); // Fetch the new leaderboard data
    });

    // Initial leaderboard fetch
    fetchLeaderboard();














    function submitClaimPoints(link) {
        var missionId = link.getAttribute('data-mission-id');

        fetch('{{ route('claimpoints', '__MISSION_ID__') }}'.replace('__MISSION_ID__', missionId), {
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
                    alert('Points claimed successfully!');
                } else {
                    alert('Error claiming points.');
                }
            })
            .catch(error => {
                console.error('Error:', error);
            });

        location.reload();
    }

    // const posHunterLevel = {{ $user->PosH_total }};
    // const badgeleveltext = document.getElementById('user-badge-level-posh');
    // const badgeleveltext1 = document.getElementById('user-badge-level-sb');

    // levelbadgeposh = document.getElementById('level-div-posh');

    // if (posHunterLevel < 200) {
    //     levelbadgeposh.classList.remove("level-badges-posh");
    //     levelbadgeposh.classList.add("level-id1-posh");
    //     badgeleveltext.innerHTML = "A beginner's eye for accuracy, identifying basic parts of speech with precision.";
    // } else if (posHunterLevel < 400) {
    //     levelbadgeposh.classList.remove("level-badges-posh");
    //     levelbadgeposh.classList.add("level-id2-posh");
    //     badgeleveltext.innerHTML =
    //         "Advancing with sharper skills, this archer places words more accurately across parts of speech.";
    // } else if (posHunterLevel < 600) {
    //     levelbadgeposh.classList.remove("level-badges-posh");
    //     levelbadgeposh.classList.add("level-id3-posh");
    //     badgeleveltext.innerHTML = "Expert archer who rarely misses, identifying parts of speech with high accuracy.";
    // } else if (posHunterLevel < 800) {
    //     levelbadgeposh.classList.remove("level-badges-posh");
    //     levelbadgeposh.classList.add("level-id4-posh");
    //     badgeleveltext.innerHTML =
    //         "Taking aim at grammar with confidence, targeting and categorizing parts of speech effectively.";
    // } else if (posHunterLevel < 1000) {
    //     levelbadgeposh.classList.remove("level-badges-posh");
    //     levelbadgeposh.classList.add("level-id5-posh");
    //     badgeleveltext.innerHTML =
    //         "A rifler with strong skills, placing parts of speech with enhanced speed and accuracy.";
    // } else if (posHunterLevel < 1200) {
    //     levelbadgeposh.classList.remove("level-badges-posh");
    //     levelbadgeposh.classList.add("level-id6-posh");
    //     badgeleveltext.innerHTML =
    //         "A skilled rifler, hitting even complex parts of speech with precision and consistency.";
    // } else if (posHunterLevel < 1400) {
    //     levelbadgeposh.classList.remove("level-badges-posh");
    //     levelbadgeposh.classList.add("level-id7-posh");
    //     badgeleveltext.innerHTML =
    //         "A sharp-eyed player with precision placement, excelling in complex categorization tasks.";
    // } else if (posHunterLevel < 1600) {
    //     levelbadgeposh.classList.remove("level-badges-posh");
    //     levelbadgeposh.classList.add("level-id8-posh");
    //     badgeleveltext.innerHTML =
    //         "Nearly flawless, the sniper strikes confidently, quickly finding correct parts of speech.";
    // } else if (posHunterLevel < 1800 || posHunterLevel > 1800) {
    //     levelbadgeposh.classList.remove("level-badges-posh");
    //     levelbadgeposh.classList.add("level-id9-posh");
    //     badgeleveltext.innerHTML =
    //         "A master sniper, achieving the highest accuracy and speed in categorizing parts of speech.";
    // }

    // const sbLevel = {{ $user->SB_total }};

    // levelbadgesb = document.getElementById('level-div-sb');

    // if (sbLevel < 200) {
    //     levelbadgesb.classList.remove("level-badges-sb");
    //     levelbadgesb.classList.add("level-id1-sb");
    //     badgeleveltext1.innerHTML = "A beginner builder, laying the foundation by fixing basic sentence errors.";
    // } else if (sbLevel < 400) {
    //     levelbadgesb.classList.remove("level-badges-sb");
    //     levelbadgesb.classList.add("level-id2-sb");
    //     badgeleveltext1.innerHTML =
    //         "Gaining skill, the mason corrects complex errors in capitalization, punctuation, and pluralization.";
    // } else if (sbLevel < 600) {
    //     levelbadgesb.classList.remove("level-badges-sb");
    //     levelbadgesb.classList.add("level-id3-sb");
    //     badgeleveltext1.innerHTML = "An advanced mason, expertly reconstructing sentences with minimal mistakes.";
    // } else if (sbLevel < 800) {
    //     levelbadgesb.classList.remove("level-badges-sb");
    //     levelbadgesb.classList.add("level-id4-sb");
    //     badgeleveltext1.innerHTML =
    //         "Directing sentence structure improvements, the foreman corrects common grammar errors.";
    // } else if (sbLevel < 1000) {
    //     levelbadgesb.classList.remove("level-badges-sb");
    //     levelbadgesb.classList.add("level-id5-sb");
    //     badgeleveltext1.innerHTML = "Highly skilled, the foreman fixes intricate errors with great accuracy and speed.";
    // } else if (sbLevel < 1200) {
    //     levelbadgesb.classList.remove("level-badges-sb");
    //     levelbadgesb.classList.add("level-id6-sb");
    //     badgeleveltext1.innerHTML =
    //         "A top-tier foreman, restructuring even challenging sentences into grammatically correct forms.";
    // } else if (sbLevel < 1400) {
    //     levelbadgesb.classList.remove("level-badges-sb");
    //     levelbadgesb.classList.add("level-id7-sb");
    //     badgeleveltext1.innerHTML =
    //         "An expert sentence builder, capable of tackling complex sentence fixes with precision.";
    // } else if (sbLevel < 1600) {
    //     levelbadgesb.classList.remove("level-badges-sb");
    //     levelbadgesb.classList.add("level-id8-sb");
    //     badgeleveltext1.innerHTML =
    //         "An elite engineer, reconstructing sentences with exceptional accuracy and minimal effort.";
    // } else if (sbLevel < 1800 || sbunterLevel > 1800) {
    //     levelbadgesb.classList.remove("level-badges-sb");
    //     levelbadgesb.classList.add("level-id9-sb");
    //     badgeleveltext1.innerHTML =
    //         "A master engineer, achieving flawless sentence construction with advanced grammar skills.";
    // }

    document.addEventListener('DOMContentLoaded', function() {
        const infoButton = document.getElementById('openmoreinfo');
        const infoSection = document.getElementById('information');

        infoButton.addEventListener('click', function() {
            if (infoSection.style.display === 'none' || infoSection.style.display === '') {
                infoSection.style.display = 'block';
                infoButton.innerHTML = 'Show Less Information ↑';

                // infoButton.innerHTML = 'Show More Information';
            } else {
                infoSection.style.display = 'none'; // Hide the section
                // infoButton.innerHTML = 'Show Less Information';

                infoButton.innerHTML = 'Show More Information ↓';

            }
        });
    });
</script>

</html>
