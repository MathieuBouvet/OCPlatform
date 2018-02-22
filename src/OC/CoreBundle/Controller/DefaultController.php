<?php

namespace OC\CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    public function indexAction()
    {
    	/**
    	 * Données de tests, normalement récupérées en BDD...
    	 * @var array
    	 */
    	$listAdvert = array(
    		array(
    			'title' => "Recherche développpeur Symfony",
    			'id' => "1",
    			'author' => "Alexandre",
    			'content' => "Nous recherchons un développeur Symfony débutant sur Lyon. Blabla…'",
    			'date' => new \DateTime()
    		),
    		array(
    			'title' => "Mission de webmaster",
    			'id' => "2",
    			'author' => "Hugo",
    			'content' => "Nous recherchons un webmaster capable de maintenir notre site internet. Blabla…",
    			'date' => new \DateTime()
    		),
    		array(
    			'title' => "Offre de stage webdesigner",
    			'id' => "3",
    			'author' => "Mathieu",
    			'content' => "Nous proposons un poste pour webdesigner. Blabla…",
    			'date' => new \DateTime()
    		),
    		array(
    			'title' => "Recherche clés",
    			'id' => "4",
    			'author' => "Mathieu",
    			'content' => "Nous cherchons désespérement les clés du mystère au chocolat, bien qu'elle soient probablement dans le chocolat et donc inaxessibles.",
    			'date' => new \DateTime()
    		)
    	);
    	//$listAdvert = array(); // Cas d'une liste vide
        return $this->render('OCCoreBundle:Default:index.html.twig',array('adverts'=>$listAdvert));
    }

    public function ContactAction(Request $request){
    	$request->getSession()->getFlashBag()->add('info', "La page de contact n'est pas encore disponible.");
    	return $this->redirectToRoute('oc_core_homepage');
    }
}
