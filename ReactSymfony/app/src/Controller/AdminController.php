<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Service\UserService;

class AdminController extends AbstractController
{
    /**
     * @var App\Service\UserService;
     */
    private $userService;

    /**
     * @var App\Service\UserService;
     */
    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    /**
     * @Route("/admin/user/create", name="create-user")
     */
    public function createUser(Request $request): Response
    {
        var_dump($request->getContent());
        //$this->userService->createUser('', '', '');
    }
}
