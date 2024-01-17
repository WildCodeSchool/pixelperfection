<?php

namespace App\Entity;

use App\Repository\CountryRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CountryRepository::class)]
class Country
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\ManyToMany(targetEntity: Product::class, inversedBy: 'countries')]
    private Collection $products;

    #[ORM\Column]
    private ?float $supermarket = null;

    #[ORM\Column]
    private ?float $beautySalon = null;

    #[ORM\Column]
    private ?float $pharmacy = null;

    #[ORM\Column]
    private ?float $perfumery = null;

    #[ORM\Column]
    private ?float $online = null;

    public function __construct()
    {
        $this->products = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return Collection<int, Product>
     */
    public function getProducts(): Collection
    {
        return $this->products;
    }

    public function addProduct(Product $product): static
    {
        if (!$this->products->contains($product)) {
            $this->products->add($product);
        }

        return $this;
    }

    public function removeProduct(Product $product): static
    {
        $this->products->removeElement($product);

        return $this;
    }

    public function getSupermarket(): ?float
    {
        return $this->supermarket;
    }

    public function setSupermarket(float $supermarket): static
    {
        $this->supermarket = $supermarket;

        return $this;
    }

    public function getBeautySalon(): ?float
    {
        return $this->beautySalon;
    }

    public function setBeautySalon(float $beautySalon): static
    {
        $this->beautySalon = $beautySalon;

        return $this;
    }

    public function getPharmacy(): ?float
    {
        return $this->pharmacy;
    }

    public function setPharmacy(float $pharmacy): static
    {
        $this->pharmacy = $pharmacy;

        return $this;
    }

    public function getPerfumery(): ?float
    {
        return $this->perfumery;
    }

    public function setPerfumery(float $perfumery): static
    {
        $this->perfumery = $perfumery;

        return $this;
    }

    public function getOnline(): ?float
    {
        return $this->online;
    }

    public function setOnline(float $online): static
    {
        $this->online = $online;

        return $this;
    }
}
