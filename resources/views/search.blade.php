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
        <link rel="stylesheet" href="{{asset('css/fonticons.css')}}">
        <link rel="stylesheet" href="{{asset('fonts/stylesheet.css')}}">
        <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">

        <link rel="stylesheet" href="{{asset('css/plugins.css')}}">

        <!--Theme custom css -->
        <link rel="stylesheet" href="{{asset('css/style.css')}}">

        <!--Theme Responsive css-->
        <link rel="stylesheet" href="{{asset('css/responsive.css')}}">

        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="{{asset('js/vendor/modernizr-2.8.3-respond-1.4.2.min.js')}}"></script>
        <script src="{{asset('js/ajax.js')}}"></script>
        
    </head>
    
    <body data-spy="scroll" data-target="#navmenu">
        
        <header id="main_menu" class="header">
        <div class="well well-lg" style="padding-bottom: 1px;border-radius: 0px;">    
            <div class="main_menu_bg ">
                <div class="container">
                    <div class="row " style=" margin-top: 0px;">
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
                        <div class="col-sm-1" style="padding: 5px;">
                            
                                <img src="{{asset('image/google.png')}}" alt="Mountain View" style="width: 100%;">
                        </div>
                        <div class="col-sm-6">
                                
                                        <input type="text" placeholder="Nhập từ khóa..." class="form-control" name="search_text" id="search_text" value="{{old('search_text')}}">     
                        </div>
                        <div class="col-sm-2">
                            
                        </div>
                        <div class="col-sm-3" style="margin-top: 10px;">
                       
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
                    <div class="row">
                        <div class="col-sm-1">
                            
                        </div>
                        <div class="col-sm-11">
                            <ul class=" nav nav-tabs" style="border-bottom: 0px; margin-top: 15px;">
                                <li ><a href="#" style="font-size: 15px;border-radius: 0px 0px 0 0;border: 0px;color: #777777; border-bottom: 2px solid blue;">Tất cả</a></li>
                                <li ><a href="#" style="font-size: 15px;border-radius: 0px 0px 0 0;border: 0px;color: #777777;">Hình ảnh</a></li>
                                <li><a href="#" style="font-size: 15px;border-radius: 0px 0px 0 0;border: 0px;color: #777777;">Video</a></li>
                                <li><a href="#" style="font-size: 15px;border-radius: 0px 0px 0 0;border: 0px;color: #777777;">Tin tức</a></li>
                                <li><a href="#" style="font-size: 15px;border-radius: 0px 0px 0 0;border: 0px;color: #777777;">Thêm</a></li>
                            </ul>
                        </div>
                    </div>

                </div>

            </div>
        </div>
        </header> <!--End of header -->

            <div class="container">
                
                <div id="display">
                    
                </div>
                
                <div class="row">
                    <div class="col-sm-1"></div>
                    <div class="col-sm-11">
                        <ul id="pagination-demo" class="pagination pagination-sm">
                            
                        </ul>
                    </div>
                </div>      
                <!-- </ul> -->
            </div>

        <script src="{{asset('js/vendor/jquery-1.11.2.min.js')}}"></script>
        <script src="{{asset('js/vendor/bootstrap.min.js')}}"></script>
        <script src="{{asset('js/jquery.easypiechart.min.js')}}"></script>
        <script src="{{asset('js/jquery.twbsPagination.js')}}"></script>
        <script src="{{asset('js/jquery.twbsPagination.min.js')}}"></script>
        <script src="{{asset('js/plugins.js')}}"></script>
        <script src="{{asset('js/main.js')}}"></script>

    </body>
    
</html>
