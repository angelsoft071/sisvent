<?php

namespace App\Form;

use App\Entity\Transaction;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;

class TransactionType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('product')
            ->add('type', ChoiceType::class, [
                'choices'  => [
                    'in' => "in",
                    'out' => "out",
                    ]
                ]
            )
            ->add('amount')
            // ->add('updatedAt')
            ->add('creationDate', DateTimeType::class,[
                "widget" => "single_text"
            ])
            ->add('employee')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Transaction::class,
        ]);
    }
}
