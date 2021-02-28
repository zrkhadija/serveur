<?php

namespace App\Entity;

use App\Repository\DoctrineDatabaseCreateRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=DoctrineDatabaseCreateRepository::class)
 */
class DoctrineDatabaseCreate
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
