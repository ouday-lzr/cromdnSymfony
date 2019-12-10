<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TypeModeExercices
 *
 * @ORM\Table(name="type_mode_exercices", indexes={@ORM\Index(name="id-mode", columns={"id_mode"})})
 * @ORM\Entity
 */
class TypeModeExercices
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
     * @var int
     *
     * @ORM\Column(name="id_mode", type="integer", nullable=false)
     */
    private $idMode;

    /**
     * @var string
     *
     * @ORM\Column(name="libelle", type="string", length=55, nullable=false)
     */
    private $libelle;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdMode(): ?int
    {
        return $this->idMode;
    }

    public function setIdMode(int $idMode): self
    {
        $this->idMode = $idMode;

        return $this;
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


}
