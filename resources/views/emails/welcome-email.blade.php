@component('mail::message')
# Welcome To CodeGram!
We love that you have joined us!

{{-- @component('mail::button', ['url' => ''])
Button Text
@endcomponent --}}

All The Best,<br>
{{ config('app.name') }}
@endcomponent
