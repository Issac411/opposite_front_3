<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\LeaderRepository")
 */
class Leader
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
    private $Nom;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $Prenom;

    /**
     * @ORM\Column(type="integer")
     */
    private $Age;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\TraitElement", inversedBy="leaders")
     */
    private $Traits;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Ethnie", inversedBy="leaders")
     */
    private $Ethnie;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Parti", inversedBy="leaders")
     */
    private $Parti;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Nation", mappedBy="Leader", cascade={"persist", "remove"})
     */
    private $nation;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $Photo;

    public function __construct()
    {
        $this->Traits = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->Nom;
    }

    public function setNom(string $Nom): self
    {
        $this->Nom = $Nom;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->Prenom;
    }

    public function setPrenom(string $Prenom): self
    {
        $this->Prenom = $Prenom;

        return $this;
    }

    public function getAge(): ?int
    {
        return $this->Age;
    }

    public function setAge(int $Age): self
    {
        $this->Age = $Age;

        return $this;
    }

    /**
     * @return Collection|TraitElement[]
     */
    public function getTraits(): Collection
    {
        return $this->Traits;
    }

    public function addTrait(TraitElement $trait): self
    {
        if (!$this->Traits->contains($trait)) {
            $this->Traits[] = $trait;
        }

        return $this;
    }

    public function removeTrait(TraitElement $trait): self
    {
        if ($this->Traits->contains($trait)) {
            $this->Traits->removeElement($trait);
        }

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

    public function getParti(): ?Parti
    {
        return $this->Parti;
    }

    public function setParti(?Parti $Parti): self
    {
        $this->Parti = $Parti;

        return $this;
    }

    public function getNation(): ?Nation
    {
        return $this->nation;
    }

    public function setNation(Nation $nation): self
    {
        $this->nation = $nation;

        // set the owning side of the relation if necessary
        if ($nation->getLeader() !== $this) {
            $nation->setLeader($this);
        }

        return $this;
    }

    public function getPhoto(): ?string
    {
        return $this->Photo;
    }

    public function setPhoto(?string $Photo): self
    {
        $this->Photo = $Photo;

        return $this;
    }
}
