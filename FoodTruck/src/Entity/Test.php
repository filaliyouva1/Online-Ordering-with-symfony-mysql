<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\TestRepository")
 */
class Test
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
    private $firstname;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $lastname;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $email;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $burger;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $drink;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $fries;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $deliverytime;

    /**
     * @ORM\Column(type="array", nullable=true)
     */
    private $menus = [];


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFirstname(): ?string
    {
        return $this->firstname;
    }

    public function setFirstname(string $firstname): self
    {
        $this->firstname = $firstname;

        return $this;
    }

    public function getLastname(): ?string
    {
        return $this->lastname;
    }

    public function setLastname(string $lastname): self
    {
        $this->lastname = $lastname;

        return $this;
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

    public function getBurger(): ?string
    {
        return $this->burger;
    }

    public function setBurger(string $burger): self
    {
        $this->burger = $burger;

        return $this;
    }

    public function getDrink(): ?string
    {
        return $this->drink;
    }

    public function setDrink(?string $drink): self
    {
        $this->drink = $drink;

        return $this;
    }

    public function getFries(): ?string
    {
        return $this->fries;
    }

    public function setFries(?string $fries): self
    {
        $this->fries = $fries;

        return $this;
    }

    public function getDeliverytime(): ?string
    {
        return $this->deliverytime;
    }

    public function setDeliverytime(?string $deliverytime): self
    {
        $this->deliverytime = $deliverytime;

        return $this;
    }

    public function getMenus(): ?array
    {
        return $this->menus;
    }

    public function setMenus(?array $menus): self
    {
        $this->menus = $menus;

        return $this;
    }
}
