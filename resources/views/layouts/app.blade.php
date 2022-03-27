<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>eMonitor</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src ="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/js/umd/util.js"></script>
    <!--font Awesome Styles -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css">
    <!-- chart js -->
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <style>
        @media screen and (max-width: 500px){
            .table td, .table th {
                padding: 0!important;
                vertical-align: top;
                border-top: 1px solid #dee2e6;
            }
            .volume-td{
                color: blue;
            }
        }
    </style>
    
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light shadow-sm" style = "background-color: #983dc2!important;">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}" style = "color: white;">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}" style="color: white;">{{ __('Login') }}</a>
                                </li>
                            @endif
                            
                        @else
                        <div class="dropdown show">
                            <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"  style = "background-color: #983dc2!important;border: none;">
                                ADMIN
                            </a>

                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <a class="dropdown-item" href="{{route('changeSetting')}}">Setting</a>
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                                onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">Logout</a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                                </form>
                            </div>
                        </div>
                        
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>

<script>
    
    $(document).ready(function(){
        var timerId=setInterval(function(){ getData(); }, 6000);
        
        function getData()
        {
            $.ajax({
                method: 'post',
                url: '/getData',
                data:{
                    "_token": "{{ csrf_token() }}"
                },
                success: function (ret){
                    $('#ajax-item').html('');
                    $('#ajax-item').html(ret);
                    var avt = '<?php echo $alert->avt; ?>';
                    
                    // if(avt == 0) {
                        $('.maxval'+$('#max-num').val()).attr('style',  'background-color:green')
                        
                        $('.minval'+$('#min-num').val()).attr('style',  'background-color:green')
                    // }
                    
                    if(Number($('#percentage-ajax').text())>Number($('#alert-percent').val()))
                    {
                        console.log('adfasfd', $('#mysound').val());

                        var audio1 = new Audio('uploads/'+$('#mysound').val());
                        audio1.play();
                    }

                    console.log('hello'+$('#last1_price').val())
                    
                    if($('#sound1_check').val()=='on'&&$('#last1_price').val()=='1'){
                        console.log("sound1")
                        var audio2 = new Audio('uploads/'+$('#audio1').val());
                        audio2.play();
                    }
                    if($('#sound2_check').val()=='on'&&$('#last2_price').val()=='1'){
                        console.log("sound2")
                        var audio3 = new Audio('uploads/'+$('#audio2').val());
                        audio3.play();
                    }
                    if($('#sound3_check').val()=='on'&&$('#last3_price').val()=='1'){
                        console.log("sound3");
                        var audio4 = new Audio('uploads/'+$('#audio3').val());
                        audio4.play();
                    }
                    if($('#sound4_check').val()=='on'&&$('#last4_price').val()=='1'){
                        console.log("sound4");
                        var audio5 = new Audio('uploads/'+$('#audio4').val());
                        audio5.play();
                    }
                    if($('#sound5_check').val()=='on'&&$('#last5_price').val()=='1'){
                        console.log("sound5")
                        var audio6 = new Audio('uploads/'+$('#audio5').val());
                        audio6.play();
                    }
                    
                    
                    var timestamp1=new Date().getTime();
                    console.log(new Date(timestamp1).toLocaleString())
                    $("#timestamp1").text(new Date(timestamp1-Math.floor(Math.random() * 1722) + 1).toLocaleString());
                    
                    var timestamp2=timestamp1-Math.floor(Math.random() * 7173) + 1;
                    $("#timestamp2").text(new Date(timestamp2).toLocaleString());
                    
                    var timestamp3=timestamp1-Math.floor(Math.random() * 1733) + 1;
                    $("#timestamp3").text(new Date(timestamp3).toLocaleString());
                    
                    var timestamp4=timestamp1-Math.floor(Math.random() * 3397) + 1;
                    $("#timestamp4").text(new Date(timestamp4).toLocaleString());
                    
                    var timestamp5=timestamp1-Math.floor(Math.random() * 4532) + 1;
                    $("#timestamp5").text(new Date(timestamp5).toLocaleString());
                    
                }
            });
        }
        
    });
    
    
</script>

</html>
