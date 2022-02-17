<?php

use Traits\DateTrait;

class Message
{
    use DateTrait;
    protected ?string $text;
    protected ?int $id;

    public function __construct(string $text, int $id)
    {
        $this->text = $text;
        $this->id = $id;
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

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(?int $id): void
    {
        $this->id = $id;
    }

}
