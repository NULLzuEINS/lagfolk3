<?php

namespace AppBundle\Entity;

/**
 * SfCombine
 */
class SfCombine
{
    /**
     * @var string
     */
    private $assetsKey;

    /**
     * @var string
     */
    private $files;


    /**
     * Get assetsKey
     *
     * @return string
     */
    public function getAssetsKey()
    {
        return $this->assetsKey;
    }

    /**
     * Set files
     *
     * @param string $files
     *
     * @return SfCombine
     */
    public function setFiles($files)
    {
        $this->files = $files;

        return $this;
    }

    /**
     * Get files
     *
     * @return string
     */
    public function getFiles()
    {
        return $this->files;
    }
}

