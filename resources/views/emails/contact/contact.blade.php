@component('mail::message')

Think you

<p><strong>From</strong> {{ $data['email'] }}</p>
<p><strong>Sujet</strong> {{ $data['subject'] }}</p>
<p><strong>Description</strong> {{ $data['description'] }}</p>


Thanks,<br>
{{ config('app.name') }}
@endcomponent