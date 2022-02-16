<?php

class Monitor extends Component
{
    protected ?float $diagonalSize;

    function __construct(float $diagonalSize)
    {
        $this->diagonalSize = $diagonalSize;
    }


    public function getDiagonalSize(): ?float
    {
        return $this->diagonalSize;
    }

    public function setDiagonalSize($diagonalSize): self
    {
        $this->diagonalSize = $diagonalSize;

        return $this;
    }
}
