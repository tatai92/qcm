<?php

namespace Tatai\Bundle\QcmBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Form
 *
 * @ORM\Table()
 * @ORM\Entity
 * @ORM\HasLifecycleCallbacks()
 */
class Form
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
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="creation_date", type="datetime")
     */
    private $creationDate;

    /**
     * @var boolean
     *
     * @ORM\Column(name="enabled", type="boolean")
     */
    private $enabled;

    /**
     * @ORM\OneToMany(targetEntity="Tatai\Bundle\QcmBundle\Entity\Question", mappedBy="form",cascade={"all"})
     */
    private $questions;       
    
    
    /**
     * Constructor
     */
    public function __construct()
       {
           $this->creationDate     = new \Datetime;
           $this->enabled  = true;
           $this->questions = new \Doctrine\Common\Collections\ArrayCollection();


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
     * Set name
     *
     * @param string $name
     * @return Form
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
     * Set creationDate
     *
     * @param \DateTime $creationDate
     * @return Form
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
     * Set enabled
     *
     * @param boolean $enabled
     * @return Form
     */
    public function setEnabled($enabled)
    {
        $this->enabled = $enabled;

        return $this;
    }

    /**
     * Get enabled
     *
     * @return boolean 
     */
    public function getEnabled()
    {
        return $this->enabled;
    }



    /**
     * Add questions
     *
     * @param \Tatai\Bundle\QcmBundle\Entity\Question $questions
     * @return Form
     */
    public function addQuestion(\Tatai\Bundle\QcmBundle\Entity\Question $questions)
    {
        if (!$this->questions->contains($questions)) {
            $this->questions[] = $questions;
            $questions->setForm($this);
        }
        return $this;
    }

    /**
     * Remove questions
     *
     * @param \Tatai\Bundle\QcmBundle\Entity\Question $questions
     */
    public function removeQuestion(\Tatai\Bundle\QcmBundle\Entity\Question $questions)
    {
        
        $this->questions->removeElement($questions);
    }

    /**
     * Get questions
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getQuestions()
    {
        return $this->questions;
    }
    
    
    
    
}
