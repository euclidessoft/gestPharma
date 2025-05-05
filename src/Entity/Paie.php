<?php

namespace App\Entity;

use App\Repository\PaieRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass:PaieRepository::class) ]
class Paie
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(targetEntity:Employe::class, inversedBy:"paies") ]
    private $employe;

    #[ORM\Column(type:"date") ]
    private $date;

    #[ORM\Column(type:"integer") ]
    private $salaireBase;

    #[ORM\Column(type:"integer") ]
    private $code;

    #[ORM\Column(type:"integer") ]
    private $jours;
   
    #[ORM\Column(type:"integer") ]
    private $baseenciennete;

    #[ORM\Column(type:"integer") ]
    private $tauxenciennete;
    
    #[ORM\Column(type:"array", nullable:true) ] 
    protected $indemnite = [];
    
    #[ORM\Column(type:"integer", nullable:true) ] 
    protected $performance;

    #[ORM\Column(type:"integer") ]
    private $baseheuresup;

    #[ORM\Column(type:"integer") ]
    private $tauxheuresup;

    #[ORM\Column(type:"integer") ]
    private $baseponction;

    #[ORM\Column(type:"integer") ]
    private $tauxponction;

    #[ORM\Column(type:"float", nullable:true) ]
    private $Brut;

    #[ORM\Column(type:"float", nullable:true) ]
    private $Brutinter;

    #[ORM\Column(type:"float", nullable:true) ]
    private $Bruttaxable;

    #[ORM\Column(type:"float", nullable:true) ]
    private $logement;

    #[ORM\Column(type:"float", nullable:true) ]
    private $vehicule;

    #[ORM\Column(type:"float", nullable:true) ]
    private $cotisableinter;

    #[ORM\Column(type:"float", nullable:true) ]
    private $baseirpp;

    #[ORM\Column(type:"float", nullable:true) ]
    private $tauxirpp;

    #[ORM\Column(type:"float", nullable:true) ]
    private $irpp;

    #[ORM\Column(type:"float", nullable:true) ]
    private $baseca;

    #[ORM\Column(type:"float", nullable:true) ]
    private $tauxca;

    #[ORM\Column(type:"float", nullable:true) ]
    private $ca;

    #[ORM\Column(type:"float", nullable:true) ]
    private $baselocal;

    #[ORM\Column(type:"float", nullable:true) ]
    private $tauxlocal;

    #[ORM\Column(type:"float", nullable:true) ]
    private $local;

    #[ORM\Column(type:"float", nullable:true) ]
    private $basevieil;

    #[ORM\Column(type:"float", nullable:true) ]
    private $tauxvieil;

    #[ORM\Column(type:"float", nullable:true) ]
    private $vieil;

    #[ORM\Column(type:"float", nullable:true) ]
    private $basefoncier;

    #[ORM\Column(type:"float", nullable:true) ]
    private $tauxfoncier;

    #[ORM\Column(type:"float", nullable:true) ]
    private $foncier;

    #[ORM\Column(type:"float", nullable:true) ]
    private $basecrtv;

    #[ORM\Column(type:"float", nullable:true) ]
    private $tauxcrtv;

    #[ORM\Column(type:"float", nullable:true) ]
    private $crtv;

    #[ORM\Column(type:"float", nullable:true) ]
    private $allocation;

    #[ORM\Column(type:"float", nullable:true) ]
    private $cpvieil;

    #[ORM\Column(type:"float", nullable:true) ]
    private $tav;

    #[ORM\Column(type:"float", nullable:true) ]
    private $cpfoncier;

    #[ORM\Column(type:"float", nullable:true) ]
    private $fne;

    #[ORM\Column(type:"integer") ]
    private $salaireNet;

    #[ORM\ManyToOne(targetEntity:Mois::class, inversedBy:"paies") ]
    private $mois;

    #[ORM\Column(type:"boolean") ]
    private $payer;

    #[ORM\Column(type:"date", nullable:true) ]
    private $datepaye;

    public function __construct()
    {
        $this->date = new \DateTime();
        $this->payer = false;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEmploye(): ?Employe
    {
        return $this->employe;
    }

    public function setEmploye(?Employe $employe): self
    {
        $this->employe = $employe;

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

    public function getSalaireBase(): ?int
    {
        return $this->salaireBase;
    }

    public function setSalaireBase(int $salaireBase): static
    {
        $this->salaireBase = $salaireBase;

        return $this;
    }

    public function getCode(): ?int
    {
        return $this->code;
    }

    public function setCode(int $code): static
    {
        $this->code = $code;

        return $this;
    }

    public function getJours(): ?int
    {
        return $this->jours;
    }

    public function setJours(int $jours): static
    {
        $this->jours = $jours;

        return $this;
    }

    public function getBaseenciennete(): ?int
    {
        return $this->baseenciennete;
    }

    public function setBaseenciennete(int $baseenciennete): static
    {
        $this->baseenciennete = $baseenciennete;

        return $this;
    }

    public function getTauxenciennete(): ?int
    {
        return $this->tauxenciennete;
    }

    public function setTauxenciennete(int $tauxenciennete): static
    {
        $this->tauxenciennete = $tauxenciennete;

        return $this;
    }

    public function getIndemnite(): ?array
    {
        return $this->indemnite;
    }

    public function setIndemnite(?array $indemnite): static
    {
        $this->indemnite = $indemnite;

        return $this;
    }

    public function getBaseheuresup(): ?int
    {
        return $this->baseheuresup;
    }

    public function setBaseheuresup(int $baseheuresup): static
    {
        $this->baseheuresup = $baseheuresup;

        return $this;
    }

    public function getTauxheuresup(): ?int
    {
        return $this->tauxheuresup;
    }

    public function setTauxheuresup(int $tauxheuresup): static
    {
        $this->tauxheuresup = $tauxheuresup;

        return $this;
    }

    public function getBaseponction(): ?int
    {
        return $this->baseponction;
    }

    public function setBaseponction(int $baseponction): static
    {
        $this->baseponction = $baseponction;

        return $this;
    }

    public function getTauxponction(): ?int
    {
        return $this->tauxponction;
    }

    public function setTauxponction(int $tauxponction): static
    {
        $this->tauxponction = $tauxponction;

        return $this;
    }

    public function getBrut(): ?float
    {
        return $this->Brut;
    }

    public function setBrut(?float $Brut): static
    {
        $this->Brut = $Brut;

        return $this;
    }

    public function getBrutinter(): ?float
    {
        return $this->Brutinter;
    }

    public function setBrutinter(?float $Brutinter): static
    {
        $this->Brutinter = $Brutinter;

        return $this;
    }

    public function getBruttaxable(): ?float
    {
        return $this->Bruttaxable;
    }

    public function setBruttaxable(?float $Bruttaxable): static
    {
        $this->Bruttaxable = $Bruttaxable;

        return $this;
    }

    public function getLogement(): ?float
    {
        return $this->logement;
    }

    public function setLogement(?float $logement): static
    {
        $this->logement = $logement;

        return $this;
    }

    public function getVehicule(): ?float
    {
        return $this->vehicule;
    }

    public function setVehicule(?float $vehicule): static
    {
        $this->vehicule = $vehicule;

        return $this;
    }

    public function getCotisableinter(): ?float
    {
        return $this->cotisableinter;
    }

    public function setCotisableinter(?float $cotisableinter): static
    {
        $this->cotisableinter = $cotisableinter;

        return $this;
    }

    public function getBaseirpp(): ?float
    {
        return $this->baseirpp;
    }

    public function setBaseirpp(?float $baseirpp): static
    {
        $this->baseirpp = $baseirpp;

        return $this;
    }

    public function getTauxirpp(): ?float
    {
        return $this->tauxirpp;
    }

    public function setTauxirpp(?float $tauxirpp): static
    {
        $this->tauxirpp = $tauxirpp;

        return $this;
    }

    public function getIrpp(): ?float
    {
        return $this->irpp;
    }

    public function setIrpp(?float $irpp): static
    {
        $this->irpp = $irpp;

        return $this;
    }

    public function getBaseca(): ?float
    {
        return $this->baseca;
    }

    public function setBaseca(?float $baseca): static
    {
        $this->baseca = $baseca;

        return $this;
    }

    public function getTauxca(): ?float
    {
        return $this->tauxca;
    }

    public function setTauxca(?float $tauxca): static
    {
        $this->tauxca = $tauxca;

        return $this;
    }

    public function getCa(): ?float
    {
        return $this->ca;
    }

    public function setCa(?float $ca): static
    {
        $this->ca = $ca;

        return $this;
    }

    public function getBaselocal(): ?float
    {
        return $this->baselocal;
    }

    public function setBaselocal(?float $baselocal): static
    {
        $this->baselocal = $baselocal;

        return $this;
    }

    public function getTauxlocal(): ?float
    {
        return $this->tauxlocal;
    }

    public function setTauxlocal(?float $tauxlocal): static
    {
        $this->tauxlocal = $tauxlocal;

        return $this;
    }

    public function getLocal(): ?float
    {
        return $this->local;
    }

    public function setLocal(?float $local): static
    {
        $this->local = $local;

        return $this;
    }

    public function getBasevieil(): ?float
    {
        return $this->basevieil;
    }

    public function setBasevieil(?float $basevieil): static
    {
        $this->basevieil = $basevieil;

        return $this;
    }

    public function getTauxvieil(): ?float
    {
        return $this->tauxvieil;
    }

    public function setTauxvieil(?float $tauxvieil): static
    {
        $this->tauxvieil = $tauxvieil;

        return $this;
    }

    public function getVieil(): ?float
    {
        return $this->vieil;
    }

    public function setVieil(?float $vieil): static
    {
        $this->vieil = $vieil;

        return $this;
    }

    public function getBasefoncier(): ?float
    {
        return $this->basefoncier;
    }

    public function setBasefoncier(?float $basefoncier): static
    {
        $this->basefoncier = $basefoncier;

        return $this;
    }

    public function getTauxfoncier(): ?float
    {
        return $this->tauxfoncier;
    }

    public function setTauxfoncier(?float $tauxfoncier): static
    {
        $this->tauxfoncier = $tauxfoncier;

        return $this;
    }

    public function getFoncier(): ?float
    {
        return $this->foncier;
    }

    public function setFoncier(?float $foncier): static
    {
        $this->foncier = $foncier;

        return $this;
    }

    public function getBasecrtv(): ?float
    {
        return $this->basecrtv;
    }

    public function setBasecrtv(?float $basecrtv): static
    {
        $this->basecrtv = $basecrtv;

        return $this;
    }

    public function getTauxcrtv(): ?float
    {
        return $this->tauxcrtv;
    }

    public function setTauxcrtv(?float $tauxcrtv): static
    {
        $this->tauxcrtv = $tauxcrtv;

        return $this;
    }

    public function getCrtv(): ?float
    {
        return $this->crtv;
    }

    public function setCrtv(?float $crtv): static
    {
        $this->crtv = $crtv;

        return $this;
    }

    public function getAllocation(): ?float
    {
        return $this->allocation;
    }

    public function setAllocation(?float $allocation): static
    {
        $this->allocation = $allocation;

        return $this;
    }

    public function getCpvieil(): ?float
    {
        return $this->cpvieil;
    }

    public function setCpvieil(?float $cpvieil): static
    {
        $this->cpvieil = $cpvieil;

        return $this;
    }

    public function getTav(): ?float
    {
        return $this->tav;
    }

    public function setTav(?float $tav): static
    {
        $this->tav = $tav;

        return $this;
    }

    public function getCpfoncier(): ?float
    {
        return $this->cpfoncier;
    }

    public function setCpfoncier(?float $cpfoncier): static
    {
        $this->cpfoncier = $cpfoncier;

        return $this;
    }

    public function getFne(): ?float
    {
        return $this->fne;
    }

    public function setFne(?float $fne): static
    {
        $this->fne = $fne;

        return $this;
    }

    public function getSalaireNet(): ?int
    {
        return $this->salaireNet;
    }

    public function setSalaireNet(int $salaireNet): static
    {
        $this->salaireNet = $salaireNet;

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

    public function getDatepaye(): ?\DateTimeInterface
    {
        return $this->datepaye;
    }

    public function setDatepaye(?\DateTimeInterface $datepaye): static
    {
        $this->datepaye = $datepaye;

        return $this;
    }

    public function getMois(): ?Mois
    {
        return $this->mois;
    }

    public function setMois(?Mois $mois): static
    {
        $this->mois = $mois;

        return $this;
    }

}
