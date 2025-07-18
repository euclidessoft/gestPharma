<?php

namespace App\Entity;

use App\Repository\FournisseurRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass:FournisseurRepository::class) ]
class Fournisseur
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type:"string", length:255) ]
     #[Assert\NotBlank(  message : "Champ obligatoire") ]
    private $adresse;

    #[ORM\Column(type:"string", length:255) ]
     #[Assert\NotBlank(  message : "Champ obligatoire") ]
    private $email;

    #[ORM\Column(type:"string", length:255) ]
     #[Assert\NotBlank(  message : "Champ obligatoire") ]
    private $pays;

    #[ORM\Column(type:"integer") ]
     #[Assert\NotBlank(  message : "Champ obligatoire") ]
    private $telephone;

    #[ORM\Column(type:"string", length:255) ]
     #[Assert\NotBlank(  message : "Champ obligatoire") ]
    private $designation;

    #[ORM\Column(type:"string" , length:255) ]
     #[Assert\NotBlank(  message : "Champ obligatoire") ]
    private $compte;

    #[ORM\OneToMany(targetEntity:Achat::class, mappedBy:"fournisseur") ]
    private $achats;

//    /**
//     #[\OneToMany(targetEntity:FournisseurProduit::class, mappedBy:"fournisseur")
//     */
//    private $fournisseurProduits;

    #[ORM\OneToMany(targetEntity:Commande::class, mappedBy:"fournisseur") ]
    private $commandeproduits;

    #[ORM\OneToMany(targetEntity:FactureFournisseur::class, mappedBy:"fournisseur") ]
    private $factures;


    #[ORM\ManyToMany(targetEntity:"App\Entity\Produit", mappedBy:"fournisseurs") ]
    private $produits;

    public function __construct()
    {
        $this->achats = new ArrayCollection();
        $this->compte = 0;
//        $this->fournisseurProduits = new ArrayCollection();
        $this->approvisionnements = new ArrayCollection();
        $this->produits = new ArrayCollection();
        $this->factures = new ArrayCollection();
        $this->commandeproduits = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }


    public function getAdresse(): ?string
    {
        return $this->adresse;
    }

    public function setAdresse(string $adresse): self
    {
        $this->adresse = $adresse;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getPays(): ?string
    {
        return $this->pays;
    }

    public function setPays(string $pays): self
    {
        $this->pays = $pays;

        return $this;
    }

    public function getTelephone(): ?int
    {
        return $this->telephone;
    }

    public function setTelephone(int $telephone): self
    {
        $this->telephone = $telephone;

        return $this;
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

    public function getCompte(): ?string
    {
        return $this->compte;
    }

    public function setCompte(string $compte): self
    {
        $this->compte = $compte;

        return $this;
    }

    /*  #[return Collection|Achat[]
     */
    public function getAchats(): Collection
    {
        return $this->achats;
    }

    public function addAchat(Achat $achat): self
    {
        if (!$this->achats->contains($achat)) {
            $this->achats[] = $achat;
            $achat->setFournisseur($this);
        }

        return $this;
    }

    public function removeAchat(Achat $achat): self
    {
        if ($this->achats->removeElement($achat)) {
            // set the owning side to null (unless already changed)
            if ($achat->getFournisseur() === $this) {
                $achat->setFournisseur(null);
            }
        }

        return $this;
    }

    /*  #[return Collection|Approvisionnement[]
     */
    public function getApprovisionnements(): Collection
    {
        return $this->approvisionnements;
    }

    public function addApprovisionnement(Approvisionnement $approvisionnement): self
    {
        if (!$this->approvisionnements->contains($approvisionnement)) {
            $this->approvisionnements[] = $approvisionnement;
            $approvisionnement->setFournisseur($this);
        }

        return $this;
    }

    public function removeApprovisionnement(Approvisionnement $approvisionnement): self
    {
        if ($this->approvisionnements->removeElement($approvisionnement)) {
            // set the owning side to null (unless already changed)
            if ($approvisionnement->getFournisseur() === $this) {
                $approvisionnement->setFournisseur(null);
            }
        }

        return $this;
    }

    /*  #[return Collection|FactureFournisseur[]
     */
    public function getFactures(): Collection
    {
        return $this->factures;
    }

    public function addFacture(FactureFournisseur $facture): self
    {
        if (!$this->factures->contains($facture)) {
            $this->factures[] = $facture;
            $facture->setFournisseur($this);
        }

        return $this;
    }

    public function removeFacture(FactureFournisseur $facture): self
    {
        if ($this->factures->removeElement($facture)) {
            // set the owning side to null (unless already changed)
            if ($facture->getFournisseur() === $this) {
                $facture->setFournisseur(null);
            }
        }

        return $this;
    }

    /*  #[return Collection|Produit[]
     */
    public function getProduits(): Collection
    {
        return $this->produits;
    }

    public function addProduit(Produit $produit): self
    {
        if (!$this->produits->contains($produit)) {
            $this->produits[] = $produit;
            $produit->addFournisseur($this);
        }

        return $this;
    }

    public function removeProduit(Produit $produit): self
    {
        if ($this->produits->removeElement($produit)) {
            $produit->removeFournisseur($this);
        }

        return $this;
    }

    /**
     * @return Collection<int, Commande>
     */
    public function getCommandeproduits(): Collection
    {
        return $this->commandeproduits;
    }

    public function addCommandeproduit(Commande $commandeproduit): static
    {
        if (!$this->commandeproduits->contains($commandeproduit)) {
            $this->commandeproduits->add($commandeproduit);
            $commandeproduit->setFournisseur($this);
        }

        return $this;
    }

    public function removeCommandeproduit(Commande $commandeproduit): static
    {
        if ($this->commandeproduits->removeElement($commandeproduit)) {
            // set the owning side to null (unless already changed)
            if ($commandeproduit->getFournisseur() === $this) {
                $commandeproduit->setFournisseur(null);
            }
        }

        return $this;
    }
}
