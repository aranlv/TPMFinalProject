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
                <div class="thebox">
                    <div class="isititle">
                        <h1>{{ $team->{'group-name'} }}</h1>
                        <hr>
                    </div>
                    <div class="isibutton">
                              <form action="{{route('update', $team->id)}}" method="POST">
                                @csrf
                                @method('PATCH')
                                <div class="mb-3">
                                  <label for="" class="form-label">Full Name</label>
                                  <input value="{{ $team->{'leader-full-name'} }}" type="text" class="form-control" id="" name="leader-full-name">
                                </div>
                                <div class="mb-3">
                                  <label for="" class="form-label">Email</label>
                                  <input value="{{$team->email}}" type="text" class="form-control" id="" name="email">
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">Whatsapp Number</label>
                                    <input value="{{ $team->{'whatsapp-number'} }}" type="text" class="form-control" id="" name="whatsapp-number">
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">LINE ID</label>
                                    <input value="{{ $team->{'line-id'} }}" type="text" class="form-control" id="" name="line-id">
                                </div>
                              
                                <div class="mb-3">
                                  <label for="" class="form-label">GitHub</label>
                                  <input value="{{ $team->github }}" type="text" class="form-control" id="" name="github">
                                </div>
                                <div class="mb-3">
                                  <label for="" class="form-label">BirthPlace</label>
                                  <input value="{{ $team->{'birth-place'} }}" type="text" class="form-control" id="" name="birth-place">
                                </div>

                                
                                  <button class="editdata-btn">Submit Changes</button>
      
                              </form>
                        
                    </div>
                </div>
            
    </div>
</body>
</html>


