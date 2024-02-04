<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('assets/css/AdminPanelEdit.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@100;200;300;400;500;600;700;800;900&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<body>
    <div class="header">

        <h1>Hack<span>athon</span></h1>

        <div class="headerkanan">
            <h1>Admin Panel</h1>
            <form class="logout-bg" action="logout" method="post">
              @csrf
              <button class="logout-btn">Logout</button>
            </form>
        </div>
    </div>

    <div class="searchbar">
        <img class = "search-icon" src="{{ asset('assets/images/search.png') }}" alt="">
        <input type="text" class="icon" value placeholder="Search...">
    </div>

    <div class="isi">
      @foreach($users as $index => $u)
            @if(!$u->is_admin)
                <div class="thebox">
                    <div class="isititle">
                        <h1>{{ $u->{'group-name'} }}</h1>
                        <hr>
                    </div>
                    <div class="isibutton">
                        <button class="viewdata-btn" id="toggleButton{{ $index }}">View Data</button>
                        <div class="boxleader" id="hiddenDiv{{ $index }}" style="display: none;">
                            <div class="thebox">
                                <p>{{ $u->{'leader-full-name'} }}</p>
                                <p>{{ $u->{'email'} }}</p>
                                <p>{{ $u->{'whatsapp-number'} }}</p>
                                <p>{{ $u->{'line-id'} }}</p>
                                <p>{{ $u->{'github'} }}</p>
                                <p>{{ $u->{'birth-place'} }}</p>
                                <p>{{ $u->{'dob'} }}</p>
                            </div>
                        </div>
                        <a href="{{route('edit', $u->id)}}">
                            <button class="editdata-btn">Edit Data</button>
                        </a>

                        <form class="formdelete" action="{{route('delete', $u->id)}}" method="POST">
                          @csrf
                          @method('delete')
                          <button class="deleteteam-btn">Delete Team</button>
                        </form>
                    </div>
                </div>
            @endif
        @endforeach
    </div>
    <script>
      @foreach($users as $index => $u)
            @if(!$u->is_admin)
                document.getElementById('toggleButton{{ $index }}').addEventListener('click', function() {
                    var div = document.getElementById('hiddenDiv{{ $index }}');
                    if (div.style.display === 'none') {
                        div.style.display = 'block';
                    } else {
                        div.style.display = 'none';
                    }
                });
            @endif
        @endforeach
    </script>
</body>
</html>


