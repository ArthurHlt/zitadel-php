<?php

namespace ArthurHlt\Zitadel\Actions;

use DateTime;
use Exception;

class WebhookValidator
{
    const SIGNING_HEADER = 'ZITADEL-Signature';
    const SIGNING_TIMESTAMP = 't';
    const SIGNING_VERSION = 'v1';
    const DEFAULT_TOLERANCE = 300; // in seconds
    const PART_SEPARATOR = ',';

    public static function computeSignatureHeader(DateTime $time, string $payload, array $signingKeys): string
    {
        $parts = [self::SIGNING_TIMESTAMP . '=' . $time->getTimestamp()];
        foreach ($signingKeys as $key) {
            $parts[] = self::SIGNING_VERSION . '=' . bin2hex(self::computeSignature($time, $payload, $key));
        }
        return implode(self::PART_SEPARATOR, $parts);
    }

    /**
     * @throws WebhookValidationException
     */
    public static function validatePayload(string $payload, string $header, string $signingKey): bool
    {
        return self::validatePayloadWithTolerance($payload, $header, $signingKey, self::DEFAULT_TOLERANCE);
    }

    /**
     * @throws WebhookValidationException
     */
    public static function validatePayloadWithTolerance(
        string $payload,
        string $header,
        string $signingKey,
        int $tolerance
    ): bool
    {
        return self::validatePayloadInternal($payload, $header, $signingKey, $tolerance, true);
    }

    private static function computeSignature(DateTime $time, string $payload, string $signingKey): string
    {
        $data = $time->getTimestamp() . '.' . $payload;
        return hash_hmac('sha256', $data, $signingKey, true);
    }

    /**
     * @throws WebhookValidationException
     */
    private static function validatePayloadInternal(
        string $payload,
        string $sigHeader,
        string $signingKey,
        int $tolerance,
        bool $enforceTolerance
    ): bool
    {
        $header = self::parseSignatureHeader($sigHeader);
        if ($header === null) {
            throw new WebhookValidationException("Invalid signature header");
        }

        $expectedSignature = self::computeSignature($header['timestamp'], $payload, $signingKey);
        $expiredTimestamp = (time() - $header['timestamp']->getTimestamp()) > $tolerance;
        if ($enforceTolerance && $expiredTimestamp) {
            throw new WebhookValidationException("Timestamp wasn't within tolerance");
        }

        foreach ($header['signatures'] as $sig) {
            if (hash_equals($expectedSignature, $sig)) {
                return true;
            }
        }
        throw new WebhookValidationException("No valid signature");
    }

    /**
     * @throws WebhookValidationException
     */
    private static function parseSignatureHeader(string $header): ?array
    {
        if (empty($header)) {
            throw new WebhookValidationException("Webhook has no Zitadel-Signature header");
        }

        $pairs = explode(self::PART_SEPARATOR, $header);
        $timestamp = null;
        $signatures = [];

        foreach ($pairs as $pair) {
            [$key, $value] = explode('=', $pair, 2) + [null, null];
            if (!$key || !$value) {
                throw new WebhookValidationException("Webhook has an invalid Zitadel-Signature header");
            }

            if ($key === self::SIGNING_TIMESTAMP) {
                $timestamp = DateTime::createFromFormat('U', $value);
                if (!$timestamp) {
                    throw new WebhookValidationException("Invalid timestamp in signature");
                }
            } elseif ($key === self::SIGNING_VERSION) {
                $signatures[] = hex2bin($value);
            }
        }

        if (!$timestamp || empty($signatures)) {
            throw new WebhookValidationException("No valid signature");
        }

        return ['timestamp' => $timestamp, 'signatures' => $signatures];
    }
}
