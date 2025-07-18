<?php

namespace App\Entity;

use App\Repository\StockRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass:StockRepository::class)]
class Stock
{
      #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(targetEntity:Produit::class)]
     #[ORM\JoinColumn(nullable:false)]
    private $produit;

    #[ORM\Column(type:"string", length:255)]
    private $lot;

    #[ORM\Column(type:"date", nullable:true)]
    private $peremption;

    #[ORM\Column(type:"integer")]
    private $quantite;

    /**
     * Constructor
     */
    public function __construct(Produit $produit, $lot, $peremption, $quantite)
    {
        $this->peremption = new \DateTime($peremption);
        $this->produit = $produit;
        $this->lot = $lot;
        $this->quantite = $quantite;
    }

    public function getId(): ?int
    {
        return $this->id;
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

    public function setPeremption(?\DateTimeInterface $peremption): self
    {
        $this->peremption = $peremption;

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
}
