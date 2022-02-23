<?php

namespace Traits;

trait ComponentTrait
{
    private ?int $quantity;
    private ?int $numberCreated;

    public function getQuantity(): int
    {
        return $this->quantity;
    }

    public function setQuantity($quantity): self
    {
        $this->quantity = $quantity;

        return $this;
    }

    public function getNumberCreated(): ?int
    {
        return $this->numberCreated;
    }

    public function setNumberCreated($numberCreated): self
    {
        $this->numberCreated = $numberCreated;

        return $this;
    }
}
