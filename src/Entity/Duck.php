<?php

namespace App\Entity;

use App\FlyWithWings;
use App\Repository\DuckRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=DuckRepository::class)
 */
class Duck extends AbstractDuck
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    public function getId(): ?int
    {
        return $this->id;
    }
}
