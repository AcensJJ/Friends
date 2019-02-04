<?php

namespace App\Form;

use App\Entity\Content;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class PostType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title', TextType::class,[
                'required'   => false,
                'empty_data' => '',
                'label' => 'Titre',
                'attr' => array(
                    // 'class' => 'TextType',
                    'placeholder' => 'Votre titre',
                    'maxlength' => 255
                )
            ])
            ->add('text', TextareaType::class,[
                'required'   => false,
                'empty_data' => '',
                'label' => 'Description',
                'attr' => array(
                    'placeholder' => 'Description',
                    'maxlength' => 999
                    )
            ])
            ->add('my_files', FileType::class, [
                'required'   => false,
                'mapped'   => false,
                'multiple'   => true,
                'empty_data' => '',
                'label' => 'Ajouter une/des image(s)',
                ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Content::class,
        ]);
    }
}
