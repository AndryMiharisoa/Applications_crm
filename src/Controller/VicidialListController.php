<?php
// src/Controller/VicidialListController.php

namespace App\Controller;

use App\Entity\VicidialList;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class VicidialListController extends AbstractController
{
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    #[Route('/vicidial/list', name: 'vicidial_list_index')]
    public function index(Request $request): Response
    {
        $startDate = $request->query->get('startDate');
        $endDate = $request->query->get('endDate');

        $queryBuilder = $this->entityManager->getRepository(VicidialList::class)->createQueryBuilder('v');

        if ($startDate && $endDate) {
            $queryBuilder
                ->andWhere('(v.entryDate BETWEEN :start AND :end OR v.modifyDate BETWEEN :start AND :end)')
                ->setParameter('start', new \DateTime($startDate))
                ->setParameter('end', (new \DateTime($endDate))->setTime(23, 59, 59));
        }

        $vicidialLists = $queryBuilder->getQuery()->getResult();

        return $this->render('vicidial_list/index.html.twig', [
            'vicidial_lists' => $vicidialLists,
            'startDate' => $startDate,
            'endDate' => $endDate,
        ]);
    }
}