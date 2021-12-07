@component('mail::message')
# Introduction

The body of your message.

@component('mail::button', ['url' => $url, 'color' => 'success'])
Confirmar seu e-mail
@endcomponent

Obrigado por se registrar

Thanks,<br>
{{ config('app.name') }}
@endcomponent
