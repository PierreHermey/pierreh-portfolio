<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ExperiencesRepository")
 */
class Experiences
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Jobs;

    /**
     * @ORM\Column(type="date")
     */
    private $Date;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $Description;

    public function getId()
    {
        return $this->id;
    }

    public function getJobs(): ?string
    {
        return $this->Jobs;
    }

    public function setJobs(string $Jobs): self
    {
        $this->Jobs = $Jobs;

        return $this;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->Date;
    }

    public function setDate(\DateTimeInterface $Date): self
    {
        $this->Date = $Date;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->Description;
    }

    public function setDescription(?string $Description): self
    {
        $this->Description = $Description;

        return $this;
    }
}
