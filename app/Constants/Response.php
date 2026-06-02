<?php

namespace App\Constants;

readonly class Response
{
    const SUCCESS = 'success';
    const ERROR = 'error';
    const NOT_FOUND = 'not_found';
    const UNAUTHORIZED = 'unauthorized';
    const FORBIDDEN = 'forbidden';

    public static function message(string $status): string
    {
        return match ($status) {
            self::SUCCESS => 'Operation completed successfully.',
            self::ERROR => 'An error occurred during the operation.',
            self::NOT_FOUND => 'The requested resource was not found.',
            self::UNAUTHORIZED => 'You are not authorized to perform this action.',
            self::FORBIDDEN => 'You do not have permission to access this resource.',
            default => 'Unknown status.'
        };
    }
}
