<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

/*
 * Caso implementar a interface ShuldQueue sempres sera enviar usando fila
 * enviando atraves do send ou queue
 */
class WelcomeMail extends Mailable /*implements ShouldQueue*/
{
    use Queueable, SerializesModels;

    private $cliente;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($cliente)
    {
        $this->cliente = $cliente;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this
            ->subject('Assunto do e-mail')
            ->to($this->cliente->email, $this->cliente->nome)
            ->markdown('mail.markdown.welcome', [
                'url' => $this->cliente->url
            ])
            ->attachFromStorage('public/Arquitetura_Dephi.pdf', 'delphi.pdf', [
                'mime' => 'application/pdf'
            ]);
    }

}
