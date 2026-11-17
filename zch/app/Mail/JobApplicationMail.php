<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class JobApplicationMail extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct(
        public array $formData,
    ) {}

    public function envelope(): Envelope
    {
        $name = trim(($this->formData['first_name'] ?? '') . ' ' . ($this->formData['last_name'] ?? ''));

        return new Envelope(
            subject: 'New Job Application — ' . ($this->formData['position_title'] ?? $name),
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'emails.job-application',
        );
    }

    public function attachments(): array
    {
        return [];
    }
}
