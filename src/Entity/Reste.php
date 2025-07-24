<?php

namespace App\Entity;


use App\Repository\ResteRepository;
use App\Entity\Reception;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ResteRepository::class)]
class Reste
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(targetEntity:"App\Entity\Produit") ]
     #[ORM\JoinColumn(nullable:false) ]
    private $produit;

    #[ORM\ManyToOne(targetEntity:"App\Entity\Reception") ]
     #[ORM\JoinColumn(nullable:false) ]
    private $reception;

    #[ORM\ManyToOne(targetEntity:"App\Entity\Commande") ]
     #[ORM\JoinColumn(nullable:false) ]
    private $commande;

    #[ORM\Column(type:"date") ]
    private $date;

    #[ORM\Column(type:"integer") ]
    private $quantite;

    #[ORM\Column(type:"integer") ]
    private $quantitelivre;

    private $stock;

    #[ORM\Column(type:"float") ]
    private $prixdachat;

    #[ORM\Column]
    private ?bool $credit = null;// tamp creance pour comppte de resultat et bilan

    #[ORM\ManyToOne(targetEntity:Fournisseur::class) ]
    private $fournisseur;

    /**
     * Constructor
     */
    public function __construct(Reception $reception, Commande $commande, Produit $produit, $quantite, $quantitelivre, Fournisseur $fournisseur)
    {
        $this->date = new \Datetime();
        $this->produit = $produit;
        $this->commande = $commande;
        $this->quantitelivre = $quantitelivre;
        $this->quantite = $quantite;
        $this->reception = $reception;
        $this->credit = false;
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

    public function getQuantitelivre(): ?int
    {
        return $this->quantitelivre;
    }

    public function setQuantitelivre(int $quantitelivre): self
    {
        $this->quantitelivre = $quantitelivre;

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

    public function getStock(): ?int
    {
        return $this->stock;
    }

    public function setStock(?int $stock): self
    {
        $this->stock = $stock;

        return $this;
    }

    public function reste()
    {


        return $this->quantite - $this->quantitelivre;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

   

    public function isCredit(): ?bool
    {
        return $this->credit;
    }

    public function setCredit(bool $credit): static
    {
        $this->credit = $credit;

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

    public function getReception(): ?Reception
    {
        return $this->reception;
    }

    public function setReception(?Reception $reception): static
    {
        $this->reception = $reception;

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
