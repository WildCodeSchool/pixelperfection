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

class QualityType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('product', EntityType::class, [
                'class' => Product::class,
                'choice_label' => 'name',
                'multiple' => true,
            ])
            ->add('parfume')
            ->add('texture')
            ->add('application')
            ->add('packaging_attractive')
            ->add('packaging_convenient')
            ->add('efficiency')
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
