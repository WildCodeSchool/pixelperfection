<?php

namespace App\Entity;

use App\Repository\ProductRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ProductRepository::class)]
class Product
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $brand = null;

    #[ORM\Column(length: 255)]
    private ?string $productName = null;

    #[ORM\Column(length: 255)]
    private ?string $productCategory = null;

    #[ORM\Column]
    private ?float $productBasePrice = null;

    #[ORM\Column]
    private ?int $productQuantity = null;

    #[ORM\Column]
    private ?float $productTotalPrice = null;

    #[ORM\ManyToMany(targetEntity: Country::class, mappedBy: 'products')]
    private Collection $countries;

    #[ORM\ManyToMany(targetEntity: Quality::class, mappedBy: 'product')]
    private Collection $qualities;

    public function __construct()
    {
        $this->countries = new ArrayCollection();
        $this->qualities = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getBrand(): ?string
    {
        return $this->brand;
    }

    public function setBrand(string $brand): static
    {
        $this->brand = $brand;

        return $this;
    }

    public function getProductName(): ?string
    {
        return $this->productName;
    }

    public function setProductName(string $productName): static
    {
        $this->productName = $productName;

        return $this;
    }

    public function getProductCategory(): ?string
    {
        return $this->productCategory;
    }

    public function setProductCategory(string $productCategory): static
    {
        $this->productCategory = $productCategory;

        return $this;
    }

    public function getProductBasePrice(): ?float
    {
        return $this->productBasePrice;
    }

    public function setProductBasePrice(float $productBasePrice): static
    {
        $this->productBasePrice = $productBasePrice;

        return $this;
    }

    public function getProductQuantity(): ?int
    {
        return $this->productQuantity;
    }

    public function setProductQuantity(int $productQuantity): static
    {
        $this->productQuantity = $productQuantity;

        return $this;
    }

    public function getProductTotalPrice(): ?float
    {
        return $this->productTotalPrice;
    }

    public function setProductTotalPrice(float $productTotalPrice): static
    {
        $this->productTotalPrice = $productTotalPrice;

        return $this;
    }

    /**
     * @return Collection<int, Country>
     */
    public function getCountries(): Collection
    {
        return $this->countries;
    }

    public function addCountry(Country $country): static
    {
        if (!$this->countries->contains($country)) {
            $this->countries->add($country);
            $country->addProduct($this);
        }

        return $this;
    }

    public function removeCountry(Country $country): static
    {
        if ($this->countries->removeElement($country)) {
            $country->removeProduct($this);
        }

        return $this;
    }

    /**
     * @return Collection<int, Quality>
     */
    public function getQualities(): Collection
    {
        return $this->qualities;
    }

    public function addQuality(Quality $quality): static
    {
        if (!$this->qualities->contains($quality)) {
            $this->qualities->add($quality);
            $quality->addProduct($this);
        }

        return $this;
    }

    public function removeQuality(Quality $quality): static
    {
        if ($this->qualities->removeElement($quality)) {
            $quality->removeProduct($this);
        }

        return $this;
    }
}
