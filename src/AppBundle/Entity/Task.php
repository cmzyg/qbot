<?php

namespace AppBundle\Entity;

/**
 * Task
 */
class Task
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $taskTitle;

    /**
     * @var string
     */
    private $taskStatus;

    /**
     * @var \DateTime
     */
    private $taskDueDate;

    /**
     * @var integer
     */
    private $projectID;

    /**
     * @var integer
     */
    private $sectionID;


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
     * Set taskTitle
     *
     * @param string $taskTitle
     *
     * @return Task
     */
    public function setTaskTitle($taskTitle)
    {
        $this->taskTitle = $taskTitle;

        return $this;
    }

    /**
     * Get taskTitle
     *
     * @return string
     */
    public function getTaskTitle()
    {
        return $this->taskTitle;
    }

    /**
     * Set taskStatus
     *
     * @param string $taskStatus
     *
     * @return Task
     */
    public function setTaskStatus($taskStatus)
    {
        $this->taskStatus = $taskStatus;

        return $this;
    }

    /**
     * Get taskStatus
     *
     * @return string
     */
    public function getTaskStatus()
    {
        return $this->taskStatus;
    }

    /**
     * Set taskDueDate
     *
     * @param \DateTime $taskDueDate
     *
     * @return Task
     */
    public function setTaskDueDate($taskDueDate)
    {
        $this->taskDueDate = $taskDueDate;

        return $this;
    }

    /**
     * Get taskDueDate
     *
     * @return \DateTime
     */
    public function getTaskDueDate()
    {
        return $this->taskDueDate;
    }

    /**
     * Set projectID
     *
     * @param integer $projectID
     *
     * @return Task
     */
    public function setProjectID($projectID)
    {
        $this->projectID = $projectID;

        return $this;
    }

    /**
     * Get projectID
     *
     * @return integer
     */
    public function getProjectID()
    {
        return $this->projectID;
    }

    /**
     * Set sectionID
     *
     * @param integer $sectionID
     *
     * @return Task
     */
    public function setSectionID($sectionID)
    {
        $this->sectionID = $sectionID;

        return $this;
    }

    /**
     * Get sectionID
     *
     * @return integer
     */
    public function getSectionID()
    {
        return $this->sectionID;
    }
}

