@component('mail::message')
<h1>Envio de e-mail</h1>
@component('mail::button', ['url' => $url])
    Abrir google
@endcomponent
Enviando e-mail... {{ $nome }}
@endcomponent

