<?php

namespace OC\PlateformBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class AdvertController extends Controller{
	public function IndexAction(){
		$content = $this
			->get('templating')
			->render('OCPlateformBundle:Advert:index.html.twig',array('nom' => 'Moi'));
		return new Response($content);
	}

	public function viewAction($id){

		return new Response("L'annonce à afficher ".$id);
	}
	
}