<?php

namespace App\Controller;

use App\Entity\Voiture;
use App\Form\VoitureType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
//pour sauver les donnees
use Doctrine\Persistence\ManagerRegistry;

class VoitureController extends AbstractController
{
    /**
     * @Route("/voiture", name="app_voiture")
     */
    public function index(): Response
    {
        return $this->render('voiture/index.html.twig', [
            'controller_name' => 'VoitureController',
        ]);
    }

    public function success(): Response
    {
        return $this->render('voiture/voituresuccess.html.twig', [
            'controller_name' => 'VoitureController',
        ]);
    }

    /**
     * @Route("/newcar", name="app_newcar")
     */
    public function new(Request $request, ManagerRegistry $doctrine): Response
    {
        $voiture = new Voiture();
        // ...

        $formcar = $this->createForm(VoitureType::class, $voiture);

        $formcar->handleRequest($request);

        //on verifie que le form a bien été envoyé et est valide
        if($formcar->isSubmitted() && $formcar->isValid())
        {
            $task = $formcar->getData();
            $entityManager = $doctrine->getManager();
            $entityManager->persist($task);
            $entityManager->flush();
            return $this->redirectToRoute('voituresuccess');
        }
        
        return $this->renderForm('pilote/pilotesuccess.html.twig', [
            'formcar' => $formcar,
            'controller_name'=>__CLASS__,
        ]);
    }
}
