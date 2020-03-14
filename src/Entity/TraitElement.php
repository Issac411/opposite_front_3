<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\TraitElementRepository")
 */
class TraitElement
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
     * @ORM\ManyToMany(targetEntity="App\Entity\Effet", inversedBy="traitElements")
     */
    private $Effets;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Leader", mappedBy="Traits")
     */
    private $leaders;

    public function __construct()
    {
        $this->Effets = new ArrayCollection();
        $this->leaders = new ArrayCollection();
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

    /**
     * @return Collection|Effet[]
     */
    public function getEffets(): Collection
    {
        return $this->Effets;
    }

    public function addEffet(Effet $effet): self
    {
        if (!$this->Effets->contains($effet)) {
            $this->Effets[] = $effet;
        }

        return $this;
    }

    public function removeEffet(Effet $effet): self
    {
        if ($this->Effets->contains($effet)) {
            $this->Effets->removeElement($effet);
        }

        return $this;
    }

    /**
     * @return Collection|Leader[]
     */
    public function getLeaders(): Collection
    {
        return $this->leaders;
    }

    public function addLeader(Leader $leader): self
    {
        if (!$this->leaders->contains($leader)) {
            $this->leaders[] = $leader;
            $leader->addTrait($this);
        }

        return $this;
    }

    public function removeLeader(Leader $leader): self
    {
        if ($this->leaders->contains($leader)) {
            $this->leaders->removeElement($leader);
            $leader->removeTrait($this);
        }

        return $this;
    }
}
