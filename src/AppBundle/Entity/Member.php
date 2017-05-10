<?php

namespace AppBundle\Entity;

/**
 * Member
 */
class Member
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $typ;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $nameUrl;

    /**
     * @var string
     */
    private $password;

    /**
     * @var string
     */
    private $descriptionShort;

    /**
     * @var string
     */
    private $descriptionLong;

    /**
     * @var string
     */
    private $descriptionMember;

    /**
     * @var string
     */
    private $image;

    /**
     * @var string
     */
    private $kontakt;

    /**
     * @var string
     */
    private $kontaktEmail;

    /**
     * @var string
     */
    private $urlMyspace;

    /**
     * @var string
     */
    private $urlFlickr;

    /**
     * @var string
     */
    private $urlPurevolume;

    /**
     * @var string
     */
    private $urlLastfm;

    /**
     * @var string
     */
    private $urlYoutube;

    /**
     * @var string
     */
    private $urlWebsite;

    /**
     * @var string
     */
    private $urlSkype;

    /**
     * @var string
     */
    private $urlIcq;

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
     * Set typ
     *
     * @param string $typ
     *
     * @return Member
     */
    public function setTyp($typ)
    {
        $this->typ = $typ;

        return $this;
    }

    /**
     * Get typ
     *
     * @return string
     */
    public function getTyp()
    {
        return $this->typ;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Member
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
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
     * Set nameUrl
     *
     * @param string $nameUrl
     *
     * @return Member
     */
    public function setNameUrl($nameUrl)
    {
        $this->nameUrl = $nameUrl;

        return $this;
    }

    /**
     * Get nameUrl
     *
     * @return string
     */
    public function getNameUrl()
    {
        return $this->nameUrl;
    }

    /**
     * Set password
     *
     * @param string $password
     *
     * @return Member
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set descriptionShort
     *
     * @param string $descriptionShort
     *
     * @return Member
     */
    public function setDescriptionShort($descriptionShort)
    {
        $this->descriptionShort = $descriptionShort;

        return $this;
    }

    /**
     * Get descriptionShort
     *
     * @return string
     */
    public function getDescriptionShort()
    {
        return $this->descriptionShort;
    }

    /**
     * Set descriptionLong
     *
     * @param string $descriptionLong
     *
     * @return Member
     */
    public function setDescriptionLong($descriptionLong)
    {
        $this->descriptionLong = $descriptionLong;

        return $this;
    }

    /**
     * Get descriptionLong
     *
     * @return string
     */
    public function getDescriptionLong()
    {
        return $this->descriptionLong;
    }

    /**
     * Set descriptionMember
     *
     * @param string $descriptionMember
     *
     * @return Member
     */
    public function setDescriptionMember($descriptionMember)
    {
        $this->descriptionMember = $descriptionMember;

        return $this;
    }

    /**
     * Get descriptionMember
     *
     * @return string
     */
    public function getDescriptionMember()
    {
        return $this->descriptionMember;
    }

    /**
     * Set image
     *
     * @param string $image
     *
     * @return Member
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
     * Set kontakt
     *
     * @param string $kontakt
     *
     * @return Member
     */
    public function setKontakt($kontakt)
    {
        $this->kontakt = $kontakt;

        return $this;
    }

    /**
     * Get kontakt
     *
     * @return string
     */
    public function getKontakt()
    {
        return $this->kontakt;
    }

    /**
     * Set kontaktEmail
     *
     * @param string $kontaktEmail
     *
     * @return Member
     */
    public function setKontaktEmail($kontaktEmail)
    {
        $this->kontaktEmail = $kontaktEmail;

        return $this;
    }

    /**
     * Get kontaktEmail
     *
     * @return string
     */
    public function getKontaktEmail()
    {
        return $this->kontaktEmail;
    }

    /**
     * Set urlMyspace
     *
     * @param string $urlMyspace
     *
     * @return Member
     */
    public function setUrlMyspace($urlMyspace)
    {
        $this->urlMyspace = $urlMyspace;

        return $this;
    }

    /**
     * Get urlMyspace
     *
     * @return string
     */
    public function getUrlMyspace()
    {
        return $this->urlMyspace;
    }

    /**
     * Set urlFlickr
     *
     * @param string $urlFlickr
     *
     * @return Member
     */
    public function setUrlFlickr($urlFlickr)
    {
        $this->urlFlickr = $urlFlickr;

        return $this;
    }

    /**
     * Get urlFlickr
     *
     * @return string
     */
    public function getUrlFlickr()
    {
        return $this->urlFlickr;
    }

    /**
     * Set urlPurevolume
     *
     * @param string $urlPurevolume
     *
     * @return Member
     */
    public function setUrlPurevolume($urlPurevolume)
    {
        $this->urlPurevolume = $urlPurevolume;

        return $this;
    }

    /**
     * Get urlPurevolume
     *
     * @return string
     */
    public function getUrlPurevolume()
    {
        return $this->urlPurevolume;
    }

    /**
     * Set urlLastfm
     *
     * @param string $urlLastfm
     *
     * @return Member
     */
    public function setUrlLastfm($urlLastfm)
    {
        $this->urlLastfm = $urlLastfm;

        return $this;
    }

    /**
     * Get urlLastfm
     *
     * @return string
     */
    public function getUrlLastfm()
    {
        return $this->urlLastfm;
    }

    /**
     * Set urlYoutube
     *
     * @param string $urlYoutube
     *
     * @return Member
     */
    public function setUrlYoutube($urlYoutube)
    {
        $this->urlYoutube = $urlYoutube;

        return $this;
    }

    /**
     * Get urlYoutube
     *
     * @return string
     */
    public function getUrlYoutube()
    {
        return $this->urlYoutube;
    }

    /**
     * Set urlWebsite
     *
     * @param string $urlWebsite
     *
     * @return Member
     */
    public function setUrlWebsite($urlWebsite)
    {
        $this->urlWebsite = $urlWebsite;

        return $this;
    }

    /**
     * Get urlWebsite
     *
     * @return string
     */
    public function getUrlWebsite()
    {
        return $this->urlWebsite;
    }

    /**
     * Set urlSkype
     *
     * @param string $urlSkype
     *
     * @return Member
     */
    public function setUrlSkype($urlSkype)
    {
        $this->urlSkype = $urlSkype;

        return $this;
    }

    /**
     * Get urlSkype
     *
     * @return string
     */
    public function getUrlSkype()
    {
        return $this->urlSkype;
    }

    /**
     * Set urlIcq
     *
     * @param string $urlIcq
     *
     * @return Member
     */
    public function setUrlIcq($urlIcq)
    {
        $this->urlIcq = $urlIcq;

        return $this;
    }

    /**
     * Get urlIcq
     *
     * @return string
     */
    public function getUrlIcq()
    {
        return $this->urlIcq;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return Member
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
     * @return Member
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

