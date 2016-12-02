<?php

namespace LeGenieDePetra\mainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use LeGenieDePetra\mainBundle\Entity\Dette;
use LeGenieDePetra\mainBundle\Form\DetteType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
class DefaultController extends Controller
{

    public function indexAction()
    {
        return $this->render('LeGenieDePetramainBundle:Default:index.html.twig');
    }
	
	/**
	* @Security("has_role('ROLE_USER')")
	**/
	public function voirdettesAction()
    {
        return $this->render('LeGenieDePetramainBundle:Default:index.html.twig');
    }
	
	/**
	* @Security("has_role('ROLE_USER')")
	**/	
	public function voirpretsAction()
    {
        return $this->render('LeGenieDePetramainBundle:Default:index.html.twig');
    }
	
	/**
	* @Security("has_role('ROLE_USER')")
	**/
	public function ajouterdetteAction(Request $request)
    {	
        $dette = new Dette();		
		$form   = $this->get('form.factory')->create(DetteType::class, $dette);
				

		if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) 
		{
			$em = $this->getDoctrine()->getManager();
			$dette->setUser($this->getUser());
			$em->persist($dette);
			$em->flush();
			$request->getSession()->getFlashBag()->add('notice', 'Dette bien enregistrée.');
			return $this->redirectToRoute('ajouter_dette');

		}


		return $this->render('LeGenieDePetramainBundle:Default:formulaire.html.twig', array('form' => $form->createView(), ));
    }
	
	/**
	* @Security("has_role('ROLE_USER')")
	**/
	public function ajouterpretAction()
    {

    }
	
	/**
	* @Security("has_role('ROLE_USER')")
	**/
	public function indexuserAction()
    {
        return $this->render('LeGenieDePetramainBundle:Default:index.html.twig');
    }
}
