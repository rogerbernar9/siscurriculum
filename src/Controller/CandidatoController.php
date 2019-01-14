<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use App\Entity\Candidato;
use App\Form\CandidatoType;

class CandidatoController extends AbstractController
{
    /**
     * @Route("/candidato", name="candidato")
     * @Template("candidato/index.html.twig")
     */
    public function index(Request $request)
    {
        // vínculo entre a entidade e o form Type
        $candidato = new Candidato();
        $form = $this->createForm(CandidatoType::class, $candidato);
        
        $form->handleRequest($request);
        
        return [
            'form' => $form->createView()
        ];
    }
}
