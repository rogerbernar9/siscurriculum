<?php

namespace App\Form;

use App\Entity\Candidato;
use App\Form\Type\SexoType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CurrencyType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\BirthdayType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Component\Form\SubmitButton;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class CandidatoType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nome', TextType::class, [
                'label'=>"Nome",
                'attr'=>    [
                    "placeholder" => "Informe seu nome",
                ]
            ])
            ->add('idade', IntegerType::class, [
                'label' => "Idade",
                'attr'=>    [
                    'min'=>0,
                    'max'=>120,
                    'step'=>1,
                    'placeholder'=>"Informe sua idade",
                    'type'=>'number'
                ]
            ])
            ->add('sexo', SexoType::class)
            ->add('data_nascimento', BirthdayType::class, [
                'label' => "Data nascimento",
                'format' => 'dd-MM-yyyy',
                'widget' => 'choice'
            ])
            ->add('pretensao_salarial', MoneyType::class,    [
                'label' => 'Pretensão salarial',
                'currency' =>'BRL',
                'attr' => [
                    'placeholder' => 'Informe sua pretensão salarial'
                ]
            ])
            ->add('cargo', EntityType::class, [
                'class' => 'App\Entity\Cargo',
                'choice_label' => 'nome',
                'placeholder'=>'Escolha um valor'
            ])
            ->add('tecnologias', EntityType::class, [
                'class' => 'App\Entity\Tecnologia',
                'choice_label' => 'nome',
                'multiple' => true,
                'expanded' => true
            ])
            ->add('endereco', EnderecoType::class)
            ->add('historico', HistoricoProfissionalType::class)
            
            ->add('foto', FileType::class, [
                'label' => "Selecione uma foto"
            ])
            ->add('palavra_magica', TextType::class, [
                'label' => "Palavra mágica"
            ])
            ->add('bt_salvar', SubmitType::class, [
                'label' => "Salvar"
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            // Configure your form options here
            'data_class' => Candidato::class,
        ]);
    }
}
