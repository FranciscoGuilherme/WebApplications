<?php

namespace App\Service;

use Doctrine\ORM\EntityManagerInterface;
use App\Entity\User;

class UserService
{
    /**
     * @var Doctrine\ORM\EntityManagerInterface
     */
    private $entityManager;

    /**
     * @var Doctrine\ORM\EntityManagerInterface
     */
    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    /**
     * @param string $name
     * @param string $email
     * @param string $password
     */
    public function createUser(string $name, string $email, string $password)
    {
        $user = new User();

        $user->setName($name);
        $user->setEmail($email);
        $user->setPassword($password);
        $this->entityManager->persist($user);
        $this->entityManager->flush();
    }
}
