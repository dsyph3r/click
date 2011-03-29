<?php

namespace Click\GalleryBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface,
    Click\GalleryBundle\Entity\Photo,
    Click\GalleryBundle\Entity\Gallery;

class PhotoFixtures implements FixtureInterface
{
    public function load($manager)
    {
        
        // TODO: Can we get this path from Symfony?
        $sampleDir = dirname(__FILE__)."/../../Resources/public/images/sample";

        // Get list of images
        $images = scandir($sampleDir);
        // Remove the . and .. entries
        $images = array_splice($images, 2);
        
        // Load in the photos
        foreach ($images as $image) {
            
            $photo = new Photo();
            $photo->setName($image);
            
            $manager->persist($photo);
        }  
        
        $manager->flush();
        
    }
}
