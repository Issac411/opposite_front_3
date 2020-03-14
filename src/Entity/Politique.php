<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\PolitiqueRepository")
 */
class Politique
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
     * @ORM\OneToMany(targetEntity="App\Entity\Parti", mappedBy="Politique")
     */
    private $partis;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $Logo;

    public function __construct()
    {
        $this->partis = new ArrayCollection();
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
     * @return Collection|Parti[]
     */
    public function getPartis(): Collection
    {
        return $this->partis;
    }

    public function addParti(Parti $parti): self
    {
        if (!$this->partis->contains($parti)) {
            $this->partis[] = $parti;
            $parti->setPolitique($this);
        }

        return $this;
    }

    public function removeParti(Parti $parti): self
    {
        if ($this->partis->contains($parti)) {
            $this->partis->removeElement($parti);
            // set the owning side to null (unless already changed)
            if ($parti->getPolitique() === $this) {
                $parti->setPolitique(null);
            }
        }

        return $this;
    }

    public function getLogo(): ?string
    {
        return $this->Logo;
    }

    public function setLogo(?string $Logo): self
    {
        $this->Logo = $Logo;

        return $this;
    }
}
