<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Route;

/**
 * Description of PortfolioController
 *
 * @author theom
 */
class VeilleController extends AbstractController{
    
    /**
     * 
     * @return Response
     */
    public function index(): Response{
        return $this->render("pages/veille.html.twig");
    }
}