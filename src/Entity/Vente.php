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

    #[ORM\Column(type:"float")]
    private $montant;

     #[ORM\Column(type:"float")]
    private $couverture;

     #[ORM\Column(type:"string", length:255) ]
    private $type;

    #[ORM\Column(type:"integer", nullable:true) ]
    private $numero;

    #[ORM\ManyToOne(targetEntity:Banque::class)]
    private $banque;

    public function __construct()
    {
        //      $this->venteProduits = new ArrayCollection();
        $this->date = new \DateTime();
        $this->couverture = 0;
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

    public function getMontant(): ?float
    {
        return $this->montant;
    }

    public function setMontant(float $montant): self
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

    public function getCouverture(): ?float
    {
        return $this->couverture;
    }

    public function setCouverture(?float $couverture): static
    {
        $this->couverture = $couverture;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): static
    {
        $this->type = $type;

        return $this;
    }

    public function getNumero(): ?int
    {
        return $this->numero;
    }

    public function setNumero(?int $numero): static
    {
        $this->numero = $numero;

        return $this;
    }

    public function getBanque(): ?Banque
    {
        return $this->banque;
    }

    public function setBanque(?Banque $banque): static
    {
        $this->banque = $banque;

        return $this;
    }
}
