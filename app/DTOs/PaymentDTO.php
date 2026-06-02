<?php

namespace App\DTOs;

 class PaymentDTO
{
    public static string $id;
    public function __construct(
        // public string $id,
        public string $status,
        public string $amount,
        public string $currency,
        public string $description,
        public string $createdAt,
    ) {}

    public static function make(array $data): self
    {
        return new self(
            // id: $data['id'],
            status: $data['status'],
            amount: $data['amount'],
            currency: $data['currency'],
            description: $data['description'],
            createdAt: $data['created_at'],
        );
    }
}
