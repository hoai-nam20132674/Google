$(document).ready(function () {

    var request= $("#search_text").val()
    $("#search_text").keypress(function (e) {
        if (e.keyCode == 13){
            e.preventDefault();
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
                        var title="";
                        var titles=data.data[i].title;
                        var title_array =titles.split(" ");
                        if(title_array.length>12){
                            for(var b=0;b<=12;b++){
                                title=title.concat(title_array[b]).concat(" ");
                            }
                            title=title.concat("...");

                        }
                        else{
                            title=titles;
                        }
                        var snippet="";
                        var snippets=data.data[i].snippet;
                        var snippet_array = snippets.split(" ");
                        if(snippet_array.length>50){
                            
                            for(var a=0;a<=50;a++){
                                snippet=snippet.concat(snippet_array[a]).concat(" ");

                            }
                            snippet=snippet.concat("...");
                        }
                        else{
                            snippet=snippets;
                        }

                        html_str += '<div class=" test col-sm-11"><a href="'+url+'" target="_blank" ><h5 class="title" style="color: #1a0dab; font-size: 19px; margin-top: 1px;font-family: Sans-serif;">' + title + '</h5></a></div></div><div class="row"><div class="col-sm-1"></div><div class="col-sm-11"><h6 class="Url" style="color: #006621; margin-top: -13px;font-family: Sans-serif;">' + url.substring(0,80)+ '...</h6></div></div><div class="row"><div class="col-sm-1"></div><div class="col-sm-6"><a class="info" style="color: #545454; margin-top: -10px;font-family: Sans-serif;">'+snippet+'</a></div><div class="col-sm-5"></div></div><br><div class="article"><div class="row"><div class="col-sm-1"></div>';
                        
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
                                    var html_str2 = '<div class="row"><div class="col-sm-1"></div><div class="col-sm-11"><a style="color: #545454; margin-top: -10px;font-family: Sans-serif;">Khoảng '+quantity+' kết quả (0,01 giây)</a></div></div><br><div class="article"><div class="row"><div class="col-sm-1"></div>';
                                    for(var i=0; i< data.data.length; i++){
                                        var url= data.data[i].url;
                                        var title="";
                                        var titles=data.data[i].title;
                                        var title_array =titles.split(" ");
                                        if(title_array.length>12){
                                            for(var b=0;b<=12;b++){
                                                title=title.concat(title_array[b]).concat(" ");
                                            }
                                            title=title.concat("...");
                                        }
                                        else{
                                            title=titles;
                                        }
                                        var snippet="";
                                        var snippets=data.data[i].snippet;
                                        var snippet_array = snippets.split(" ");
                                        if(snippet_array.length>50){
                                            
                                            for(var a=0;a<=50;a++){
                                                
                                                snippet=snippet.concat(snippet_array[a]).concat(" ");
                                            }
                                            snippet=snippet.concat("...");
                                        }
                                        else{
                                            snippet=snippets;
                                        }
                                        html_str2 += '<div class=" test col-sm-11"><a href="'+url+'" target="_blank" ><h5 class="title" style="color: #1a0dab; font-size: 19px; margin-top: 1px;font-family: Sans-serif;">' + title + '</h5></a></div></div><div class="row"><div class="col-sm-1"></div><div class="col-sm-11"><h6 class="Url" style="color: #006621; margin-top: -13px;font-family: Sans-serif;">' + url.substring(0,80)+ '...</h6></div></div><div class="row"><div class="col-sm-1"></div><div class="col-sm-6"><a class="info" style="color: #545454; margin-top: -10px;font-family: Sans-serif;">'+snippet+'</a></div><div class="col-sm-5"></div></div><br><div class="article"><div class="row"><div class="col-sm-1"></div>';
                                        
                                    }
                                $('#display').html(html_str2);

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