<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Convocations
 *
 * @ORM\Table(name="convocations", indexes={@ORM\Index(name="id_user", columns={"id_plainte"}), @ORM\Index(name="id_plainte", columns={"id_plainte"}), @ORM\Index(name="id_user_2", columns={"id_plainte"})})
 * @ORM\Entity
 */
class Convocations
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
     * @var string|null
     *
     * @ORM\Column(name="observation", type="string", length=255, nullable=true)
     */
    private $observation;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="created_at", type="datetime", nullable=true, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $createdAt = 'CURRENT_TIMESTAMP';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="updated_at", type="datetime", nullable=true, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $updatedAt = 'CURRENT_TIMESTAMP';

    /**
     * @var \Plaintes
     *
     * @ORM\ManyToOne(targetEntity="Plaintes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_plainte", referencedColumnName="id")
     * })
     */
    private $idPlainte;

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

    public function getIdPlainte(): ?Plaintes
    {
        return $this->idPlainte;
    }

    public function setIdPlainte(?Plaintes $idPlainte): self
    {
        $this->idPlainte = $idPlainte;

        return $this;
    }


}
