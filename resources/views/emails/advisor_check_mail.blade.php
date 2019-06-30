<div>
    Hello!
    We are sending this email to verify that you are the advisor of the following thesis:</br>
    {{ $submission->title}}
    If you are the advisor of this thesis, then click the link below:</br>
    <a href="{{ route('advisor_check',$submission->id_hash) }}">{{url('/advisor_check',$submission->id_hash)}}</a></br>
    If you are not the real advisor, then don't do anything</br>
</div>
