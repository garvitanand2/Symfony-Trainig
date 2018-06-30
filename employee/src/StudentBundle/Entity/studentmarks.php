<?php

namespace StudentBundle\Entity;

/**
 * studentmarks
 */
class studentmarks
{
    
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $marks;

    /**
     * @var \StudentBundle\Entity\student
     */
    private $student;

    /**
     * @var \StudentBundle\Entity\subject
     */
    private $subject;


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
     * Set marks
     *
     * @param integer $marks
     *
     * @return studentmarks
     */
    public function setMarks($marks)
    {
        $this->marks = $marks;

        return $this;
    }

    /**
     * Get marks
     *
     * @return integer
     */
    public function getMarks()
    {
        return $this->marks;
    }

    /**
     * Set student
     *
     * @param \StudentBundle\Entity\student $student
     *
     * @return studentmarks
     */
    public function setStudent(\StudentBundle\Entity\student $student = null)
    {
        $this->student = $student;

        return $this;
    }

    /**
     * Get student
     *
     * @return \StudentBundle\Entity\student
     */
    public function getStudent()
    {
        return $this->student;
    }

    /**
     * Set subject
     *
     * @param \StudentBundle\Entity\subject $subject
     *
     * @return studentmarks
     */
    public function setSubject(\StudentBundle\Entity\subject $subject = null)
    {
        $this->subject = $subject;

        return $this;
    }

    /**
     * Get subject
     *
     * @return \StudentBundle\Entity\subject
     */
    public function getSubject()
    {
        return $this->subject;
    }
}
