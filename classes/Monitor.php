<?php

class Monitor extends Component
{
    protected ?float $diagonalSize;

    function __construct(float $diagonalSize)
    {
        $this->diagonalSize = $diagonalSize;
    }


    public function getDiagonalSize()
    {
        return $this->diagonalSize;
    }

    public function setDiagonalSize($diagonalSize)
    {
        $this->diagonalSize = $diagonalSize;

        return $this;
    }
}
