@extends('templates/page_template_not_logged_in')

<script src="https://www.google.com/recaptcha/api.js" async defer></script>

@section('main_content')
<div class="row">
        
    <div class="col-sm-4 col-md-4 col-lg-4 mx-auto center-block" style="float: none;">
        <h5 class="card-title text-center">Register</h5>
        
        @if(count($errors)>0)
        
            <ul>
                @foreach($errors->all() as $error)

                <li class="alert alert-danger">{{$error}}</li>

                @endforeach
            </ul>
        @endif
        
        <form class="form-signin" method="post" action="{{ URL::to('/store')}}" enctype="multipart/form-data">
            
            <div class="form-label-group">
                <label for="inputFirstName">First Name</label>
                <input type="text" id="inputFirstName" name="first_name" class="form-control" placeholder="First name" required autofocus value="{{ old('first_name') }}">
            </div>
            </br>
            
            <div class="form-label-group">
                <label for="inputLastName">Last Name</label>
                <input type="text" id="inputLastName" name="last_name" class="form-control" placeholder="Last name" required autofocus value="{{ old('last_name') }}">
            </div>
            </br>
            
            <div class="form-label-group">
                <label for="inputBirthDate">Birth Date</label>
                <input type="date" id="inputBirthDate" name="birth_date" class="form-control" placeholder="Birth date" autofocus value="{{ old('birth_date') }}">
            </div>
            </br>
            
            <div class="form-group">
                <label for="inputGender">Gender</label>
                <select class="form-control" name="gender" id="inputGender" value="{{ old('gender') }}">
                  <option>Male</option>
                  <option>Female</option>
                </select>
            </div>
            
            <div class="form-label-group">
                <label for="inputAddress">Address</label>
                <input type="text" id="inputAddress" name="address" class="form-control" placeholder="Address" required autofocus value="{{ old('address') }}">
            </div>
            </br>
            
            <div class="form-label-group">
                <label for="inputCity">City</label>
                <input type="text" id="inputCity" name="city" class="form-control" placeholder="City" required autofocus value="{{ old('city') }}">
            </div>
            </br>
            
            <div class="form-label-group">
                <label for="inputCountry">Country</label>
                <input type="text" id="inputCountry" name="country" class="form-control" placeholder="Country" required autofocus value="{{ old('country') }}">
            </div>
            </br>
            
            <div class="form-label-group">
                <label for="inputZipCode">Zip code</label>
                <input type="number" id="inputZipCode" name="zipcode" class="form-control" placeholder="Zip code/Postcode" required autofocus value="{{ old('zipcode') }}">
            </div>
            </br>
            
            <div class="form-label-group">
                <label for="inputEmail">Email</label>
                <input type="text" id="inputEmail" name="email" class="form-control" placeholder="Email address" autofocus value="{{ old('email') }}">
            </div>
            </br>
            
            <div class="form-label-group">
                <label for="inputTelephone">Telephone</label>
                <input type="number" id="inputTelephone" name="telephone" class="form-control" placeholder="Telephone number" required autofocus value="{{ old('telephone') }}">
            </div>
            </br>
            
            <div class="form-label-group">
                <label for="inputUniversity">University</label>
                <input type="text" id="inputUniversity" name="university" class="form-control" placeholder="Organization/University" required autofocus value="{{ old('university') }}">
            </div>
            </br>
            
            <div class="form-label-group">
                <label for="inputDepartment">Department</label>
                <input type="text" id="inputDepartment" name="department" class="form-control" placeholder="Department" required autofocus value="{{ old('department') }}">
            </div>
            </br>
            
            <div class="form-label-group">
                <label for="inputFacebook">Facebook(*optional)</label>
                <input type="url" id="inputFacebook" name="facebook" class="form-control" placeholder="Facebook profile" autofocus value="{{ old('facebook') }}">
            </div>
            </br>
            
            <div class="form-label-group">
                <label for="inputTwitter">Twitter(*optional)</label>
                <input type="url" id="inputTwitter" name="twitter" class="form-control" placeholder="Twitter profile" autofocus value="{{ old('twitter') }}">
            </div>
            </br>
            
            <div class="form-label-group">
                <label for="inputGoogle">Google(*optional)</label>
                <input type="url" id="inputGoogle" name="google" class="form-control" placeholder="Google profile" autofocus value="{{ old('google') }}">
            </div>
            </br>
            
            <div class="form-label-group">
                <label for="inputLinkedIn">LinkedIn(*optional)</label>
                <input type="url" id="inputLinkedIn" name="linkedin" class="form-control" placeholder="LinkedIn profile" autofocus value="{{ old('linkedin') }}">
            </div>
            </br>

            <div class="form-label-group">
                <label for="inputPassword">Password</label>
                <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required>
            </div>
            </br>
            
            <div class="form-label-group">
                <label for="inputPasswordConfirm">Password confirm</label>
                <input type="password" id="inputPasswordConfirm" name="password_confirmation" class="form-control" placeholder="Password Confirm" required>
            </div>
            </br>
            
            <div class="form-label-group">
                <label>Select image to upload:</label>
                <input type="file" name="file" id="inputFile">
            </div>
            </br>
            
            {{ csrf_field()}}
            
            <div class="form-label-group">
                <div class="g-recaptcha" data-sitekey="{{env('CAPTCHA_KEY')}}"></div>
            </div>
            </br>

            <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Register</button>
        </form>
    </div>
</div>
@stop