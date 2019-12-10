<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Villes
 *
 * @ORM\Table(name="villes", indexes={@ORM\Index(name="ref_delegation", columns={"ref_delegation"}), @ORM\Index(name="ref_gouvernaurat", columns={"ref_gouvernaurat"})})
 * @ORM\Entity
 */
class Villes
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
     * @ORM\Column(name="libelle", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $libelle = 'NULL';

    /**
     * @var int|null
     *
     * @ORM\Column(name="code_postal", type="integer", nullable=true)
     */
    private $codePostal;

    /**
     * @var int|null
     *
     * @ORM\Column(name="ref_gouvernaurat", type="integer", nullable=true)
     */
    private $refGouvernaurat;

    /**
     * @var \Delegations
     *
     * @ORM\ManyToOne(targetEntity="Delegations")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ref_delegation", referencedColumnName="id")
     * })
     */
    private $refDelegation;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLibelle(): ?string
    {
        return $this->libelle;
    }

    public function setLibelle(?string $libelle): self
    {
        $this->libelle = $libelle;

        return $this;
    }

    public function getCodePostal(): ?int
    {
        return $this->codePostal;
    }

    public function setCodePostal(?int $codePostal): self
    {
        $this->codePostal = $codePostal;

        return $this;
    }

    public function getRefGouvernaurat(): ?int
    {
        return $this->refGouvernaurat;
    }

    public function setRefGouvernaurat(?int $refGouvernaurat): self
    {
        $this->refGouvernaurat = $refGouvernaurat;

        return $this;
    }

    public function getRefDelegation(): ?Delegations
    {
        return $this->refDelegation;
    }

    public function setRefDelegation(?Delegations $refDelegation): self
    {
        $this->refDelegation = $refDelegation;

        return $this;
    }


}
