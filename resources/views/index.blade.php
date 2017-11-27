<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Google</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">

        <!--<link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,200,300,600,700' rel='stylesheet' type='text/css'>-->
        <link rel="stylesheet" href="{{asset('css/fonticons.css')}}">
        <link rel="stylesheet" href="{{asset('fonts/stylesheet.css')}}">
        <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
        <!--        <link rel="stylesheet" href="assets/css/bootstrap-theme.min.css">-->


        <!--For Plugins external css-->
        <link rel="stylesheet" href="{{asset('css/plugins.css')}}" />

        <!--Theme custom css -->
        <link rel="stylesheet" href="{{asset('css/style.css')}}">

        <!--Theme Responsive css-->
        <link rel="stylesheet" href="{{asset('css/responsive.css')}}" />

        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
        <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

        <script src="{{asset('js/vendor/modernizr-2.8.3-respond-1.4.2.min.js')}}"></script>
    </head>
    <body data-spy="scroll" data-target="#navmenu">
        
        <header id="main_menu" class="header">
            <div class="main_menu_bg navbar-fixed-top">
                <div class="container">
                    <div class="row" style=" margin-top: 15px;">
                        <div class="col-sm-9">
                        </div>
                        <div class="col-sm-3 " style="margin-top: 10px;">
                            
                            <div class="col-sm-1">
                                <span>Gmail</span>
                            </div>
                            <div class="col-sm-1">
                            </div>
                            <div class="col-sm-2">
                                <span>Images</span>
                            </div>
                            <div class="col-sm-1">
                            </div>
                            <div class="col-sm-1">
                                <span class="material-icons" ">apps</span>
                            </div>
                            <div class="col-sm-1">
                            </div>
                            <div class="col-sm-1">
                                <span class="material-icons">notifications</span>
                            </div>
                            <div class="col-sm-1">
                            </div>
                            <div class="col-sm-1">
                                <span class="material-icons" style="color: blue; font-size: 25px;">public</span>
                            </div>
                            
                            
                        </div>
                    </div>

                </div>

            </div>
        </header> <!--End of header -->

        <section id="domain" class="domainsearce">
            <div class="container">
                <div class="row">
                    <div class="col-sm-4 col-sm-offset-5" style="margin-left: 37%;">
                        <img src="{{asset('image/google.png')}}" alt="Mountain View" style="width: 80%;">
                    </div>
                </div>
                <div class="row" style="margin-bottom: 20px;">
                    
                </div>
                <div class="row">
                    <div class="col-sm-7 col-sm-offset-3" style="margin-left: 22%;">
						<div class="main_somainsearrce">
							
							<div class="serceoption wow fadeIn" data-wow-duration="1.5s">
								<div class="row">
                                    @if( count($errors) > 0)
                                        <div class="alert alert-danger">
                                            <ul>
                                                @foreach($errors->all() as $error)
                                                    <li>{{$error}}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                    @endif
                                    @if( Session::has('flash_message'))
                                        <div class="alert alert-{{ Session::get('flash_level')}}">
                                            {{ Session::get('flash_message')}}
                                        </div>
                                    @endif
                                    <form action="{{ URL::route('searchRequest')}}" method="POST" >
                                        <input type="hidden" name="_token" value="{{ csrf_token()}}">
                                        <input type="text" placeholder="Nhập từ khóa..." class="form-control" name="search_text" id="search_text">
                                        <!-- <button type="submit" class="btn btn-default">Add</button> -->
								        
                                    </form>
                                </div>
							</div>
						</div>
					</div>
                    
                </div>
                <div class="row">
                    <div class="col-sm-7 col-sm-offset-4">
                        <button type="button" class="btn" style="font-size: 15px; width: 160px;height: 40px;padding: 0px 0px;">Tìm với Google</button>
                        <button type="button" class="btn" style="font-size: 15px; width: 250px;height: 40px;padding: 0px 0px;">Xem trang đầu tiên tìm được </button>
                    </div>
                </div>
            </div>
        </section>

        <script src="{{asset('js/vendor/jquery-1.11.2.min.js')}}"></script>
        <script src="{{asset('js/vendor/bootstrap.min.js')}}"></script>
        <script src="{{asset('js/jquery.easypiechart.min.js')}}"></script>

        <script src="{{asset('js/plugins.js')}}"></script>
        <script src="{{asset('js/main.js')}}"></script>

    </body>
</html>
