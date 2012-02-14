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

    /**
     * Set uploadDate
     *
     * @param string $uploadDate
     */
    public function setUploadDate($uploadDate)
    {
        $this->uploadDate = $uploadDate;
    }

    /**
     * Get uploadDate
     *
     * @return string $uploadDate
     */
    public function getUploadDate()
    {
        return $this->uploadDate;
    }

    /**
     * Set length
     *
     * @param string $length
     */
    public function setLength($length)
    {
        $this->length = $length;
    }

    /**
     * Get length
     *
     * @return string $length
     */
    public function getLength()
    {
        return $this->length;
    }

    /**
     * Set chunkSize
     *
     * @param string $chunkSize
     */
    public function setChunkSize($chunkSize)
    {
        $this->chunkSize = $chunkSize;
    }

    /**
     * Get chunkSize
     *
     * @return string $chunkSize
     */
    public function getChunkSize()
    {
        return $this->chunkSize;
    }

    /**
     * Set md5
     *
     * @param string $md5
     */
    public function setMd5($md5)
    {
        $this->md5 = $md5;
    }

    /**
     * Get md5
     *
     * @return string $md5
     */
    public function getMd5()
    {
        return $this->md5;
    }
}
