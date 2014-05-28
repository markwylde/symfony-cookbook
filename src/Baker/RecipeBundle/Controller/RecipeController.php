<?php

namespace Baker\RecipeBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Baker\RecipeBundle\Entity\Recipe;
use Baker\RecipeBundle\Form\RecipeType;

class RecipeController extends Controller
{

    public function listAction()
    {
        $em = $this->getDoctrine()->getManager();

        $recipes = $em->getRepository('BakerRecipeBundle:Recipe')->findAll();

        if (!$recipes) {
            throw $this->createNotFoundException('There are no recipes in the database.');
        }

        return $this->render('BakerRecipeBundle:Recipe:list.html.twig', array(
            'recipes'      => $recipes,
        ));
    }

    public function createAction(Request $request)
    {
        $recipe  = new Recipe();

        $form    = $this->createForm(new RecipeType(), $recipe);

        if ($request->isMethod('POST')) {

            $form->handleRequest($request);

            if ($form->isValid()) {

                $em = $this->getDoctrine()->getManager();
                $em->persist($recipe);
                $em->flush();

                return $this->redirect($this->generateUrl('baker_recipe_list'));

            }
        }

        return $this->render('BakerRecipeBundle:Recipe:create.html.twig', array(
            'comment' => $recipe,
            'form'    => $form->createView()
        ));
    }


    public function readAction($id)
    {
        $entityManager = $this->getDoctrine()->getManager();


        $recipe = $entityManager->getRepository('BakerRecipeBundle:Recipe')->find($id);

        if (!$recipe) {
            throw $this->createNotFoundException('Could not find a recipe with that id.');
        }

        $queryBuilder = $entityManager->createQueryBuilder()
            ->select( array('r.id', 'r.title') )
            ->from('BakerRecipeBundle:Recipe', 'r');

        $recipesList = $queryBuilder->getQuery()->getResult();

        return $this->render('BakerRecipeBundle:Recipe:read.html.twig', array(
            'recipesList'  => $recipesList,
            'recipe'      => $recipe,
        ));
    }




}
