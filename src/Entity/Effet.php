<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\EffetRepository")
 */
class Effet
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $Libelle;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $Description;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\TraitElement", mappedBy="Effets")
     */
    private $traitElements;

    public function __construct()
    {
        $this->traitElements = new ArrayCollection();
    }


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLibelle(): ?string
    {
        return $this->Libelle;
    }

    public function setLibelle(string $Libelle): self
    {
        $this->Libelle = $Libelle;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->Description;
    }

    public function setDescription(?string $Description): self
    {
        $this->Description = $Description;

        return $this;
    }

    public function getTraits(): ?string
    {
        return $this->Traits;
    }

    public function setTraits(string $Traits): self
    {
        $this->Traits = $Traits;

        return $this;
    }

    /**
     * @return Collection|TraitElement[]
     */
    public function getTraitElements(): Collection
    {
        return $this->traitElements;
    }

    public function addTraitElement(TraitElement $traitElement): self
    {
        if (!$this->traitElements->contains($traitElement)) {
            $this->traitElements[] = $traitElement;
            $traitElement->addEffet($this);
        }

        return $this;
    }

    public function removeTraitElement(TraitElement $traitElement): self
    {
        if ($this->traitElements->contains($traitElement)) {
            $this->traitElements->removeElement($traitElement);
            $traitElement->removeEffet($this);
        }

        return $this;
    }
}
