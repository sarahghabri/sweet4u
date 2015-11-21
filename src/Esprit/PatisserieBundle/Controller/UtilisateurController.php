<?php

namespace Esprit\PatisserieBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Esprit\PatisserieBundle\Entity\Utilisateur;

class UtilisateurController extends Controller
{

 public function addAction($name)
    {
       
      $request=$this->get('request_stack')//recuperer un service :entier string caractere objet fichier 
                ->getCurrentRequest();//peut etre l url ou lesvar(iciun objet)iable passés a la requete
        if($request->getMethod()=="POST")
        {
            $type=$request->get('type');
            $cinUtilisateur=$request->get('type');
            $nomUtilisateur=$request->get('type');
            $prenomUtilisateur=$request->get('type');
            $email=$request->get('type');
            $login=$request->get('type');
            $motDePasse=$request->get('type');
            $adresseUtilisateur=$request->get('type');
            $telephone=$request->get('type');
            $valide = '0';
            $dateInscri= date("F j, Y, g:i a");           
            $utilisateur=new utilisateur();
            $model->setLibelle($libelle);
            $model->setPays($pays);
            
            
            $em=$this->getDoctrine()->getManager();
            $em->persist($utilisateur);//iya une entite qui devrer etre persister
            $em->flush();//executer la requete
            return $this->redirectToRoute('esprit_utilisateur_list');
  
        }
        return $this->render('EspritParcBundle:utilisateur:add.html.twig',array());
    }
     
    
      public function deleteAction($name)
    {
        return $this->render('EspritAppHoteBundle:Default:index.html.twig', array('name' => $name));
    }
    

    
    public function updateAction($id)
    {
        return $this->render('EspritAppHoteBundle:Default:index.html.twig', array('id'=> $idUtilisateur));
    }
    

    
    
    public function findAction($name)
    {
        return $this->render('EspritAppHoteBundle:Default:index.html.twig', array());
    }
    
    
    
    public function showAction($name)
    {
        return $this->render('EspritAppHoteBundle:Utilisateur:show.html.twig', array());
    }
    
}
