<?php
namespace App\Controller;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use function Symfony\Component\String\u;

class VynilController
{
    #[Route("/")]
    public function homepage(){
        return new Response("Vynil is a frisbee!!");
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