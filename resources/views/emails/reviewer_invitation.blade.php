<div>
    Hello!
    We are inviting you as a reviewer to our conference management site.</br>
    You are assigned to the <strong>{{$user->department}}</strong> department.</br>
    By clicking on the link below you will be redirected to our register site only for reviewers:</br>
    <a href="{{ route('registercustom',$user->email_hash) }}">{{url('/register/custom',$user->email_hash)}}</a></br>

    In the registration site you have to provide some data.</br>
    The * ones are optional.</br>
    Also there is a code input where you have to put the following code:</br>
    <h2>{{$user->code}}</h2></br>
</div>
