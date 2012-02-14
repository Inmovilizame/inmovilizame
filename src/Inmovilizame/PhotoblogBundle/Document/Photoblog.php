<?php
namespace Inmovilizame\PhotoblogBundle\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;

/** @MongoDB\Document */
class Photoblog extends Blog
{
    /** @MongoDB\Collection */
    private $images = array();
    
    public function addImage($image)
    {
        $this->images[] = $image;
    }

    public function removeImage($image)
    {
        $key = array_search($image, $this->images);
        if ($key !== false) {
            unset($this->images[$key]);
        }
    }

    public function getImages()
    {
        return $this->images;
    }
    
    public function setImages($images)
    {
        if (is_array($images))
        {
            $this->images = $images;
        }
        else 
        {
            $this->images = array();
        }
    }
}
