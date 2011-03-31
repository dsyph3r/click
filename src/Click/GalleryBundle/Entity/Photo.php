<?php

namespace Click\GalleryBundle\Entity;

/**
 * Click\GalleryBundle\Entity\Photo
 */
class Photo
{
    /**
     * @var integer $id
     */
    private $id;

    /**
     * @var string $name
     */
    private $name;


    /**
     * Get id
     *
     * @return integer $id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * Get name
     *
     * @return string $name
     */
    public function getName()
    {
        return $this->name;
    }
    /**
     * @var Click\GalleryBundle\Entity\Gallery
     */
    private $gallery;


    /**
     * Set gallery
     *
     * @param Click\GalleryBundle\Entity\Gallery $gallery
     */
    public function setGallery(\Click\GalleryBundle\Entity\Gallery $gallery)
    {
        $this->gallery = $gallery;
    }

    /**
     * Get gallery
     *
     * @return Click\GalleryBundle\Entity\Gallery $gallery
     */
    public function getGallery()
    {
        return $this->gallery;
    }
    
    public function touchCreated()
    {
        $this->createdAt = $this->updatedAt = new \DateTime();     
    }

    public function touchUpdated()
    {
        $this->updatedAt = new \DateTime();
        $str = sprintf('P%sD',$this->active_days);
        $date = new \DateTime('now');        
        $this->setExpiresAt($date->add(new \DateInterval($str)));        
    }
    
    /**
     * @var datetime $createdAt
     */
    private $createdAt;

    /**
     * @var datetime $updatedAt
     */
    private $updatedAt;


    /**
     * Set createdAt
     *
     * @param datetime $createdAt
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;
    }

    /**
     * Get createdAt
     *
     * @return datetime $createdAt
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set updatedAt
     *
     * @param datetime $updatedAt
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;
    }

    /**
     * Get updatedAt
     *
     * @return datetime $updatedAt
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }
}