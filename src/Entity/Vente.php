<?php

namespace App\Entity;

use App\Repository\VenteRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass:VenteRepository::class)]
class Vente
{
     #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type:"date")]
    private $date;

    #[ORM\ManyToOne(targetEntity:Medecin::class, inversedBy:"ventes")]
    private $medecin;

    #[ORM\ManyToOne(targetEntity:Mutuel::class, inversedBy:"ventes")]
    private $mutuel;

    #[ORM\ManyToOne(targetEntity:Service::class)]
    private $service;
    
    #[ORM\ManyToOne(targetEntity:User::class)]
    private $user;

    #[ORM\Column(type:"integer")]
    private $montant;

    public function __construct()
    {
        //      $this->venteProduits = new ArrayCollection();
        $this->date = new \DateTime();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): self
    {
        $this->date = $date;

        return $this;
    }

    public function getMedecin(): ?Medecin
    {
        return $this->medecin;
    }

    public function setMedecin(?Medecin $medecin): self
    {
        $this->medecin = $medecin;

        return $this;
    }

    public function getMutuel(): ?Mutuel
    {
        return $this->mutuel;
    }

    public function setMutuel(?Mutuel $mutuel): self
    {
        $this->mutuel = $mutuel;

        return $this;
    }

    public function getService(): ?Service
    {
        return $this->service;
    }

    public function setService(?Service $service): self
    {
        $this->service = $service;

        return $this;
    }

    public function getMontant(): ?int
    {
        return $this->montant;
    }

    public function setMontant(int $montant): self
    {
        $this->montant = $montant;

        return $this;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): static
    {
        $this->user = $user;

        return $this;
    }
}
