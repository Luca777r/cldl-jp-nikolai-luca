<?php

namespace Traits;

trait ComponentTrait
{
    protected ?int $quantity;
    protected ?int $numberCreated;


    public function getQuantity(): int
    {
        return $this->quantity;
    }


    public function setQuantity($quantity): self
    {
        $this->quantity = $quantity;

        return $this;
    }

    public function getnumberCreated(): int
    {
        return $this->numberCreated;
    }


    public function setnumberCreated($numberCreated): self
    {
        $this->numberCreated = $numberCreated;

        return $this;
    }
}
