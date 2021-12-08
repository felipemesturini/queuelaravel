@component('mail::message')
# Introduction

The body of your message.

@component('mail::button', ['url' => $url])
E-mail verificado com sucesso
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
