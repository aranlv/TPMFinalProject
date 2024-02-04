<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Homepage</title>
  <link rel="stylesheet" href="{{ asset('assets/css/design.css') }}">
  <script defer src="{{ asset('assets/js/hp.js') }}"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body class="homepage-body">
    <div class="navbar-container">
        <div>
            <h1 class="nav-heading"><span class="heading-1">Hack</span><span>athon</span></h1>
        </div>
        <a href="#landing">Home</a>
        <a href="#prize-container">Champion Prizes</a>
        <a href="#jury-container">Mentor & Jury</a>
        <a href="#registration-container">About</a>
        <a href="faq"> FAQ</a>
        <a href="#">Timeline</a>
        
        @auth
          <a href="dashboard" class="hp-login-button">
            {{ auth()->user()->{'group-name'} }}'s Dashboard
          </a>
         @else   
         <a href="login" class="hp-login-button">Login</a>
        @endauth
        
    </div>
    <div class="landing" id="landing">
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
    </div>

    <div class="prize-container" id="prize-container">
        <h1>Champion Prizes</h1>
        <div class="winners">
            <div class="placement">
                <h3>3rd Winner</h3>
                <p>Rp.1.000.000,00</p>
                <p>MERCHANDISE</p>
                <p>CERTIFICATE</p>
            </div>
            <div class="vertical-line"></div>
            <div class="placement">
                <h3>1st Winner</h3>
                <p>Rp.5.000.000,00</p>
                <p>MERCHANDISE</p>
                <p>CERTIFICATE</p>
            </div>
            <div class="vertical-line"></div>
            <div class="placement">
                <h3>2nd Winner</h3>
                <p>Rp.3.000.000,00</p>
                <p>MERCHANDISE</p>
                <p>CERTIFICATE</p>
            </div>
        </div>
    </div>

    <div class="jury-container" id="jury-container">
        <h1>JURY</h1>
        <div class="juries">
            <div class="jury">
                <h2>Design</h2>
                <img src="{{ asset('assets/images/homepage/jury/image 32.png') }}" alt="">
                <h3>Ryan Mardhika</h3>
                <p>Creative Designer Bank Neo Commerce</p>
            </div>
            <div class="vertical-line vl-white"></div>
            <div class="jury">
                <h2>Technology</h2>
                <img src="{{ asset('assets/images/homepage/jury/image 33.png') }}" alt="">
                <h3>Willy Cahyadi</h3>
                <p>IT Dev Division Bank Neo Commerce</p>
            </div>
            <div class="vertical-line vl-white"></div>
            <div class="jury">
                <h2>Business</h2>
                <img src="{{ asset('assets/images/homepage/jury/image 34.png') }}" alt="">
                <h3>Morina Yonaha</h3>
                <p>Product Design Division Bank Neo Commerce</p>
            </div>
        </div>
    </div>

    <div class="mentors-container">
        <h1>MENTORS</h1>
        <hr>
        <ul class="menu">
            <li data-slider-id="business-div" class="actives">Business</li>
            <li data-slider-id="design-div">Design</li>
            <li data-slider-id="tech-div">Tech</li>
        </ul>

        <div class="business slideshow" id="business-div">
            <div class="business" id="business-div">
                <div class="slideshow-container">
                    <div class="slides">
                        <div class="slide-image">
                        <img src="{{ asset('assets/images/homepage/business mentor/image 36.png') }}" alt="">
                        </div>
                        <h2>Indra Hartawan</h2>
                        <p>Country Manager Exabytes Indonesia</p>
                    </div>

                    <div class="slides">
                        <div class="slide-image">
                        <img src="{{ asset('assets/images/homepage/business mentor/image 37.png') }}" alt="">
                        </div>
                        <h2>Reza Levi Fauzi</h2>
                        <p>Product Manager Bank Neo Commerce</p>
                    </div>

                    <div class="slides">
                        <div class="slide-image">
                        <img src="{{ asset('assets/images/homepage/business mentor/image 38.png') }}" alt="">
                        </div>
                        <h2>Danang Limantoro</h2>
                        <p>Product Manager Bank Neo Commerce</p>
                    </div>

                    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                    <a class="next" onclick="plusSlides(1)">&#10095;</a>

                    <div style="text-align:center">
                        <span class="dot" onclick="currentSlide(1)"></span>
                        <span class="dot" onclick="currentSlide(2)"></span>
                        <span class="dot" onclick="currentSlide(3)"></span>
                    </div>
                </div>
            </div>
        </div>

        <div class="design slideshow is-hidden" id="design-div">
            <div id="design-div">
                <div class="slideshow-container">
                    <div class="slides">
                        <div class="slide-image">
                        <img src="{{ asset('assets/images/homepage/design/image 40.png') }}" alt="">
                        </div>
                        <h2>Ali Hidayat</h2>
                        <p>Lead UI Designer Bank Neo Commerce</p>
                    </div>

                    <div class="slides">
                        <div class="slide-image">
                        <img src="{{ asset('assets/images/homepage/design/image 43.png') }}" alt="">
                        </div>
                        <h2>Harry Widjaya</h2>
                        <p>UI/UX Designer Bank Neo Commerce</p>
                    </div>

                    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                    <a class="next" onclick="plusSlides(1)">&#10095;</a>

                    <div style="text-align:center">
                        <span class="dot" onclick="currentSlide(1)"></span>
                        <span class="dot" onclick="currentSlide(2)"></span>
                    </div>
                </div>
            </div>
        </div>

        <div class="tech slideshow is-hidden" id="tech-div">
            <div class="tech" id="tech-div">
                <div class="slideshow-container">
                    <div class="slides">
                        <div class="slide-image">
                            <img src="{{ asset('assets/images/homepage/tech/image 45.png') }}" alt="">
                        </div>
                        <h2>Ayu Sudi Dwijayanti</h2>
                        <p>Javascript Bootcamp Instructor Hacktiv8</p>
                    </div>
            
                    <div class="slides">
                        <div class="slide-image">
                            <img src="{{ asset('assets/images/homepage/tech/image 46.png') }}" alt="">
                        </div>
                        <h2>Zulkifli</h2>
                        <p>Javascript Bootcamp Instructor Hacktiv8</p>
                    </div>
            
                    <div class="slides">
                        <div class="slide-image">
                            <img src="{{ asset('assets/images/homepage/tech/image 47.png') }}" alt="">
                        </div>
                        <h2>Deni Eko Santoso</h2>
                        <p>Android Developer Bank Neo Commerce</p>
                    </div>
            
                    <div class="slides">
                        <div class="slide-image">
                            <img src="{{ asset('assets/images/homepage/tech/image 48.png') }}" alt="">
                        </div>
                        <h2>I Wayan Dharma</h2>
                        <p>Android Developer Bank Neo Commerce</p>
                    </div>
            
                    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                    <a class="next" onclick="plusSlides(1)">&#10095;</a>
            
                    <div style="text-align:center">
                        <span class="dot" onclick="currentSlide(1)"></span>
                        <span class="dot" onclick="currentSlide(2)"></span>
                        <span class="dot" onclick="currentSlide(3)"></span>
                        <span class="dot" onclick="currentSlide(4)"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="registration-container" id="registration-container">
        <div class="general-info">
            <div class="left-container">
                <h2>What is Hackathon?</h2>
                <p>The goal of a hackathon is to create functioning software or hardware by the end of the event. Hackathons tend to have a specific focus, which can include the programming language used, the operating system, an application, an API, or the subject and the demographic group of the programmers.</p>
                <a class="download-button" href="{{ url('/download-guidelines') }}" download="Guidebook.pdf">Download Guidebook</a>
            </div>
            <div class="right-container">
                <img src="{{ asset('assets/images/homepage/image 42.png') }}" alt="some image">
            </div>
        </div>
        <a class="register-button" href="register">Register</a>
    </div>
    <hr class="footer">
    <div class="slider-container">
        <div class="slider" id="slider">
          <!-- Add your slides here -->
          <div class="slide"><img src="{{ asset('assets/images/homepage/slider hp/image 69.png') }}" alt="Slide 1"></div>
          <div class="slide"><img src="{{ asset('assets/images/homepage/slider hp/image 71.png') }}" alt="Slide 2"></div>
          <div class="slide"><img src="{{ asset('assets/images/homepage/slider hp/image 72.png') }}" alt="Slide 3"></div>
          <div class="slide"><img src="{{ asset('assets/images/homepage/slider hp/image 73.png') }}" alt="Slide 4"></div>
          <div class="slide"><img src="{{ asset('assets/images/homepage/slider hp/image 74.png') }}" alt="Slide 5"></div>
          <!-- Repeat the slides for infinite loop -->
          <div class="slide"><img src="{{ asset('assets/images/homepage/slider hp/image 69.png') }}" alt="Slide 1"></div>
          <div class="slide"><img src="{{ asset('assets/images/homepage/slider hp/image 71.png') }}" alt="Slide 2"></div>
          <div class="slide"><img src="{{ asset('assets/images/homepage/slider hp/image 72.png') }}" alt="Slide 3"></div>
          <div class="slide"><img src="{{ asset('assets/images/homepage/slider hp/image 73.png') }}" alt="Slide 4"></div>
          <div class="slide"><img src="{{ asset('assets/images/homepage/slider hp/image 74.png') }}" alt="Slide 5"></div>
        </div>
      </div>
      
      <div class="media-partner">
        <h2 class="title-heading">Media Partner</h2>
        <div class="medpar-img">
            <img src="{{ asset('assets/images/homepage/media partner/image 35.png') }}" alt="">
        </div>
        </div>

      <div class="other-events-container">
          <div class="events-wrapper">
            <div class="virtual-con">
                <h3 class="title-heading">Virtual Conference</h3>
                <div class="event-img">
                    <img src="{{ asset('assets/images/homepage/other events/image 28.png') }}" alt="">
                </div>
                <a href="#" class="register-button register-other-1">Register</a>
            </div>

            <h2 class="title-heading other-events">Other Events</h2>

            <div class="developer-workshop">
                <h3 class="title-heading">Developer Workshop</h3>
                <div class="event-img">
                    <img src="{{ asset('assets/images/homepage/other events/Rectangle 4196.png') }}" alt="">
                </div>
                <a href="#" class="register-button register-other-2">Register</a>
                
            </div>
        </div>
        <div class="any-questions">
            <div class="question-container">
                <h2>Any Questions?</h2>
                <a href="mailto:technoscape@bncc.net" class="contact-us-button">Contact Us</a>
            </div>
        </div>

        <div class="black-hr"></div>
        <div class="socials">
            <a href="https://twitter.com/BNCC_Binus"><img src="{{ asset('assets/images/homepage/sosmed/image 18.png') }}" alt=""></a>
            <a href="https://www.facebook.com/bina.nusantara.computer.club/?locale=id_ID"><img src="{{ asset('assets/images/homepage/sosmed/image 19.png') }}" alt=""></a>
            <a href="https://www.linkedin.com/company/bina-nusantara-computer-club/?originalSubdomain=id"><img src="{{ asset('assets/images/homepage/sosmed/image 20.png') }}" alt=""></a>
            <a href="https://www.instagram.com/technoscapebncc/"><img src="{{ asset('assets/images/homepage/sosmed/image 21.png') }}" alt=""></a>
            <a href="mailto:technoscape@bncc.net"><img src="{{ asset('assets/images/homepage/sosmed/image 22.png') }}" alt=""></a>
        </div>
    </div>

      <script>
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
             anchor.addEventListener('click', function (e) {
                 e.preventDefault();

                  document.querySelector(this.getAttribute('href')).scrollIntoView({
                     behavior: 'smooth'
                  });
              });
         });
      </script>

</body>
</html>