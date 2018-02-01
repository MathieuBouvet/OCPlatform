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

	public function editAction($id, Request $request){
		if($request->isMethod('POST')){
			$request->getSession()->getFlashBag()->add('notice','Annonce bien modifiée');
			$this->redirectToRoute('oc_plateform_view',array('id'=>$id));
		}else{
			return $this->render('OCPlateformBundle:Advert:edit.html.twig',array('id'=>$id));
		}
	}

	public function deleteAction($id){

		return $this->render('OCPlateformBundle:Advert:delete.html.twig',array('id'=>$id));
	}

	public function menuAction(){

		$listAdvert = array(
			array("id" => 2, "title" => "Recherche dev "),
			array("id" => 3, "title" => "Mission dev"),
			array("id" => 8, "title" => "recherche stagiaire")
		);
		return $this->render('OCPlateformBundle:Advert:menu.html.twig',array(
			"listAdvert" => $listAdvert
		));
	}
}