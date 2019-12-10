<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MedecinLettres
 *
 * @ORM\Table(name="medecin_lettres", indexes={@ORM\Index(name="id_lettre", columns={"id_lettre"}), @ORM\Index(name="id_user", columns={"id_medecin"})})
 * @ORM\Entity
 */
class MedecinLettres
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
     * @var \DateTime
     *
     * @ORM\Column(name="date_lettre", type="date", nullable=false)
     */
    private $dateLettre;

    /**
     * @var \Lettres
     *
     * @ORM\ManyToOne(targetEntity="Lettres")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_lettre", referencedColumnName="id")
     * })
     */
    private $idLettre;

    /**
     * @var \Medecins
     *
     * @ORM\ManyToOne(targetEntity="Medecins")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_medecin", referencedColumnName="id")
     * })
     */
    private $idMedecin;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDateLettre(): ?\DateTimeInterface
    {
        return $this->dateLettre;
    }

    public function setDateLettre(\DateTimeInterface $dateLettre): self
    {
        $this->dateLettre = $dateLettre;

        return $this;
    }

    public function getIdLettre(): ?Lettres
    {
        return $this->idLettre;
    }

    public function setIdLettre(?Lettres $idLettre): self
    {
        $this->idLettre = $idLettre;

        return $this;
    }

    public function getIdMedecin(): ?Medecins
    {
        return $this->idMedecin;
    }

    public function setIdMedecin(?Medecins $idMedecin): self
    {
        $this->idMedecin = $idMedecin;

        return $this;
    }


}
