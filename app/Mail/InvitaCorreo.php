<?php

namespace App\Mail;

use App\Models\Invitacion;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class InvitaCorreo extends Mailable
{
    use Queueable, SerializesModels;

    public $inv_correo;

    public function __construct(Invitacion $inv_correo)
    {
        $this->inv_correo = $inv_correo;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Invitación Sistema de Notas',
        );
    }

    /**
     * Get the message content definition.
     */

    public function build()
    {
        return $this->view('Mails.invitaciondocente')
            ->with([
                'inv_correo' => $this->inv_correo,
                // 'token' => $this->inv_correo->reset_password_token,
            ]);
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
