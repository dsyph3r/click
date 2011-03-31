<?php

namespace Click\GalleryBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Click\GalleryBundle\Form\GalleryForm;

class GalleryController extends Controller
{
    public function indexAction()
    {
        
        $manager = $this->get('doctrine.orm.entity_manager');

        // Get the galleries
        $galleries = $manager->getRepository('Click\GalleryBundle\Entity\Gallery')->getGalleries();
        
        return $this->render(
            'ClickGallery:Gallery:index.html.twig',
            array(
                'galleries' => $galleries
            )
        );
        
    }
    
}
