<?php

namespace OC\PlateformBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class AdvertController extends Controller{
	public function IndexAction($page){
		$content = $this
			->get('templating')
			->render('OCPlateformBundle:Advert:index.html.twig',array('nom' => 'Moi'));
		return new Response($content."<div> La page : ".$page." </div>");
	}

	public function viewAction($id, Request $request){

		$tag = $request->query->get('tag');
		return $this->render('OCPlateformBundle:Advert:view.html.twig',array(
			'id' => $id,
			'tag' => $tag
		));
	}

	public function viewSlugAction($year,$slug,$_format){

		return new Response("<body>On afficherait l'annonce datant de l'année ".$year.", ayant le nom ".$slug.".".$_format."</body>");
	}

	public function addAction(Request $request){
		$session = $request->getSession();
		$session->getFlashBag()->add('info',"annonce enregistrée");
		$session->getFlashBag()->add('info',"deuxieme message pour confirmation");

		return new Response($this->render('OCPlateformBundle:Advert:add.html.twig'));
	}
}