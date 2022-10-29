@component('mail::message')
# Welcome to the first Newsletter

Dear {{$email}},

We are pleased to announce you that you've successfully been admitted to L2 at ESTI. Congrats !!

@component('mail::button', ['url' => 'enter your desired url'])
Blog
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
