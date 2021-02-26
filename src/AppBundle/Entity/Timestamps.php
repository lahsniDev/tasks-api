<?php

namespace AppBundle\Entity;

trait Timestamps
{

    /**
     * @var \DateTime
     *
     * @ORM\Column(type="datetime")
     */
    private $createdAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(type="datetime")
     */
    private $updateAt;


    /**
     * @ORM\PrePersist
     */
    public function initializeDate()
    {
        $this->createdAt = new \DateTime();
        $this->updateAt = new \DateTime();
    }


    /**
     * @ORM\PreUpdate
     */
    public function updateDate()
    {
        $this->updateAt = new \DateTime();
    }
}