<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeController extends AbstractController {

    /**
     * Montre la page qui dit bonjour
     * @Route("/hello/{prenom}/{age}", name="hello")
     * @Route("/hello" , name="hello_base")
     * @return void
     */
    public function hello($prenom = "anonyme", $age=0){
        return new Response("bonjour" . $prenom . "vous avez" . $age);
    
    }
    

        /**
         * @Route("/", name="homepage")
         */
        public function home(){
            $prenoms = ["Lior" => 31, "Joseph"=>12, "Anne0 =>55"];
            return $this->render(
                'home.html.twig',
                [
                    'title'=> "aurevoir tout le monde",
                    'age'=>12,
                    'tableau'=>$prenoms
                ]
            );
    }
}
?>