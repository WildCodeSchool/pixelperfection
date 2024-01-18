<?php

namespace App\Form;

use App\Entity\Product;
use App\Entity\Quality;
use Doctrine\DBAL\Types\FloatType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use PHP_CodeSniffer\Generators\Text;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class QualityType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $choices = [
            1 => '1',
            2 => '2',
            3 => '3',
            4 => '4',
            5 => '5',
        ];
        $builder
            ->add('product', EntityType::class, [
                'class' => Product::class,
                'choice_label' => 'name',
                'multiple' => true,
            ])
            ->add('parfume', ChoiceType::class, [
                'choices' => $choices,
            ])
            ->add('texture', ChoiceType::class, [
                'choices' => $choices,
            ])
            ->add('application', ChoiceType::class, [
                'choices' => $choices,
            ])
            ->add('packaging_attractive', ChoiceType::class, [
                'choices' => $choices,
            ])
            ->add('packaging_convenient', ChoiceType::class, [
                'choices' => $choices,
            ])
            ->add('efficiency', ChoiceType::class, [
                'choices' => $choices,
            ])

            ->add('allergy')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Quality::class,
        ]);
    }
}
