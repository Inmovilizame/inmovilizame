<?php
namespace Inmovilizame\PhotoblogBundle\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;

/** 
 * @MongoDB\MappedSuperclass
 */
abstract class AbstractContent
{
	/** @MongoDB\Id */
    protected $id;

    /** @MongoDB\Date */
    protected $created;

    /** @MongoDB\Date */
    protected $updated;

    public function getId()
    {
        return $this->id;
    }

    /** @MongoDB\PreUpdate */
    public function preUpdate()
    {
        $this->updated = new DateTime();
    }

    /** @@MongoDB\PrePersist */
    public function prePersist()
    {
        $this->created = new DateTime();
        $this->updated = new DateTime();
    }
}
