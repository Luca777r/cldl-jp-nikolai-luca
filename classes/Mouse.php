<?php

use Traits\WiredTrait;

class Mouse extends Component
{
    use WiredTrait;
    protected ?bool $isPad;
    protected ?int $numKey;

    public function getIsPad(): ?bool
    {
        return $this->isPad;
    }

    
    public function setIsPad($isPad): self
    {
        $this->isPad = $isPad;

        return $this;
    }

    public function getNumKey(): ?bool
    {
        return $this->numKey;
    }

    public function setNumKey($numKey): self
    {
        $this->numKey = $numKey;

        return $this;
    }
}