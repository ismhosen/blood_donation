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
                                <a href="{{ route('users') }}">Users</a>&nbsp;&nbsp;&nbsp;&nbsp;
                                <a href="{{ route('feedbacks') }}">Feedbacks</a>&nbsp;&nbsp;&nbsp;&nbsp;
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



    <hr style="border:none"><hr style="border:none">
 
    <div class="container">
            <h3>All Users</h3>
            <table class="table">
              <thead>
                <tr>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Blood Group</th>
                  <th>Image</th>
                  <th>Phone No</th>
                  <th>Birth Date</th>
                  <th>Address</th>
                  <th>type</th>
                  <th>Delete</th>
                </tr>
              </thead>
              <tbody>
                    @foreach ($users as $user)
                        <tr>  
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->blood_group }}</td>
                            <td><img src="/images/profile_pictures/{{ $user->image }}" alt="" width="51px"></td>
                            <td>{{ $user->phone_no }}</td>
                            <td>{{ $user->birth_date }}</td>
                            <td>{{ $user->address }}</td>
                            <td>{{ $user->type }}</td>
                            <td>
                                <form action="/deleteuser" method="post">
                                    @csrf
                                    <input type="hidden" name="user_id" id="" value="{{ $user->id }}">
                                    <button type="submit" class="btn btn-danger"><span class="fa fa-trash"></span></button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                
                
              </tbody>
            </table>
          </div>

        <!--  SECTION DONATION PROCESS -->


        





        <!-- START FOOTER  -->


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