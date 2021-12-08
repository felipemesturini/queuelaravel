<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Log;

class VerifiedMail extends Mailable
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
        Log::info("Enviando e-mail para {$this->cliente->email}");
        return $this
            ->subject('Assunto do e-mail')
            ->to($this->cliente->email, $this->cliente->nome)
            ->markdown('mail.markdown.verified', [
                'url' => $this->cliente->url
            ])
            ->attachFromStorage('public/Arquitetura_Dephi.pdf', 'delphi.pdf', [
                'mime' => 'application/pdf'
            ]);
    }
}
