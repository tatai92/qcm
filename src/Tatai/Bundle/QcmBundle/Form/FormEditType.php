<?php

namespace Tatai\Bundle\QcmBundle\Form;

use Symfony\Component\Form\FormBuilderInterface;

class FormEditType extends FormType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        
        parent::buildForm($builder, $options);
      
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'tatai_qcmbundle_form_edit';
    }
}