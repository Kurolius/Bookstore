<?php

namespace App\Form;

use App\Entity\Auteur;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CountryType;

class AuteurType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom_prenom',null,[
                'label'=>false,
                'attr'=>[
                    'class'=>'uk-input',
                    "placeholder" => 'Nom et Prénom'

                ]
            ])
            ->add('sexe',ChoiceType::class,[
                'label'=>false,
                'choices'=>[
                    'Male'=>'M',
                    'female'=>'F',
                ],
                'attr'=>[
                    'class'=>'uk-input',
                ]
            ])
            ->add('date_de_naissance',null,[
                'label'=>false,
                'widget' => 'single_text',
                'attr'=>[
                    'class'=>'uk-input',
                ]
            ])
            ->add('nationalite', CountryType::class,[
                'label'=>false,
                'attr'=>[
                    'class'=> 'uk-select'
                ]
            ])
            //->add('Livre')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Auteur::class,
        ]);
    }
}
