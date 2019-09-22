<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table(name="institutions")
 * @ORM\Entity(repositoryClass="App\Repository\InstitutionRepository")
 */
class Institution
{
    const ALIAS = 'institution';

    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="inteter")
     * @ORM\OneToMany(targetEntity="App\Entity\Course", mappedBy="institution_id")
     */
    private $id;

    /**
     * @ORM\Id()
     * @ORM\Column(type="integer", name="user_id")
     * @ORM\ManyToOne(targetEntity="App\Entity\User")
     */
    private $userId;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $name;

    /**
     * @ORM\Column(type="int")
     */
    private $cnpj;

    public function getId(): int
    {
        return $this->id;
    }

    public function getUserId(): int
    {
        return $this->userId;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return self;
    }

    public function getCnpj(): int
    {
        return $this->cnpj;
    }

    public function setCnpj(int $cnpj): self
    {
        $this->cnpj = $cnpj;

        return $this;
    }

    public function getFieldsMapped(): array
    {
        return [
            'id AS institutions__id',
            'user_id AS institutions__user_id',
            'name AS institutions__name',
            'cnpj AS institutions__cnpj'
        ];
    }
}
