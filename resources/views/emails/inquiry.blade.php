@component('mail::message')
# New Inquiry from {{$data['name']}}
{{$data['email']}}


{{$data['message']}}



Thanks,<br>
{{ config('app.name') }}
@endcomponent
