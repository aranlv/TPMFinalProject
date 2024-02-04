<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/design.css') }}" >
    <title>Hackathon</title>
    <script defer src="{{ asset('assets/js/script.js') }}"></script>
</head>
<body>
    <section id="login-page">      
        <div id="image-container">
            <img src="{{ asset('assets/images/image 9.png') }}" alt="Code on computer">
        </div>
        <div class="right-side  larger-form">

            <h1 class="heading"><span class="heading-1">Hack</span><span>athon</span></h1>
            <form class="login" action="login" method="post">
              @csrf
                <div class="input-box">
                    {{-- <img class="icon" src="{{ asset('assets/images/user.png') }}" alt=""> --}}
                    <input type="text" name="group-name" class="fill-area" 
                    id="teamName" placeholder="Input your team name">
                </div>
                <p id="nameErrorMessage" class="error-message"></p>
                <div class="input-box">
                    {{-- <img src="{{ asset('assets/images/lock.png') }}" alt="" class="icon"> --}}
                    <input type="password" name="password" class="fill-area password-input" id="password" placeholder="Password">
                </div>
                <p id="passwordErrorMessage" class="error-message" hidden></p>
                <div>
                    <button id="login-button" type="submit">LOGIN</button>
                </div>
                <div class="forget-position">
                    <a href="#" id="forget-password">Forgot password?</a>
                </div>
            </form>
        </div>
    </section>
</body>
</html>

