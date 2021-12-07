<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class FilasMail extends Mailable
{
    use Queueable, SerializesModels;

    private $cliente;

    public function __construct($cliente)
    {
        $this->cliente = $cliente;
    }

    public function build()
    {
       return $this->subject('Assunto do e-mail')
            ->to($this->cliente->email, $this->cliente->nome)
//            ->cc('felipe.mesturini@kmm.com.br', 'Felipe Kmm')
//            ->bcc('felpe@otimizy.com.br', 'Felipe Otimizy')
            ->markdown('mail.filas')
           ->with([
                'nome' => $this->cliente->nome,
                'url' => $this->cliente->url,
            ])
           ->attachFromStorage('public/Arquitetura_Dephi.pdf', 'delphi.pdf', [
               'mime' => 'application/pdf'
           ]);
    }
}
