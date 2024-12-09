<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>What are Badges?</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
@include('dashboard.header')

<body>
    <div class="aboutthebadges-container">
        <div>
            <a href="{{ route('dashboard') }}" class="gobackhome">🏠︎ Exit</a>
            <br><br>
            <div class="aboutthebadges-title">
                About the Badges
            </div>
        </div>
        <hr>

        <div class="aboutthebadges-2">POS Hunter</div>

        <div class="aboutthebadges-3">
            In POS Hunter, players sharpen their grammar skills by dragging and dropping words into designated boxes
            that represent parts of speech, such as nouns, verbs, adjectives, and adverbs. The game challenges users to
            categorize words accurately and quickly, promoting a solid understanding of language structure. As they
            advance, users can earn badges, progressing through the ranks of Archer, Rifler, and Sniper, with each title
            representing a new level of mastery in identifying parts of speech.
        </div>

        <div class="listofbadges">
            <div class="badges">
                <div class="badges-image" id="badges-image-archer"></div>
                <div class="badges-description">
                    <strong>Archer:</strong>
                    The beginning level where players develop their aim in identifying basic parts of speech.
                    They’re learning to categorize nouns, verbs, and adjectives with growing accuracy, creating a strong
                    foundation in grammar basics.
                </div>
            </div>
            <div class="badges">
                <div class="badges-image" id="badges-image-rifler"></div>
                <div class="badges-description">
                    <strong>Rifler:</strong>
                    As Riflers, players now have improved accuracy and speed, tackling more challenging words
                    and categories. Their knowledge of language structure is expanding, allowing them to differentiate
                    more nuanced parts of speech effectively.
                </div>
            </div>
            <div class="badges">
                <div class="badges-image" id="badges-image-sniper"></div>
                <div class="badges-description">
                    <strong>Sniper:</strong>
                    Snipers are experts with sharp precision in grammar categorization, able to quickly and
                    accurately classify even complex words. They rarely miss, showing mastery in recognizing all parts
                    of speech, including challenging structures and advanced grammatical forms.
                </div>
            </div>
        </div>
        <br>
        <hr>

        <div class="aboutthebadges-2">Sentence Builder</div>

        <div class="aboutthebadges-3">
            Sentence Builder immerses players in the task of reconstructing corrupted sentences. Words are sabotaged
            with errors in capitalization, punctuation, and pluralization. The objective is to correct these elements to
            form a proper sentence or paragraph. As users improve, they climb the ranks from Mason to Foreman to
            Engineer, with each title signifying increasing expertise in creating accurate and grammatically correct
            sentences.
        </div>

        <div class="listofbadges">
            <div class="badges">
                <div class="badges-image" id="badges-image-mason"></div>
                <div class="badges-description">
                    <strong>Mason:</strong>
                    At this level, players gain basic sentence correction skills by fixing common errors in punctuation,
                    capitalization, and pluralization. They’re building the “bricks” of strong sentences, setting the
                    foundation for accurate grammar.
                </div>
            </div>
            <div class="badges">
                <div class="badges-image" id="badges-image-foreman"></div>
                <div class="badges-description">
                    <strong>Foreman:</strong>
                    Foremen demonstrate improved grammar knowledge, correcting more complex sentence issues with greater
                    speed and accuracy. They can handle a wider range of sentence errors, constructing clearer,
                    well-structured sentences.
                </div>
            </div>
            <div class="badges">
                <div class="badges-image" id="badges-image-engineer"></div>
                <div class="badges-description">
                    <strong>Engineer:</strong>
                    Engineers are masters of sentence construction, demonstrating near-flawless grammar skills. They can
                    tackle intricate sentence corrections with ease, making highly accurate adjustments to even the most
                    complex sentences or paragraphs.
                </div>
            </div>
        </div>
        <br>
        <hr>
    </div>


</body>

</html>
