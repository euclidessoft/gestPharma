<?php

namespace App\Entity;

use App\Repository\ProduitRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass:ProduitRepository::class)]
class Produit
{
    #[ORM\Id]
     #[ORM\GeneratedValue ]
     #[ORM\Column(type:"integer")]
    private $id;

    #[ORM\Column(type:"string", length:255)]
    private $designation;

    #[ORM\Column(type:"integer")]
    private $prix;

    #[ORM\Column(type:"string", length:255, nullable:true)]
    private $description;

    #[ORM\Column(type:"integer", nullable:true)]
    private $lot;

    #[ORM\Column(type:"date", nullable:true)]
    private $peremption;

    #[ORM\Column(type:"integer")]
    private $stock;

    #[ORM\Column(type:"boolean")]
    private $tva;

    #[ORM\Column(type:"string", length:255)]
    private $reference;

    public function __construct()
    {
        $this->stock = 0;
        $this->tva = false;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDesignation(): ?string
    {
        return $this->designation;
    }

    public function setDesignation(string $designation): self
    {
        $this->designation = $designation;

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

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getLot(): ?int
    {
        return $this->lot;
    }

    public function setLot(?int $lot): self
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

    public function getStock(): ?int
    {
        return $this->stock;
    }

    public function setStock(int $stock): self
    {
        $this->stock = $stock;

        return $this;
    }

    public function getTva(): ?bool
    {
        return $this->tva;
    }

    public function setTva(bool $tva): self
    {
        $this->tva = $tva;

        return $this;
    }

    public function getReference(): ?string
    {
        return $this->reference;
    }

    public function setReference(string $reference): self
    {
        $this->reference = $reference;

        return $this;
    }

    public function livraison(int $quantite)
    {
        $this->stock = $this->stock - $quantite;
        $res = false;
        if($this->stock >= 0 ){
            $res = true;
        }

        return $res;
    }
}
