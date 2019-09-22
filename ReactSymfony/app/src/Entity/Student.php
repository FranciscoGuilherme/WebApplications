<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table(name="students")
 * @ORM\Entity(repositoryClass="App\Repository\StudentRepository")
 */
class Student
{
    const ALIAS = 'student';

    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="int")
     */
    private $cpf;

    /**
     * @ORM\Column(type="int", name="phone_ddd")
     */
    private $phoneDdd;

    /**
     * @ORM\Column(type="", name="phone_number")
     */
    private $phoneNumber;

    /**
     * @ORM\Column(type="int", name="address_number")
     */
    private $addressNumber;

    /**
     * @ORM\Column(type="int")
     */
    private $address;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $neighborhood;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $city;

    /**
     * @ORM\Column(type="string", length=2)
     */
    private $uf;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $email;

    /**
     * @ORM\Column(type="datetime", name="birth_date")
     */
    private $birthDate;

    /**
     * @ORM\Column(type="boolean")
     */
    private $status;

    public function getId(): int
    {
        return $this->id;
    }

    public function getCpf(): int
    {
        return $this->cpf;
    }

    public function setCpf(int $cpf): self
    {
        $this->cpf = $cpf;

        return $this;
    }

    public function getPhoneDdd(): int
    {
        return $this->phoneDdd;
    }

    public function setPhoneDdd(int $phoneDdd): self
    {
        $this->phoneDdd = $phoneDdd;

        return $this;
    }

    public function getPhoneNumber(): int
    {
        return $this->phoneNumber;
    }

    public function setPhoneNumber(int $phoneNumber): self
    {
        $this->phoneNumber = $phoneNumber;

        return $this;
    }

    public function getAddressNumber(): int
    {
        return $this->addressNumber;
    }

    public function setAddressNumber(int $addressNumber): self
    {
        $this->addressNumber = $addressNumber;

        return $this;
    }

    public function getAddress(): string
    {
        return $this->address;
    }

    public function setAddress(string $address): self
    {
        $this->address = $address;

        return $this;
    }

    public function getNeighborhood(): string
    {
        return $this->neighborhood;
    }

    public function setNeighborhood(string $neighborhood): self
    {
        $this->neighborhood = $neighborhood;

        return $this;
    }

    public function getCity(): string
    {
        return $this->city;
    }

    public function setCity(string $city): self
    {
        $this->city = $city;

        return $this;
    }

    public function getUf(): string
    {
        return $this->uf;
    }

    public function setUf(string $uf): self
    {
        $this->uf = $uf;

        return $this;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getBirthDate(): \DateTime
    {
        return $this->birthDate;
    }

    public function setBirthDate(\DateTime $birthDate): self
    {
        $this->birthDate = $birthDate;

        return $this;
    }

    public function getStatus(): boolean
    {
        return $this->status;
    }

    public function setStatus(boolean $status): self
    {
        $this->status = $status;

        return $this;
    }

    public function getFieldsMapped(): array
    {
        return [
            'id AS student__id',
            'cpf AS student__cpf',
            'phone_ddd AS student__phone_ddd',
            'phone_number AS student__phone_number',
            'address_number AS student__address_number',
            'address AS student__address',
            'neighborhood AS student__neighborhood',
            'city AS student__city',
            'uf AS student__uf',
            'name AS student__name',
            'email AS student__email',
            'birth_date AS student__birth_date',
            'status AS student__status'
        ];
    }
}
