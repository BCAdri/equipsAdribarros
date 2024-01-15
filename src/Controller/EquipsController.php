<?php
namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class EquipsController extends AbstractController
{
    private $equipos;
    public function __construct($dadesEquips)
    {
        $this->equipos = $dadesEquips->get();
    }
    #[Route('/equips/{codi}', name: 'dades_equip', requirements: ['codi' => '\d+'])]
    public function equips($codi = 1): Response
    {
        $equipBuscar = array_filter($this->equipos, function ($equip) use ($codi) {
            return $equip['codi'] == $codi;
        });
        if ($equipBuscar) {
            $equip = array_shift($equipBuscar);
            return $this->render('teams.html.twig', [
                'equip' => $equip,
            ]);
        } else {
            return $this->render('teams.html.twig', [
                'equip' => NULL
            ]);
        }
    }
}
?>

