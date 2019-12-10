<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Numerolas
 *
 * @ORM\Table(name="numerolas", indexes={@ORM\Index(name="idLettre", columns={"id_lettre"}), @ORM\Index(name="idMedecin", columns={"id_medecin"}), @ORM\Index(name="idAttestation", columns={"id_attestation"})})
 * @ORM\Entity
 */
class Numerolas
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
     * @ORM\Column(name="created_at", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $createdAt = 'CURRENT_TIMESTAMP';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updated_at", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $updatedAt = 'CURRENT_TIMESTAMP';

    /**
     * @var \Medecins
     *
     * @ORM\ManyToOne(targetEntity="Medecins")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_medecin", referencedColumnName="id")
     * })
     */
    private $idMedecin;

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
     * @var \Attestations
     *
     * @ORM\ManyToOne(targetEntity="Attestations")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_attestation", referencedColumnName="id")
     * })
     */
    private $idAttestation;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTimeInterface $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    public function getUpdatedAt(): ?\DateTimeInterface
    {
        return $this->updatedAt;
    }

    public function setUpdatedAt(\DateTimeInterface $updatedAt): self
    {
        $this->updatedAt = $updatedAt;

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

    public function getIdLettre(): ?Lettres
    {
        return $this->idLettre;
    }

    public function setIdLettre(?Lettres $idLettre): self
    {
        $this->idLettre = $idLettre;

        return $this;
    }

    public function getIdAttestation(): ?Attestations
    {
        return $this->idAttestation;
    }

    public function setIdAttestation(?Attestations $idAttestation): self
    {
        $this->idAttestation = $idAttestation;

        return $this;
    }


}
