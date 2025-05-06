<?php
// src/Service/SmsSender.php

namespace App\Service;

use Psr\Log\LoggerInterface;
use Twilio\Rest\Client;
use Twilio\Exceptions\TwilioException;

class SmsSender
{
    public function __construct(
        private string $twilioSid,
        private string $twilioToken,
        private string $fromNumber,
        private LoggerInterface $logger
    ) {}

    public function send(string $to, string $message): bool
    {
        try {
            if (!$this->isValidPhone($to)) {
                throw new \InvalidArgumentException('Numéro invalide');
            }

            $client = new Client($this->twilioSid, $this->twilioToken);
            $client->messages->create($to, [
                'from' => $this->fromNumber,
                'body' => $this->sanitizeMessage($message)
            ]);

            $this->logger->info('SMS envoyé', ['to' => $this->maskPhone($to)]);
            return true;

        } catch (TwilioException $e) {
            $this->logger->error('Erreur Twilio', [
                'error' => $e->getMessage(),
                'to' => $this->maskPhone($to)
            ]);
            return false;
        }
    }

    private function isValidPhone(string $phone): bool
    {
        return preg_match('/^\+[1-9]\d{1,14}$/', $phone);
    }

    private function sanitizeMessage(string $message): string
    {
        return substr(trim($message), 0, 160);
    }

    private function maskPhone(string $phone): string
    {
        return substr($phone, 0, 4) . '****' . substr($phone, -2);
    }
}
