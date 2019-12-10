<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Plaintes
 *
 * @ORM\Table(name="plaintes", indexes={@ORM\Index(name="id_motif", columns={"id_motif"}), @ORM\Index(name="id_user", columns={"id_medecin"})})
 * @ORM\Entity
 */
class Plaintes
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
     * @ORM\Column(name="date_plainte", type="date", nullable=false)
     */
    private $datePlainte;

    /**
     * @var string|null
     *
     * @ORM\Column(name="nom_plaignant", type="string", length=55, nullable=true)
     */
    private $nomPlaignant;

    /**
     * @var string|null
     *
     * @ORM\Column(name="prenom_plaignant", type="string", length=55, nullable=true)
     */
    private $prenomPlaignant;

    /**
     * @var int|null
     *
     * @ORM\Column(name="tel_plaignant", type="integer", nullable=true)
     */
    private $telPlaignant;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_medecin_plaignant", type="integer", nullable=true)
     */
    private $idMedecinPlaignant;

    /**
     * @var string|null
     *
     * @ORM\Column(name="commentaire", type="text", length=65535, nullable=true)
     */
    private $commentaire;

    /**
     * @var string|null
     *
     * @ORM\Column(name="decision", type="string", length=255, nullable=true)
     */
    private $decision;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="created_at", type="datetime", nullable=true)
     */
    private $createdAt;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="updated_at", type="datetime", nullable=true)
     */
    private $updatedAt;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="deleted_at", type="datetime", nullable=true)
     */
    private $deletedAt;

    /**
     * @var \Motifs
     *
     * @ORM\ManyToOne(targetEntity="Motifs")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_motif", referencedColumnName="id")
     * })
     */
    private $idMotif;

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

    public function getDatePlainte(): ?\DateTimeInterface
    {
        return $this->datePlainte;
    }

    public function setDatePlainte(\DateTimeInterface $datePlainte): self
    {
        $this->datePlainte = $datePlainte;

        return $this;
    }

    public function getNomPlaignant(): ?string
    {
        return $this->nomPlaignant;
    }

    public function setNomPlaignant(?string $nomPlaignant): self
    {
        $this->nomPlaignant = $nomPlaignant;

        return $this;
    }

    public function getPrenomPlaignant(): ?string
    {
        return $this->prenomPlaignant;
    }

    public function setPrenomPlaignant(?string $prenomPlaignant): self
    {
        $this->prenomPlaignant = $prenomPlaignant;

        return $this;
    }

    public function getTelPlaignant(): ?int
    {
        return $this->telPlaignant;
    }

    public function setTelPlaignant(?int $telPlaignant): self
    {
        $this->telPlaignant = $telPlaignant;

        return $this;
    }

    public function getIdMedecinPlaignant(): ?int
    {
        return $this->idMedecinPlaignant;
    }

    public function setIdMedecinPlaignant(?int $idMedecinPlaignant): self
    {
        $this->idMedecinPlaignant = $idMedecinPlaignant;

        return $this;
    }

    public function getCommentaire(): ?string
    {
        return $this->commentaire;
    }

    public function setCommentaire(?string $commentaire): self
    {
        $this->commentaire = $commentaire;

        return $this;
    }

    public function getDecision(): ?string
    {
        return $this->decision;
    }

    public function setDecision(?string $decision): self
    {
        $this->decision = $decision;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->createdAt;
    }

    public function setCreatedAt(?\DateTimeInterface $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    public function getUpdatedAt(): ?\DateTimeInterface
    {
        return $this->updatedAt;
    }

    public function setUpdatedAt(?\DateTimeInterface $updatedAt): self
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    public function getDeletedAt(): ?\DateTimeInterface
    {
        return $this->deletedAt;
    }

    public function setDeletedAt(?\DateTimeInterface $deletedAt): self
    {
        $this->deletedAt = $deletedAt;

        return $this;
    }

    public function getIdMotif(): ?Motifs
    {
        return $this->idMotif;
    }

    public function setIdMotif(?Motifs $idMotif): self
    {
        $this->idMotif = $idMotif;

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
