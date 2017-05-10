<?php

namespace AppBundle\Entity;

/**
 * News
 */
class News
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $title;

    /**
     * @var string
     */
    private $subtitle;

    /**
     * @var string
     */
    private $contentShort;

    /**
     * @var string
     */
    private $contentLong;

    /**
     * @var string
     */
    private $file;

    /**
     * @var string
     */
    private $fileDescription;

    /**
     * @var \DateTime
     */
    private $createdAt;

    /**
     * @var \DateTime
     */
    private $updatedAt;


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
     * Set title
     *
     * @param string $title
     *
     * @return News
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set subtitle
     *
     * @param string $subtitle
     *
     * @return News
     */
    public function setSubtitle($subtitle)
    {
        $this->subtitle = $subtitle;

        return $this;
    }

    /**
     * Get subtitle
     *
     * @return string
     */
    public function getSubtitle()
    {
        return $this->subtitle;
    }

    /**
     * Set contentShort
     *
     * @param string $contentShort
     *
     * @return News
     */
    public function setContentShort($contentShort)
    {
        $this->contentShort = $contentShort;

        return $this;
    }

    /**
     * Get contentShort
     *
     * @return string
     */
    public function getContentShort()
    {
        return $this->contentShort;
    }

    /**
     * Set contentLong
     *
     * @param string $contentLong
     *
     * @return News
     */
    public function setContentLong($contentLong)
    {
        $this->contentLong = $contentLong;

        return $this;
    }

    /**
     * Get contentLong
     *
     * @return string
     */
    public function getContentLong()
    {
        return $this->contentLong;
    }

    /**
     * Set file
     *
     * @param string $file
     *
     * @return News
     */
    public function setFile($file)
    {
        $this->file = $file;

        return $this;
    }

    /**
     * Get file
     *
     * @return string
     */
    public function getFile()
    {
        return $this->file;
    }

    /**
     * Set fileDescription
     *
     * @param string $fileDescription
     *
     * @return News
     */
    public function setFileDescription($fileDescription)
    {
        $this->fileDescription = $fileDescription;

        return $this;
    }

    /**
     * Get fileDescription
     *
     * @return string
     */
    public function getFileDescription()
    {
        return $this->fileDescription;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return News
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set updatedAt
     *
     * @param \DateTime $updatedAt
     *
     * @return News
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * Get updatedAt
     *
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }
}

