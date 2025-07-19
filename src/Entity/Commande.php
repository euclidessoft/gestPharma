<?php

namespace App\Entity;

use App\Repository\CommandeRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass:CommandeRepository::class) ]
class Commande
{

    #[ORM\ManyToOne(targetEntity:"App\Entity\User") ]
     #[ORM\JoinColumn(nullable:false) ]
    private $user;

    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type:"date") ]
    private $date;

    #[ORM\Column(type:"float") ]
    private $montant;

    #[ORM\Column(type:"boolean") ]
    private $payer;

    #[ORM\Column(type:"boolean") ]
    private $livrer;

    #[ORM\Column(type:"datetime", nullable:true) ]
    private $dateefectlivraison;

    #[ORM\OneToMany(mappedBy: 'commande', targetEntity: CommandeProduit::class)]
    private Collection $commandeProduits;

    #[ORM\OneToMany(targetEntity:FactureFournisseur::class, mappedBy:"commande") ]
    private $factures;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->date = new \Datetime();
        $this->payer = false;
        $this->livrer = false;
        $this->commandeProduits = new ArrayCollection();
        $this->factures = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDate(): ?\DateTime
    {
        return $this->date;
    }

    public function setDate(\DateTime $date): static
    {
        $this->date = $date;

        return $this;
    }

    public function getMontant(): ?float
    {
        return $this->montant;
    }

    public function setMontant(float $montant): static
    {
        $this->montant = $montant;

        return $this;
    }

    public function isPayer(): ?bool
    {
        return $this->payer;
    }

    public function setPayer(bool $payer): static
    {
        $this->payer = $payer;

        return $this;
    }

    public function isLivrer(): ?bool
    {
        return $this->livrer;
    }

    public function setLivrer(bool $livrer): static
    {
        $this->livrer = $livrer;

        return $this;
    }

    public function getDateefectlivraison(): ?\DateTime
    {
        return $this->dateefectlivraison;
    }

    public function setDateefectlivraison(?\DateTime $dateefectlivraison): static
    {
        $this->dateefectlivraison = $dateefectlivraison;

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

    /**
     * @return Collection<int, CommandeProduit>
     */
    public function getCommandeProduits(): Collection
    {
        return $this->commandeProduits;
    }

    public function addCommandeProduit(CommandeProduit $commandeProduit): static
    {
        if (!$this->commandeProduits->contains($commandeProduit)) {
            $this->commandeProduits->add($commandeProduit);
            $commandeProduit->setCommande($this);
        }

        return $this;
    }

    public function removeCommandeProduit(CommandeProduit $commandeProduit): static
    {
        if ($this->commandeProduits->removeElement($commandeProduit)) {
            // set the owning side to null (unless already changed)
            if ($commandeProduit->getCommande() === $this) {
                $commandeProduit->setCommande(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, FactureFournisseur>
     */
    public function getFactures(): Collection
    {
        return $this->factures;
    }

    public function addFacture(FactureFournisseur $facture): static
    {
        if (!$this->factures->contains($facture)) {
            $this->factures->add($facture);
            $facture->setCommande($this);
        }

        return $this;
    }

    public function removeFacture(FactureFournisseur $facture): static
    {
        if ($this->factures->removeElement($facture)) {
            // set the owning side to null (unless already changed)
            if ($facture->getCommande() === $this) {
                $facture->setCommande(null);
            }
        }

        return $this;
    }
}
