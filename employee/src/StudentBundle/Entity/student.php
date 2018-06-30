<?php

namespace StudentBundle\Entity;

/**
 * student
 */
class student
{
    
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $studentName;

    /**
     * @var integer
     */
    private $mobile;

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
     * Set studentName
     *
     * @param string $studentName
     *
     * @return student
     */
    public function setStudentName($studentName)
    {
        $this->studentName = $studentName;

        return $this;
    }

    /**
     * Get studentName
     *
     * @return string
     */
    public function getStudentName()
    {
        return $this->studentName;
    }

    /**
     * Set mobile
     *
     * @param integer $mobile
     *
     * @return student
     */
    public function setMobile($mobile)
    {
        $this->mobile = $mobile;

        return $this;
    }

    /**
     * Get mobile
     *
     * @return integer
     */
    public function getMobile()
    {
        return $this->mobile;
    }

    /**
     * Add subjectmark
     *
     * @param \StudentBundle\Entity\studentmarks $subjectmark
     *
     * @return student
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
