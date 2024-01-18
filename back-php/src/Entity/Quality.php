<?php

namespace App\Entity;

use App\Repository\QualityRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: QualityRepository::class)]
class Quality
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $perfume = null;

    #[ORM\Column]
    private ?int $texture = null;

    #[ORM\Column]
    private ?int $application = null;

    #[ORM\Column]
    private ?int $packagingAttractive = null;

    #[ORM\Column]
    private ?int $packagingConvenient = null;

    #[ORM\Column]
    private ?int $efficiency = null;

    #[ORM\Column]
    private ?bool $allergy = null;

    #[ORM\ManyToMany(targetEntity: Product::class, inversedBy: 'qualities')]
    private Collection $product;

    public function __construct()
    {
        $this->product = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPerfume(): ?int
    {
        return $this->perfume;
    }

    public function setPerfume(int $perfume): static
    {
        $this->perfume = $perfume;

        return $this;
    }

    public function getTexture(): ?int
    {
        return $this->texture;
    }

    public function setTexture(int $texture): static
    {
        $this->texture = $texture;

        return $this;
    }

    public function getApplication(): ?int
    {
        return $this->application;
    }

    public function setApplication(int $application): static
    {
        $this->application = $application;

        return $this;
    }

    public function getPackagingAttractive(): ?int
    {
        return $this->packagingAttractive;
    }

    public function setPackagingAttractive(int $packagingAttractive): static
    {
        $this->packagingAttractive = $packagingAttractive;

        return $this;
    }

    public function getPackagingConvenient(): ?int
    {
        return $this->packagingConvenient;
    }

    public function setPackagingConvenient(int $packagingConvenient): static
    {
        $this->packagingConvenient = $packagingConvenient;

        return $this;
    }

    public function getEfficiency(): ?int
    {
        return $this->efficiency;
    }

    public function setEfficiency(int $Efficiency): static
    {
        $this->efficiency = $efficiency;

        return $this;
    }

    public function isAllergy(): ?bool
    {
        return $this->allergy;
    }

    public function setAllergy(bool $allergy): static
    {
        $this->allergy = $allergy;

        return $this;
    }

    /**
     * @return Collection<int, Product>
     */
    public function getProduct(): Collection
    {
        return $this->product;
    }

    public function addProduct(Product $product): static
    {
        if (!$this->product->contains($product)) {
            $this->product->add($product);
        }

        return $this;
    }

    public function removeProduct(Product $product): static
    {
        $this->product->removeElement($product);

        return $this;
    }
}
