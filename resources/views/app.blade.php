<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">

    <title>Hello, world!</title>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="/">Post</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
       
        <li class="nav-item">
          <a class="/user" href="#">User</a>
        </li>

        
        
       
      </ul>
     
    </div>
  </div>
</nav>

<div class="container mt-5">
    @yield('content')
</div>
    
 <script>

           function loadmoreData(page){
               $.ajax({
                   url:"?page="+page,
                   type:'get',
                   beforeSend:function(){
                       $('.ajax-load').show()
                   }
               }).done(function(data){
                    if(data.html==""){
                        $('.ajax-load').html("No More Post Here");
                        return
                    }
                    $('.ajax-load').hide();
                    $("#post").append(data.html)
               })
           }
           var page=1;
           $(window).scroll(function(){

               if($(window).scrollTop()+$(window).height()>=$(document).height()){
                    page++
                    loadmoreData(page);
               }

           })
       </script>
  </body>
</html>