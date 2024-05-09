<h1>calling quiz index</h1>
<a href="{{URL::signedRoute('showatt')}}">signed route</a>
<hr>
<a href="{{URL::temporarySignedRoute('showatt', now()->addSeconds(30))}}">temporary signed route</a>