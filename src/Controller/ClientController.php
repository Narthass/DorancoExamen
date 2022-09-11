<?php

namespace App\Controller;



use App\Entity\User;
use App\Entity\Client;
use App\Entity\Contrat;
use App\Form\ClientType;

use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Mailer\MailerInterface;

use Symfony\Component\HttpFoundation\Response;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ClientController extends AbstractController
{
    #[Route('/client/display', name: 'display_client')]
    public function index(ManagerRegistry $doctrine): Response
    {
        $entityManager = $doctrine->getManager();
        $clientRepository = $entityManager->getRepository(Client::class);
        $clients = $clientRepository->findAll();
        
        $alerter = null;
        $entityManager = $doctrine->getManager();



        $userRepository = $entityManager->getRepository(User::class);
        $users = $userRepository->findAll();


        foreach ($users as $user) {
            $alerter = null;
            $userClients = $user->getClients();
            foreach ($userClients as $userClient) {
                $userContrats = $userClient->getContrats();


                foreach ($userContrats as $contrat) {
                    $actuel = new \DateTime('now');
                    $pEcheance = $contrat->getProchaineEcheance();





                    if (date_format($pEcheance, 'd-m-Y') == $actuel->format('d-m-Y')) {
                        if (is_null($alerter) == true) {
                            $alerter = [];
                        }
                        $alerter[] = $contrat;
                    }

                    /* Changement d'échéance*/
                   
                }
            }


           

            // ...


            //Cette route sert à voir quels sont les contrat bientot arrivés à échéance

        }





        return $this->render('index/clients.html.twig', [
            'clients' => $clients,
            'alerter' => $alerter,

        ]);
    }


    #[Route('/client/create', name: 'client_create')]
    public function createClient(ManagerRegistry $doctrine, Request $request): Response
    {
        $entityManager = $doctrine->getManager();
        $client = new Client;
         /** @var \App\Entity\User $user */
         $user=$this->getUser();
         $client->setUser($user);

        $clientForm = $this->createForm(ClientType::class, $client);
        $clientForm->handleRequest($request);
        if ($clientForm->isSubmitted() && $clientForm->isValid()) {



            $entityManager->persist($client);
            $entityManager->flush();
            $this->addFlash(
                'success',
                'Le client a bien été créé !'
            );


            return $this->redirectToRoute('display_client');
        }
        return $this->render('index/dataform.html.twig', [

            'formName' => 'Création du client',
            'dataForm' => $clientForm->createView(),
        ]);
    }

    #[Route('client/delete/{clientId}', name: 'client_delete')]
    public function deleteClient(int $clientId, ManagerRegistry $doctrine)
    {
        $entityManager = $doctrine->getManager();
        $clientRepository = $entityManager->getRepository(Client::class);
        $client = $clientRepository->find($clientId);
        if (!$client) {
            return $this->redirectToRoute('admin_backoffice');
        }
        $entityManager->remove($client);
        $entityManager->flush();
        return $this->redirectToRoute('display_client');
    }

    #[Route('client/update/{clientId}', name: 'client_update')]
    public function updateClient(int $clientId, ManagerRegistry $doctrine, Request $request)
    {
        $entityManager = $doctrine->getManager();
        $clientRepository = $entityManager->getRepository(Client::class);
        $client = $clientRepository->find($clientId);
        if (!$client) {
            return $this->redirectToRoute('admin_backoffice');
        }

        $clientForm = $this->createForm(ClientType::class, $client);
        $clientForm->handleRequest($request);
        if ($clientForm->isSubmitted() && $clientForm->isValid()) {
            //Prix minimum de 1€ pour effectuer la persistance

            $entityManager->persist($client);
            $entityManager->flush();
            $this->addFlash(
                'success',
                'Les informations du client ont bien été mise à jour !'
            );

            //Nous retournons au backoffice Administrateur
            return $this->redirectToRoute('display_client');
        }
        return $this->render('index/dataform.html.twig', [

            'formName' => 'modification du client',
            'dataForm' => $clientForm->createView(),
        ]);
    }






    #[Route('/email', name: 'mail',)]
    public function sendEmail(ManagerRegistry $doctrine, MailerInterface $mailer): Response
    {
        $entityManager = $doctrine->getManager();



        $userRepository = $entityManager->getRepository(User::class);
        $users = $userRepository->findAll();


        foreach ($users as $user) {
            $alerter = null;
            $userClients = $user->getClients();
            foreach ($userClients as $userClient) {
                $userContrats = $userClient->getContrats();


                foreach ($userContrats as $contrat) {
                    $actuel = new \DateTime('now');
                    $pEcheance = $contrat->getProchaineEcheance();





                    if (date_format($pEcheance, 'd-m-Y') == $actuel->format('d-m-Y')) {
                        if (is_null($alerter) == true) {
                            $alerter = [];
                        }
                        $alerter[] = $contrat;
                    }

                    /* Changement d'échéance*/
                    if (date_format($pEcheance, 'd-m-Y') < $actuel->format('d-m-Y')) {
                        $contrat->setProchaineEcheance(clone $contrat->getProchaineEcheance());
                        date_add($contrat->getProchaineEcheance(), $contrat->getFrequencePayement());
                        $contrat->setMontantRestant($contrat->getMontantRestant() + $contrat->getLoyer());
                        $entityManager->persist($contrat);
                        $entityManager->flush();
                    }
                }
            }


            if (is_null($alerter) == false) {
                $userMail = $user->getEmail();
                $email = (new TemplatedEmail())
                    ->from('locationchabotterie@gmail.com')
                    ->to($userMail)
                    //->cc('cc@example.com')
                    //->bcc('bcc@example.com')
                    //->replyTo('fabien@example.com')
                    //->priority(Email::PRIORITY_HIGH)
                    ->subject('Time for Symfony Mailer!')
                    ->htmlTemplate('emails/alerte.html.twig')

                    ->context([
                        'alerte' => $alerter,

                    ]);

                $mailer->send($email);
            }


            // ...


            //Cette route sert à voir quels sont les contrat bientot arrivés à échéance

        }
        return $this->redirectToRoute('display_client');
    }
}
