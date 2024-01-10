<?php
namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class EquipsController extends AbstractController
{
    private $contactes = array(
        array("codi" => 1, "nom" => "Equip Roig",
        "cicle" =>"DAW","curs" => "22/23","membres"=> array("Elena","Pau","Pepe","Toni")),
        array("codi" => 2, "nom" => "Equip Blau",
        "cicle" =>"DAM","curs" => "22/23","membres"=> array("Vicent","Adri","Jose","Isma")),
        array("codi" => 3, "nom" => "Equip Groc",
        "cicle" =>"ASIX","curs" => "22/23","membres"=> array("Jose","Alex","Javi","Ivan")),
        array("codi" => 4, "nom" => "Equip Vert",
        "cicle" =>"DAW","curs" => "22/23","membres"=> array("Hector","Sergi","Alvaro","Hugo")),
      
    );
      #[Route('/equip/{codi}',name:'dades_equip')]
     
    public function fitxa($codi=1)
    {
        $resultat = array_filter($this->contactes,
        function($contacte) use ($codi)
        {
         return $contacte["codi"] == $codi;   
        });
        if (count($resultat) > 0)
        {
            /*$resposta="";
            $resultat = array_shift($resultat);
            $resposta .= "<ul><li>" .$resultat["nom"] . "</li>" .
            "<li>" .$resultat["cicle"] . "</li>" .
            "<li>" .$resultat["curs"] . "</li></ul>";
            return new Response("<html><body>$resposta</body></html>");*/
            $resultat = array_shift($resultat);
            return $this->render('teams.html.twig', 
            ['equip' => $resultat] );
        }
        else
         return $this->render('teams.html.twig', [
                'equip' => NULL
            ]);
        /*return new Response("No s'ha trobat el codi de l'equip $codi");*/
    }
}
?>