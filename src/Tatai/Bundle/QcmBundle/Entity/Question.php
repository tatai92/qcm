<?php

namespace Tatai\Bundle\QcmBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Question
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Question
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
     * @var integer
     *
     * @ORM\Column(name="question_number", type="smallint")
     */
    private $questionNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="question_label", type="text")
     */
    private $questionLabel;

    /**
     * @var boolean
     *
     * @ORM\Column(name="enabled", type="boolean")
     */
    private $enabled;

    /**
     * @ORM\ManyToOne(targetEntity="Tatai\Bundle\QcmBundle\Entity\Form")
     * @ORM\JoinColumn(nullable=false)
     */
    private $form;
    
    /**
     * @ORM\ManyToOne(targetEntity="Tatai\Bundle\QcmBundle\Entity\FormKind")
     */
    private $formKind;
    
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
     * Set questionNumber
     *
     * @param integer $questionNumber
     * @return Question
     */
    public function setQuestionNumber($questionNumber)
    {
        $this->questionNumber = $questionNumber;

        return $this;
    }

    /**
     * Get questionNumber
     *
     * @return integer 
     */
    public function getQuestionNumber()
    {
        return $this->questionNumber;
    }

    /**
     * Set questionLabel
     *
     * @param string $questionLabel
     * @return Question
     */
    public function setQuestionLabel($questionLabel)
    {
        $this->questionLabel = $questionLabel;

        return $this;
    }

    /**
     * Get questionLabel
     *
     * @return string 
     */
    public function getQuestionLabel()
    {
        return $this->questionLabel;
    }

    /**
     * Set enabled
     *
     * @param boolean $enabled
     * @return Question
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
     * Set form
     *
     * @param \Tatai\Bundle\QcmBundle\Entity\Form $form
     * @return Question
     */
    public function setForm(\Tatai\Bundle\QcmBundle\Entity\Form $form)
    {
        $this->form = $form;

        return $this;
    }

    /**
     * Get form
     *
     * @return \Tatai\Bundle\QcmBundle\Entity\Form 
     */
    public function getForm()
    {
        return $this->form;
    }

    /**
     * Set formKind
     *
     * @param \Tatai\Bundle\QcmBundle\Entity\FormKind $formKind
     * @return Question
     */
    public function setFormKind(\Tatai\Bundle\QcmBundle\Entity\FormKind $formKind = null)
    {
        $this->formKind = $formKind;

        return $this;
    }

    /**
     * Get formKind
     *
     * @return \Tatai\Bundle\QcmBundle\Entity\FormKind 
     */
    public function getFormKind()
    {
        return $this->formKind;
    }
}
