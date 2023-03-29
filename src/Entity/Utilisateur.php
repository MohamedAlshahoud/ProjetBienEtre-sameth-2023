<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\DBAL\Types\Types;
use App\Repository\UtilisateurRepository;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;

#[ORM\Entity(repositoryClass: UtilisateurRepository::class)]
#[UniqueEntity(fields: ['email'], message: 'There is already an account with this email')]
class Utilisateur implements UserInterface, PasswordAuthenticatedUserInterface
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 180, unique: true)]
    private ?string $email = null;

    #[ORM\Column]
    private array $roles = [];

    /**
     * @var string The hashed password
     */
    #[ORM\Column]
    private ?string $password = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $adresseN = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $adresseRue = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $inscription = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $typeUtilisateur = null;

    #[ORM\Column]
    private ?bool $banni = false;

    #[ORM\OneToOne(inversedBy: 'utilisateur', cascade: ['persist', 'remove'])]
    private ?Internaute $internaute = null;

    #[ORM\OneToOne(inversedBy: 'utilisateur', cascade: ['persist', 'remove'])]
    private ?Prestataire $prestataire = null;

    #[ORM\Column]
    private ?bool $is_verified = false;

    #[ORM\ManyToOne(inversedBy: 'utilisateurs')]
    private ?CodePostal $codePostal = null;

    #[ORM\ManyToOne(inversedBy: 'utilisateurs')]
    private ?Commune $commune = null;

    #[ORM\ManyToOne(inversedBy: 'utilisateurs')]
    private ?Localite $localite = null;

    #[ORM\Column]
    private ?int $nbEssaisInfructueux = 0;

    public function getId(): ?int
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

    /**
     * A visual identifier that represents this user.
     *
     * @see UserInterface
     */
    public function getUserIdentifier(): string
    {
        return (string) $this->email;
    }

    /**
     * @see UserInterface
     */
    public function getRoles(): array
    {
        $roles = $this->roles;
        // guarantee every user at least has ROLE_USER
        $roles[] = 'ROLE_USER';

        return array_unique($roles);
    }

    public function setRoles(array $roles): self
    {
        $this->roles = $roles;

        return $this;
    }

    /**
     * @see PasswordAuthenticatedUserInterface
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    /**
     * @see UserInterface
     */
    public function eraseCredentials()
    {
        // If you store any temporary, sensitive data on the user, clear it here
        // $this->plainPassword = null;
    }

    public function getAdresseN(): ?string
    {
        return $this->adresseN;
    }

    public function setAdresseN(?string $adresseN): self
    {
        $this->adresseN = $adresseN;

        return $this;
    }

    public function getAdresseRue(): ?string
    {
        return $this->adresseRue;
    }

    public function setAdresseRue(?string $adresseRue): self
    {
        $this->adresseRue = $adresseRue;

        return $this;
    }

    public function getInscription(): ?\DateTimeInterface
    {
        return $this->inscription;
    }

    public function setInscription(?\DateTimeInterface $inscription): self
    {
        $this->inscription = $inscription;

        return $this;
    }

    public function getTypeUtilisateur(): ?string
    {
        return $this->typeUtilisateur;
    }

    public function setTypeUtilisateur(?string $typeUtilisateur): self
    {
        $this->typeUtilisateur = $typeUtilisateur;

        return $this;
    }

    public function isBanni(): ?bool
    {
        return $this->banni;
    }

    public function setBanni(bool $banni): self
    {
        $this->banni = $banni;

        return $this;
    }

    public function getInternaute(): ?Internaute
    {
        return $this->internaute;
    }

    public function setInternaute(?Internaute $internaute): self
    {
        $this->internaute = $internaute;

        return $this;
    }

    public function getPrestataire(): ?Prestataire
    {
        return $this->prestataire;
    }

    public function setPrestataire(?Prestataire $prestataire): self
    {
        $this->prestataire = $prestataire;

        return $this;
    }

    public function setIsVerified(bool $is_verified): self
    {
        $this->is_verified = $is_verified;

        return $this;
    }


    public function isIsVerified(): ?bool
    {
        return $this->is_verified;
    }

    public function getCodePostal(): ?CodePostal
    {
        return $this->codePostal;
    }

    public function setCodePostal(?CodePostal $codePostal): self
    {
        $this->codePostal = $codePostal;

        return $this;
    }

    public function getCommune(): ?Commune
    {
        return $this->commune;
    }

    public function setCommune(?Commune $commune): self
    {
        $this->commune = $commune;

        return $this;
    }

    public function getLocalite(): ?Localite
    {
        return $this->localite;
    }

    public function setLocalite(?Localite $localite): self
    {
        $this->localite = $localite;

        return $this;
    }

    public function getNbEssaisInfructueux(): ?int
    {
        return $this->nbEssaisInfructueux;
    }

    public function setNbEssaisInfructueux(int $nbEssaisInfructueux): self
    {
        $this->nbEssaisInfructueux = $nbEssaisInfructueux;

        return $this;
    }
}
