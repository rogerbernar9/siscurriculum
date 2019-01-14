<?php

namespace App\Form;

use App\Entity\Endereco;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\OptionsResolver\OptionsResolver;

class EnderecoType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('rua', TextType::class, [
                'label'=>'Logradouro',
                'attr'=> [
                    'placeholder'=> 'Informe seu logradouro'
                ]
            ])
            ->add('numero', TextType::class, [
                'label'=>'Número',
                'attr'=> [
                    'placeholder'=> 'Informe seu número'
                ]
            ])
            ->add('bairro', TextType::class, [
                'label'=>'Número',
                'attr'=> [
                    'placeholder'=> 'Informe seu número'
                ]
            ])
            ->add('cidade', TextType::class, [
                'label'=>'Cidade',
                'attr'=> [
                    'placeholder'=> 'Informe sua cidade'
                ]
            ])
            ->add('estado', TextType::class, [
                'label'=>'Estado',
                'attr'=> [
                    'placeholder'=> 'Informe seu estado'
                ]
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            // Configure your form options here
            'data_class' => Endereco::class,
        ]);
    }
}
