@component('mail::message')
# Appointment

@component('mail::panel')
Your Appointment is Accepted in your slot time.
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
