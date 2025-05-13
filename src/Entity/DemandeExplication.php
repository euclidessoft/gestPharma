<?php

namespace App\Entity;

use App\Repository\DemandeExplicationRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass:DemandeExplicationRepository::class) ]
class DemandeExplication
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type:"string", length:255) ]
    #[Assert\NotBlank(message:"Objet obligatoire")]
    private $objet;

    #[ORM\Column(type:"text") ]
    #[Assert\NotBlank(message:"Détails obligatoire")]
    private $details;

    #[ORM\Column(type:"datetime") ]
    private $date;

    #[ORM\Column(type:"datetime") ]
    #[Assert\Type(\DateTime::class)]
    #[Assert\NotBlank(message:"Obligatoire")]
    private $dateIncident;

    #[ORM\Column(type:"boolean") ]
    private $status;

    #[ORM\ManyToMany(targetEntity:Employe::class, inversedBy:"demandeExplications") ]
    #[Assert\NotBlank(message:"selectionnez un employe au moins")]
    private $employe;

    #[ORM\OneToMany(targetEntity:ReponseExplication::class, mappedBy:"demande") ]
    private $reponseExplications;

    #[ORM\ManyToOne(targetEntity:Employe::class, inversedBy:"demandeExplication") ]
    private $responsable;

    #[ORM\OneToMany(targetEntity:Decision::class, mappedBy:"explication") ]
    private $decisions;


    public function __construct()
    {
        $this->employe = new ArrayCollection();
        $this->reponseExplications = new ArrayCollection();
        $this->decisions = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getObjet(): ?string
    {
        return $this->objet;
    }

    public function setObjet(string $objet): self
    {
        $this->objet = $objet;

        return $this;
    }

    public function getDetails(): ?string
    {
        return $this->details;
    }

    public function setDetails(string $details): self
    {
        $this->details = $details;

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

    public function getDateIncident(): ?\DateTimeInterface
    {
        return $this->dateIncident;
    }

    public function setDateIncident(\DateTimeInterface $dateIncident): self
    {
        $this->dateIncident = $dateIncident;

        return $this;
    }

    public function getStatus(): ?bool
    {
        return $this->status;
    }

    public function setStatus(bool $status): self
    {
        $this->status = $status;

        return $this;
    }

    /*  #[return Collection|Employe[]
     */
    public function getEmploye(): Collection
    {
        return $this->employe;
    }

    public function addEmploye(Employe $employe): self
    {
        if (!$this->employe->contains($employe)) {
            $this->employe[] = $employe;
        }

        return $this;
    }

    public function removeEmploye(Employe $employe): self
    {
        $this->employe->removeElement($employe);

        return $this;
    }

    /*  #[return Collection|ReponseExplication[]
     */
    public function getReponseExplications(): Collection
    {
        return $this->reponseExplications;
    }

    public function addReponseExplication(ReponseExplication $reponseExplication): self
    {
        if (!$this->reponseExplications->contains($reponseExplication)) {
            $this->reponseExplications[] = $reponseExplication;
            $reponseExplication->setDemande($this);
        }

        return $this;
    }

    public function removeReponseExplication(ReponseExplication $reponseExplication): self
    {
        if ($this->reponseExplications->removeElement($reponseExplication)) {
            // set the owning side to null (unless already changed)
            if ($reponseExplication->getDemande() === $this) {
                $reponseExplication->setDemande(null);
            }
        }

        return $this;
    }

    public function getResponsable(): ?Employe
    {
        return $this->responsable;
    }

    public function setResponsable(?Employe $responsable): self
    {
        $this->responsable = $responsable;

        return $this;
    }

    /*  #[return Collection|Decision[]
     */
    public function getDecisions(): Collection
    {
        return $this->decisions;
    }

    public function addDecision(Decision $decision): self
    {
        if (!$this->decisions->contains($decision)) {
            $this->decisions[] = $decision;
            $decision->setExplication($this);
        }

        return $this;
    }

    public function removeDecision(Decision $decision): self
    {
        if ($this->decisions->removeElement($decision)) {
            // set the owning side to null (unless already changed)
            if ($decision->getExplication() === $this) {
                $decision->setExplication(null);
            }
        }

        return $this;
    }


}
