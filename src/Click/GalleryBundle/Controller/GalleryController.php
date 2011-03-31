<?php

namespace Click\GalleryBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

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
    
    public function galleryAction()
    {
        
        $manager = $this->get('doctrine.orm.entity_manager');

        // Get the photos for this gallery
        $photos = $manager->getRepository('Click\GalleryBundle\Entity\Photo')->getPhotos();
        
        return $this->render(
            'ClickGallery:Gallery:gallery.html.twig',
            array(
                'photos' => $photos
            )
        );
        
    }
    
}
