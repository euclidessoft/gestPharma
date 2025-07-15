<?php

namespace App\Entity;

use App\Repository\VenteProduitRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass:VenteProduitRepository::class)]
class VenteProduit
{
    #[ORM\Id]
     #[ORM\GeneratedValue ]
     #[ORM\Column(type:"integer")]
    private $id;

    #[ORM\Column(type:"integer")]
    private $quantite;

    #[ORM\ManyToOne(targetEntity:Vente::class)]
    private $vente;

    #[ORM\ManyToOne(targetEntity:Produit::class)]
    private $produit;

    #[ORM\Column(type:"integer")]
    private $prix;

     #[ORM\ManyToOne(targetEntity:User::class)]
    private $user;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getVente(): ?Vente
    {
        return $this->vente;
    }

    public function setVente(?Vente $vente): self
    {
        $this->vente = $vente;

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

    public function getPrix(): ?int
    {
        return $this->prix;
    }

    public function setPrix(int $prix): self
    {
        $this->prix = $prix;

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
