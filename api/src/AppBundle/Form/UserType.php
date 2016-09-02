<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Validator\Constraints\NotNull;
use Symfony\Component\Validator\Constraints as Assert;

class UserType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('firstName', TextType::class, [
                'required' => true,
                'constraints' => new Assert\NotNull(array('message' => 'Please enter something'))
              ]
            )
            ->add('lastName', TextType::class, [
                'required' => true,
                'constraints' => new Assert\NotNull(array('message' => 'Please enter something'))
              ]
            )
            ->add('email', TextType::class, [
                'required' => true,
                'constraints' => new Assert\NotNull(array('message' => 'Please enter something'))
              ]
            )
            ->add('password', PasswordType::class, [
                'required' => true,
                'constraints' => new Assert\NotNull(array('message' => 'Please enter something'))
              ]
            )
            ->add('photo', TextType::class, [
                'required' => true,
                'constraints' => new Assert\NotNull(array('message' => 'Please enter something'))
              ]
            )
            ->add('gender', TextType::class , [
                'required' => true,
                'constraints' => new Assert\NotNull(array('message' => 'Please enter something'))
              ]
            )
            ->add('supervisor')
            ->add('duties')
        ;
    }

    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\User',
            'allow_extra_fields' => true
        ));
    }
}
