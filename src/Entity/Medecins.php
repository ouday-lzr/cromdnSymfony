<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Medecins
 *
 * @ORM\Table(name="medecins", indexes={@ORM\Index(name="id_delegation", columns={"id_delegation"}), @ORM\Index(name="id_nationalite", columns={"id_nationalite"}), @ORM\Index(name="id_specialite", columns={"id_specialite"}), @ORM\Index(name="id_mode", columns={"id_mode"}), @ORM\Index(name="id_gouvernorat", columns={"id_gouvernorat"}), @ORM\Index(name="id_type_mode", columns={"id_type_mode"}), @ORM\Index(name="users_email_unique", columns={"email"}), @ORM\Index(name="id_ville", columns={"id_ville"}), @ORM\Index(name="id_exercice", columns={"id_exercice"}), @ORM\Index(name="id_diplome", columns={"id_diplome"}), @ORM\Index(name="id_mode_2", columns={"id_mode"})})
 * @ORM\Entity
 */
class Medecins
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="bigint", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=100, nullable=false)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255, nullable=false)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=255, nullable=false)
     */
    private $prenom;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_naissance", type="date", nullable=false)
     */
    private $dateNaissance;

    /**
     * @var string|null
     *
     * @ORM\Column(name="lieu_naissance", type="string", length=255, nullable=true)
     */
    private $lieuNaissance;

    /**
     * @var string|null
     *
     * @ORM\Column(name="gsm", type="string", length=100, nullable=true)
     */
    private $gsm;

    /**
     * @var string|null
     *
     * @ORM\Column(name="fixe", type="string", length=100, nullable=true)
     */
    private $fixe;

    /**
     * @var string|null
     *
     * @ORM\Column(name="fax", type="string", length=100, nullable=true)
     */
    private $fax;

    /**
     * @var int
     *
     * @ORM\Column(name="sexe", type="integer", nullable=false)
     */
    private $sexe;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse", type="string", length=255, nullable=false)
     */
    private $adresse;

    /**
     * @var int
     *
     * @ORM\Column(name="etat_actuel", type="integer", nullable=false)
     */
    private $etatActuel;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="annee_diplome", type="date", nullable=false)
     */
    private $anneeDiplome;

    /**
     * @var string|null
     *
     * @ORM\Column(name="epouse", type="string", length=255, nullable=true)
     */
    private $epouse;

    /**
     * @var string|null
     *
     * @ORM\Column(name="site_web", type="string", length=255, nullable=true)
     */
    private $siteWeb;

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
     * @var \Nationalites
     *
     * @ORM\ManyToOne(targetEntity="Nationalites")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_nationalite", referencedColumnName="id")
     * })
     */
    private $idNationalite;

    /**
     * @var \Specialites
     *
     * @ORM\ManyToOne(targetEntity="Specialites")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_specialite", referencedColumnName="id")
     * })
     */
    private $idSpecialite;

    /**
     * @var \Diplomes
     *
     * @ORM\ManyToOne(targetEntity="Diplomes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_diplome", referencedColumnName="id")
     * })
     */
    private $idDiplome;

    /**
     * @var \Villes
     *
     * @ORM\ManyToOne(targetEntity="Villes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_ville", referencedColumnName="id")
     * })
     */
    private $idVille;

    /**
     * @var \Exercices
     *
     * @ORM\ManyToOne(targetEntity="Exercices")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_exercice", referencedColumnName="id")
     * })
     */
    private $idExercice;

    /**
     * @var \Delegations
     *
     * @ORM\ManyToOne(targetEntity="Delegations")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_delegation", referencedColumnName="id")
     * })
     */
    private $idDelegation;

    /**
     * @var \Modes
     *
     * @ORM\ManyToOne(targetEntity="Modes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_mode", referencedColumnName="id")
     * })
     */
    private $idMode;

    /**
     * @var \Gouvernorats
     *
     * @ORM\ManyToOne(targetEntity="Gouvernorats")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_gouvernorat", referencedColumnName="id")
     * })
     */
    private $idGouvernorat;

    /**
     * @var \TypeModeExercices
     *
     * @ORM\ManyToOne(targetEntity="TypeModeExercices")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_type_mode", referencedColumnName="id")
     * })
     */
    private $idTypeMode;

    public function getId(): ?string
    {
        return $this->id;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getDateNaissance(): ?\DateTimeInterface
    {
        return $this->dateNaissance;
    }

    public function setDateNaissance(\DateTimeInterface $dateNaissance): self
    {
        $this->dateNaissance = $dateNaissance;

        return $this;
    }

    public function getLieuNaissance(): ?string
    {
        return $this->lieuNaissance;
    }

    public function setLieuNaissance(?string $lieuNaissance): self
    {
        $this->lieuNaissance = $lieuNaissance;

        return $this;
    }

    public function getGsm(): ?string
    {
        return $this->gsm;
    }

    public function setGsm(?string $gsm): self
    {
        $this->gsm = $gsm;

        return $this;
    }

    public function getFixe(): ?string
    {
        return $this->fixe;
    }

    public function setFixe(?string $fixe): self
    {
        $this->fixe = $fixe;

        return $this;
    }

    public function getFax(): ?string
    {
        return $this->fax;
    }

    public function setFax(?string $fax): self
    {
        $this->fax = $fax;

        return $this;
    }

    public function getSexe(): ?int
    {
        return $this->sexe;
    }

    public function setSexe(int $sexe): self
    {
        $this->sexe = $sexe;

        return $this;
    }

    public function getAdresse(): ?string
    {
        return $this->adresse;
    }

    public function setAdresse(string $adresse): self
    {
        $this->adresse = $adresse;

        return $this;
    }

    public function getEtatActuel(): ?int
    {
        return $this->etatActuel;
    }

    public function setEtatActuel(int $etatActuel): self
    {
        $this->etatActuel = $etatActuel;

        return $this;
    }

    public function getAnneeDiplome(): ?\DateTimeInterface
    {
        return $this->anneeDiplome;
    }

    public function setAnneeDiplome(\DateTimeInterface $anneeDiplome): self
    {
        $this->anneeDiplome = $anneeDiplome;

        return $this;
    }

    public function getEpouse(): ?string
    {
        return $this->epouse;
    }

    public function setEpouse(?string $epouse): self
    {
        $this->epouse = $epouse;

        return $this;
    }

    public function getSiteWeb(): ?string
    {
        return $this->siteWeb;
    }

    public function setSiteWeb(?string $siteWeb): self
    {
        $this->siteWeb = $siteWeb;

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

    public function getIdNationalite(): ?Nationalites
    {
        return $this->idNationalite;
    }

    public function setIdNationalite(?Nationalites $idNationalite): self
    {
        $this->idNationalite = $idNationalite;

        return $this;
    }

    public function getIdSpecialite(): ?Specialites
    {
        return $this->idSpecialite;
    }

    public function setIdSpecialite(?Specialites $idSpecialite): self
    {
        $this->idSpecialite = $idSpecialite;

        return $this;
    }

    public function getIdDiplome(): ?Diplomes
    {
        return $this->idDiplome;
    }

    public function setIdDiplome(?Diplomes $idDiplome): self
    {
        $this->idDiplome = $idDiplome;

        return $this;
    }

    public function getIdVille(): ?Villes
    {
        return $this->idVille;
    }

    public function setIdVille(?Villes $idVille): self
    {
        $this->idVille = $idVille;

        return $this;
    }

    public function getIdExercice(): ?Exercices
    {
        return $this->idExercice;
    }

    public function setIdExercice(?Exercices $idExercice): self
    {
        $this->idExercice = $idExercice;

        return $this;
    }

    public function getIdDelegation(): ?Delegations
    {
        return $this->idDelegation;
    }

    public function setIdDelegation(?Delegations $idDelegation): self
    {
        $this->idDelegation = $idDelegation;

        return $this;
    }

    public function getIdMode(): ?Modes
    {
        return $this->idMode;
    }

    public function setIdMode(?Modes $idMode): self
    {
        $this->idMode = $idMode;

        return $this;
    }

    public function getIdGouvernorat(): ?Gouvernorats
    {
        return $this->idGouvernorat;
    }

    public function setIdGouvernorat(?Gouvernorats $idGouvernorat): self
    {
        $this->idGouvernorat = $idGouvernorat;

        return $this;
    }

    public function getIdTypeMode(): ?TypeModeExercices
    {
        return $this->idTypeMode;
    }

    public function setIdTypeMode(?TypeModeExercices $idTypeMode): self
    {
        $this->idTypeMode = $idTypeMode;

        return $this;
    }


}
