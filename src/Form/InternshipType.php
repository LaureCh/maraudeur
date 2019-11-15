<?php

namespace App\Form;

use App\Entity\Internship;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class InternshipType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('companyName')
            ->add('contactDate')
            ->add('contactWay')
            ->add('contactName')
            ->add('jobName')
            ->add('secondContactDate')
            ->add('response')
            ->add('internshipProposed')
            ->add('internshipAccepted')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Internship::class,
        ]);
    }
}
