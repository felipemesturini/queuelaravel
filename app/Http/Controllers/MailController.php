<?php

namespace App\Http\Controllers;

use App\Jobs\MailJob;
use App\Mail\FilasMail;
use App\Mail\WelcomeMail;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function syncMail()
    {
        $cliente = new \stdClass();
        $cliente->nome = 'Felipe Mesturini';
        $cliente->email = 'fmesturini@gmail.com';
        $cliente->url = 'https://google.com.br';
        Mail::send(new FilasMail($cliente));
        return "Email enviado";
    }

    public function asyncMail()
    {
        $cliente = new \stdClass();
        $cliente->nome = 'Felipe Mesturini';
        $cliente->email = 'fmesturini@gmail.com';
        $cliente->url = 'https://google.com.br';
        Mail::queue(new FilasMail($cliente));
        return "Email enviado";
    }

    public function asyncMailWelcome()
    {
        $cliente = new \stdClass();
        $cliente->nome = 'Felipe Mesturini';
        $cliente->email = 'fmesturini@gmail.com';
        $cliente->url = 'https://google.com.br';
        Mail::send(new WelcomeMail($cliente));
        return "Email enviado";
    }

    public function usingJob()
    {
//        MailJob::dispatch()->onQueue('mails');
        $cliente = new \stdClass();
        $cliente->nome = 'Felipe Mesturini';
        $cliente->email = 'fmesturini@gmail.com';
        $cliente->url = 'https://google.com.br';
        MailJob::dispatchIf(is_object($cliente), $cliente);

    }

    public function usingJobSinc()
    {
        $cliente = new \stdClass();
        $cliente->nome = 'Felipe Mesturini';
        $cliente->email = 'fmesturini@gmail.com';
        $cliente->url = 'https://google.com.br';
        MailJob::dispatchSync($cliente);
    }
}
