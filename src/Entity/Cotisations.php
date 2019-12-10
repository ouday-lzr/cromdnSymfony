<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cotisations
 *
 * @ORM\Table(name="cotisations", indexes={@ORM\Index(name="id_user", columns={"id_medecin"}), @ORM\Index(name="annee", columns={"annee"})})
 * @ORM\Entity
 */
class Cotisations
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
     * @var int|null
     *
     * @ORM\Column(name="montant", type="integer", nullable=true, options={"comment"="=0:impayée; <>0 :payée"})
     */
    private $montant;

    /**
     * @var int
     *
     * @ORM\Column(name="payment", type="integer", nullable=false)
     */
    private $payment = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="radie", type="integer", nullable=true)
     */
    private $radie = '0';

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
     * @var \Medecins
     *
     * @ORM\ManyToOne(targetEntity="Medecins")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_medecin", referencedColumnName="id")
     * })
     */
    private $idMedecin;

    /**
     * @var \Tarifs
     *
     * @ORM\ManyToOne(targetEntity="Tarifs")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="annee", referencedColumnName="annee")
     * })
     */
    private $annee;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMontant(): ?int
    {
        return $this->montant;
    }

    public function setMontant(?int $montant): self
    {
        $this->montant = $montant;

        return $this;
    }

    public function getPayment(): ?int
    {
        return $this->payment;
    }

    public function setPayment(int $payment): self
    {
        $this->payment = $payment;

        return $this;
    }

    public function getRadie(): ?int
    {
        return $this->radie;
    }

    public function setRadie(?int $radie): self
    {
        $this->radie = $radie;

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

    public function getIdMedecin(): ?Medecins
    {
        return $this->idMedecin;
    }

    public function setIdMedecin(?Medecins $idMedecin): self
    {
        $this->idMedecin = $idMedecin;

        return $this;
    }

    public function getAnnee(): ?Tarifs
    {
        return $this->annee;
    }

    public function setAnnee(?Tarifs $annee): self
    {
        $this->annee = $annee;

        return $this;
    }


}
