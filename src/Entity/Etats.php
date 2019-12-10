<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Etats
 *
 * @ORM\Table(name="etats", indexes={@ORM\Index(name="id_type", columns={"id_type"}), @ORM\Index(name="id_user", columns={"id_medecin"})})
 * @ORM\Entity
 */
class Etats
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
     * @ORM\Column(name="date", type="date", nullable=false)
     */
    private $date;

    /**
     * @var string
     *
     * @ORM\Column(name="address", type="string", length=255, nullable=false)
     */
    private $address;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_gouvernorat", type="integer", nullable=true)
     */
    private $idGouvernorat;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_delegation", type="integer", nullable=true)
     */
    private $idDelegation;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_ville", type="integer", nullable=true)
     */
    private $idVille;

    /**
     * @var string|null
     *
     * @ORM\Column(name="desc", type="text", length=65535, nullable=true)
     */
    private $desc;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_mode_type", type="integer", nullable=true)
     */
    private $idModeType;

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
     * @var \TypeEtats
     *
     * @ORM\ManyToOne(targetEntity="TypeEtats")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_type", referencedColumnName="id")
     * })
     */
    private $idType;

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

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): self
    {
        $this->date = $date;

        return $this;
    }

    public function getAddress(): ?string
    {
        return $this->address;
    }

    public function setAddress(string $address): self
    {
        $this->address = $address;

        return $this;
    }

    public function getIdGouvernorat(): ?int
    {
        return $this->idGouvernorat;
    }

    public function setIdGouvernorat(?int $idGouvernorat): self
    {
        $this->idGouvernorat = $idGouvernorat;

        return $this;
    }

    public function getIdDelegation(): ?int
    {
        return $this->idDelegation;
    }

    public function setIdDelegation(?int $idDelegation): self
    {
        $this->idDelegation = $idDelegation;

        return $this;
    }

    public function getIdVille(): ?int
    {
        return $this->idVille;
    }

    public function setIdVille(?int $idVille): self
    {
        $this->idVille = $idVille;

        return $this;
    }

    public function getDesc(): ?string
    {
        return $this->desc;
    }

    public function setDesc(?string $desc): self
    {
        $this->desc = $desc;

        return $this;
    }

    public function getIdModeType(): ?int
    {
        return $this->idModeType;
    }

    public function setIdModeType(?int $idModeType): self
    {
        $this->idModeType = $idModeType;

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

    public function getIdType(): ?TypeEtats
    {
        return $this->idType;
    }

    public function setIdType(?TypeEtats $idType): self
    {
        $this->idType = $idType;

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
