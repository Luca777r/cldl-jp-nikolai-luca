<?php

namespace Traits;

use DateTime;

trait DateTrait
{
    private ?DateTime $dateAdd;
    
    public function __construct()
    {
        $this->dateAdd = new DateTime();
    }

    public function getDateAdd(): DateTime
    {
        return $this->dateAdd;
    }


    public function setDateAdd($date): self
    {
        $this->dateAdd = $date;

        return $this;
    }
}