<?php

use Traits\DateTrait;

abstract class Component
{
    protected ?int $id;
    protected ?string $categorie;
    protected ?string $model;
    protected ?string $brand;
    protected ?float $price;
    protected ?bool $isPeripheral;
    use DateTrait;

    public function __construct(string $categorie, string $model, string $brand, float $price, bool $isPeripheral)
    {
        $this->categorie = $categorie;
        $this->model = $model;
        $this->brand = $brand;
        $this->price = $price;
        $this->isPeripheral = $isPeripheral;
    }



    public function getId(): ?int
    {
        return $this->id;
    }


    public function setId($id): self
    {
        $this->id = $id;

        return $this;
    }


    public function getCategorie(): string
    {
        return $this->categorie;
    }


    public function setCategorie($categorie): self
    {
        $this->categorie = $categorie;

        return $this;
    }


    public function getModel(): string
    {
        return $this->model;
    }


    public function setModel($model): self
    {
        $this->model = $model;

        return $this;
    }


    public function getBrand(): string
    {
        return $this->brand;
    }


    public function setBrand($brand): self
    {
        $this->brand = $brand;

        return $this;
    }


    public function getPrice(): float
    {
        return $this->price;
    }


    public function setPrice($price): self
    {
        $this->price = $price;

        return $this;
    }

    public function getIsPeripheral(): bool
    {
        return $this->isPeripheral;
    }


    public function setIsPeripheral($isPeripheral): self
    {
        $this->isPeripheral = $isPeripheral;

        return $this;
    }
}
