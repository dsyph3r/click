<?php

namespace Click\GalleryBundle\Entity;

/**
 * Click\GalleryBundle\Entity\Gallery
 */
class Gallery
{
    /**
     * @var integer $id
     */
    private $id;

    /**
     * @var string $url
     */
    private $url;

    /**
     * @var string $name
     */
    private $name;

    /**
     * @var string $description
     */
    private $description;

    /**
     * @var datetime $createdAt
     */
    private $createdAt;

    /**
     * @var datetime $updatedAt
     */
    private $updatedAt;


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
     * Set url
     *
     * @param string $url
     */
    public function setUrl($url)
    {
        $this->url = $url;
    }

    /**
     * Get url
     *
     * @return string $url
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set name
     *
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
        
        $this->setUrl($this->name);
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
     * Set description
     *
     * @param string $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * Get description
     *
     * @return string $description
     */
    public function getDescription()
    {
        return $this->description;
    }

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
     * @var Click\GalleryBundle\Entity\Photo
     */
    private $photos;

    public function __construct()
    {
        $this->photos = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Add photos
     *
     * @param Click\GalleryBundle\Entity\Photo $photos
     */
    public function addPhotos(\Click\GalleryBundle\Entity\Photo $photos)
    {
        $this->photos[] = $photos;
    }

    /**
     * Get photos
     *
     * @return Doctrine\Common\Collections\Collection $photos
     */
    public function getPhotos()
    {
        return $this->photos;
    }
    
}