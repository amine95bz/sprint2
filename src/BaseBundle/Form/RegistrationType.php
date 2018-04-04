<?php
// src/AppBundle/Form/RegistrationType.php

namespace BaseBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\FormBuilderInterface;

class RegistrationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('Photo',FileType::class);

    }

    public function getParent()
    {
        return 'fos_user_registration';
    }

    public function getPhoto()
    {
        return 'app_user_registration';
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'basebundle_user';
    }

}