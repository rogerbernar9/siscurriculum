<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use App\Entity\HistoricoProfissional;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;

class HistoricoProfissionalType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nome_empresa', TextType::class, [
                'label' => "Empresa"
            ])
            ->add('dataEntrada', DateType::class, [
                'widget' => 'choice',
                'format' => 'dd/MM/yyyy'
            ])
            ->add('dataSaida', DateType::class, [
                'widget' => 'choice',
                'format' => 'dd/MM/yyyy'
            ])
            ->add('empregoAtual', CheckboxType::class, [
                'label' => 'Emprego atual',
            ])
            
            
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            // Configure your form options here
            'data_class' => HistoricoProfissional::class,
        ]);
    }
}
