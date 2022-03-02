<?php

use Traits\DateTrait;

class Stock
{
    use DateTrait;
    protected ?int $id;
    protected ?int $idComp;
    protected ?int $number;



    public function getId(): int
    {
        return $this->idStock;
    }


    public function setIdStock($id): self
    {
        $this->idStock = $id;

        return $this;
    }


    public function getIdComp(): int
    {
        return $this->idComp;
    }


    public function setIdComp($idComp): self
    {
        $this->idComp = $idComp;

        return $this;
    }


    public function getEntrance(): int
    {
        return $this->entrance;
    }


    public function setEntrance($entrance): self
    {
        $this->entrance = $entrance;

        return $this;
    }
}
