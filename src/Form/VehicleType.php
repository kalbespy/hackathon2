<?php

namespace App\Form;

use App\Entity\Movie;
use App\Entity\Vehicle;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class VehicleType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('title')
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
            ->add('license')
            ->add('picture')
            ->add('movie', EntityType::class, [
                'class' => Movie::class,
                'choice_label' => 'title',
                'multiple' => false,
                'expanded' => false,
            ])
            ->add('quote');
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Vehicle::class,
        ]);
    }
}
