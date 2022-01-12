<?php

namespace App\Form;

use App\Entity\Livre;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class LivreType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('isbn',null,[
                'label'=>false,
                'attr'=>[
                    'class'=>'uk-input',
                    "placeholder" => 'ISBN'

                ]
            ])
            ->add('titre',null,[
                'label'=>false,
                'attr'=>[
                    'class'=>'uk-input',
                    "placeholder" => 'titre'

                ]
            ])
            ->add('nombre_pages',null,[
                'label'=>false,
                'attr'=>[
                    'class'=>'uk-input',
                    'min' => 0,
                    'max' => 9999,
                    "placeholder" => 'Nombre de Page',
                ]
            ])
            ->add('date_de_parution',null,[
                'label'=>false,
                'widget' => 'single_text',
                'attr'=>[
                    'class'=>'uk-input',
                    
                ]
            ])
            ->add('note',null,[
                'label'=>false,
                'attr'=>[
                    'class'=>'uk-input',
                    "placeholder" => 'Note'

                ]
            ])
            ->add('Auteurs',NULL,[
                'label'=>false,
                'attr'=>[
                    'class'=>'uk-input',
                    'multiple'=>true
            ]
            ])
            ->add('genres',NULL,[
                'label'=>false,
                'attr'=>[
                    'class'=>'uk-input',
                    'multiple'=>true
            ]])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Livre::class,
        ]);
    }
}
