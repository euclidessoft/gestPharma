<?php

namespace App\Entity;

use App\Entity\Fournisseur;
use App\Repository\CommandeProduitRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass:CommandeProduitRepository::class) ]
class CommandeProduit
{
   

    #[ORM\Id]
     #[ORM\ManyToOne(targetEntity:"App\Entity\Produit", inversedBy: 'commandeProduits') ]
    #[ORM\JoinColumn(nullable:false) ]
     private $produit;

     #[ORM\Id]
     #[ORM\ManyToOne(targetEntity:"App\Entity\Commande", inversedBy: 'commandeProduits') ]
    #[ORM\JoinColumn(nullable:false) ]
     private $commande;

    #[ORM\Column(type:"date") ]
    private $date;


    #[ORM\Column(type:"integer") ]
    private $quantite;

    #[ORM\Column(type:"float") ]
    private $prix;

    
    #[ORM\Column(type:"float") ]
    private $prixdachat;

    
    #[ORM\ManyToOne(targetEntity:Fournisseur::class, inversedBy:"commandeproduits") ]
    private $fournisseur;
    /**
     * Constructor
     */
    public function __construct(Produit $produit, Commande $commande, $quantite, $achat, $prix, Fournisseur $fournisseur)
    {
        $this->date = new \Datetime();
        $this->produit = $produit;
        $this->commande = $commande;
        $this->quantite = $quantite;
        $this->prixdachat = $achat;
        $this->prix = $prix;
        $this->fournisseur = $fournisseur;
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

    public function getQuantite(): ?int
    {
        return $this->quantite;
    }

    public function setQuantite(int $quantite): self
    {
        $this->quantite = $quantite;

        return $this;
    }

    public function getProduit(): ?Produit
    {
        return $this->produit;
    }

    public function setProduit(?Produit $produit): self
    {
        $this->produit = $produit;

        return $this;
    }

    public function getCommande(): ?Commande
    {
        return $this->commande;
    }

    public function setCommande(?Commande $commande): self
    {
        $this->commande = $commande;

        return $this;
    }

    public function getPrix(): ?float
    {
        return $this->prix;
    }

    public function setPrix(float $prix): static
    {
        $this->prix = $prix;

        return $this;
    }

    public function getPrixdachat(): ?float
    {
        return $this->prixdachat;
    }

    public function setPrixdachat(float $prixdachat): static
    {
        $this->prixdachat = $prixdachat;

        return $this;
    }

    public function getFournisseur(): ?Fournisseur
    {
        return $this->fournisseur;
    }

    public function setFournisseur(?Fournisseur $fournisseur): static
    {
        $this->fournisseur = $fournisseur;

        return $this;
    }
}
