@extends('templates/page_template_not_logged_in')

@section('main_content')
<div class="row">

    <div class="col-sm-4 col-md-3 col-lg-3 mx-auto center-block" style="float: none;">
        <h5 class="card-title text-center">Login</h5>
        <form class="form-signin">
            <div class="form-label-group">
              <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
            </div>
            </br>

            <div class="form-label-group">
              <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
            </div>
            </br>

            <div class="custom-control custom-checkbox mb-3">
              <input type="checkbox" class="custom-control-input" id="customCheck1">
              <label class="custom-control-label" for="customCheck1">Remember password</label>
            </div>
            <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Sign in</button>
        </form>
    </div>
</div>
@stop
