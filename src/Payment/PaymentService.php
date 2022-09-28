<?php

namespace Core\Payment;

class PaymentService
{
    private $paymentRepository;

    public function __construct(PaymentInterface $paymentRepository)
    {
        $this->paymentRepository = $paymentRepository;
    }

    public function execute()
    {
        return $this->paymentRepository->makePayment([]);
    }
}