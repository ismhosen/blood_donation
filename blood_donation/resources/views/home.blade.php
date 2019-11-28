<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>Blood Donation</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <meta name="description" content="Blood Donation - Activism & Campaign HTML5 Template">
        <meta name="author" content="xenioushk">
        <link rel="shortcut icon" href="images/favicon.png" />

        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
          <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->

        <!-- The styles -->
        
        <link rel="stylesheet" href="/css/bootstrap.min.css" />
        <link href="/css/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" >
        <link href="/css/animate.css" rel="stylesheet" type="text/css" >
        <link href="/css/owl.carousel.css" rel="stylesheet" type="text/css" >
        <link href="/css/venobox.css" rel="stylesheet" type="text/css" >
        <link rel="stylesheet" href="/css/styles.css" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <body> 

        <div id="preloader">
            <span class="margin-bottom"><img src="/images/loader.gif" alt="" /></span>
        </div>

        <!--  HEADER -->
        @if (Auth::check())
            <header class="main-header clearfix">

                <div class="top-bar clearfix">
    
                    <div class="container">
    
                        <div class="row">
    
                            <div class="col-md-8 col-sm-12">
    
                                <p>Welcome to blood donation center.</p>
    
                            </div>
    
                            <div class="col-md-4col-sm-12">
                                <div class="top-bar-social">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-google-plus"></i></a>
                                    <a href="#"><i class="fa fa-instagram"></i></a>
                                    <a href="#"><i class="fa fa-youtube"></i></a>
                                </div>   
                            </div> 
                        </div>
    
                    </div> <!--  end .container -->
    
                </div> <!--  end .top-bar  -->
    
                <section class="header-wrapper navgiation-wrapper">
    
                    <div class="navbar navbar-default">			
                        <div class="container">
    
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                <a class="logo" href="{{ route('home') }}"><img alt="" src="images/logo.png"></a>
                            </div>
    
                            <div class="navbar-collapse collapse">
                                <ul class="nav navbar-nav navbar-right">
                                    <a href="{{ route('home') }}">Home</a>&nbsp;&nbsp;&nbsp;&nbsp;
                                    <a href="{{ route('profile') }}">Profile</a>&nbsp;&nbsp;&nbsp;&nbsp;
                                    <a href="{{ route('messenger') }}">Messenger</a>&nbsp;&nbsp;&nbsp;&nbsp;
                                    <a class="" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                        <span>logout&nbsp;&nbsp;&nbsp;&nbsp;</span>
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </ul>
                            </div>
                        </div>
                    </div>
    
                </section>
    
    
            </header>            
        @else
        <header class="main-header clearfix">

                <div class="top-bar clearfix">
    
                    <div class="container">
    
                        <div class="row">
    
                            <div class="col-md-6 col-sm-12">
    
                                <p>Welcome to blood donation center.</p>
    
                            </div>
    
                            <div class="col-md-6 col-sm-12">
                                <div class="top-bar-social">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-google-plus"></i></a>
                                    <a href="#"><i class="fa fa-instagram"></i></a>
                                    <a href="#"><i class="fa fa-youtube"></i></a>
                                    <a href="{{ route('signup') }}">SignUp</a>&nbsp;&nbsp;&nbsp;
                                    <a href="{{ route('signin') }}">SignIn</a>
                                </div>   
                            </div> 
    
                        </div>
    
                    </div> <!--  end .container -->
    
                </div> <!--  end .top-bar  -->
    
                <section class="header-wrapper navgiation-wrapper">
    
                    <div class="navbar navbar-default">			
                        <div class="container">
    
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                <a class="logo" href="{{ route('home') }}"><img alt="" src="images/logo.png"></a>
                            </div>
    
                            <div class="navbar-collapse collapse">
                                <ul class="nav navbar-nav navbar-right">
                                    <li class="drop">
                                        <a href="#home" title="Home Layout 01">Home</a>
                                    </li>
                                    <li><a href="#process" title="About Us">Process</a></li>
    
    
    
                                    <li>
                                        <a href="#campaign">Campaign</a>
                                    </li>
    
                                    <li class="drop"><a href="#volunteers">Volunteers</a>
                                            </li>
                                            <li><a href="#donar" title="404 Page">Donars</a></li> 
                                            <li class="drop"><a href="#appointment">Appointment</a>
                                        
                                            
                                    </li>
    
                                    <li>
                                        <a href="#gallery">Gallery</a>
                                        
                                    </li>
    
                                    <li><a href="#blog">Blog</a></li>
                                    <li><a href="#contact">Contact</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
    
                </section>
    
    
            </header>

        @endif

         <!-- end main-header  -->
    <section id="home" class="section-banner">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner text-center">
            <div class="item active bnr-first">
                <div class="banner-content">
                    <h2>
                        Donate blood and get real blessings.
                    </h2>					
                    <h3>Blood is the most precious gift that anyone can give to another person.<br>
                        Donating blood not only saves the life also save donor's lives.
                    </h3>

                    <a href="#" class="btn btn-slider">GET APPOINTMENT</a>   
                </div>
            </div>

            <div class="item bnr-second">
                <div class="banner-content">
                    <h2>
                        Donate blood and get real blessings.
                    </h2>					
                    <h3>Blood is the most precious gift that anyone can give to another person.<br>
                        Donating blood not only saves the life also save donor's lives.
                    </h3>

                    <a href="#" class="btn btn-slider">GET APPOINTMENT</a>   
                </div>
            </div>
            
            <div class="item bnr-third">
                <div class="banner-content">
                <h2>
                    Donate blood and get real blessings.
                </h2>					
                <h3>Blood is the most precious gift that anyone can give to another person.<br>
                    Donating blood not only saves the life also save donor's lives.
                </h3>

                <a href="#" class="btn btn-slider">GET APPOINTMENT</a>   
            </div>
            </div>
            </div>
        </div>
    </section>
    <hr style="border:none"><hr style="border:none">
    <section class="search">
        <div class="container">
            <div class="border">
                <div class="row">
                    <div class="col-md-12">
                        <div class="search-blood text-center">
                            <h2 class="section-heading">Search Blood</h2>
                            <form>
                                <select name="Blood Group" id="blood_group" onchange="searchBlood('blood_group',value)">
                                    <option value="Choose Blood Group">Choose Blood Group</option>
                                    <option value="A+">A+</option>
                                    <option value="A-">A-</option>
                                    <option value="B+">B+</option>
                                    <option value="B-">B-</option>
                                    <option value="AB+">AB+</option>
                                    <option value="AB_">AB-</option>
                                    <option value="O+">O+</option>
                                    <option value="O-">O-</option>
                                </select>
                                <select name="Area" id="area" onchange="searchBlood('area',value)">
                                    <option value="Choose Area">Choose Area</option>
                                    <option value="Dhaka">Dhaka</option>
                                    <option value="Chittagong">Chittagong</option>
                                    <option value="Rajshahi">Rajshahi</option>
                                    <option value="Khulna">Khulna</option>
                                    <option value="Barisal">Barisal</option>
                                    <option value="Sylhet">Sylhet</option>
                                    <option value="Rangpur">Rangpur</option>
                                    <option value="Mymensingh">Mymensingh</option>
                                </select>
                                {{-- <input type="button" name="Submit" value="Search"> --}}
                            </form>
                        </div>   
                    </div>
                </div>
            </div>
        </div> 
    </section>
    <section id="search_div" class="search_div" style="display:none;">
    </section>

    <section id="donar" class="donar">
            
        <div class="content-box-md">
            
            <div class="container">
                <div class="row section-heading-wrapper">

                <div class="col-md-12 col-sm-12 text-center">
                    <h2 class="section-heading">Our Donars</h2>
                    <p class="section-subheading">See our recent donars & who can donate. Contact them for your needs.</p>
                </div> <!-- end .col-sm-12  -->                       

            </div>
                
                <!-- Tab links -->
                        <div class="tab text-center">
                            <button class="tablinks" onclick="openCity(event, 'London')">Recent Donars</button>
                            <button class="tablinks" onclick="openCity(event, 'Paris')">Can Donate</button>
                        </div>

                        <!-- Tab content -->
                        <div id="London" class="tabcontent text-center">
                        <div class="colorful-tab-container">  
                    <div class="col-sm-12 col-md-12 colorful-tab-content active" id="clr-0">  
                    <ul>
                        <li>
                            <div class="team-member">
                            <img src="images/1.jpg" alt="">
                            <div class="team-member-overlay">
                                <div class="team-member-info text-center">
                                    <h6>Kevin Greer</h6>
                                    <p>A+ Blood Donar</p>
                                    <p>Phone : 01******94</p>
                                    <p>Address : 2/G,ShiyalBari,Mirpur-02,Dhaka-1216</p>
                                    <button><a href="inbox.html">Send Messege</a></button>
                                </div>
                            </div>
                            </div>
                        </li>
                    </ul>
                    </div>
                </div>         
                        </div>

                        <div id="Paris" class="tabcontent">
                            <div class="colorful-tab-container">  
                    <div class="col-sm-12 col-md-12 colorful-tab-content active" id="clr-0">  
                        <ul>
                            @foreach ($users as $user)
                                <li>
                                    <div class="team-member">
                                        <img src="images/profile_pictures/{{ $user->image }}" alt="">
                                        <div class="team-member-overlay">
                                            <div class="team-member-info text-center">
                                                <h6>{{ $user->name }}</h6>
                                                <p>{{ $user->blood_group }} Blood Donar</p>
                                                <p>Phone : {{ $user->phone_no }}</p>
                                                <p>Address : {{ $user->address }}</p>
                                                <p>Last Given : {{ $user->last_blood_donation }}</p>
                                                <button><a href="{{ route('getUserMessage',$user->id) }}">Send Messege</a></button>                
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                        </div>
                    
                    <div class="row text-center">
                        <div class="col-md-12">
                            <div class="btn">
                                <button class="inside-btn"><a href="signup.html">Became a Donar</a></button>
                            </div>
                        </div>
                    </div>
                
            </div>
            
        </div>
            
    </section>

        <!--  SECTION DONATION PROCESS -->

        <section id="process" class="section-content-block section-process">

            <div class="container">

                <div class="row">

                    <div class="col-md-12 col-sm-12 text-center">
                        <h2 class="section-heading"><span>Donation Process</h2>
                        <p class="section-subheading">The donation process from the time you arrive center until the time you leave</p>
                    </div> <!-- end .col-sm-10  -->                    

                </div> <!--  end .row  -->

                <div class="row wow fadeInUp">

                    <div class="col-lg-4 col-md-offset-0 col-md-4 col-md-offset-0 col-sm-10 col-sm-offset-1 col-xs-12">

                        <div class="process-layout">

                            <figure class="process-img">

                                <img src="images/process_1.jpg" alt="service" />
                                <div class="step">
                                    <h3>1</h3>
                                </div>
                            </figure> <!-- end .cause-img  -->

                            <article class="process-info">
                                <h2>Registration</h2>   
                                <p>You need to complete a very simple registration form. Which contains all required contact information to enter in the donation process.</p>
                            </article>

                        </div> <!--  end .process-layout -->

                    </div> <!--  end .col-lg-3 -->



                    <div class="col-lg-4 col-md-offset-0 col-md-4 col-md-offset-0 col-sm-10 col-sm-offset-1 col-xs-12">

                        <div class="process-layout">

                            <figure class="process-img">
                                <img src="images/process_2.jpg" alt="process" />
                                <div class="step">
                                    <h3>2</h3>
                                </div>
                            </figure> <!-- end .cau<h5 class="step">1</h5>se-img  -->

                            <article class="process-info">                                   
                                <h2>Screening</h2>
                                <p>A drop of blood from your finger will take for simple test to ensure that your blood iron levels are proper enough for donation process.</p>
                            </article>

                        </div> <!--  end .process-layout -->

                    </div> <!--  end .col-lg-3 -->


                    <div class="col-lg-4 col-md-offset-0 col-md-4 col-md-offset-0 col-sm-10 col-sm-offset-1 col-xs-12">

                        <div class="process-layout">

                            <figure class="process-img">
                                <img src="images/process_3.jpg" alt="process" />
                                <div class="step">
                                    <h3>3</h3>
                                </div>
                            </figure> <!-- end .cause-img  -->

                            <article class="process-info">
                                <h2>Donation</h2>
                                <p>After ensuring and passed screening test successfully you will be directed to a donor bed for donation. It will take only 6-10 minutes.</p>
                            </article>

                        </div> <!--  end .process-layout -->

                    </div> <!--  end .col-lg-3 -->

                </div> <!--  end .row --> 

            </div> <!--  end .container  -->

        </section> <!--  end .section-process -->

        <!--  CAMPAIGNS SECTION  -->
        

        <section id="campaign" class="section-content-block">

            <div class="container">

                <div class="row section-heading-wrapper">

                    <div class="col-md-12 col-sm-12 text-center">
                        <h2 class="section-heading">Donation Campaigns</h2>
                        <p class="section-subheading">Campaigns to encourage new donors to join and existing to continue to give blood.</p>
                    </div> <!-- end .col-sm-12  -->                       

                </div> <!-- end .row  -->


                <div class="row">

                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="event-latest">
                            <div class="row"> 

                                <div class="col-lg-5 col-md-5 hidden-sm hidden-xs">
                                    <div class="event-latest-thumbnail">
                                        <a href="#">
                                            <img src="images/event_1.jpg" alt="">
                                        </a>
                                    </div>
                                </div> <!--  col-sm-5  -->

                                <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
                                    <div class="event-details">
                                        <a class="latest-date" href="#">14 June, 2017</a>
                                        <h4 class="event-latest-title">
                                            <a href="#">World Blood Donors Day</a>
                                        </h4>
                                        <p>Every year, on 14 June, countries around the world celebrate World Blood Donor Day. The event serves to thank voluntary.</p>
                                        <div class="event-latest-details">
                                            <a class="author" href="#"><i class="fa fa-clock-o" aria-hidden="true"></i> 10.00am - 3.00pm</a>
                                            <a class="comments" href="#"> <i class="fa fa-map-marker" aria-hidden="true"></i> California, USA</a>
                                        </div>
                                    </div>
                                </div> <!--  col-sm-7  -->

                            </div>

                        </div>
                    </div> <!--  col-sm-6  -->

                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="event-latest ">

                            <div class="row">

                                <div class="col-lg-5 col-md-5 hidden-sm hidden-xs">
                                    <div class="event-latest-thumbnail">
                                        <a href="#">
                                            <img src="images/event_2.jpg" alt="">
                                        </a>
                                    </div>
                                </div> <!--  col-sm-5  -->

                                <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
                                    <div class="event-details">
                                        <a class="latest-date" href="#">20 Sep, 2017</a>
                                        <h4 class="event-latest-title">
                                            <a href="#">O- Blood donors needed</a>
                                        </h4>
                                        <p>O Negative blood cells are called â€œuniversalâ€ meaning they can be transfused to almost any patient in need and blood cells are safest.</p>
                                        <div class="event-latest-details">
                                            <a class="author" href="#"><i class="fa fa-clock-o" aria-hidden="true"></i> 10.00am - 3.00pm</a>
                                            <a class="comments" href="#"> <i class="fa fa-map-marker" aria-hidden="true"></i> California, USA</a>
                                        </div>
                                    </div>
                                </div> <!--  col-sm-7  -->

                            </div>

                        </div>
                    </div> <!--  col-sm-6  -->
                </div> <!--  end .row  -->

                <div class="row margin-bottom-30">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="event-latest">
                            <div class="row"> 

                                <div class="col-lg-5 col-md-5 hidden-sm hidden-xs">
                                    <div class="event-latest-thumbnail">
                                        <a href="#">
                                            <img src="images/event_3.jpg" alt="">
                                        </a>
                                    </div>
                                </div> <!--  col-sm-5  -->

                                <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
                                    <div class="event-details">
                                        <a class="latest-date" href="#">20 Sep, 2017</a>
                                        <h4 class="event-latest-title">
                                            <a href="#">You are Somebodyâ€™s Type</a>
                                        </h4>
                                        <p>Many people has same blood group like you. so donate now and bring smiles in their face and encourage others for donate blood.</p>
                                        <div class="event-latest-details">
                                            <a class="author" href="#"><i class="fa fa-clock-o" aria-hidden="true"></i> 10.00am - 3.00pm</a>
                                            <a class="comments" href="#"> <i class="fa fa-map-marker" aria-hidden="true"></i> California, USA</a>
                                        </div>
                                    </div>
                                </div> <!--  col-sm-7  -->

                            </div>
                        </div>
                    </div> <!--  col-sm-6  -->

                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="event-latest">

                            <div class="row"> 
                                <div class="col-lg-5 col-md-5 hidden-sm hidden-xs">
                                    <div class="event-latest-thumbnail">
                                        <a href="#">
                                            <img src="images/event_4.jpg" alt="">
                                        </a>
                                    </div>
                                </div> <!--  col-sm-5  -->

                                <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
                                    <div class="event-details">
                                        <a class="latest-date" href="#">20 Sep, 2017</a>
                                        <h4 class="event-latest-title">
                                            <a href="#">Donation - Feel Real Peace</a>
                                        </h4>
                                        <p>You're the real hero because you can gift a new life for patient.So donate your blood and enjoy a precious life. Don't fear, it's really easy.</p>
                                        <div class="event-latest-details">
                                            <a class="author" href="#"><i class="fa fa-clock-o" aria-hidden="true"></i> 10.00am - 3.00pm</a>
                                            <a class="comments" href="#"> <i class="fa fa-map-marker" aria-hidden="true"></i> California, USA</a>
                                        </div>
                                    </div>
                                </div> <!--  col-sm-7  -->

                            </div>

                        </div>
                    </div> <!--  col-sm-6  -->

                </div> <!--  end .row  -->                

                <div class="row">
                    <div class="col-sm-12 col-md-4 col-md-offset-4 text-center">
                        <a class="btn btn-load-more" href="#">Load All Campaigns</a>
                    </div>
                </div>

            </div> <!--  end .container  --> 

        </section> 
        
        <!--  DONAR LIST SECTION  -->

        <section id="volunteers" class="section-content-block section-secondary-bg section-our-team">

            <div class="container wow fadeInUp">

                <div class="row section-heading-wrapper">

                    <div class="col-md-12 col-sm-12 text-center">
                        <h2 class="section-heading">Our Volunteers</h2>
                        <p class="section-subheading">The volunteers who give their time and talents help to fulfill our mission.</p>
                    </div> <!-- end .col-sm-10  -->                      

                </div> <!-- end .row  -->

                <div class="row">

                    <div class="col-lg-4 col-md-offset-0 col-md-4 col-md-offset-0 col-sm-8 col-sm-offset-2 col-xs-10 col-xs-offset-1">

                        <div class="team-layout-1">       

                            <figure class="team-member">
                                <a href="#" title="ALEXANDER GARY">
                                    <img src="images/team_9.jpg" alt="ALEXANDER GARY"/>
                                </a>

                            </figure> <!-- end. team-member  -->

                            <article class="team-info">
                                <h3>Amanullah Aman</h3>                                   
                                <h4>Co-Founder</h4>
                            </article>

                            <div class="team-content">

                                <div class="team-social-share text-center clearfix">
                                    <a class="fa fa-facebook rectangle" href="https://www.facebook.com/auarony" title="Facebook"></a>
                                    <a class="fa fa-twitter rectangle" href="#" title="Twitter"></a>
                                    <a class="fa fa-google-plus rectangle" href="#" title="Google Plus"></a>
                                    <a class="fa fa-linkedin rectangle" href="#" title="Linkedin"></a>
                                </div> <!-- end .author-social-box  -->

                            </div>                             

                        </div> <!--  end team-layout-1 -->

                    </div> <!--  end .col-md-4 col-sm-12  -->

                    <div class="col-lg-4 col-md-offset-0 col-md-4 col-md-offset-0 col-sm-8 col-sm-offset-2 col-xs-10 col-xs-offset-1">

                        <div class="team-layout-1">       

                            <figure class="team-member">
                                <a href="#" title="MELISSA MUNOZ">
                                    <img src="images/team_6.jpg" alt="MELISSA MUNOZ" />
                                </a>

                            </figure> <!-- end. team-member  -->

                            <article class="team-info">
                                <h3>Farhan Nadim</h3>                                   
                                <h4>Founder</h4>
                            </article>

                            <div class="team-content">

                                <div class="team-social-share text-center clearfix">
                                    <a class="fa fa-facebook rectangle" href="https://www.facebook.com/farhan.rabib" title="Facebook"></a>
                                    <a class="fa fa-twitter rectangle" href="#" title="Twitter"></a>
                                    <a class="fa fa-google-plus rectangle" href="#" title="Google Plus"></a>
                                    <a class="fa fa-linkedin rectangle" href="#" title="Linkedin"></a>
                                </div> <!-- end .author-social-box  -->

                            </div>                             

                        </div> <!--  end team layout-1 -->

                    </div> <!--  end .col-md-4 col-sm-12  -->

                    <div class="col-lg-4 col-md-offset-0 col-md-4 col-md-offset-0 col-sm-8 col-sm-offset-2 col-xs-10 col-xs-offset-1">

                        <div class="team-layout-1">       

                            <figure class="team-member">
                                <a href="#" title="JOHN ABRAHAM">
                                    <img src="images/team_7.jpg" alt="JOHN ABRAHAM" />
                                </a>                               

                            </figure> <!-- end. team-member  -->

                            <article class="team-info">
                                <h3>Shahadat Hossain</h3>                                   
                                <h4>Co-Founder</h4>
                            </article>
                            <div class="team-content">

                                <div class="team-social-share text-center clearfix">
                                    <a class="fa fa-facebook rectangle" href="#" title="Facebook"></a>
                                    <a class="fa fa-twitter rectangle" href="#" title="Twitter"></a>
                                    <a class="fa fa-google-plus rectangle" href="#" title="Google Plus"></a>
                                    <a class="fa fa-linkedin rectangle" href="#" title="Linkedin"></a>
                                </div> <!-- end .author-social-box  -->

                            </div>                             

                        </div> <!--  end team-layout-1 -->

                    </div> <!--  end .col-md-4 col-sm-12  -->  


                </div> <!-- end .row  --> 

            </div> <!-- end .container  -->

        </section> <!--  end .section-our-team --> 


        <!--  APPOINTMENT SECTION -->

        <section id="appointment" class="section-appointment">

            <div class="container wow fadeInUp">

                <div class="row">

                    <div class="col-lg-6 col-md-6 hidden-sm hidden-xs"> 

                        <figure class="appointment-img">
                            <img src="images/appointment.jpg" alt="appointment image">
                        </figure>
                    </div> <!--  end col-lg-6  -->


                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12"> 

                        <div class="appointment-form-wrapper text-center clearfix">
                            <h3 class="join-heading">Request Appointment</h3>
                            <form class="appoinment-form"> 
                                <div class="form-group col-md-6">
                                    <input id="your_name" class="form-control" placeholder="Name" type="text">
                                </div>
                                <div class="form-group col-md-6">
                                    <input id="your_email" class="form-control" placeholder="Email" type="email">
                                </div>
                                <div class="form-group col-md-6">
                                    <input id="your_phone" class="form-control" placeholder="Phone" type="text">
                                </div>
                                <div class="form-group col-md-6">
                                    <div class="select-style">                                    
                                        <select class="form-control" name="your_center">
                                            <option>Donation Center</option>
                                            <option>Los Angles</option>
                                            <option>California</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group col-md-6">
                                    <input id="your_date" class="form-control" placeholder="Date" type="text">
                                </div>


                                <div class="form-group col-md-6">
                                    <input id="your_time" class="form-control" placeholder="Time" type="text">
                                </div>

                                <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                    <textarea id="textarea_message" class="form-control" rows="4" placeholder="Your Message..."></textarea>
                                </div>                                                          

                                <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                    <button id="btn_submit" class="btn-submit" type="submit">Get Appointment</button>
                                </div>

                            </form>

                        </div> <!-- end .appointment-form-wrapper  -->

                    </div> <!--  end .col-lg-6 -->

                </div> <!--  end .row  -->

            </div> <!--  end .container -->

        </section>  <!--  end .appointment-section  -->

        <!--  GALLERY CONTENT  -->

        <section id="gallery" class="section-content-block section-secondary-bg">

            <div class="container">

                <div class="row section-heading-wrapper">

                    <div class="col-md-12 col-sm-12 text-center">
                        <h2 class="section-heading">Photo Gallery</h2>
                        <p class="section-subheading">Campaign photos of different parts of world and our prestigious voluntary work</p>
                    </div> <!-- end .col-sm-10  -->                      


                </div> <!-- end .row  -->

            </div> <!--  end .container -->

            <div class="container-fluid wow fadeInUp">

                <div class="no-padding-gallery gallery-carousel">

                    <a class="gallery-light-box xs-margin" data-gall="myGallery" href="images/gallery_1.jpg">

                        <figure class="gallery-img">

                            <img src="images/gallery_1.jpg" alt="gallery image" />

                        </figure> <!-- end .cause-img  -->

                    </a> <!-- end .gallery-light-box  -->

                    <a class="gallery-light-box xs-margin"  data-gall="myGallery" href="images/gallery_2.jpg">

                        <figure class="gallery-img">

                            <img src="images/gallery_2.jpg" alt="gallery image" />

                        </figure> <!-- end .cause-img  -->

                    </a>

                    <a class="gallery-light-box xs-margin" data-gall="myGallery" href="images/gallery_3.jpg">

                        <figure class="gallery-img">

                            <img src="images/gallery_3.jpg" alt="gallery image" />

                        </figure> <!-- end .cause-img  -->

                    </a> <!-- end .gallery-light-box  -->

                    <a class="gallery-light-box xs-margin"  data-gall="myGallery" href="images/gallery_4.jpg">

                        <figure class="gallery-img">

                            <img src="images/gallery_4.jpg" alt="gallery image" />

                        </figure> <!-- end .cause-img  -->

                    </a>

                    <a class="gallery-light-box xs-margin" data-gall="myGallery" href="images/gallery_5.jpg">

                        <figure class="gallery-img">

                            <img src="images/gallery_5.jpg" alt="gallery image" />

                        </figure> <!-- end .cause-img  -->

                    </a> <!-- end .gallery-light-box  -->

                    <a class="gallery-light-box xs-margin"  data-gall="myGallery" href="images/gallery_6.jpg">

                        <figure class="gallery-img">

                            <img src="images/gallery_6.jpg" alt="gallery image" />

                        </figure> <!-- end .cause-img  -->

                    </a>

                    <a class="gallery-light-box xs-margin" data-gall="myGallery" href="images/gallery_7.jpg">

                        <figure class="gallery-img">

                            <img src="images/gallery_8.jpg" alt="gallery image" />

                        </figure> <!-- end .cause-img  -->

                    </a> <!-- end .gallery-light-box  -->

                    <a class="gallery-light-box xs-margin"  data-gall="myGallery" href="images/gallery_8.jpg">

                        <figure class="gallery-img">

                            <img src="images/gallery_7.jpg" alt="gallery image" />

                        </figure> <!-- end .cause-img  -->

                    </a>

                </div> <!-- end .row  -->

            </div><!-- end .container-fluid  -->

        </section> <!-- end .section-content-block  -->

        <!-- BLOG SECTION  -->

        <section id="blog" class="section-content-block section-home-blog section-pure-white-bg">

            <div class="container wow fadeInUp">

                <div class="row section-heading-wrapper">

                    <div class="col-md-12 col-sm-12 text-center">
                        <h2 class="section-heading">Recent Blog</h2>
                        <p class="section-subheading">
                            Latest news and statements regarding giving blood, blood processing and supply.
                        </p>
                    </div> <!-- end .col-md-12  -->

                </div> <!--  end .row  -->

                <div class="row">

                    <div class="col-lg-4 col-md-offset-0 col-md-4 col-md-offset-0 col-sm-10 col-sm-offset-1 col-xs-12">

                        <div class="latest-news-container"> 

                            <a href="#">
                                <figure>
                                    <img src="images/blog_thumb_1.jpg" alt="latest news">
                                </figure>
                            </a>

                            <div class="news-content">

                                <h3>
                                    <a href="#">Blood Connects Us All in a Soul</a>
                                </h3>

                                <div class="news-meta-info">
                                    <i class="fa fa-clock-o"></i> April 4, 2017
                                    &nbsp; <i class="fa fa-comment-o"></i> 10 Comments
                                </div>                                

                                <div class="update-details">                                     
                                    In many countries, demand exceeds supply, and blood services face the challenge of making blood available for patient. 
                                </div>

                            </div>

                        </div><!--  end .update-info  -->

                    </div> <!--  end col-lg-4  -->

                    <div class="col-lg-4 col-md-offset-0 col-md-4 col-md-offset-0 col-sm-10 col-sm-offset-1 col-xs-12">

                        <div class="latest-news-container"> 

                            <a href="#">
                                <figure>
                                    <img src="images/blog_thumb_2.jpg" alt="latest news">
                                </figure>
                            </a>

                            <div class="news-content">

                                <h3>
                                    <a href="#">Give Blood and Save three Lives</a>
                                </h3>

                                <div class="news-meta-info">
                                    <i class="fa fa-clock-o"></i> April 4, 2017
                                    &nbsp; <i class="fa fa-comment-o"></i> 10 Comments
                                </div>                                

                                <div class="update-details">                                    
                                    To save a life, you donâ€™t need to use muscle. By donating just one unit of blood, you can save three lives or even several lives.
                                </div>

                            </div>

                        </div><!--  end .update-info  -->

                    </div> <!--  end col-lg-4  -->

                    <div class="col-lg-4 col-md-offset-0 col-md-4 col-md-offset-0 col-sm-10 col-sm-offset-1 col-xs-12">

                        <div class="latest-news-container"> 

                            <a href="#">
                                <figure>
                                    <img src="images/blog_thumb_3.jpg" alt="latest news">
                                </figure>
                            </a>

                            <div class="news-content">

                                <h3>
                                    <a href="#">Why Should I donate Blood ?</a>
                                </h3>

                                <div class="news-meta-info">
                                    <i class="fa fa-clock-o"></i> April 4, 2017
                                    &nbsp; <i class="fa fa-comment-o"></i> 10 Comments
                                </div>                                

                                <div class="update-details">
                                    Blood is the most precious gift that anyone can give to another person.Donating blood not only saves the life also donors.
                                </div>

                            </div>

                        </div><!--  end .update-info  -->

                    </div> <!--  end col-lg-4  -->

                </div> <!-- end row  -->

                <div class="row">
                    <div class="col-sm-12 col-md-4 col-md-offset-4 text-center">
                        <a href="#" class="btn btn-load-more">- Load More Blog -</a>
                    </div>
                </div> <!-- end .row  -->

            </div> <!-- end .container  -->

        </section> <!--  end .section-latest-blog -->


        <!-- START FOOTER  -->

        <footer>            

            <section id="contact" class="footer-widget-area footer-widget-area-bg">

                <div class="container">

                    <div class="row">

                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                            <div class="about-footer">

                                <div class="row">

                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                        <img src="images/logo-footer.png" alt="" />
                                    </div> <!--  end col-lg-3-->

                                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                        <p>
                                            We are world largest and trustful blood donation center. We have been working since 1973 with a prestigious vision to helping patient to provide blood.
                                            We are working all over the world, organizing blood donation campaign to grow awareness among the people to donate blood.
                                        </p>
                                    </div> <!--  end .col-lg-9  -->

                                </div> <!--  end .row -->

                            </div> <!--  end .about-footer  -->

                        </div> <!--  end .col-md-12  -->

                    </div> <!--  end .row  -->

                    <div class="row">

                        <div class="col-md-4 col-sm-6 col-xs-12">

                            <div class="footer-widget">
                                <div class="sidebar-widget-wrapper">
                                    <div class="footer-widget-header clearfix">
                                        <h3>Give your Feedback</h3>
                                    </div>
                                    <input type="text" placeholder="        Write your experience...">
                                    <div class="footer-subscription">
                                        <p>
                                            <button class="inside-btn">Submit</button>
                                        </p>
                                    </div>
                                </div>
                            </div>

                        </div> <!--  end .col-md-4 col-sm-12 -->   						                      

                        <div class="col-md-4 col-sm-6 col-xs-12">

                            <div class="footer-widget">

                                <div class="sidebar-widget-wrapper">

                                    <div class="footer-widget-header clearfix">
                                        <h3>Contact Us</h3>
                                    </div>  <!--  end .footer-widget-header --> 


                                    <div class="textwidget">                                       

                                        <i class="fa fa-envelope-o fa-contact"></i> <p><a href="#">fnrabib21@gmail.com</a><br/><a href="#">helpme@donation.com</a></p>

                                        <i class="fa fa-location-arrow fa-contact"></i> <p>Road-3,3/G, Shiyalbari,<br/>Mirpur-02,Dhaka-1216</p>

                                        <i class="fa fa-phone fa-contact"></i> <p>Office:&nbsp; (+880) 1682 657933<br/>Cell:&nbsp; (+880) 1748 225664</p>                              

                                    </div>

                                </div> <!-- end .footer-widget-wrapper  -->

                            </div> <!--  end .footer-widget  -->

                        </div> <!--  end .col-md-4 col-sm-12 -->   

                        <div class="col-md-4 col-sm-12 col-xs-12">

                            <div class="footer-widget clearfix">

                                <div class="sidebar-widget-wrapper">

                                    <div class="footer-widget-header clearfix">
                                        <h3>Support Links</h3>
                                    </div>  <!--  end .footer-widget-header --> 


                                    <ul class="footer-useful-links">

                                        <li>
                                            <a href="#">
                                                <i class="fa fa-caret-right fa-footer"></i>
                                                Thalassemia
                                            </a>
                                        </li>

                                        <li>
                                            <a href="#">
                                                <i class="fa fa-caret-right fa-footer"></i>
                                                Cell Elofrosis
                                            </a>
                                        </li>

                                        <li>
                                            <a href="#">
                                                <i class="fa fa-caret-right fa-footer"></i>
                                                Myelodysasia
                                            </a>
                                        </li>

                                        <li>
                                            <a href="#">
                                                <i class="fa fa-caret-right fa-footer"></i>
                                                Blood Count
                                            </a>
                                        </li>

                                        <li>
                                            <a href="#">
                                                <i class="fa fa-caret-right fa-footer"></i>
                                                Hemolytimia
                                            </a>
                                        </li>

                                        <li>
                                            <a href="#">
                                                <i class="fa fa-caret-right fa-footer"></i>
                                                Ychromas Eosis 
                                            </a>
                                        </li>

                                        <li>
                                            <a href="#">
                                                <i class="fa fa-caret-right fa-footer"></i>
                                                Hyrcoagulable
                                            </a>
                                        </li>

                                        <li>
                                            <a href="#">
                                                <i class="fa fa-caret-right fa-footer"></i>
                                                Thrombo Xtosis
                                            </a>
                                        </li>

                                        <li>
                                            <a href="#">
                                                <i class="fa fa-caret-right fa-footer"></i>
                                                Sicklenemiaxs
                                            </a>
                                        </li>

                                        <li>
                                            <a href="#">
                                                <i class="fa fa-caret-right fa-footer"></i>
                                                Aplastic Anemia
                                            </a>
                                        </li>                                       

                                    </ul>

                                </div> <!--  end .footer-widget  -->        

                            </div> <!--  end .footer-widget  -->            

                        </div> <!--  end .col-md-4 col-sm-12 -->    

                    </div> <!-- end row  -->

                </div> <!-- end .container  -->

            </section> <!--  end .footer-widget-area  -->

            <!--FOOTER CONTENT  -->

            <section class="footer-contents">

                <div class="container">

                    <div class="row clearfix">

                        <div class="col-md-6 col-sm-12">
                        </div>  <!-- end .col-sm-6  -->

                        <div class="col-md-6 col-sm-12 text-right">
                            <div class="footer-nav">
                                <nav>
                                    <ul>
                                        <li>
                                            <a href="index.html">Home</a>
                                        </li>
                                        <li>
                                            <a href="#">Causes</a>
                                        </li>
                                        <li>
                                            <a href="donate.html">Events</a>
                                        </li>
                                        <li>
                                            <a href="blog-with-sidebar.html">Gallery</a>
                                        </li>
                                        <li>
                                            <a href="campaign-grid.html">Blog</a>
                                        </li>
                                        <li>
                                            <a href="contact.html">Contact</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div> <!--  end .footer-nav  -->
                        </div> <!--  end .col-lg-6  -->

                    </div> <!-- end .row  -->                                    

                </div> <!--  end .container  -->

            </section> <!--  end .footer-content  -->

        </footer>

        <!-- END FOOTER  -->

        <!-- Back To Top Button  -->

        <a id="backTop">Back To Top</a>

        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/wow.min.js"></script>
        <script src="js/jquery.backTop.min.js "></script>
        <script src="js/waypoints.min.js"></script>
        <script src="js/waypoints-sticky.min.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/jquery.stellar.min.js"></script>
        <script src="js/jquery.counterup.min.js"></script>
        <script src="js/venobox.min.js"></script>
        <script src="js/custom-scripts.js"></script>

        <script>
            function searchBlood(group,value)
            {
                
                
                $.ajax({
                    type: "GET",
                    // url: '/searchBlood/'+shoots.id+'/'+shoots.category_id,
                    url: '/searchBlood/',
                    data: {group: group, value: value},
                    // cache: true,
                    success: function(data){
                        //    $("#resultarea").text(data);
                        // alert('hello');
                      //  console.log(data);
                // $('#views').html('&nbsp;&nbsp;'+shoots.view);
                    //alert('hello'+value);
                        // $('#comments').html(data);
                        // $('#clicked-shoot-id').val(shoots.id);
                        $('#search_div').css('display','block');
                        $('#search_div').html(data);
                        $("#closeSearchDiv").click(function(){
                            $('#search_div').css('display','none');
                        });
                    }
                });
            }

            
        </script>
    </body>

</html>