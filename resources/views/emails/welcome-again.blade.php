@component('mail::message')
# Welcome {{ $user->name }} ,

Thanks for choosing DoctorCar..

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
