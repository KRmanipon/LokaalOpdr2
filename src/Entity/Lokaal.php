<?php

namespace App\Entity;

use App\Repository\LokaalRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=LokaalRepository::class)
 */
class Lokaal
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $TotaalPersoon;

    /**
     * @ORM\ManyToOne(targetEntity=Locatie::class)
     * @ORM\JoinColumn(nullable=false)
     */
    private $Locatie;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTotaalPersoon(): ?string
    {
        return $this->TotaalPersoon;
    }

    public function setTotaalPersoon(string $TotaalPersoon): self
    {
        $this->TotaalPersoon = $TotaalPersoon;

        return $this;
    }

    public function getLocatie(): ?Locatie
    {
        return $this->Locatie;
    }

    public function setLocatie(?Locatie $Locatie): self
    {
        $this->Locatie = $Locatie;

        return $this;
    }
}
