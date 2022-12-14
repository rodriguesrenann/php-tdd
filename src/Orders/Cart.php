<?php

namespace Core\Orders;

class Cart
{
    /**
     * @var Product[]
     */
    private array $items = [];

    public function add(Product $product): void
    {
        $quantity = isset($this->items[$product->getId()]) ? $this->items[$product->getId()]['quantity'] + 1 : 1;
        
        $this->items[$product->getId()] = [
            'product' => $product,
            'quantity' => $quantity
        ];
    }

    public function total(): float
    {
        $total = 0;
        foreach ($this->items as $item) {
          
            $product = $item['product'];
            $total += $product->getPrice() * $item['quantity'];
        }

        return $total;
    }

    public function getItems(): array
    {
        return $this->items;
    }
}
