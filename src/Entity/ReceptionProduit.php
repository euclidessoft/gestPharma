<?php

namespace App\Entity;

use App\Repository\ReceptionProduitRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ReceptionProduitRepository::class)]
class ReceptionProduit
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(targetEntity:"App\Entity\Commande", inversedBy: 'commandeProduits') ]
    #[ORM\JoinColumn(nullable:false) ]
     private $commande;

    #[ORM\ManyToOne(targetEntity:"App\Entity\Produit") ]
     #[ORM\JoinColumn(nullable:false) ]
    private $produit;

    #[ORM\ManyToOne(targetEntity:"App\Entity\Reception", inversedBy: 'commandeProduits') ]
     #[ORM\JoinColumn(nullable:false) ]
    private $reception;

    #[ORM\Column(type:"integer") ]
    private $quantite;

    #[ORM\Column(type:"date") ]
    private $date;

    #[ORM\Column(type:"integer") ]
    private $archive;

    #[ORM\Column(type:"string", length:255) ]
    private $lot;

    #[ORM\Column(type:"date") ]
    private $peremption;

    #[ORM\ManyToOne(targetEntity:Fournisseur::class, inversedBy:"approvisionnements") ]
    private $fournisseur;

    #[ORM\Column]
    private ?float $prixdachat = null;

    #[ORM\Column(type:"boolean") ]
    private $reste;

     #[ORM\ManyToOne(targetEntity:"App\Entity\User") ]
     #[ORM\JoinColumn(nullable:false) ]
    private $user;

    /**
     * Constructor
     */
    public function __construct(Produit $produit, Reception $reception, $quantite,Commande $commande, Fournisseur $fournisseur)
    {
        $this->date = new \Datetime();
        $this->produit = $produit;
        $this->archive = $produit->getStock();
        $this->reception = $reception;
        $this->quantite = $quantite;
        $this->fournisseur = $fournisseur;
        $this->reste = false;
        $this->commande = $commande;
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

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): self
    {
        $this->date = $date;

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

    public function getArchive(): ?int
    {
        return $this->archive;
    }

    public function setArchive(int $archive): self
    {
        $this->archive = $archive;

        return $this;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLot(): ?string
    {
        return $this->lot;
    }

    public function setLot(string $lot): self
    {
        $this->lot = $lot;

        return $this;
    }

    public function getPeremption(): ?\DateTimeInterface
    {
        return $this->peremption;
    }

    public function setPeremption(\DateTimeInterface $peremption): self
    {
        $this->peremption = $peremption;

        return $this;
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

    public function getReception(): ?Reception
    {
        return $this->reception;
    }

    public function setReception(?Reception $reception): static
    {
        $this->reception = $reception;

        return $this;
    }

    public function isReste(): ?bool
    {
        return $this->reste;
    }

    public function setReste(bool $reste): static
    {
        $this->reste = $reste;

        return $this;
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

    public function getPrixdachat(): ?float
    {
        return $this->prixdachat;
    }

    public function setPrixdachat(float $prixdachat): static
    {
        $this->prixdachat = $prixdachat;

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
