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
    /**
     * @var string $title
     */
    protected $title;

    /**
     * @var string $titleSlug
     */
    protected $titleSlug;

    /**
     * @var $id
     */
    protected $id;

    /**
     * @var date $created
     */
    protected $created;

    /**
     * @var date $updated
     */
    protected $updated;


    /**
     * Set title
     *
     * @param string $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * Get title
     *
     * @return string $title
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set titleSlug
     *
     * @param string $titleSlug
     */
    public function setTitleSlug($titleSlug)
    {
        $this->titleSlug = $titleSlug;
    }

    /**
     * Get titleSlug
     *
     * @return string $titleSlug
     */
    public function getTitleSlug()
    {
        return $this->titleSlug;
    }

    /**
     * Get id
     *
     * @return id $id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set created
     *
     * @param date $created
     */
    public function setCreated($created)
    {
        $this->created = $created;
    }

    /**
     * Get created
     *
     * @return date $created
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * Set updated
     *
     * @param date $updated
     */
    public function setUpdated($updated)
    {
        $this->updated = $updated;
    }

    /**
     * Get updated
     *
     * @return date $updated
     */
    public function getUpdated()
    {
        return $this->updated;
    }

    
    public function preUpdate()
    {
        // Add your code here
    }
}
