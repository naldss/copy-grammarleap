<div id="myModal" class="modal">
    <!-- Modal content -->
    <div class="modal-content">
        <div class="top-modal">
            <div class="close" hidden>&times;</div>
            <div class="register">Register</div>
        </div>
        <div class="body-modal">
            <form method="POST" action="{{ route('register') }}" id="modal-form">
                @csrf

                <!-- Display Validation Errors -->
                @if ($errors->any())
                    <div>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <div>
                    <input class="input" type="text" name="first_name" id="first_name"
                        value="{{ old('first_name') }}" required placeholder="First Name">
                </div>

                <div class="mb-3">
                    <input class="input" type="text" name="last_name" id="last_name" value="{{ old('last_name') }}"
                        required placeholder="Last Name">
                </div>

                <div>

                    <div class="mb-3">
                        <label for="birthday">Birthday:</label> <br>
                        <input type="date" name="birthday" id="birthday" value="{{ old('birthday') }}" required>
                    </div>

                    <div class="mb-3" id="sex-input">
                        <label>Sex:</label>
                        <div>
                            <div>
                                <input type="radio" id="male" name="gender" value="male"
                                    {{ old('gender') == 'male' ? 'checked' : '' }} required>
                                <label for="male">Male</label>
                            </div>
                            <div>
                                <input type="radio" id="female" name="gender" value="female"
                                    {{ old('gender') == 'female' ? 'checked' : '' }} required>
                                <label for="female">Female</label>
                            </div>
                        </div>

                    </div>

                    <div>
                        <input class="input" type="email" name="email" id="email" value="{{ old('email') }}"
                            required placeholder="Email">
                    </div>

                    <div>
                        <input class="input" type="password" name="password" id="password" required
                            placeholder="Enter Password">
                    </div>

                    <div>
                        <input class="input" type="password" name="password_confirmation" id="password_confirmation"
                            required placeholder="Confirm Password">
                    </div>
                    <br>

                    <button type="submit">Register</button>
                    @if (Session::has('success'))
                        <div class="alert alert-success">
                            {{ Session::get('success') }}
                        </div>
                        <script>
                            // Trigger any JS actions if necessary
                            alert('Registration Successful');
                        </script>
                    @endif
            </form>
            <script>
        </div>
    </div>
</div>
