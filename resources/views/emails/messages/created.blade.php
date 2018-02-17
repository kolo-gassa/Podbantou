@component('mail::message')
# Salut Admin

- {{$name}}
- {{$email}}


@component('mail::panel')
{{$msg}}
@endcomponent


Thanks,<br>
{{ config('app.name') }}
@endcomponent
