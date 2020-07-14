<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Contracts\Translation\TranslatorInterface;

class HomepageController extends AbstractController
{

    private $translator;

    public function __construct(TranslatorInterface $translator)
    {
        $this->translator = $translator;
    }


    /**
     * @Route("/", name="homepage")
     */
    public function index()
    {
        return $this->render('homepage/index.html.twig', [
            'pagetitle' => ucfirst($this->translator->trans('homepage.title')),
        ]);
    }


    /**
     * @Route({"fr": "/contact", "en": "/contact"}, name="contact")
     */
    public function contact()
    {
        return $this->render( 'contact/index.html.twig',
            [
                'pagetitle' => ucfirst($this->translator->trans('contact.title')),
            ] );
    }
}
