@component('mail::message')
<h3>New Message{{ $contact_from['name'] }}</h3>
<p> Email:{{ $contact_from['email'] }}</p>
<p> Message:{{ $contact_from['message'] }}</p>
@endcomponent
