<?php

namespace Tests\Unit\Payment;

use Mockery;
use stdClass;
use PHPUnit\Framework\TestCase;
use Core\Payment\PaymentService;
use Core\Payment\PaymentInterface;

class PaymentTest extends TestCase
{
    public function test_payment()
    {
        //arrange
        $mockPayment = Mockery::mock(stdClass::class, PaymentInterface::class);
        $mockPayment
            ->shouldReceive('makePayment')
            ->times(1)
            ->andReturn(true);
        
        $paymentService = new PaymentService($mockPayment);

        //act
        $response = $paymentService->execute();

        //assert
        $this->assertTrue($response);
    }

    protected function tearDown(): void
    {
        Mockery::close();

        parent::tearDown();
    }
}
