<?php

namespace AppBundle\Entity;

/**
 * Market
 */
class Market
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
    private $contentShort;

    /**
     * @var string
     */
    private $contentLong;

    /**
     * @var string
     */
    private $image;

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
    private $expiresAt;

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
     * @return Market
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
     * Set contentShort
     *
     * @param string $contentShort
     *
     * @return Market
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
     * @return Market
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
     * Set image
     *
     * @param string $image
     *
     * @return Market
     */
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return string
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set file
     *
     * @param string $file
     *
     * @return Market
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
     * @return Market
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
     * Set expiresAt
     *
     * @param \DateTime $expiresAt
     *
     * @return Market
     */
    public function setExpiresAt($expiresAt)
    {
        $this->expiresAt = $expiresAt;

        return $this;
    }

    /**
     * Get expiresAt
     *
     * @return \DateTime
     */
    public function getExpiresAt()
    {
        return $this->expiresAt;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return Market
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
     * @return Market
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

