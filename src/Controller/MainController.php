<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    #[Route('/', name: 'home')]
    public function index(): Response
    {
        // return $this->json([
        //     'message' => 'Welcome to your new controller!',
        //     'path' => 'src/Controller/MainController.php',
        // ]);
        return $this->render('home/index.html.twig');
    }
    /**
     * @Route("/custom/{name?}", name = "custom")
     * @param Request $request
     * @return 
     */
    public function custom(Request $request)
    {
        $name = $request->get(key: 'name');
        
        return $this->render('home/custom.html.twig', [ 'name' => $name ]);

    }
}
