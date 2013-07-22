<?php

namespace Udes\PruebaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('code')
            ->add('name')
            ->add('email', 'email')
            ->add('date', 'date', array(
		'widget' => 'single_text',
		))
            ->add('password', 'password')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Udes\PruebaBundle\Entity\User'
        ));
    }

    public function getName()
    {
        return 'udes_pruebabundle_usertype';
    }
}
