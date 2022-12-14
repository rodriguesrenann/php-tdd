<?php

namespace Core\Orders;

class Product
{
    public function __construct(
        protected string $id,
        protected string $name,
        protected float $price,
        protected int $total
    ) {
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function total(): float
    {
        return $this->price * $this->total;
    }

    public function totalWithTax(): float
    {
        $sum = $this->price * $this->total;
        return ($sum * 0.1) + $sum ;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getPrice(): float
    {
        return $this->price;
    }

    public function getTotal(): float
    {
        return $this->total;
    }
}
