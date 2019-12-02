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
        <style>
        ::-webkit-scrollbar {
            width: 7px;
        }

        /* Track */
        ::-webkit-scrollbar-track {
            background: #f1f1f1;
        }

        /* Handle */
        ::-webkit-scrollbar-thumb {
            background: #a7a7a7;
        }

        /* Handle on hover */
        ::-webkit-scrollbar-thumb:hover {
            background: #929292;
        }

        ul {
            margin: 0;
            padding: 0;
        }

        li {
            list-style: none;
        }

        .user-wrapper, .message-wrapper {
            border: 1px solid #dddddd;
            overflow-y: auto;
        }

        .user-wrapper {
            height: 600px;
        }

        .user {
            cursor: pointer;
            padding: 5px 0;
            position: relative;
        }

        .user:hover {
            background: #eeeeee;
        }

        .user:last-child {
            margin-bottom: 0;
        }

        .pending {
            position: absolute;
            left: 13px;
            top: 9px;
            background: #b600ff;
            margin: 0;
            border-radius: 50%;
            width: 18px;
            height: 18px;
            line-height: 18px;
            padding-left: 5px;
            color: #ffffff;
            font-size: 12px;
        }

        .media-left {
            margin: 0 10px;
        }

        .media-left img {
            width: 100% !important;

            /* border-radius: 64px; */
        }

        .media-body p {
            margin: 6px 0;
        }

        .message-wrapper {
            padding: 10px;
            height: 536px;
            background: #eeeeee;
        }

        .messages .message {
            margin-bottom: 15px;
        }

        .messages .message:last-child {
            margin-bottom: 0;
        }

        .received, .sent {
            width: 45%;
            padding: 3px 10px;
            border-radius: 10px;
        }

        .received {
            background: #ffffff;
        }

        .sent {
            background: #3bebff;
            float: right;
            text-align: right;
        }

        .message p {
            margin: 5px 0;
        }

        .date {
            color: #777777;
            font-size: 12px;
        }

        .active {
            background: #eeeeee;
        }

        input[type=text] {
            width: 100%;
            padding: 12px 20px;
            margin: 15px 0 0 0;
            display: inline-block;
            border-radius: 4px;
            box-sizing: border-box;
            outline: none;
            border: 1px solid #cccccc;
        }

        input[type=text]:focus {
            border: 1px solid #aaaaaa;
        }
        </style>

    <body> 

        <div id="preloader">
            <span class="margin-bottom"><img src="/images/loader.gif" alt="" /></span>
        </div>

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
            
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-4">
                        <div class="user-wrapper">
                            <ul class="users">
                                @foreach ($users as $user)
                                    <li class="user" id="{{ $user->id }}">
                                        <span class="pending">1</span>
                                        <div class="media">
                                            <div class="media-left">
                                                <img src="/images/profile_pictures/{{ $user->image }}" alt="hello">
                                            </div>
                                            <div class="media-body">
                                                <span class="name"><strong>{{$user->name}}</strong></span><br>
                                                <span class="email">{{$user->blood_group}}</span><br>
                                                <span class="email">{{$user->address}}</span><br><br>
                                            </div>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-8" id="messages">
                        
                    </div>
                </div>
            </div>
        

        


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
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script>
            var receiver_id='';
             var my_id="{{Auth::id()}}";
             $(document).ready(function(){
                // $.ajaxSetup({
                //     headers: {
                //         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                //     }
                // });
                 $('.user').click(function(){
                     $('.user').removeClass('active');
                     $(this).addClass('active');
                     receiver_id=$(this).attr('id');
                     $.ajax({
                         type: "get",
                         url: "/message/"+receiver_id,
                         data: "",
                         cache: false,
                         success:function(data){
                             $('#messages').html(data);
                         }
                     })
                 });

                 $(document).on('keyup','.input-text input',function(e){
                    var message=$(this).val();
                    if(e.keyCode == 13 && message != '' && receiver_id != ''){
                        $(this).val('');

                        var datastr = 
                        {
                            "receiver_id": receiver_id,
                            "message": message,
                            "_token": "{{ csrf_token() }}",
                        }
                        $.ajax({
                            type: "POST",
                            url: "/sendMessage/", // need to create this post route
                            data: datastr,
                            cache: false,
                            success: function (data) {
                                location.reload(true);
                            },
                            error: function (jqXHR, status, err) {
                            },
                            complete: function () {
                                //scrollToBottomFunc();
                            }
                        });
                    }
                 });
             });
        </script>

    </body>

</html>