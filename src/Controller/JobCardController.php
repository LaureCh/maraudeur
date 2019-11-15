<?php

namespace App\Controller;

use App\Entity\JobCard;
use App\Form\JobCardType;
use App\Repository\JobCardRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/job/card")
 */
class JobCardController extends AbstractController
{
    /**
     * @Route("/", name="job_card_index", methods={"GET"})
     */
    public function index(JobCardRepository $jobCardRepository): Response
    {
        return $this->render('job_card/index.html.twig', [
            'job_cards' => $jobCardRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="job_card_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $jobCard = new JobCard();
        $form = $this->createForm(JobCardType::class, $jobCard);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($jobCard);
            $entityManager->flush();

            return $this->redirectToRoute('job_card_index');
        }

        return $this->render('job_card/new.html.twig', [
            'job_card' => $jobCard,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="job_card_show", methods={"GET"})
     */
    public function show(JobCard $jobCard): Response
    {
        return $this->render('job_card/show.html.twig', [
            'job_card' => $jobCard,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="job_card_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, JobCard $jobCard): Response
    {
        $form = $this->createForm(JobCardType::class, $jobCard);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('job_card_index');
        }

        return $this->render('job_card/edit.html.twig', [
            'job_card' => $jobCard,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="job_card_delete", methods={"DELETE"})
     */
    public function delete(Request $request, JobCard $jobCard): Response
    {
        if ($this->isCsrfTokenValid('delete'.$jobCard->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($jobCard);
            $entityManager->flush();
        }

        return $this->redirectToRoute('job_card_index');
    }
}
