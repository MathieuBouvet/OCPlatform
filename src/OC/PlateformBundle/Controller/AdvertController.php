<?php

namespace OC\PlateformBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class AdvertController extends Controller{

	public function IndexAction($page){
		if($page < 1){
			throw new NotFoundHttpException('Page '.$page." inexistante");
		}else{
			return $this->render('OCPlateformBundle:Advert:index.html.twig',array('nom'=>'Moi'));
		}
	}

	public function viewAction($id, Request $request){

		$tag = $request->query->get('tag');
		return $this->render('OCPlateformBundle:Advert:view.html.twig',array(
			'id' => $id,
			'tag' => $tag
		));
	}

	public function addAction(Request $request){
		if($request->isMethod('POST')){
			$session = $request->getSession();
			$session->getFlashBag()->add('info',"annonce enregistrée");
			$session->getFlashBag()->add('info',"deuxieme message pour confirmation");
			return $this->redirectToRoute('oc_plateform_view',array('id'=>5));

		}else{
			return $this->render('OCPlateformBundle:Advert:add.html.twig');
		}


	}
}