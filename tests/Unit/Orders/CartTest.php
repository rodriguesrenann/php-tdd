<?php

namespace Tests\Unit\Orders;

use Core\Orders\Cart;
use Core\Orders\Product;
use PHPUnit\Framework\TestCase;

class CartTest extends TestCase
{
    public function test_total_items()
    {
        $cart = new Cart;
        $cart->add(new Product(
            id: "1",
            name: "Produto 1",
            price: 20,
            total: 1
        ));
        $cart->add(new Product(
            id: "1",
            name: "Produto 1",
            price: 20,
            total: 1
        ));
        $cart->add(new Product(
            id: "2",
            name: "Produto 2",
            price: 12,
            total: 1
        ));

        $this->assertCount(2, $cart->getItems());
    }

    public function test_total()
    {
        $cart = new Cart;
        $cart->add(new Product(
            id: "1",
            name: "Produto 1",
            price: 20,
            total: 1
        ));
        $cart->add(new Product(
            id: "1",
            name: "Produto 1",
            price: 20,
            total: 1
        ));
        $cart->add(new Product(
            id: "2",
            name: "Produto 1",
            price: 12,
            total: 1
        ));

        $this->assertEquals(52, $cart->total());
    }

    public function test_cart_empty()
    {
        $cart = new Cart;
        
        $this->assertCount(0, $cart->getItems());
        $this->assertEquals(0, $cart->total());
    }
}