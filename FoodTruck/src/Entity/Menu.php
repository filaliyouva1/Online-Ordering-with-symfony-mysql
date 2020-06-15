<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\MenuRepository")
 */
class Menu
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Order", inversedBy="menu")
     */
    private $burger;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $fries;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $drink;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getBurger(): ?Order
    {
        return $this->burger;
    }

    public function setBurger(?Order $burger): self
    {
        $this->burger = $burger;

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

    public function getDrink(): ?string
    {
        return $this->drink;
    }

    public function setDrink(?string $drink): self
    {
        $this->drink = $drink;

        return $this;
    }
}
