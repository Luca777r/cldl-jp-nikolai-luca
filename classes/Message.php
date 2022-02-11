<?php

class Message extends Component
{
    protected ?string $text;

    function __construct(string $text)
    {
        
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