<?php

use Traits\WiredTrait;

class Mouse extends Component
{
    use WiredTrait;
    protected ?bool $ispad;
    protected ?int $numkey;
    
    public function __construct(bool $ispad, int $numkey)
    {
        $this->ispad = $ispad;
        $this->numkey = $numkey;
    }

    public function getIspad(): ?bool
    {
        return $this->ispad;
    }

    
    public function setIspad($ispad): self
    {
        $this->ispad = $ispad;

        return $this;
    }

    public function getNumkey(): ?bool
    {
        return $this->numkey;
    }

    public function setNumkey($numkey): self
    {
        $this->numkey = $numkey;

        return $this;
    }
}