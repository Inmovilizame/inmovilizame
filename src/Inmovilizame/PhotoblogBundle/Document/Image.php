<?php

namespace Inmovilizame\PhotoblogBundle\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;

/** @MongoDB\Document */
class Image
{
    /** @MongoDB\Id */
    protected $id;

    /** @MongoDB\Field */
    protected $name;

    /** @MongoDB\File */
    protected $file;

    /** @MongoDB\Field */
    protected $uploadDate;

    /** @MongoDB\Field */
    protected $length;

    /** @MongoDB\Field */
    protected $chunkSize;

    /** @MongoDB\Field */
    protected $md5;

    public function getId()
    {
        return $this->id;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getFile()
    {
        return $this->file;
    }

    public function setFile($file)
    {
        $this->file = $file;
    }
}