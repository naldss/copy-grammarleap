<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GrammarLeap</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
@include('dashboard.header2')

<body class="background">
    <div class="home-page">
        <div class="body-section">
            <div class="app-name">
                GrammarLeap
            </div>

            <div class="tagline">
                Have Fun Productively!
            </div>
            <div class="app-info">
                GrammarLeap is a platform for practicing grammar through gamification. It turns practice into an
                engaging experience, allowing users to master grammar concepts, earn
                mission rewards, and advance their skill while having fun.
            </div>
        </div>

        <div class="login-form">
            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div>
                    <input type="email" name="email" id="email" required placeholder="Email">
                </div>

                <div>
                    <input type="password" name="password" id="password" required placeholder="Password">
                </div>
                <br>
                <div>
                    <button class="login-button" type="submit">Login</button>

                </div>
            </form>
            @if ($errors->any())
                <div class="error">
                    <div>
                        Registration or Login Failed:
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>

                </div>
            @endif
        </div>
        <button id="openModalBtn" class="register-modal">Don't have an account?</button>
        <div id="modalContainer"></div>
    </div>
    <script>
        window.addEventListener('load', function() {
            const urlParams = new URLSearchParams(window.location.search);
            if (urlParams.get('success') === 'true') {
                alert('Registration Successful');
                window.history.replaceState({}, document.title, window.location
                    .pathname); // Remove query parameter from URL
            }
        });
    </script>
</body>



</html>
