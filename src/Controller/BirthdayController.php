<?php

namespace App\Controller;

use App\Entity\Birthday;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Bundle\MakerBundle\Validator;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/api')]
class BirthdayController extends AbstractController
{
    #[Route('/birthday', name: 'app_birthday')]
    public function index(EntityManagerInterface $em): Response
    {
        $birthdays = $em->getRepository(Birthday::class)->findAll();
        return $this->json([
            "data" => $birthdays,
        ]); 

        //faire les routes pour ajout, suppression, update, affichage de tt, affichage de 1. 

    }
}