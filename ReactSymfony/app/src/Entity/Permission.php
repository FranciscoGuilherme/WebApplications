<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table(name="permissions")
 * @ORM\Entity(repositoryClass="App\Repository\PermissionRepository")
 */
class Permission
{
    const ALIAS = 'permission';

    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Id()
     * @ORM\Column(type="integer", name="user_id")
     * @ORM\ManyToOne(targetEntity="App\Entity\User")
     */
    private $userId;

    /**
     * @ORM\Id()
     * @ORM\Column(type="integer", name="role_id")
     * @ORM\ManyToOne(targetEntity="App\Entity\Role")
     */
    private $roleId;

    public function getId(): int
    {
        return $this->id;
    }

    public function getUserId(): int
    {
        return $this->userId;
    }

    public function getRoleId(): int
    {
        return $this->roleId;
    }

    public function getFieldsMapped(): array
    {
        return [
            'id AS permissions__id',
            'user_id AS permissions__user_id',
            'role_id AS permissions__role_id'
        ];
    }
}
