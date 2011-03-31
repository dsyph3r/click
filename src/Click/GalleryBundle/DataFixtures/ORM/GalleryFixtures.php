<?php

namespace Click\GalleryBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Click\GalleryBundle\Entity\Gallery;
use Click\GalleryBundle\Entity\Photo;

class GalleryFixtures implements FixtureInterface
{
    public function load($manager)
    {
        
        // Gallery Fixtures
        $space = new Gallery();
        $space->setName("Space");
        $space->setDescription("Various images of space");
        $manager->persist($space);
        $this->loadGalleryPhotos($space, $manager);
        
        $landscape = new Gallery();
        $landscape->setName("Landscape");
        $landscape->setDescription("Random images of the land");
        $manager->persist($landscape);
        $this->loadGalleryPhotos($landscape, $manager);
        
        $wales = new Gallery();
        $wales->setName("Wales");
        $wales->setDescription("Wales, UK. Country of bith");
        $manager->persist($wales);
        $this->loadGalleryPhotos($wales, $manager);
        
        $people = new Gallery();
        $people->setName("People");
        $people->setDescription("Random images of people");
        $manager->persist($people);
        $this->loadGalleryPhotos($people, $manager);
        
        $manager->flush();
        
    }
    
    private function loadGalleryPhotos(Gallery $gallery, $manager) {
        
        // TODO: Can we get this path from Symfony?
        $sampleDir = dirname(__FILE__)."/../../Resources/public/images/sample/".strtolower($gallery->getName());

        // Check directory exists
        if (!file_exists($sampleDir))
            return;
        
        // Get list of images
        $images = scandir($sampleDir);
        // Remove the . and .. entries
        $images = array_splice($images, 2);
        
        // Load in the photos
        foreach ($images as $image) {
            
            $photo = new Photo();
            $photo->setName($image);
            $photo->setGallery($gallery);
            
            $manager->persist($photo);
        }
        
        
    }
}
