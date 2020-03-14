<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\PartiRepository")
 */
class Parti
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
     * @ORM\ManyToOne(targetEntity="App\Entity\Politique", inversedBy="partis")
     */
    private $Politique;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $Logo;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Leader", mappedBy="Parti")
     */
    private $leaders;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Nation", mappedBy="Partis")
     */
    private $nations;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\NationParti", mappedBy="Parti", cascade={"persist", "remove"})
     */
    private $nationParti;

    public function __construct()
    {
        $this->leaders = new ArrayCollection();
        $this->nations = new ArrayCollection();
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

    public function getPolitique(): ?Politique
    {
        return $this->Politique;
    }

    public function setPolitique(?Politique $Politique): self
    {
        $this->Politique = $Politique;

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
            $leader->setParti($this);
        }

        return $this;
    }

    public function removeLeader(Leader $leader): self
    {
        if ($this->leaders->contains($leader)) {
            $this->leaders->removeElement($leader);
            // set the owning side to null (unless already changed)
            if ($leader->getParti() === $this) {
                $leader->setParti(null);
            }
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
            $nation->addParti($this);
        }

        return $this;
    }

    public function removeNation(Nation $nation): self
    {
        if ($this->nations->contains($nation)) {
            $this->nations->removeElement($nation);
            $nation->removeParti($this);
        }

        return $this;
    }

    public function getNationParti(): ?NationParti
    {
        return $this->nationParti;
    }

    public function setNationParti(NationParti $nationParti): self
    {
        $this->nationParti = $nationParti;

        // set the owning side of the relation if necessary
        if ($nationParti->getParti() !== $this) {
            $nationParti->setParti($this);
        }

        return $this;
    }
}
