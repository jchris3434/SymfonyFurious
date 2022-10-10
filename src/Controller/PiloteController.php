<?php

namespace App\Controller;

use App\Entity\Pilote;
use App\Form\PiloteRegisterType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
//pour sauver les donnees
use Doctrine\Persistence\ManagerRegistry;

class PiloteController extends AbstractController
{
    public function success(): Response
    {
        return $this->render('pilote/pilotesuccess.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }


    /**
     * @Route("/newpilote", name="app_pilotenew")
     */
    public function new(Request $request, ManagerRegistry $doctrine): Response
    {
        $pilote = new Pilote(); // va créer une nouvelle ligne dans la table/entity Pilote
        // ...

        $form = $this->createForm(PiloteRegisterType::class, $pilote); //va utiliser le Form dont on a besoin

        $form->handleRequest($request); 

        //on verifie que le form a bien été envoyé et est valide
        if($form->isSubmitted() && $form->isValid())
        {
            $task = $form->getData();
            $entityManager = $doctrine->getManager();
            $entityManager->persist($task);//prepare l'envoi vers la base de donnee
            $entityManager->flush();//on finalise l'envoi vers la base de donnéee
            return $this->redirectToRoute('newpilotesuccess');//on lui donne la route a afficher en cas de succes
        }

        //sinon on affiche la page avec le formulaire a remplir
        return $this->renderForm('pilote/newpilote.html.twig', [
            'form' => $form,
            'controller_name'=>__CLASS__,
        ]);
    }
}
