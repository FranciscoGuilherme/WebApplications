<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table(name="courses")
 * @ORM\Entity(repositoryClass="App\Repository\CourseRepository")
 */
class Course
{
    const ALIAS = 'course';

    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     * @ORM\OneToMany(targetEntity="App\Entity\Registration", mappedBy="course_id")
     */
    private $id;

    /**
     * @ORM\Id()
     * @ORM\Column(type="integer", name="institution_id")
     * @ORM\ManyToOne(targetEntity="App\Entity\Institution")
     */
    private $institutionId;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $name;

    /**
     * @ORM\Column(type="int")
     */
    private $duration;

    /**
     * @ORM\Column(type="boolean")
     */
    private $status;

    public function getId(): int
    {
        return $this->id;
    }

    public function getInstitutionId(): int
    {
        return $this->institutionId;
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

    public function getDuration(): int
    {
        return $this->duration;
    }

    public function setDuration(int $duration): self
    {
        $this->duration = $duration;

        return $this;
    }

    public function getStatus(): bool
    {
        return $this->status;
    }

    public function setStatus(bool $status): self
    {
        $this->status = $status;

        return $this;
    }

    public function getFieldsMapped(): array
    {
        return [
            'id AS courses__id',
            'institution_id AS courses__institution_id',
            'name AS courses__name',
            'duration AS courses__duration',
            'status AS courses__status'
        ];
    }
}
