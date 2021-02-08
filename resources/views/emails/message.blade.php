@component('mail::message',['message' => $message,'name'=>$name])
# 

{{$message}}



Thanks,<br>
{{ $name }}
@endcomponent
