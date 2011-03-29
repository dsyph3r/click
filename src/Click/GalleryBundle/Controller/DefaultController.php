<?php

namespace Click\GalleryBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        
        $manager = $this->get('doctrine.orm.entity_manager');

        // Get the photos
        $photos = $manager->getRepository('Click\GalleryBundle\Entity\Photo')->getPhotos();
        
        return $this->render(
            'ClickGallery:Default:index.html.twig',
            array(
                'photos' => $photos
            )
        );
        
    }
}
