<?php

namespace App\Entity;

use App\Repository\UserRepository;
use App\Services\DoctrineInterface;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=UserRepository::class)
 */
class User implements DoctrineInterface
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private int $id;

    /**
     * @ORM\Column(type="string", length=25)
     */
    private string $name;

    /**
     * @ORM\Column(type="datetime")
     */
    private \DateTimeInterface $date_created;

    /**
     * @ORM\Column(type="integer")
     */
    private int $pidm;

    /**
     * @ORM\Column(type="string", length=30)
     */
    private string $role;

    /**
     * @ORM\Column(type="string")
     */
    private string $emailID;

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

    public function getDateCreated(): ?\DateTimeInterface
    {
        return $this->date_created;
    }

    public function setDateCreated(\DateTimeInterface $date_created): self
    {
        $this->date_created = $date_created;

        return $this;
    }

    public function getPidm(): ?int
    {
        return $this->pidm;
    }

    public function setPidm(int $pidm): self
    {
        $this->pidm = $pidm;

        return $this;
    }

    public function getRole(): ?string
    {
        return $this->role;
    }

    public function setRole(string $role): self
    {
        $this->role = $role;

        return $this;
    }

    /**
     * @return string
     */
    public function getEmailID(): string
    {
        return $this->emailID;
    }

    /**
     * @param string $emailID
     */
    public function setEmailID(string $emailID): void
    {
        $this->emailID = $emailID;
    }
}
