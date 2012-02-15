<?php
namespace Inmovilizame\PhotoblogBundle\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;

/** @MongoDB\Document */
class Blog extends Page
{
    /** @MongoDB\Collection */
    private $tags = array();

    /** @MongoDB\String */
    private $excerpt;

    public function addTag($tag)
    {
        $this->tags[] = $tag;
    }

    public function removeTag($tag)
    {
        $key = array_search($tag, $this->tags);
        if ($key !== false) {
            unset($this->tags[$key]);
        }
    }

    public function getTags()
    {
        return $this->tags;
    }
    
    public function setTags($tags)
    {
        if (is_array($tags))
        {
            $this->tags = $tags;
        }
        elseif (is_string($tags)) 
        {
            $tags = str_replace(' ', '', $tags);
            $tags = explode(',', $tags);
            $this->tags = $tags;
        }
        else 
        {
            $this->tags = array();
        }
    }
    
    public function getExcerpt()
    {
        return $this->excerpt;
    }

    public function setExcerpt($excerpt)
    {
        $this->excerpt = $excerpt;
    }
}