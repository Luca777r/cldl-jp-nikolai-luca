<?php

namespace Traits;

use DateTime;

trait DateTrait
{
    private ?string $dateAdd;

    public function getDateAdd(): DateTime
    {
        return new DateTime($this->dateAdd);
    }

    public function setDateAdd($date): self
    {
        if ($date instanceof DateTime) {
            $date = $date->format('Y-m-d');
        }
        $this->dateAdd = $date;

        return $this;
    }
}