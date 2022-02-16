<?php

namespace Traits;

trait WiredTrait
{
    private ?bool $iswired;
    
    public function __construct(bool $iswired){
        $this->iswired = $iswired;
    }

    public function getIswired(): ?bool
    {
        return $this->iswired;
    }

    public function setIswired($iswired): self
    {
        $this->iswired = $iswired;

        return $this;
    }
}