<!doctype html>
<html lang="hu">
<head>
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css" integrity="sha384-PmY9l28YgO4JwMKbTvgaS7XNZJ30MK9FAZjjzXtlqyZCqBY6X6bXIkM++IkyinN+" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    
</head>
<body>

    <div class="container">
        <div class="row">
                
            <img id="image_holder" src="{{url('image/site_head_photo/214062.jpg')}}" class="img-responsive">
            
        </div>
        
        <div class="row">
            <nav class="navbar navbar-inverse">
                <div class="container-fluid">
                  <div class="navbar-header">
                    <a class="navbar-brand" href="lofasz">Allamvizsga</a>
                  </div>
                  <ul class="nav navbar-nav">
                    <li class="active"><a href="#">Home</a></li>
                    <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Page 1 <span class="caret"></span></a>
                      <ul class="dropdown-menu">
                        <li><a href="">Page 1-1</a></li>
                        <li><a href="">Page 1-2</a></li>
                        <li><a href="">Page 1-3</a></li>
                      </ul>
                    </li>
                    <li><a href="#">Page 2</a></li>
                    <li><a href="#">Page 2</a></li>
                    <li><a href="#">Page 2</a></li>
                    <li><a href="#">Page 2</a></li>
                    <li><a href="#">Page 2</a></li><li><a href="#">Page 2</a></li>
                    
                    
                  </ul>
                  <ul class="nav navbar-nav navbar-right">
                      <li> <a>Welcome name</a></li>
                    <li><a href="banan"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
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
