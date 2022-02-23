<?php

use Traits\WiredTrait;

class Keyboard extends Component
{
    use WiredTrait;
    protected ?bool $hasNumKeypad;
    protected ?string $keypadType;
    
    public function getHasNumKeypad(): ?bool
    {
        return $this->hasNumKeypad;
    }

    public function setHasNumKeypad($hasNumKeypad): self
    {
        $this->hasNumKeypad = $hasNumKeypad;

        return $this;
    }

    public function getKeypadType(): ?string
    {
        return $this->keypadType;
    }

    public function setKeypadType($keypadType): self
    {
        $this->keypadType = $keypadType;

        return $this;
    }
}