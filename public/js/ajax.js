$(document).ready(function () {

    var request= $("#search_text").val()
    
    $("#search_text").keypress(function (e) {
        if (e.keyCode == 13){
            e.preventDefault();
            $("#pagination-demo div").html("");
            var request= $("#search_text").val();
                
            $.ajax({ //create an ajax request to load_page.php
                type: "GET",
                url: "http://localhost:9099/search?query="+request+"&page=1",
                dataType: "json", //expect html to be returned                
                success: function (data) {
                    
                    
                    
                    var quantity=data.quantity;
                    var page_total = Math.floor(quantity/10)+1;
                    var html_str = '<div class="row"><div class="col-sm-1"></div><div class="col-sm-11"><a style="color: #545454; margin-top: -10px;font-family: Sans-serif;">Khoảng '+quantity+' kết quả (0,01 giây)</a></div></div><br><div class="article"><div class="row"><div class="col-sm-1"></div>';
                    for(var i=0; i< data.data.length; i++){


                        var url= data.data[i].url;
                        // if(url.length>10){
                        //     url = url.substring(0, 10);
                        // }
                        var title=data.data[i].title;
                        var snippet=data.data[i].snippet;
                        

                        html_str += '<div class=" test col-sm-6"><a href="'+url+'" target="_blank" ><h5 class="title" style="color: #1a0dab; font-size: 19px; margin-top: 1px;font-family: Sans-serif;">' + title.substring(0, 60) + ' ...</h5></a></div><div class="col-sm-5"></div></div><div class="row"><div class="col-sm-1"></div><div class="col-sm-6"><h6 class="Url" style="color: #006621; margin-top: -13px;font-family: Sans-serif;">' + url.substring(0,80)  + '...</h6></div><div class="col-sm-5"></div></div><div class="row"><div class="col-sm-1"></div><div class="col-sm-11"><a class="info" style="color: #545454; margin-top: -10px;font-family: Sans-serif;">'+snippet+'</a></div></div><br><div class="article"><div class="row"><div class="col-sm-1"></div>';
                        
                    }
                    $('#display').html(html_str);
                    
                    $("#pagination-demo").twbsPagination({
                        totalPages: page_total,
                        visiblePages: 7,
                        onPageClick: function (event, page) {
                            
                            var request= $("#search_text").val();
                            $.ajax({ //create an ajax request to load_page.php
                                type: "GET",
                                url: "http://localhost:9099/search?query="+request+"&page="+page+"",
                                dataType: "json", //expect html to be returned                
                                success: function (data) {
                                    
                                    var quantity=data.quantity;
                                    // var page_total = Math.floor(quantity/10)+1;
                                    var html_str = '<div class="row"><div class="col-sm-1"></div><div class="col-sm-11"><a style="color: #545454; margin-top: -10px;font-family: Sans-serif;">Khoảng '+quantity+' kết quả (0,01 giây)</a></div></div><br><div class="article"><div class="row"><div class="col-sm-1"></div>';
                                    for(var i=0; i< data.data.length; i++){

                                        var url= data.data[i].url;
                                        var title=data.data[i].title;
                                        var snippet=data.data[i].snippet;
                                        

                                        html_str += '<div class=" test col-sm-6"><a href="'+url+'" target="_blank" ><h5 class="title" style="color: #1a0dab; font-size: 19px; margin-top: 1px;font-family: Sans-serif;">' + title.substring(0,60) + ' ...</h5></a></div><div class="col-sm-5"></div></div><div class="row"><div class="col-sm-1"></div><div class="col-sm-6"><h6 class="Url" style="color: #006621; margin-top: -13px;font-family: Sans-serif;">' + url.substring(0,80)  + '...</h6></div><div class="col-sm-5"></div></div><div class="row"><div class="col-sm-1"></div><div class="col-sm-11"><a class="info" style="color: #545454; margin-top: -10px;font-family: Sans-serif;">'+snippet+'</a></div></div><br><div class="article"><div class="row"><div class="col-sm-1"></div>';
                                        
                                    }
                                $('#display').html(html_str);

                                }
                            });
                        
                            
                        }
                    });
                    console.log(data);
                   
                }

            });
            
        }
         //end if
    
    });

});