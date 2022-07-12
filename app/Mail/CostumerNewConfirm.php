<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class CostumerNewConfirm extends Mailable
{
    use Queueable, SerializesModels;

    protected $data;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($dados)
    {
        $this->data = $dados;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('templates.costumer.novocadastro_confirm')
            ->subject('Confirmação de liberação de cliente')
            ->with([
                'UserName' => $this->data['name'],
                'ClienteDoc' => $this->data['cliente_doc'],
                'url' => ''
            ]);
    }
}
