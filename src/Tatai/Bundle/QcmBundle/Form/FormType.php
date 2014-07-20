<?php

namespace Tatai\Bundle\QcmBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class FormType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name')
            ->add('enabled', 'checkbox', array(
                'label'     => 'Afficher publiquement ?',
                'required'  => false,
            ))
            ->add('questions', 'collection', array('type' => new QuestionType(),
                                              'allow_add'    => true,
                                              'allow_delete' => true,
                                              'by_reference' => false))
            ->add('save', 'submit', array(
                'attr' => array('class' => 'btn btn-primary'),
            ))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Tatai\Bundle\QcmBundle\Entity\Form'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'tatai_qcmbundle_form';
    }
}
