<?php

namespace App\Entity;

class SearchPrestataire
{
    /**
     * @var Categorie[]
     */
    private array $categorie = [];

    private $prestataire = null;

    public function getCategorie(): array
    {
        return $this->categorie;
    }

    public function setCategorie(?array $categorie): self
    {
        $this->categorie = $categorie;

        return $this;
    }

    public function getPrestataire(): ?string
    {
        return $this->prestataire;
    }

    public function setPrestataire(?string $prestataire): self
    {
        $this->prestataire = $prestataire;

        return $this;
    }
}
