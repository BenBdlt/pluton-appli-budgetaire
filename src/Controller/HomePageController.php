<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomePageController extends AbstractController
{
    public function index() {
        return $this->render('Home/index.html.twig');
    }
}