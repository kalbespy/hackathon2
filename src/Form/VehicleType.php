<?php

namespace App\Form;

use App\Entity\Vehicle;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class VehicleType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('mileage')
            ->add('fuel')
            ->add('category')
            ->add('generalCondition')
            ->add('transmition')
            ->add('nbPlace')
            ->add('availability')
            ->add('location')
            ->add('consumption')
            ->add('emissions')
            ->add('gps')
            ->add('airConditioning')
            ->add('description')
            ->add('title')
            ->add('license')
            ->add('picture')
            ->add('film')
            ->add('users')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Vehicle::class,
        ]);
    }
}
