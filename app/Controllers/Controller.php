<?php

namespace App\Controllers;

abstract class Controller
{
    /**
     * Return a standardized success response.
     * @return array{message: string, status: string}
     */
    public function success(): array
    {
        return [
            'status' => 'success',
            'message' => 'Operation completed successfully.'
        ];
    }

    abstract public function observe(): void;
}
