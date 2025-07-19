<?php

namespace App\Entity;

use App\Repository\FactureFournisseurRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: FactureFournisseurRepository::class)]
class FactureFournisseur
{
     #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(targetEntity:Fournisseur::class, inversedBy:"factures") ]
    private $fournisseur;

    #[ORM\ManyToOne(targetEntity:Commande::class, inversedBy:"factures") ]
    private $commande;

    #[ORM\Column(type:"integer") ]
    private $montant;

    #[ORM\Column(type:"boolean") ]
    private $payer;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->payer = false;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFournisseur(): ?Fournisseur
    {
        return $this->fournisseur;
    }

    public function setFournisseur(?Fournisseur $fournisseur): self
    {
        $this->fournisseur = $fournisseur;

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

    public function getPayer(): ?bool
    {
        return $this->payer;
    }

    public function setPayer(bool $payer): self
    {
        $this->payer = $payer;

        return $this;
    }

    public function isPayer(): ?bool
    {
        return $this->payer;
    }

    public function getCommande(): ?Commande
    {
        return $this->commande;
    }

    public function setCommande(?Commande $commande): static
    {
        $this->commande = $commande;

        return $this;
    }
}
