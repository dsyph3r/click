<?php

namespace Click\GalleryBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Click\GalleryBundle\Form\PhotoForm;

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
    
    public function uploadAction()
    {
        
        //$photoRequest = new PhotoRequest();
        $form = PhotoForm::create($this->get('form.context'), 'photo');
    
        // If a POST request, write the submitted data into $contactRequest
        // and validate the object
        $form->bind($this->get('request'));
    
        // If the form has been submitted and is valid...
        if ($form->isValid()) {
            //$contactRequest->send();
        }
    
        // Display the form with the values in $contactRequest
        return $this->render(
            'ClickGallery:Default:upload.html.twig',
            array(
                'form' => $form
            )
        );

    }
}
