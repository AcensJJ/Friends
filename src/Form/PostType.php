<?php

namespace App\Form;

use App\Entity\Content;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Validator\Constraints as Assert;

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
                    'placeholder' => 'Mettez une description à votre publication',
                    'maxlength' => 999
                    )
            ])
            ->add('my_files', FileType::class, [
                'required'   => false,
                'mapped'   => false,
                'multiple'   => true,
                'empty_data' => '',
                'label' => 'Ajouter une/des image(s)',
                'constraints' => [
                    // new Assert\File([ 
                    //     'mimeTypes' => [
                    //         'application/png',
                    //         'application/jpg',
                    //     ],
                    //     'mimeTypesMessage' => 'Seulement les images .jpg ou .png',
                    //     ])
                        //  ,
                    // new Assert\Image([ 
                    //     'minWidth' => 200,
                    //     'maxWidth' => 600,
                    //     'minHeight' => 200,
                    //     'maxHeight' => 600,
                    //     ])
                    ],
                // 
                // 
                ])
                // ->add('my_files', new Assert\File([
                //     // 'class' => 'FileType',
                //     // 'required'   => false,
                //     // 'mapped'   => false,
                //     // 'multiple'   => true,
                //     // // 'empty_data' => '',
                //     // 'label' => 'Ajouter une/des image(s)',
                //     'mimeTypes' => [
                //         'application/png',
                //             'application/jpg',
                //     ],
                //     'mimeTypesMessage' => 'Seulement les images .jpg ou .png',   
                //     ]) 
                //     )

        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Content::class,
        ]);
    }
}
