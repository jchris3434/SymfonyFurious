<?php

namespace App\Entity;

use App\Repository\PiloteRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=PiloteRepository::class)
 */
class Pilote
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nom;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $prenom;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $pays;

    /**
     * @ORM\Column(type="integer")
     */
    private $furious_skill;

    /**
     * @ORM\Column(type="integer")
     */
    private $tirelire;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getPays(): ?string
    {
        return $this->pays;
    }

    public function setPays(string $pays): self
    {
        $this->pays = $pays;

        return $this;
    }

    public function getFuriousSkill(): ?int
    {
        return $this->furious_skill;
    }

    public function setFuriousSkill(int $furious_skill): self
    {
        $this->furious_skill = $furious_skill;

        return $this;
    }

    public function getTirelire(): ?int
    {
        return $this->tirelire;
    }

    public function setTirelire(int $tirelire): self
    {
        $this->tirelire = $tirelire;

        return $this;
    }
}
