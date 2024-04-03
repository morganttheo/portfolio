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
class PortfolioController extends AbstractController{
    
    /**
     * 
     * @return Response
     */
    public function index(): Response{
        return $this->render("pages/portfolio.html.twig");
    }
    
    /**
     * 
     * @return Response
     */
    public function afficheProjet1(): Response{
        return $this->render("pages/projet1.html.twig");
    }
    /**
     * 
     * @return Response
     */
    public function afficheStage2(): Response{
        return $this->render("pages/stage2.html.twig");
    }
    /**
     * 
     * @return Response
     */
    public function afficheStage1(): Response{
        return $this->render("pages/stage1.html.twig");
    }
}
