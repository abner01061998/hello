<?php

namespace Acme\HelloBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class HelloController extends Controller
{
    public function holaAction($name,$name2)
    {
    	$response = new Response(json_encode(array('name' => $name)));
		$response->headers->set('Content-Type', 'application/json');
		$response = new Response('Hello '.$name, Response::HTTP_CREATED);
		
        return $this->render('AcmeHelloBundle:Default:index.html.twig', array('name' => $name,'name2'=>$name2));
    }

    public function holaAlrevezAction($name,$name2 ,$Apellido)
    {
    	$response = new Response(json_encode(array('name' => $name)));
		$response->headers->set('Content-Type', 'application/json');
		$response = new Response('Hello '.$name, Response::HTTP_CREATED);

        return $this->render('AcmeHelloBundle:Default:index.html.twig', array('name' => $name2,'name2'=>$name ,'Apellido'=>$Apellido));
    }
}
