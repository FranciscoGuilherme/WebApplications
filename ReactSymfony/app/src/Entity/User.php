<?php

namespace App\Entity;

use Symfony\Component\Security\Core\User\UserInterface;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table(name="users")
 * @ORM\Entity(repositoryClass="App\Repository\UserRepository")
 */
class User implements UserInterface, \Serializable
{
    const ALIAS = 'user';

    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     * @ORM\OneToMany(targetEntity="App\Entity\Permission", mappedBy="user_id")
     * @ORM\OneToMany(targetEntity="App\Entity\Institution", mappedBy="user_id")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $email;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $password;

    public function getId(): int
    {
        return $this->id;
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

    public function getPassword(): string
    {
        return $this->password;
    }

    public function setPassword(): self
    {
        $this->password = $password;

        return $this;
    }

    public function getFieldsMapped(): array
    {
        return [
            'id AS users__id',
            'name AS users__name',
            'email AS users__email',
            'password AS users__password'
        ];
    }

    public function getRoles(): array
    {
        return [
            'ROLE_USER'
        ];
    }

    public function getSalt() {}

    public function eraseCredentials() {}

    public function serialize()
    {
        return serialize([
            $this->id,
            $this->name,
            $this->email,
            $this->password
        ]);
    }

    public function unserialize($string)
    {
        list{
            $this->id,
            $this->name,
            $this->email,
            $this->password
        } = unserialize($string, ['allowed_classes' => false]);
    }
}
