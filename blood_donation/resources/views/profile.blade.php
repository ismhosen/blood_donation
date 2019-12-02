<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->

    <head>
        <meta charset="utf-8">
        <title>Home -2 Blood Donation - Activism & Campaign HTML5 Template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <meta name="description" content="Blood Donation - Activism & Campaign HTML5 Template">
        <meta name="author" content="xenioushk">
        <link rel="shortcut icon" href="images/favicon.png" />

        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
          <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->

        <!-- The styles -->
        
        <link rel="stylesheet" href="css/bootstrap.min.css" />
        <link href="css/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" >
        <link href="css/animate.css" rel="stylesheet" type="text/css" >
        <link href="css/owl.carousel.css" rel="stylesheet" type="text/css" >
        <link href="css/venobox.css" rel="stylesheet" type="text/css" >
        <link rel="stylesheet" href="css/styles.css" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <style>
        
        #edit_profile{
            display: none;
        }
        .error-message
        {
            color: red;
            font-size: 15px;
            font-weight: 100;
        }
        </style>

    </head>


    <body> 

        <!--  HEADER -->

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
                                
                                @if (Auth::user()->type=="Admin")
                                    <a href="{{ route('home') }}">Home</a>&nbsp;&nbsp;&nbsp;&nbsp;
                                    <a href="{{ route('profile') }}">Profile</a>&nbsp;&nbsp;&nbsp;&nbsp;
                                    <a href="{{ route('users') }}">Users</a>&nbsp;&nbsp;&nbsp;&nbsp;
                                    <a href="{{ route('feedbacks') }}">Feedbacks</a>&nbsp;&nbsp;&nbsp;&nbsp;
                                @else
                                    <a href="{{ route('home') }}">Home</a>&nbsp;&nbsp;&nbsp;&nbsp;
                                    <a href="{{ route('profile') }}">Profile</a>&nbsp;&nbsp;&nbsp;&nbsp;
                                    <a href="{{ route('messenger') }}">Messenger</a>&nbsp;&nbsp;&nbsp;&nbsp;
                                @endif
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


        </header> <!-- end main-header  -->
        @if ($errors->has('newAddress') || $errors->has('newName') || $errors->has('changeImage') || $errors->has('newPhone_no') || $errors->has('newBlood_group') || $errors->has('newDescription'))
        {{-- <h1>hello</h1> --}}
            <script>
                $(document).ready(function(){
                    $('#edit_profile').css('display','block');
                });
            </script>
        @endif
        <section id="profile">
            
            <div class="profile-view">
                
                <div class="container">
                    
                    <div class="row">
                        
                        <div class="col-md-5 profile-left">
                        
                        <img src="/images/profile_pictures/{{ Auth::user()->image }}" alt="Image">
                        <h6>{{ Auth::user()->name }}</h6>
                        <p><strong>{{ Auth::user()->blood_group }}</strong> Blood Donar</p>
                        <p>Last Donation: <strong>{{ Auth::user()->last_blood_donation }}</strong></p>
                        <p>DOB: {{ Auth::user()->birth_date }} </p>
                        <p>Phone : {{ Auth::user()->phone_no }}</p>
                        <p>Address : {{ Auth::user()->address }}</p>
                        <p>E-mai: {{ Auth::user()->email }}</p>
                        <p>{{ Auth::user()->description }}</p>
                        <button onclick="edit_profile()">Edit Profile</button>
                    </div>
                    <div class="col-md-7 edit-profile" id="last_blood_donation">
                            <form action="/addLastBloodDonation" method="post">
                                @csrf
                                <hr style="border:none">
                                <span for="newImage">Please Last Blood Donation date If given</span>
                                <input type="date" name="last_blood_donation" value="{{ Auth::user()->last_blood_donation }}">
                                @error('last_blood_donation')
                                    <span class="error-message" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <br><br>
                                <button type="submit" class="btn btn-default">Submit</button>
                            </form>
                            <form action="/editPassword" method="post">
                                @csrf
                                <hr style="border:none">
                                <h2>Edit Password</h2>
                                <span for="old_password">Last Password</span>
                                <input type="password" name="old_password" value="" placeholder="Enter last password" required>

                                @if(Session::has('msg'))
                                    <span class="error-message" role="alert">
                                        <strong>{{Session::get('msg')}}</strong>
                                    </span>
                                @endif
                                {{-- @error('old_password')
                                    <span class="error-message" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror --}}
                                <br>
                                <span for="password">New Password</span>
                                <input id="password" type="password" name="password" required autocomplete="new-password" placeholder="Enter New password">
                                @error('password')
                                    <span class="error-message" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <br>
                                <span for="confirm_password">Confirm Password</span>
                                <input id="password-confirm" type="password" name="password_confirmation" required autocomplete="new-password" placeholder="Confrim new password">
                                
                                <br><br>
                                <button type="submit" class="btn btn-default">Submit</button>
                            </form>
                            
                        </div>
                           <div class="col-md-7 edit-profile" id="edit_profile">
                               <h2>Edit Profile</h2>
                               <img src="/images/profile_pictures/{{ Auth::user()->image }}" alt=""><br>
                               <form action="/editprofile" method="post" enctype="multipart/form-data">
                                   @csrf
                                   <span for="newImage">Change Photo</span>
                                   <input type="file" name="changeImage">
                                   @error('changeImage')
                                        <span class="error-message" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                   <h6>E-mail:</h6>
                                   <input type="text" name="email" value="{{ Auth::user()->email }}" readonly>
                                   <h6>Change Name:</h6>
                                   <input type="text" name="newName" value="{{ Auth::user()->name }}">
                                   @error('newName')
                                        <span class="error-message" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                   <h6>Change Blood Group:</h6>
                                    <select name="newBlood_group">
                                        <option value="{{ Auth::user()->blood_group }}">{{ Auth::user()->blood_group }}</option>
                                        <option value="A+">A+</option>
                                        <option value="A-">A-</option>
                                        <option value="B+">B+</option>
                                        <option value="B-">B-</option>
                                        <option value="AB+">AB+</option>
                                        <option value="AB_">AB-</option>
                                        <option value="O+">O+</option>
                                        <option value="O-">O-</option>
                                    </select>
                                    @error('newBlood_group')
                                        <span class="error-message" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                   {{-- <input type="text" name="newBlood_group" value=""> --}}
                                   <h6>Change Date of Birth:</h6>
                                   <input type="date" name="newDOB" value="{{ Auth::user()->birth_date }}">
                                   @error('newDOB')
                                        <span class="error-message" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                   <h6>Change Phone No:</h6>
                                   <input type="number" name="newPhone_no" value="{{ Auth::user()->phone_no }}">
                                   @error('newPhone_no')
                                        <span class="error-message" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                   <h6>Change Address:</h6>
                                   <input type="text" name="newAddress" value="{{ Auth::user()->address }}">
                                   @error('newAddress')
                                        <span class="error-message" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    <h6>Change Description:</h6>
                                   <input type="text" name="newDescription" value="{{ Auth::user()->description }}">
                                   @error('newDescription')
                                        <span class="error-message" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                   {{-- <h6>Chane Password:</h6>
                                   <input type="Password" value="{{ Auth::user()->password }}"> --}}
                                   <button type="submit">Done</button>
                               </form>
                               
                           </div>
                            
                        </div>
                        
                    </div>
                    
                </div>
            
        </section>

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
    </body>

    <script>
    
        function edit_profile()
        {
            $('#edit_profile').css("display","block");
        }
    
    </script>

</html>