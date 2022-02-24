<?php

class Monitor extends Component
{
    protected ?float $diagonalSize;

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
