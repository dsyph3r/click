<?php

namespace Click\GalleryBundle\Form;

use Symfony\Component\Form\Form;
use Symfony\Component\Form\TextField;

class GalleryForm extends Form {
    
    protected function configure()
    {
        
        $this->add(new TextField('name', array(
            'max_length' => 100,
        )));
        
    }


}