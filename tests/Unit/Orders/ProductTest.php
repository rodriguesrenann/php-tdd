<?php

namespace Tests\Unit\Orders;

use Core\Orders\Product;
use PHPUnit\Framework\TestCase;

class ProductTest extends TestCase
{
    public function test_attributes()
    {
        $product = new Product(
            id: "1",
            name: "Produto",
            price: 10,
            total: 12
        );

        $this->assertEquals("1", $product->getId());
        $this->assertEquals("Produto", $product->getName());
        $this->assertEquals(10, $product->getPrice());
        $this->assertEquals(12, $product->getTotal());
    }

    public function test_calc()
    {
        $product = new Product(
            id: "1",
            name: "Produto",
            price: 10,
            total: 12
        );

        $this->assertEquals(132, $product->totalWithTax());
    }

    public function test_calc_with_tax()
    {
        $product = new Product(
            id: "1",
            name: "Produto",
            price: 100,
            total: 2
        );

        $this->assertEquals(220, $product->totalWithTax());
    }
}