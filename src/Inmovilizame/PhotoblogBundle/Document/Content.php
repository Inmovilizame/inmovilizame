<?php
namespace Inmovilizame\PhotoblogBundle\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;
use Inmovilizame\PhotoblogBundle\Utils\Utility;

/**
 * @MongoDB\Document(collection="Content")
 * @MongoDB\InheritanceType("SINGLE_COLLECTION")
 * @MongoDB\DiscriminatorField(fieldName="type")
 * @MongoDB\DiscriminatorMap({
 *   "content"="Content",
 *   "page"="Page",
 *   "faq"="Faq",
 *   "blog"="Blog",
 * 	 "photoblog"="Photoblog"
 * })
 */
class Content extends AbstractContent
{
    /** @MongoDB\String */
    protected $title;
	
	/** @MongoDB\String */
    protected $titleSlug;

    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle($title)
    {
        $this->title = $title;
		$this->setTitleSlug($title);
    }
	
	public function getTitleSlug()
    {
        return $this->titleSlug;
    }

    private function setTitleSlug($title)
    {
        $this->titleSlug = Utility::slugize($title);
    }
}