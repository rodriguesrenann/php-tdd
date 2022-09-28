<?php

namespace Core\Payment;

use stdClass;

class PagarMe implements PaymentInterface
{
    public function createPlan(array $data): array
    {
        return [];
    }

    public function findClientById(string $id): object
    {
        return new stdClass;
    }

    public function makePayment(array $data): bool
    {
        return true;
    }
}