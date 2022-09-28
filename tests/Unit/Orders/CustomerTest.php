<?php

namespace Tests\Unit\Orders;

use Core\Orders\Customer;
use PHPUnit\Framework\TestCase;

class CustomerTest extends TestCase
{
    public function test_attributes()
    {
        $customer = new Customer(
            name: "Renan Rodrigues"
        );

        $this->assertEquals("Renan Rodrigues", $customer->getName());

        $customer->changeName(
            name: "Novo nome"
        );

        $this->assertEquals("Novo nome", $customer->getName());
        $this->assertIsString($customer->getName());
        $this->assertTrue(true);
    }
}