<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController{

    public function bonjour ()
    {
        return new Response("Hello World !");
    }

    public function aurevoir ()
    {
        return $this->redirectToRoute('accueil');
    }

    public function reLinkedin()
    {
        return $this->redirect('https://www.linkedin.com/');
    }

    public function showtemplate()
    {
        return $this->render('base.html.twig',[]);
    }

    #[Route('/customers', name:'customers_list')]
    public function showCustoomers()
    {
        $customers=['Laurent','fabrice','Erwan','Steph','Lola'];
            return $this -> render('customer.html.twig',['customers'=>$customers]);
    }

    #[Route('/pages',name:'pages')]
    public function getPages()
    {
        return $this->render('page.html.twig',[]);
    }

}