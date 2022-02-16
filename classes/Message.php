<?php

use Traits\ComponentTrait;

class Message
{
    protected ?string $text;

    public function __construct(string $text)
    {
        $this->text = $text;
    }

    public function getText(): ?string
    {
        return $this->text;
    }


    public function setText($text): self
    {
        $this->text = $text;

        return $this;
    }
}
