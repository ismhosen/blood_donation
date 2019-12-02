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

        <style>
        .error-message
        {
            color: red;
            font-size: 15px;
            font-weight: 100;
        }
        </style>

    <body> 

       
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
        <section id="signup">
            
            <div class="signup">
                <div class="signup-box">
                    <h6>
                        <i class="fa fa-arrow-right"></i> <a href="{{ route('home') }}">Back to Home</a> <i class="fa fa-arrow-left"></i>
                    </h6><br>
                    <div class="container">
                    <div class="form">
                       <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                        @csrf
                            <h6>Your name</h6>
                            <input type="text" name="name" placeholder="Enter your name" value="{{old('name')}}">
                            @error('name')
                                <span class="error-message" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <br>
                            <h6>Username:</h6>
                            <input type="text" name="username" placeholder="Enter Your username" value="{{old('username')}}"><br>
                            <h6>E-mail:</h6>
                            <input type="text" name="email" placeholder="Enter your e-mail address" value="{{old('email')}}">
                            @error('email')
                                <span class="error-message" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <br>
                            <h6>Image:</h6>
                            <input type="file" name="image" value="{{old('image')}}">
                            @error('image')
                                <span class="error-message" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <h6>Phone No:</h6>
                            <input type="number" name="phone_no" placeholder="Enter your Phone no." value="{{old('phone_no')}}">
                            @error('phone_no')
                                <span class="error-message" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <br>
                            <h6>Password:</h6>
                            <input id="password" type="password" name="password" required autocomplete="new-password" value="{{old('password')}}">
                            @error('password')
                                <span class="error-message" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <br>
                            <h6>Confirm Password:</h6>
                            <input id="password-confirm" type="password" name="password_confirmation" required autocomplete="new-password"><br>
                            <h6>Choose Blood Group:</h6>
                                <select name="blood_group">
                                    <option value="A+">A+</option>
                                    <option value="A-">A-</option>
                                    <option value="B+">B+</option>
                                    <option value="B-">B-</option>
                                    <option value="AB+">AB+</option>
                                    <option value="AB_">AB-</option>
                                    <option value="O+">O+</option>
                                    <option value="O-">O-</option>
                                </select>
                                @error('blood_group')
                                    <span class="error-message" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <br>
                                <h6>Date of Birth:</h6>
                            <input type="date" name="dob">
                            @error('dob')
                                <span class="error-message" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <br>
                            <h6>Address:</h6>
                            <input type="text" name="address" placeholder="please enter your address..." value="{{old('address')}}">
                            @error('address')
                                <span class="error-message" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <br>
                            <h6>Description:</h6>
                            <input type="text" name="description" placeholder="Write something about blood donation..." value="{{old('description')}}">
                            @error('description')
                                <span class="error-message" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <br>
                            <h6>type:</h6>
                            <select name="type" id="">
                                <option value="donor">Donor</option>
                                <option value="volunteer">Volunteer</option>
                            </select>
                            @error('description')
                                <span class="error-message" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <br><br>
                            <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                        </form>
                        <h6><a href="{{ route('signin') }}">Already have an account? login..</a></h6>
                        
                    </div>
                    </div>
                    
                </div>
                
            </div>
            
        </section>

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
    </body>

</html>