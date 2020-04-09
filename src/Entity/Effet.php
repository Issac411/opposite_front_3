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
     * @ORM\Column(type="string", length=500, nullable=true)
     */
    private $icone;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\TraitElement")
     */
    private $TraitElements;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Nation", mappedBy="Effets")
     */
    private $nations;


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

    public function __construct()
    {
        $this->TraitElements = new ArrayCollection();
        $this->nations = new ArrayCollection();
    }


    public function getIcone(): ?string
    {
        return $this->icone;
    }

    public function setIcone(?string $Icone): self
    {
        $this->icone = $Icone;

        return $this;
    }

    /**
     * @return Collection|TraitElement[]
     */
    public function getTraitElements(): Collection
    {
        return $this->TraitElements;
    }

    public function addTraitElement(TraitElement $traitElement): self
    {
        if (!$this->TraitElements->contains($traitElement)) {
            $this->TraitElements[] = $traitElement;
        }

        return $this;
    }

    public function removeTraitElement(TraitElement $traitElement): self
    {
        if ($this->TraitElements->contains($traitElement)) {
            $this->TraitElements->removeElement($traitElement);
        }

        return $this;
    }

    /**
     * @return Collection|Nation[]
     */
    public function getNations(): Collection
    {
        return $this->nations;
    }

    public function addNation(Nation $nation): self
    {
        if (!$this->nations->contains($nation)) {
            $this->nations[] = $nation;
            $nation->addEffet($this);
        }

        return $this;
    }

    public function removeNation(Nation $nation): self
    {
        if ($this->nations->contains($nation)) {
            $this->nations->removeElement($nation);
            $nation->removeEffet($this);
        }

        return $this;
    }

}
