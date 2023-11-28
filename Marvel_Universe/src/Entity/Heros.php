<?php

namespace App\Entity;

use App\Repository\HerosRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=HerosRepository::class)
 */
class Heros
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
    private $name;

     /**
     * @ORM\Column(type="string", length=255)
     */
    private $span;

    /**
     * @ORM\Column(type="text")
     */
    private $description;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $OrigineName;

    /**
     * @ORM\Column(type="string")
     */
    private $Creation;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $picture;

    /**
     * @ORM\Column(type="text")
     */
    private $powers;

     /**
     * @ORM\Column(type="string", length=255)
     */
    private $classe;

         /**
     * @ORM\Column(type="string", length=255)
     */
    private $resume;


    

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getOrigineName(): ?string
    {
        return $this->OrigineName;
    }

    public function setOrigineName(string $OrigineName): self
    {
        $this->OrigineName = $OrigineName;

        return $this;
    }

    public function getCreation(): ?string
    {
        return $this->Creation;
    }

    public function setCreation(string $Creation): self
    {
        $this->Creation = $Creation;

        return $this;
    }

    public function getPicture(): ?string
    {
        return $this->picture;
    }

    public function setPicture(string $picture): self
    {
        $this->picture = $picture;

        return $this;
    }

    public function getPowers(): ?string
    {
        return $this->powers;
    }

    public function setPowers(string $powers): self
    {
        $this->powers = $powers;

        return $this;
    }

    /**
     * Get the value of classe
     */ 
    public function getClasse()
    {
        return $this->classe;
    }

    /**
     * Set the value of classe
     *
     * @return  self
     */ 
    public function setClasse($classe)
    {
        $this->classe = $classe;

        return $this;
    }

    /**
     * Get the value of resume
     */ 
    public function getResume()
    {
        return $this->resume;
    }

    /**
     * Set the value of resume
     *
     * @return  self
     */ 
    public function setResume($resume)
    {
        $this->resume = $resume;

        return $this;
    }
}
