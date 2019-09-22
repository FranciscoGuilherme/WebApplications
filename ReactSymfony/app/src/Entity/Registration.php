<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table(name="registration")
 * @ORM\Entity(repositoryClass="App\Repository\RegistrationRepository")
 */
class Registration
{
    const ALIAS = 'registration';

    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Id()
     * @ORM\Column(type="integer", name="course_id")
     * @ORM\ManyToOne(targetEntity="App\Entity\Course")
     */
    private $courseId;

    /**
     * @ORM\Id()
     * @ORM\Column(type="integer", name="student_id")
     * @ORM\ManyToOne(targetEntity="App\Entity\Student")
     */
    private $studentId;

    public function getId(): int
    {
        return $this->id;
    }

    public function getCourseId(): int
    {
        return $this->courseId;
    }

    public function getStudentId(): int
    {
        return $this->studentId;
    }

    public function getFieldsMapped(): array
    {
        return [
            'id AS registration__id',
            'course_id AS registration__course_id',
            'student_id AS registration__student_id'
        ];
    }
}
