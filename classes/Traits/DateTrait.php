<?php

trait Date
{
    protected ?DateTime $date;
    public function __construct()
    {
        $this->date = new DateTime();
    }

    public function getDate(): DateTime
    {
        return $this->date;
    }


    public function setDate($date): self
    {
        $this->date = $date;

        return $this;
    }
}