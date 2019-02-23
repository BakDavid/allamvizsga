<!doctype html>
<html lang="hu">
<head>
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css" integrity="sha384-PmY9l28YgO4JwMKbTvgaS7XNZJ30MK9FAZjjzXtlqyZCqBY6X6bXIkM++IkyinN+" crossorigin="anonymous">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
    
</head>
<body>
    <div class="container">
        <div class="row" style="max-height: 400px">
                
            <img id="image_holder" src="{{url('image/site_head_photo/214062.jpg')}}" class="img-responsive" style="max-height: 400px">
            
        </div>
        
        <div class="row">
            <nav class="navbar navbar-inverse">
                <div class="container-fluid">
                  <div class="navbar-header">
                    <a class="navbar-brand" href="banan">Allamvizsga</a>
                  </div>
                  <ul class="nav navbar-nav">
                    <li class="active"><a href="banan">Home</a></li>
                    <li><a href="#">Page 2hfshsrhtfcjyd</a></li>
                    <li><a href="register">Page 2</a></li>
                    
                    
                  </ul>
                  <ul class="nav navbar-nav navbar-right">
                    <li><a href="register"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                    <li><a href="login"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                  </ul>
                </div>
            </nav>
        </div>
        
        @yield('main_content');
        
        <div class="row">
            <div id="sponsors" class="col-sm-12">
                Random sszponzohfsd
            </div>
        </div>
    </div>

</body>
</html>
