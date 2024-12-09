<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Classic Study | GrammarLeap</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
@include('dashboard.header')

<body class="background">
    <div class="classic-study-container">
        <div class="cs-study-name-box">
            <div class="cs-top-left">
                <a href="{{ route('dashboard') }}" class="gobackhome">🏠︎ Exit</a>
                <div class="profile-name">Classic Study</div>
            </div>

            <div class="open-admin-access-box">
                <a href="javascript:void(0);" class="moreinfo" id="toggleAdminAccess">← Open Admin Access</a>
                <div id="adminAccessContainer" style="display: none;">
                    <a href="{{ route('classicstudyedit') }}" class="moreinfo" id="editClassicStudyContent">Edit
                        Contents | </a>
                    <a href="{{ route('classic_study_quiz.index') }}" class="moreinfo" id="editClassicStudyQuizzes">Edit
                        Quizzes</a>
                </div>
            </div>

        </div>
        <div class="cs_buttons_container">
            <div class="cs-level-buttons" id="foundational">
                <div class="cs-title">Foundational</div>
                <div class="cs-subtitle">Building the Basics</div>
            </div>
            @foreach ($allContent as $index => $Content)
                @if ($Content->topic_level == 'foundational')
                    @php
                        // Fetch the quiz score for the current Content ID (topic ID) and the authenticated user ID
                        $quizScore = \App\Models\UserQuizScore::where('user_id', auth()->id())
                            ->where('cs_topic_id', $Content->id)
                            ->first();

                        $scorePercentage = $quizScore
                            ? number_format(($quizScore->score / $quizScore->questions_length) * 100, 0)
                            : null;
                    @endphp

                    <a href="{{ route('cs-item-content', $Content->id) }}" class="cs-buttons"
                        id="cs-button-foundational"
                        @if ($index % 2 == 1)
                            @if ($scorePercentage == 100)
                                style="background-color: #83deff; box-shadow: none; border: none;"
                            @else
                                style="background-color: #f5fcff;"
                            @endif
                        @else
                            @if ($scorePercentage == 100)
                                style="background-color: #b4ebff; box-shadow: none; border: none;"
                            @else
                                style="background-color: #ffffff;"
                            @endif
                        @endif>

                        <div>
                            {{ $Content->topic_title }}
                        </div>
                        @if ($quizScore)
                            <div class="resultCompleteContainer">
                                @if ($scorePercentage == 100)
                                    <div class="complete">✔ Complete</div>
                                @endif
                                <div class="quizresult">
                                    Quiz Result: {{ $scorePercentage }}%
                                </div>
                            </div>
                            {{-- @else
                            <div class="quizresult">
                                No score recorded yet
                            </div> --}}
                        @endif
                    </a>
                @endif
            @endforeach

            <br style="margin: 1vh; display: block; content: '';">

            <div class="cs-level-buttons" id="proficiency">
                <div class="cs-title">Proficiency</div>
                <div class="cs-subtitle">Intermidiate Knowledge</div>
            </div>
            @foreach ($allContent as $index => $Content)
                @if ($Content->topic_level == 'proficiency')
                    @php
                        $quizScore = \App\Models\UserQuizScore::where('user_id', auth()->id())
                            ->where('cs_topic_id', $Content->id)
                            ->first();

                        $scorePercentage = $quizScore
                            ? number_format(($quizScore->score / $quizScore->questions_length) * 100, 0)
                            : null;
                    @endphp

                    <a href="{{ route('cs-item-content', $Content->id) }}" class="cs-buttons" id="cs-button-proficiency"
                        @if ($index % 2 == 1)
                            @if ($scorePercentage == 100)
                                style="background-color: #00c05980; box-shadow: none; border: none;"
                            @else
                                style="background-color: #e7fff2;"
                            @endif
                        @else
                            @if ($scorePercentage == 100)
                                style="background-color: #00c05980; box-shadow: none; border: none;"
                            @else
                                style="background-color: #ffffff;"
                            @endif
                        @endif>
                        <div>
                            {{ $Content->topic_title }}
                        </div>
                        @if ($quizScore)
                            <div class="resultCompleteContainer">
                                @if ($scorePercentage == 100)
                                    <div class="complete">✔ Complete</div>
                                @endif
                                <div class="quizresult">
                                    Quiz Result: {{ $scorePercentage }}%
                                </div>
                            </div>
                        @endif
                    </a>
                @endif
            @endforeach

            <br style="margin: 1vh; display: block; content: '';">

            <div class="cs-level-buttons" id="advanced">
                <div class="cs-title">Advanced</div>
                <div class="cs-subtitle">Achieving Mastery</div>
            </div>
            @foreach ($allContent as $index => $Content)
                @if ($Content->topic_level == 'advanced')
                    @php
                        $quizScore = \App\Models\UserQuizScore::where('user_id', auth()->id())
                            ->where('cs_topic_id', $Content->id)
                            ->first();

                        $scorePercentage = $quizScore
                            ? number_format(($quizScore->score / $quizScore->questions_length) * 100, 0)
                            : null;
                    @endphp

                    <a href="{{ route('cs-item-content', $Content->id) }}" class="cs-buttons" id="cs-button-advanced"

                        @if ($index % 2 == 1)
                        @if ($scorePercentage == 100)
                            style="background-color: #fab04095; box-shadow: none; border: none;"
                        @else
                            style="background-color: #fffaf3;"
                        @endif
                        @else
                        @if ($scorePercentage == 100)
                            style="background-color: #fab04095; box-shadow: none; border: none;"
                        @else
                            style="background-color: #ffffff;"
                        @endif
                        @endif>
                        <div>
                            {{ $Content->topic_title }}
                        </div>
                        @if ($quizScore)
                            <div class="resultCompleteContainer">
                                @if ($scorePercentage == 100)
                                    <div class="complete">✔ Complete</div>
                                @endif
                                <div class="quizresult">
                                    Quiz Result: {{ $scorePercentage }}%
                                </div>
                            </div>
                        @endif
                    </a>
                @endif
            @endforeach
        </div>
    </div>
</body>
@include('dashboard.footer')

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
                    'Close Admin Access →';
            } else {
                adminAccessContainer.style.display = 'none';
                toggleAdminAccess.textContent =
                    '← Open Admin Access';
            }
        });

    });
</script>

</html>
