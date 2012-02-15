<?php
namespace Inmovilizame\PhotoblogBundle\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;

/** @MongoDB\Document */
class Page extends Content
{
    /** @MongoDB\String */
    protected $body;

    public function getBody()
    {
        return $this->body;
    }

    public function setBody($body)
    {
        $this->body = $body;
    }
}
