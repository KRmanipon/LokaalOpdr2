<?php

namespace App\Entity;

use App\Repository\LocatieRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=LocatieRepository::class)
 */
class Locatie
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
    private $Adres;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Stad;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getAdres(): ?string
    {
        return $this->Adres;
    }

    public function setAdres(string $Adres): self
    {
        $this->Adres = $Adres;

        return $this;
    }

    public function getStad(): ?string
    {
        return $this->Stad;
    }

    public function setStad(string $Stad): self
    {
        $this->Stad = $Stad;

        return $this;
    }
    public function __toString()
    {
        return $this->getStad() . ' - ' . $this->getAdres();
    }
}
