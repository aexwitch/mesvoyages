<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Description of AcceuilController
 *
 * @author Campus Numerique
 */
class AcceuilController {
    #[Route('/', name: 'accueil')]
    public function index(): Response{
        return new Response('Hello world, Girl like me');
    }
    
}
