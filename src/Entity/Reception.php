<?php

namespace App\Entity;

use App\Repository\ReceptionRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ReceptionRepository::class)]
class Reception
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(targetEntity:"App\Entity\User") ]
     #[ORM\JoinColumn(nullable:false) ]
    private $user;

    #[ORM\Column(type:"date") ]
    private $date;

    #[ORM\Column(type:"boolean") ]
    private $reste;
    

     #[ORM\ManyToOne(targetEntity:"App\Entity\Commande", inversedBy: 'commandeProduits') ]
    #[ORM\JoinColumn(nullable:false) ]
     private $commande;

    #[ORM\ManyToOne(targetEntity:"App\Entity\Fournisseur") ]
    #[ORM\JoinColumn(nullable:false) ]
     private $fournisseur;

    #[ORM\OneToMany(mappedBy: 'reception', targetEntity: ReceptionProduit::class)]
    private Collection $receptionProduits;
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->date = new \Datetime();
        $this->reste = false;
        $this->receptionProduits = new ArrayCollection();
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

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): self
    {
        $this->user = $user;

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

    public function getFournisseur(): ?Fournisseur
    {
        return $this->fournisseur;
    }

    public function setFournisseur(?Fournisseur $fournisseur): static
    {
        $this->fournisseur = $fournisseur;

        return $this;
    }

    /**
     * @return Collection<int, ReceptionProduit>
     */
    public function getReceptionProduits(): Collection
    {
        return $this->receptionProduits;
    }

    public function addReceptionProduit(ReceptionProduit $receptionProduit): static
    {
        if (!$this->receptionProduits->contains($receptionProduit)) {
            $this->receptionProduits->add($receptionProduit);
            $receptionProduit->setReception($this);
        }

        return $this;
    }

    public function removeReceptionProduit(ReceptionProduit $receptionProduit): static
    {
        if ($this->receptionProduits->removeElement($receptionProduit)) {
            // set the owning side to null (unless already changed)
            if ($receptionProduit->getReception() === $this) {
                $receptionProduit->setReception(null);
            }
        }

        return $this;
    }
}
