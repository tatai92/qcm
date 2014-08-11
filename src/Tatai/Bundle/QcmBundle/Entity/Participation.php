<?php

namespace Tatai\Bundle\QcmBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Participation
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Participation
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="creation_date", type="datetime")
     */
    private $creationDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="start_date", type="datetime")
     */
    private $startDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="finish_date", type="datetime")
     */
    private $finishDate;

    /**
     * @var boolean
     *
     * @ORM\Column(name="start_flag", type="boolean")
     */
    private $startFlag;

    /**
     * @var boolean
     *
     * @ORM\Column(name="finish_flag", type="boolean")
     */
    private $finishFlag;

    /**
     * @ORM\ManyToMany(targetEntity="Tatai\Bundle\QcmBundle\Entity\Answer")
     */
    private $answers;

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
     * Set creationDate
     *
     * @param \DateTime $creationDate
     * @return Participation
     */
    public function setCreationDate($creationDate)
    {
        $this->creationDate = $creationDate;

        return $this;
    }

    /**
     * Get creationDate
     *
     * @return \DateTime 
     */
    public function getCreationDate()
    {
        return $this->creationDate;
    }

    /**
     * Set startDate
     *
     * @param \DateTime $startDate
     * @return Participation
     */
    public function setStartDate($startDate)
    {
        $this->startDate = $startDate;

        return $this;
    }

    /**
     * Get startDate
     *
     * @return \DateTime 
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * Set finishDate
     *
     * @param \DateTime $finishDate
     * @return Participation
     */
    public function setFinishDate($finishDate)
    {
        $this->finishDate = $finishDate;

        return $this;
    }

    /**
     * Get finishDate
     *
     * @return \DateTime 
     */
    public function getFinishDate()
    {
        return $this->finishDate;
    }

    /**
     * Set startFlag
     *
     * @param boolean $startFlag
     * @return Participation
     */
    public function setStartFlag($startFlag)
    {
        $this->startFlag = $startFlag;

        return $this;
    }

    /**
     * Get startFlag
     *
     * @return boolean 
     */
    public function getStartFlag()
    {
        return $this->startFlag;
    }

    /**
     * Set finishFlag
     *
     * @param boolean $finishFlag
     * @return Participation
     */
    public function setFinishFlag($finishFlag)
    {
        $this->finishFlag = $finishFlag;

        return $this;
    }

    /**
     * Get finishFlag
     *
     * @return boolean 
     */
    public function getFinishFlag()
    {
        return $this->finishFlag;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->answers = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add answers
     *
     * @param \Tatai\Bundle\QcmBundle\Entity\Answer $answers
     * @return Participation
     */
    public function addAnswer(\Tatai\Bundle\QcmBundle\Entity\Answer $answers)
    {
        $this->answers[] = $answers;

        return $this;
    }

    /**
     * Remove answers
     *
     * @param \Tatai\Bundle\QcmBundle\Entity\Answer $answers
     */
    public function removeAnswer(\Tatai\Bundle\QcmBundle\Entity\Answer $answers)
    {
        $this->answers->removeElement($answers);
    }

    /**
     * Get answers
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getAnswers()
    {
        return $this->answers;
    }
}
