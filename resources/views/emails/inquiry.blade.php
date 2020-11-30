@component('mail::message')
# New Inqyiry from {{$data['name']}}
{{$data['email']}}


{{$data['message']}}



Thanks,<br>
{{ config('app.name') }}
@endcomponent
