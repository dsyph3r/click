<?php

namespace Click\GalleryBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('ClickGallery:Default:index.html.twig');
    }
}
