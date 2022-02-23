@component('mail::message',['message' => $message,'email' => $email, 'name'=>$name])
#

Email: {{ $email }}<br>
Ime: {{ $name }} <br>
Poruka: {{$message}}

@endcomponent
