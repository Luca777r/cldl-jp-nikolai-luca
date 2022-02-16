<?php

class Motherboard
{
    protected ?string $socket;
    protected ?string $format;

    public function __construct(string $socket, string $format)
    {
        $this->socket = $socket;
        $this->format = $format;
    }

    public function getSocket(): string
    {
        return $this->socket;
    }

    
    public function setSocket($socket): self
    {
        $this->socket = $socket;

        return $this;
    }

    public function getFormat(): ?string
    {
        return $this->format;
    }

    public function setFormat($format): self
    {
        $this->format = $format;

        return $this;
    }
}