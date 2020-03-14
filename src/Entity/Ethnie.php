<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\EthnieRepository")
 */
class Ethnie
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
     * @ORM\OneToMany(targetEntity="App\Entity\Leader", mappedBy="Ethnie")
     */
    private $leaders;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Nation", mappedBy="Ethnie", orphanRemoval=true)
     */
    private $nations;

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
            $leader->setEthnie($this);
        }

        return $this;
    }

    public function removeLeader(Leader $leader): self
    {
        if ($this->leaders->contains($leader)) {
            $this->leaders->removeElement($leader);
            // set the owning side to null (unless already changed)
            if ($leader->getEthnie() === $this) {
                $leader->setEthnie(null);
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
            $nation->setEthnie($this);
        }

        return $this;
    }

    public function removeNation(Nation $nation): self
    {
        if ($this->nations->contains($nation)) {
            $this->nations->removeElement($nation);
            // set the owning side to null (unless already changed)
            if ($nation->getEthnie() === $this) {
                $nation->setEthnie(null);
            }
        }

        return $this;
    }
}
