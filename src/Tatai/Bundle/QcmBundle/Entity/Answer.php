<?php

namespace Tatai\Bundle\QcmBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Answer
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Answer
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
     * @ORM\Column(name="anwser_number", type="smallint")
     */
    private $anwserNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="answer_label", type="text")
     */
    private $answerLabel;

    /**
     * @ORM\ManyToOne(targetEntity="Tatai\Bundle\QcmBundle\Entity\Question")
     * @ORM\JoinColumn(nullable=false)
     */
    private $question;
    
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
     * Set anwserNumber
     *
     * @param integer $anwserNumber
     * @return Answer
     */
    public function setAnwserNumber($anwserNumber)
    {
        $this->anwserNumber = $anwserNumber;

        return $this;
    }

    /**
     * Get anwserNumber
     *
     * @return integer 
     */
    public function getAnwserNumber()
    {
        return $this->anwserNumber;
    }

    /**
     * Set answerLabel
     *
     * @param string $answerLabel
     * @return Answer
     */
    public function setAnswerLabel($answerLabel)
    {
        $this->answerLabel = $answerLabel;

        return $this;
    }

    /**
     * Get answerLabel
     *
     * @return string 
     */
    public function getAnswerLabel()
    {
        return $this->answerLabel;
    }

    /**
     * Set question
     *
     * @param \Tatai\Bundle\QcmBundle\Entity\Question $question
     * @return Answer
     */
    public function setQuestion(\Tatai\Bundle\QcmBundle\Entity\Question $question)
    {
        $this->question = $question;

        return $this;
    }

    /**
     * Get question
     *
     * @return \Tatai\Bundle\QcmBundle\Entity\Question 
     */
    public function getQuestion()
    {
        return $this->question;
    }
}
