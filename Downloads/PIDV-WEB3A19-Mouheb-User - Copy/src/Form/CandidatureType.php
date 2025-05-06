<?php
// src/Form/CandidatureType.php

namespace App\Form;

use App\Entity\Candidature;
use App\Entity\User;
use App\Entity\Mission;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\File;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Length;

class CandidatureType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('lettreMotivation', TextareaType::class, [
                'label' => "Lettre de motivation *",
                'attr' => [
                    'class' => 'form-control',
                    'rows' => 8,
                    'placeholder' => 'Minimum 100 caractères...'
                ],
                'constraints' => [
                    new NotBlank(['message' => "Ce champ est obligatoire"]),
                    new Length([
                        'min' => 100,
                        'max' => 2000,
                        'minMessage' => "Minimum {{ limit }} caractères requis",
                        'maxMessage' => "Maximum {{ limit }} caractères autorisés"
                    ])
                ]
            ])
            ->add('reponseQuestions', TextareaType::class, [
                'label' => "Réponses aux questions",
                'required' => false,
                'attr' => [
                    'class' => 'form-control',
                    'rows' => 5,
                    'placeholder' => 'Optionnel - maximum 2000 caractères...'
                ],
                'constraints' => [
                    new Length([
                        'max' => 2000,
                        'maxMessage' => "Maximum {{ limit }} caractères autorisés"
                    ])
                ]
            ])
            ->add('mission', EntityType::class, [
                'class' => Mission::class,
                'choice_label' => 'titre',
                'label' => 'Mission *',
                'placeholder' => 'Sélectionnez une mission',
                'attr' => [
                    'class' => 'form-control'
                ],
                'constraints' => [
                    new NotBlank(['message' => "Ce champ est obligatoire"])
                ]
            ])
            ->add('image', FileType::class, [
                'label' => "Photo de profil",
                'required' => false,
                'mapped' => false,
                'attr' => ['class' => 'form-control'],
                'constraints' => [
                    new File([
                        'maxSize' => '2M',
                        'mimeTypes' => ['image/jpeg', 'image/png'],
                        'mimeTypesMessage' => 'Formats acceptés: JPG/PNG',
                        'maxSizeMessage' => 'Taille maximale: {{ limit }}'
                    ])
                ]
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Candidature::class,
            'attr' => ['novalidate' => 'novalidate']
        ]);
    }
}