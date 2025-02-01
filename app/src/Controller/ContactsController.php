<?php

namespace App\Controller;

use App\Entity\Contact;
use App\Form\ContactType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Validator\Validator\ValidatorInterface;

class ContactsController extends Controller {
    #[Route('/contacts', name: 'contacts')]
    public function index(EntityManagerInterface $entityManager, Request $request, ValidatorInterface $validator): Response {
        $contact = new Contact();

        $form = $this->createForm(ContactType::class, $contact);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // tell Doctrine you want to (eventually) save the Product (no queries yet)
            $entityManager->persist($contact);
    
            // actually executes the queries (i.e. the INSERT query)
            $entityManager->flush();
        }

        return $this->render('contacts/index.html.twig', [
            'types' =>  $this->getTypes($entityManager),
            'form' => $form
        ]);
    }
}
