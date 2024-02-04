<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('assets/css/DashboardEdit.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@100;200;300;400;500;600;700;800;900&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<body>
    <div class="header">

        <h1>Hack<span>athon</span></h1>

        <div>
            <ul class="navbar">
                <button class="dashboard-btn">Dashboard</button>
                <button class="timeline-btn">Timeline</button>
                <form action="logout" method="post">
                    @csrf
                    <button class="logout-btn">Logout</button>
                </form>
            </ul>
        </div>
    </div>

    <div class="isititle">
        <h1>{{ auth()->user()->{'group-name'} }}</h1>
    </div>

    <div class="isi">
        <div class="boxcontent">
            <div class="boxleader">
                <div class="boxtitle">
                    <h1><i>Leader</i></h1>
                </div>
    
                <div class="thebox">
                    <p>Full Name: {{ auth()->user()->{'leader-full-name'} }}</p>
                    <hr>
                    <p>Email: {{ auth()->user()->{'email'} }}</p>
                    <hr>
                    <p>Whatsapp Number: {{ auth()->user()->{'whatsapp-number'} }}</p>
                    <hr>
                    <p>LINE ID: {{ auth()->user()->{'line-id'} }}</p>
                    <hr>
                    <p>Github/Gitlab ID: {{ auth()->user()->{'github'} }}</p>
                    <hr>
                    <p>Birth Place: {{ auth()->user()->{'birth-place'} }}</p>
                    <hr>
                    <p>DOB [YYYY/MM/DD]: {{ auth()->user()->{'dob'} }}</p>
                    <hr>
                </div>
            </div>
        </div>

        <div class="buttonisi">
            <a href="{{ route('download.file', ['attribute' => 'cv']) }}">
                <button href="{{ route('download.file', ['attribute' => 'cv']) }}" class="viewcv">View CV</button>
            </a>
            <a href="{{ route('download.file', ['attribute' => 'id-card']) }}">
                <button href="{{ route('download.file', ['attribute' => 'id-card']) }}"class="viewidcard">View ID Card</button>
            </a>

            <button class="contactperson">Contact Person</button>


        </div>
    </div>

</body>
</html>