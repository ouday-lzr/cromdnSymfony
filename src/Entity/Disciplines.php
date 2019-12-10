<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Disciplines
 *
 * @ORM\Table(name="disciplines", indexes={@ORM\Index(name="id_medecin", columns={"id_medecin"}), @ORM\Index(name="id_medecine", columns={"id_medecin"}), @ORM\Index(name="id_sanction", columns={"id_sanction"})})
 * @ORM\Entity
 */
class Disciplines
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
     * @var string|null
     *
     * @ORM\Column(name="reference", type="string", length=55, nullable=true)
     */
    private $reference;

    /**
     * @var bool
     *
     * @ORM\Column(name="recours", type="boolean", nullable=false)
     */
    private $recours = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="date", nullable=false)
     */
    private $date;

    /**
     * @var string|null
     *
     * @ORM\Column(name="observation", type="text", length=65535, nullable=true)
     */
    private $observation;

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
     * @var \TypeSanctions
     *
     * @ORM\ManyToOne(targetEntity="TypeSanctions")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_sanction", referencedColumnName="id")
     * })
     */
    private $idSanction;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getReference(): ?string
    {
        return $this->reference;
    }

    public function setReference(?string $reference): self
    {
        $this->reference = $reference;

        return $this;
    }

    public function getRecours(): ?bool
    {
        return $this->recours;
    }

    public function setRecours(bool $recours): self
    {
        $this->recours = $recours;

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

    public function getObservation(): ?string
    {
        return $this->observation;
    }

    public function setObservation(?string $observation): self
    {
        $this->observation = $observation;

        return $this;
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

    public function getIdSanction(): ?TypeSanctions
    {
        return $this->idSanction;
    }

    public function setIdSanction(?TypeSanctions $idSanction): self
    {
        $this->idSanction = $idSanction;

        return $this;
    }


}
