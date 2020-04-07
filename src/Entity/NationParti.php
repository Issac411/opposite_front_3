<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\NationPartiRepository")
 */
class NationParti
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Nation", inversedBy="nationPartis",cascade={"persist"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $relation;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\Parti", inversedBy="nationParti", cascade={"persist", "remove"})
     */
    private $Parti;

    /**
     * @ORM\Column(type="float")
     */
    private $Popularite;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getRelation(): ?Nation
    {
        return $this->relation;
    }

    public function setRelation(?Nation $relation): self
    {
        $this->relation = $relation;

        return $this;
    }

    public function getParti(): ?Parti
    {
        return $this->Parti;
    }

    public function setParti(Parti $Parti): self
    {
        $this->Parti = $Parti;

        return $this;
    }

    public function getPopularite(): ?float
    {
        return $this->Popularite;
    }

    public function setPopularite(float $Popularite): self
    {
        $this->Popularite = $Popularite;

        return $this;
    }
}
