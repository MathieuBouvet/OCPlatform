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

		return new Response("L'annonce à afficher : ".$id);
	}

	public function viewSlugAction($year,$slug,$_format){

		return new Response("<body>On afficherait l'annonce datant de l'année ".$year.", ayant le nom ".$slug.".".$_format."</body>");
	}
	
}