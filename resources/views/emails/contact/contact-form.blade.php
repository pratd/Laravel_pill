@component('mail::message')
# Thank you for your message

<p><strong>Name : </strong>{{ $data['name'] }}</p>
<p><strong>Email : </strong>{{ $data['email'] }}</p>
<p><strong>Message : </strong>
    {{ $data['message'] }}
    </p>
Thanks,<br>
{{ config('app.name') }}
@endcomponent
