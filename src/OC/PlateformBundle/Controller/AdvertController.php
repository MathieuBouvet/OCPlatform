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

	public function ByeAction(){
		$content = $this
			->get('templating')
			->render('OCPlateformBundle:ADvert:bye.html.twig');
		return new Response($content);
		
	}
}