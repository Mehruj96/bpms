@component('mail::message')
# Your Appoinment is now avialbale at this moment, cause alreday booked all Appoinment

{{-- @component('mail::button', ['url' => $url])
View Order
@endcomponent --}}

Thanks,<br>
{{ config('app.name') }}
@endcomponent
