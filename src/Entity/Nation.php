<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\NationRepository")
 */
class Nation
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
     * @ORM\OneToMany(targetEntity="App\Entity\NationParti", mappedBy="relation", orphanRemoval=true, cascade={"persist", "remove"})
     */
    private $nationPartis;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Ethnie", inversedBy="nations")
     * @ORM\JoinColumn(nullable=false)
     */
    private $Ethnie;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\Leader", inversedBy="nation", cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $Leader;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $Drapeau;

    public function __construct()
    {
        $this->nationPartis = new ArrayCollection();
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
     * @return Collection|NationParti[]
     */
    public function getNationPartis(): Collection
    {
        return $this->nationPartis;
    }

    public function addNationParti(NationParti $nationParti): self
    {
            $this->nationPartis[] = $nationParti;
            $nationParti->setRelation($this);

        return $this;
    }

    public function removeNationParti(NationParti $nationParti): self
    {
        if ($this->nationPartis->contains($nationParti)) {
            $this->nationPartis->removeElement($nationParti);
            // set the owning side to null (unless already changed)
            if ($nationParti->getRelation() === $this) {
                $nationParti->setRelation(null);
            }
        }

        return $this;
    }

    public function removeNationPartis(): self
    {
        $this->nationPartis = null;
        return $this;
    }

    public function getEthnie(): ?Ethnie
    {
        return $this->Ethnie;
    }

    public function setEthnie(?Ethnie $Ethnie): self
    {
        $this->Ethnie = $Ethnie;

        return $this;
    }

    public function getLeader(): ?Leader
    {
        return $this->Leader;
    }

    public function setLeader(Leader $Leader): self
    {
        $this->Leader = $Leader;

        return $this;
    }

    public function getDrapeau(): ?string
    {
        return $this->Drapeau;
    }

    public function setDrapeau(?string $Drapeau): self
    {
        $this->Drapeau = $Drapeau;

        return $this;
    }

}
