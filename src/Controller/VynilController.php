<?php
namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use function Symfony\Component\String\u;

class VynilController extends AbstractController
{
    #[Route("/")]
    public function homepage(){
        $tracks=[['song' =>'track 1', 'artist' => 'artist 1'],['song' =>'track 2', 'artist' => 'artist 1'],['song' =>'track 1', 'artist' => 'artist 1'],['song' =>'track 1', 'artist' => 'artist 1'],['song' =>'track 1', 'artist' => 'artist 1'],['song' =>'track 1', 'artist' => 'artist 1']];
        return $this -> render('vynil/homepage.html.twig',['title'=> 'PB & Jams','tracks'=>$tracks]);
    }


    #[Route('/browse/{slug}')]//slug is url safe name
    public function browse($slug = null){
        if($slug){
         $title = 'Genre: '.u(str_replace("-"," ", $slug))->title(true);  
            
        }else{$title="All genre";
        }
        return new Response($title);
    }
}