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
    
    public function newAction() {
        
        $form = GalleryForm::create($this->get('form.context'), 'gallery');
    
        $form->bind($this->get('request'));
    
        // If the form has been submitted and is valid...
        if ($form->isValid()) {
        }
    
        // Display the form 
        return $this->render(
            'ClickGallery:Gallery:new.html.twig',
            array(
                'form' => $form
            )
        );
        
    }
}
