<?php

namespace Traits;

trait WiredTrait
{
    private ?bool $isWired;
    
    public function __construct(bool $isWired){
        $this->isWired = $isWired;
    }

    public function getIsWired(): ?bool
    {
        return $this->isWired;
    }

    public function setIsWired($isWired): self
    {
        $this->isWired = $isWired;

        return $this;
    }
}