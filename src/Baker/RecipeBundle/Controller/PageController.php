<?php

namespace Baker\RecipeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PageController extends Controller
{
    public function aboutAction()
    {
        return $this->render('BakerRecipeBundle:Page:about.html.twig');
    }
}
