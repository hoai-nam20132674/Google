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
        <link rel="stylesheet" href="{{asset('css/plugins.css')}}">

        <!--Theme custom css -->
        <link rel="stylesheet" href="{{asset('css/style.css')}}">

        <!--Theme Responsive css-->
        <link rel="stylesheet" href="{{asset('css/responsive.css')}}">

        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
        <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

        <script src="{{asset('js/vendor/modernizr-2.8.3-respond-1.4.2.min.js')}}"></script>
        
        <script type="text/javascript">
                $(document).ready(function () {

                    var request= $("#search_text").val()
                    
                    $("#search_text").keypress(function (e) {
                        if (e.keyCode == 13){
                            e.preventDefault();
                            var request= $("#search_text").val()
                                
                                $.ajax({ //create an ajax request to load_page.php
                                    type: "GET",
                                    url: "http://localhost:9099/search?query="+request+"&page=1",
                                    dataType: "json", //expect html to be returned                
                                    success: function (data) {
                                        
                                        
                                        
                                        var quantity=data.quantity;
                                        var html_str = '<div class="row"><div class="col-sm-1"></div><div class="col-sm-11"><a style="color: #545454; margin-top: -10px;font-family: Sans-serif;">Khoảng '+quantity+' kết quả (0,01 giây)</a></div></div><br><div class="article"><div class="row"><div class="col-sm-1"></div>';
                                        for(var i=0; i< data.data.length; i++){

                                            var url= data.data[i].url;
                                            var title=data.data[i].title;
                                            var snippet=data.data[i].snippet;
                                            

                                            html_str += '<div class=" test col-sm-11"><a href="'+url+'" target="_blank" ><h5 class="title" style="color: #1a0dab; font-size: 19px; margin-top: 1px;font-family: Sans-serif;">' + title + '</h5></a></div></div><div class="row"><div class="col-sm-1"></div><div class="col-sm-11"><h6 class="Url" style="color: #006621; margin-top: -13px;font-family: Sans-serif;">' + url  + '</h6></div></div></div><div class="row"><div class="col-sm-1"></div><div class="col-sm-11"><a class="info" style="color: #545454; margin-top: -10px;font-family: Sans-serif;">'+snippet+'</a></div></div><br><div class="article"><div class="row"><div class="col-sm-1"></div>';
                                            
                                        }
                                        $('#display').html(html_str);
                                        
                                        var page_total = Math.floor(quantity/10)+1;
                                        $("#pagination-demo").twbsPagination({


                                            totalPages: page_total,
                                            visiblePages: 7,
                                            onPageClick: function (event, page) {
                                                
                                                var request= $("#search_text").val()
                                                // alert(request);
                                                $.ajax({ //create an ajax request to load_page.php
                                                    type: "GET",
                                                    url: "http://localhost:9099/search?query="+request+"&page="+page+"",
                                                    dataType: "json", //expect html to be returned                
                                                    success: function (data) {
                                                        
                                                        // var quantity=data.quantity;
                                                        // var page_total = Math.floor(quantity/10)+1;
                                                        var html_str = '<div class="row"><div class="col-sm-1"></div><div class="col-sm-11"><a style="color: #545454; margin-top: -10px;font-family: Sans-serif;">Khoảng '+quantity+' kết quả (0,01 giây)</a></div></div><br><div class="article"><div class="row"><div class="col-sm-1"></div>';
                                                        for(var i=0; i< data.data.length; i++){

                                                            var url= data.data[i].url;
                                                            var title=data.data[i].title;
                                                            var snippet=data.data[i].snippet;
                                                            

                                                            html_str += '<div class=" test col-sm-11"><a href="'+url+'" target="_blank" ><h5 class="title" style="color: #1a0dab; font-size: 19px; margin-top: 1px;font-family: Sans-serif;">' + title + '</h5></a></div></div><div class="row"><div class="col-sm-1"></div><div class="col-sm-11"><h6 class="Url" style="color: #006621; margin-top: -13px;font-family: Sans-serif;">' + url  + '</h6></div></div></div><div class="row"><div class="col-sm-1"></div><div class="col-sm-11"><a class="info" style="color: #545454; margin-top: -10px;font-family: Sans-serif;">'+snippet+'</a></div></div><br><div class="article"><div class="row"><div class="col-sm-1"></div>';
                                                            
                                                        }
                                                    $('#display').html(html_str);

                                                    }
                                                });
                                            
                                                
                                            }
                                        });

                                        // $('#display').html(html_str);
                                        console.log(data);
                                       
                                    }

                                });
                            
                        }
                         //end if
                    
                    });

                    // $.ajax({ //create an ajax request to load_page.php
                    //     type: "GET",
                    //     url: "http://localhost:9099/search?query="+request+"&page=1",
                    //     dataType: "json", //expect html to be returned                
                    //     success: function (data) {


                    //         // $("#pagination-demo").twbsPagination({

                    //         //     totalPages: data.quantity,
                    //         //     visiblePages: 7,
                    //         //     onPageClick: function (event, page) {
                                    
                    //         //         var request= $("#search_text").val()

                    //         //         alert(data.data.length);
                    //         //     }
                    //         // });
                            
                    //     }
                    // });
                    
                    // $.ajax({ //create an ajax request to load_page.php
                    //     type: "GET",
                    //     url: "http://localhost:9099/search?query="+request+"&page=1",
                    //     dataType: "json", //expect html to be returned                
                    //     success: function (data) {
                            
                    //         var quantity=data.quantity;
                    //         // var page_total = Math.floor(quantity/10)+1;
                    //         var html_str = '<div class="row"><div class="col-sm-1"></div><div class="col-sm-11"><a style="color: #545454; margin-top: -10px;font-family: Sans-serif;">Khoảng '+quantity+' kết quả (0,01 giây)</a></div></div><br><div class="article"><div class="row"><div class="col-sm-1"></div>';
                    //         for(var i=0; i< data.data.length; i++){

                    //             var url= data.data[i].url;
                    //             var title=data.data[i].title;
                    //             var snippet=data.data[i].snippet;
                                

                    //             html_str += '<div class=" test col-sm-11"><a href="'+url+'" target="_blank" ><h5 class="title" style="color: #1a0dab; font-size: 19px; margin-top: 1px;font-family: Sans-serif;">' + title + '</h5></a></div></div><div class="row"><div class="col-sm-1"></div><div class="col-sm-11"><h6 class="Url" style="color: #006621; margin-top: -13px;font-family: Sans-serif;">' + url  + '</h6></div></div></div><div class="row"><div class="col-sm-1"></div><div class="col-sm-11"><a class="info" style="color: #545454; margin-top: -10px;font-family: Sans-serif;">'+snippet+'</a></div></div><br><div class="article"><div class="row"><div class="col-sm-1"></div>';
                                
                    //         }
                    //         $('#display').html(html_str);
                    //         // console.log(data);
                    //     }
                    // });
                    

                });
        </script>
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
                <!-- <div id="page-content" class="page-content">Page 1</div> -->
                
                <!-- <ul class="pager"> -->
                <div class="row">
                    <div class="col-sm-1"></div>
                    <div class="col-sm-11">
                        <ul id="pagination-demo" class="pagination pagination-sm">
                            <!-- <li></li> -->
                            <!-- <li >
                                <a href="#">&larr; Trước</a>
                            </li>
                            
                            <li class="active"><a href="#" >1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            
                            <li >
                                <a href="#">Tiếp &rarr;</a>
                            </li> -->
                            <!-- <li></li> -->
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
