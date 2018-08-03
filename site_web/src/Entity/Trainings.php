<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\TrainingsRepository")
 */
class Trainings
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
    private $School;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $Date;

    public function getId()
    {
        return $this->id;
    }

    public function getSchool(): ?string
    {
        return $this->School;
    }

    public function setSchool(string $School): self
    {
        $this->School = $School;

        return $this;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->Date;
    }

    public function setDate(?\DateTimeInterface $Date): self
    {
        $this->Date = $Date;

        return $this;
    }
}
