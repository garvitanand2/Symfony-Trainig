<?php

namespace StudentBundle\Entity;

/**
 * subject
 */
class subject
{
    
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $subjectname;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $subjectmarks;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->subjectmarks = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set subjectname
     *
     * @param string $subjectname
     *
     * @return subject
     */
    public function setSubjectname($subjectname)
    {
        $this->subjectname = $subjectname;

        return $this;
    }

    /**
     * Get subjectname
     *
     * @return string
     */
    public function getSubjectname()
    {
        return $this->subjectname;
    }

    /**
     * Add subjectmark
     *
     * @param \StudentBundle\Entity\studentmarks $subjectmark
     *
     * @return subject
     */
    public function addSubjectmark(\StudentBundle\Entity\studentmarks $subjectmark)
    {
        $this->subjectmarks[] = $subjectmark;

        return $this;
    }

    /**
     * Remove subjectmark
     *
     * @param \StudentBundle\Entity\studentmarks $subjectmark
     */
    public function removeSubjectmark(\StudentBundle\Entity\studentmarks $subjectmark)
    {
        $this->subjectmarks->removeElement($subjectmark);
    }

    /**
     * Get subjectmarks
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getSubjectmarks()
    {
        return $this->subjectmarks;
    }
}
