<?php


namespace App\Controller;


use App\Entity\Order;
use App\Entity\Test;
use App\Form\OrderClientsType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;


class OrderClientsController extends AbstractController
{

    public function Order(Request $request, \Swift_Mailer $mailer)
    {
        $order = new Test();
        $form = $this->createForm(OrderClientsType::class, $order);
        //$var = $request->request;
        //dd($var);
        $form->handleRequest($request);

        //dd($form->getData());
        if ($form->isSubmitted() && $form->isValid()) {

            $data = $form->getData();
            //dd($data);
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($data);
            $entityManager->flush();

            $this->email($order, $mailer );

            return $this->render('Order/confirmation.html.twig');

        }

        return $this->render('Order/order_clients.html.twig', array(
            'form' => $form->createView(),
        ));
    }

    public function email($order, \Swift_Mailer $mailer)
    {

        $message = (new \Swift_Message('Votre commande !'))
            ->setFrom('achrafbakkari2014@gmail.com')
            ->setTo($order->getEmail())
            ->setBody(
                $this->renderView('Order/Emails/email.html.twig', [
                        'name' => $order->getFirstname(),
                        'burger' => $order->getBurger(),
                        'drink' => $order->getDrink(),
                        'fries' => $order->getFries()
                ])
            )
        ;

        $mailer->send($message);

    }


}