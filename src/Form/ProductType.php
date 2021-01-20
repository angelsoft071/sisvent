<?php

namespace App\Form;

use App\Entity\Product;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;

class ProductType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name',null,[
                'label' => 'Nombre'
            ])
            ->add('description',null,[
                'label' => 'Descripción'
            ])
            // ->add('creationDate')
            ->add('minStock',null,[
                'label' => 'Stock Mínimo'
            ])
            ->add('maxStock',null,[
                'label' => 'Stock Máximo'
            ])
            ->add('price',null,[
                'label' => 'Precio'
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Product::class,
        ]);
    }
}
