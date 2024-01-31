<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Homepage</title>
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/design.css') }}" >
</head>
<body class="homepage-body">
    <div class="navbar-container">
        <div>
            <h1 class="nav-heading"><span class="heading-1">Hack</span><span>athon</span></h1>
        </div>
        <a href="#">Home</a>
        <a href="#">Champion Prizes</a>
        <a href="#">Mentor & Jury</a>
        <a href="#">About</a>
        <a href="#"> FAQ</a>
        <a href="#">Timeline</a>
        <a href="login" class="hp-login-button">Login</a>
    </div>

    <div class="hp-conntent">
        <div class="heading-container">
            <h1 class="heading hp-h1"><span class="heading-1">Hack</span><span>athon</span></h1>
            <h2 class="hp-h2">Tema Event</h2>
        </div>
        <iframe width="750" height="500" src="https://www.youtube.com/embed/KAskJvPQk98" frameborder="0" allowfullscreen class="hp-video"></iframe>

    </div>
    <div class="cloud-container">
        <img class="clouds" src="{{ asset('assets/images/Subtract.png') }}" alt="">
    </div>
    
</body>
</html>