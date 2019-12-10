<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MedecinAttestations
 *
 * @ORM\Table(name="medecin_attestations", indexes={@ORM\Index(name="id_attestation", columns={"id_attestation"}), @ORM\Index(name="id_user", columns={"id_medecin"})})
 * @ORM\Entity
 */
class MedecinAttestations
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
     * @ORM\Column(name="date_attestation", type="date", nullable=false)
     */
    private $dateAttestation;

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

    public function getDateAttestation(): ?\DateTimeInterface
    {
        return $this->dateAttestation;
    }

    public function setDateAttestation(\DateTimeInterface $dateAttestation): self
    {
        $this->dateAttestation = $dateAttestation;

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
