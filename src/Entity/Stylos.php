<?php

namespace App\Entity;

use App\Repository\StylosRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: StylosRepository::class)]
class Stylos
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 50)]
    private ?string $nom_de_scene = null;

    #[ORM\Column(length: 50)]
    private ?string $prenom = null;

    #[ORM\Column(length: 50)]
    private ?string $nom = null;

    #[ORM\Column(length: 50)]
    private ?string $image = null;

    #[ORM\Column(length: 100)]
    private ?string $contact_courriel = null;

    #[ORM\Column(length: 100)]
    private ?string $site_internet = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $presentation = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomDeScene(): ?string
    {
        return $this->nom_de_scene;
    }

    public function setNomDeScene(string $nom_de_scene): static
    {
        $this->nom_de_scene = $nom_de_scene;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): static
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): static
    {
        $this->nom = $nom;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(string $image): static
    {
        $this->image = $image;

        return $this;
    }

    public function getContactCourriel(): ?string
    {
        return $this->contact_courriel;
    }

    public function setContactCourriel(string $contact_courriel): static
    {
        $this->contact_courriel = $contact_courriel;

        return $this;
    }

    public function getSiteInternet(): ?string
    {
        return $this->site_internet;
    }

    public function setSiteInternet(string $site_internet): static
    {
        $this->site_internet = $site_internet;

        return $this;
    }

    public function getPresentation(): ?string
    {
        return $this->presentation;
    }

    public function setPresentation(string $presentation): static
    {
        $this->presentation = $presentation;

        return $this;
    }
}
