<?php

namespace Traits;

trait WiredTrait
{
    protected ?bool $isWired;

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