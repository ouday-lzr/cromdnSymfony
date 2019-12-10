<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * TypeEtats
 *
 * @ORM\Table(name="type_etats")
 * @ORM\Entity
 */
class TypeEtats
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
     * @ORM\Column(name="libelle", type="string", length=50, nullable=false)
     */
    private $libelle;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Modes", inversedBy="idTypeEtat")
     * @ORM\JoinTable(name="mode_types",
     *   joinColumns={
     *     @ORM\JoinColumn(name="id_type_etat", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="id_mode_exercice", referencedColumnName="id")
     *   }
     * )
     */
    private $idModeExercice;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idModeExercice = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @return Collection|Modes[]
     */
    public function getIdModeExercice(): Collection
    {
        return $this->idModeExercice;
    }

    public function addIdModeExercice(Modes $idModeExercice): self
    {
        if (!$this->idModeExercice->contains($idModeExercice)) {
            $this->idModeExercice[] = $idModeExercice;
        }

        return $this;
    }

    public function removeIdModeExercice(Modes $idModeExercice): self
    {
        if ($this->idModeExercice->contains($idModeExercice)) {
            $this->idModeExercice->removeElement($idModeExercice);
        }

        return $this;
    }

}
