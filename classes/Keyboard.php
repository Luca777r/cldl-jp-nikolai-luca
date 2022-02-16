<?php

use Traits\WiredTrait;

class Keyboard extends Component
{
    use WiredTrait;
    protected ?bool $hasnumkeypad;
    protected ?string $keypadtype;
    
    public function __construct(bool $hasnumkeypad, string $keypadtype)
    {
        $this->hasnumkeypad = $hasnumkeypad;
        $this->keypadtype = $keypadtype;
    }

    public function getHasnumkeypad(): ?bool
    {
        return $this->hasnumkeypad;
    }

    public function setHasnumkeypad($hasnumkeypad): self
    {
        $this->hasnumkeypad = $hasnumkeypad;

        return $this;
    }

    public function getKeypadtype(): ?string
    {
        return $this->keypadtype;
    }

    public function setKeypadtype($keypadtype): self
    {
        $this->keypadtype = $keypadtype;

        return $this;
    }
}