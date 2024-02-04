<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/design.css') }}" >
    <script defer src="{{ asset('assets/js/regis.js') }}"></script>
</head>
<body class="register-body">
    <div class="register-container">
            <div class="container">
            <h1 class="heading"><span class="heading-1">Hack</span><span>athon</span></h1>
            <p class="join-us">Join Us</p>
            <div class="slideshow-container">

                <!-- Full-width images with number and caption text -->
                <div class="mySlides fade">
                  <img src="{{ asset('assets/images/register/regis 1.png') }}" style="width:100%">
                </div>
              
                <div class="mySlides fade">
                  <img src="{{ asset('assets/images/register/regis 2.png') }}" style="width:100%">
                </div>
              
                <div class="mySlides fade">
                  <img src="{{ asset('assets/images/register/regis 3.png') }}" style="width:100%">
                </div>
            
                <div class="mySlides fade">
                    <img src="{{ asset('assets/images/register/regis 4.png') }}" style="width:100%">
                  </div>
            
                  <div class="mySlides fade">
                    <img src="{{ asset('assets/images/register/regis 5.png') }}" style="width:100%">
                  </div>
            
              <!-- The dots/circles -->
                <div style="text-align:center">
                <span class="dot"></span>
                <span class="dot"></span>
                <span class="dot"></span>
                <span class="dot"></span>
                <span class="dot"></span>
                </div>
            </div>
            </div>

        
            <form class="register-form" action="register" method="post">
              @csrf
              <h2 class="text-center">Register</h2>

                <!--progress bar-->
                <div class="progressbar">
                    <div class="progress" id="progress"></div>

                    <div class="progress-step active"></div>
                    <div class="progress-step"></div>
                    <div class="progress-step"></div>
                </div>

                <!--1st step-->
                <div class="form-step active">
                    <div class="input-box-2">
                        <label for="group-name">Nama Group</label>
                        <input type="text" id="group-name" name="group-name">
                    </div>
                    <div class="input-box-2">
                        <label for="register-password">Password</label>
                        <input type="password" id="register-password" name="password">
                        <p class="password-error-message" id="password-error" hidden>Invalid Password</p>
                    </div>
                    <div class="input-box-2">
                        <label for="confirm-register-password">Confirm password</label>
                        <input type="password" id="confirm-register-password">
                    </div>
                    <div class="binus-button">
                        <input type="button" name="btn" value="Binusian" id="btnBinusian" onclick="changeColor(this.id)">
                        <input type="button" name="btn" value="Non-Binusian" id="btnNonBinusian"  onclick="changeColor(this.id)"> 
                    </div>

                    <div>
                        <a href="#" class="button button-next margin-top-4" >Next</a>
                    </div>
                </div>

                <!--2nd step-->
                <div class="form-step">
                    <div class="input-box-2">
                        <label for="full-name">Full Name</label>
                        <input type="text" id="full-name" name="leader-full-name">
                    </div>
                    <div class="input-box-2">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email">
                    </div>
                    <div class="input-box-2">
                        <label for="github">Github/Gitlab</label>
                        <input type="text" id="github" name="github">
                    </div>
                    <div class="input-box-2">
                        <label for="whatsapp">Whatsapp Number</label>
                        <input type="text" id="whatsapp" name="whatsapp-number">
                    </div>
                    <div class="input-box-2">
                        <label for="lineid">Line ID</label>
                        <input type="text" id="line-id" name="line-id">
                    </div>
                    <div>
                        <a href="#" class="button button-next">Next</a>
                    </div>
                    
                </div>
                
                <!--3rd step-->
                <div class="form-step">
                    <div>
                    <label for="birth-date">Birth Date</label>
                    </div>
                    <div class="birthdate-wrapper">
                        <div class="input-box-2 width-30">
                            <input type="integer" id="dd" name="dd">
                        </div>
                        <div class="input-box-2 width-30">
                            <input type="integer" id="mm" name="mm">
                        </div>
                        <div class="input-box-2 width-30">
                            <input type="integer" id="yy" name="yy">
                        </div>
                    </div>

                    <div class="input-box-2">
                        <label for="cv">Upload CV</label>
                        <input type="file" id="cv" name="cv">
                        <p>Format file pdf, jpg, jpeg, dan png.</p>
                    </div>
                    <div class="input-box-2">
                        <label for="flazz">Upload Flazz Card (Binusian)</label>
                        <input type="file" id="flazz" name="flazz">
                        <p>Format file pdf, jpg, jpeg, dan png.</p>
                    </div>
                    <div class="input-box-2">
                        <label for="id-card">Upload ID Card (Non-Binusian)</label>
                        <input type="file" id="id-card" name="id-card">
                        <p>Format file pdf, jpg, jpeg, dan png.</p>
                    </div>
                   
                    <button type="submit" class="submit-button">Submit</button>
                    
                </div>
            </form>
        
    </div>
</body>
</html>