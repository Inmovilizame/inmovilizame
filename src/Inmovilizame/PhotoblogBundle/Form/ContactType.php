<?php

namespace Inmovilizame\PhotoblogBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class ContactType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('name', 'text', array('label' => 'Nombre'))
            ->add('email', 'email', array('label' => 'Correo electrónico'))
            ->add('comment', 'textarea', array('label' => 'Comentarios'))
        ;
    }

    public function getName()
    {
        return 'contactType';
    }
}
