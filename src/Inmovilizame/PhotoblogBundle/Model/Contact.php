<?php
namespace Inmovilizame\PhotoblogBundle\Model;

class Contact
{

    protected $email;
    protected $name;
    protected $comment;

    /**
     * Set email
     *
     * @param string $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set name
     *
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set comment
     *
     * @param string $city
     */
    public function setComment($comment)
    {
        $this->comment = $comment;
    }

    /**
     * Get $comment
     *
     * @return string 
     */
    public function getComment()
    {
        return $this->comment;
    }

}