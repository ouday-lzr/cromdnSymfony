<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Modes
 *
 * @ORM\Table(name="modes")
 * @ORM\Entity
 */
class Modes
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="libelle", type="string", length=255, nullable=false)
     */
    private $libelle;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="TypeEtats", mappedBy="idModeExercice")
     */
    private $idTypeEtat;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idTypeEtat = new \Doctrine\Common\Collections\ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLibelle(): ?string
    {
        return $this->libelle;
    }

    public function setLibelle(string $libelle): self
    {
        $this->libelle = $libelle;

        return $this;
    }

    /**
     * @return Collection|TypeEtats[]
     */
    public function getIdTypeEtat(): Collection
    {
        return $this->idTypeEtat;
    }

    public function addIdTypeEtat(TypeEtats $idTypeEtat): self
    {
        if (!$this->idTypeEtat->contains($idTypeEtat)) {
            $this->idTypeEtat[] = $idTypeEtat;
            $idTypeEtat->addIdModeExercice($this);
        }

        return $this;
    }

    public function removeIdTypeEtat(TypeEtats $idTypeEtat): self
    {
        if ($this->idTypeEtat->contains($idTypeEtat)) {
            $this->idTypeEtat->removeElement($idTypeEtat);
            $idTypeEtat->removeIdModeExercice($this);
        }

        return $this;
    }

}
