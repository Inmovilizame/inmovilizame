<?php
namespace Inmovilizame\PhotoblogBundle\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;

/** @MongoDB\Document */
class Faq extends Page
{
    /** @MongoDB\String */
    private $excerpt;

    public function getExcerpt()
    {
        return $this->excerpt;
    }

    public function setExcerpt($excerpt)
    {
        $this->excerpt = $excerpt;
    }
}
