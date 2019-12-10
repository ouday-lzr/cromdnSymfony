<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Delegations
 *
 * @ORM\Table(name="delegations", indexes={@ORM\Index(name="ref_gouvernaurat", columns={"ref_gouvernaurat"})})
 * @ORM\Entity
 */
class Delegations
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
     * @var string
     *
     * @ORM\Column(name="libelle", type="string", length=255, nullable=false)
     */
    private $libelle;

    /**
     * @var \Gouvernorats
     *
     * @ORM\ManyToOne(targetEntity="Gouvernorats")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ref_gouvernaurat", referencedColumnName="id")
     * })
     */
    private $refGouvernaurat;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getRefGouvernaurat(): ?Gouvernorats
    {
        return $this->refGouvernaurat;
    }

    public function setRefGouvernaurat(?Gouvernorats $refGouvernaurat): self
    {
        $this->refGouvernaurat = $refGouvernaurat;

        return $this;
    }


}
