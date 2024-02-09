<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
<<<<<<< HEAD
=======
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
>>>>>>> 6ef4c107dc3941c07c18a34b0c3d006e80899420
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ContactType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
<<<<<<< HEAD
            ->add('sujet', TextType::class, ['label' => 'Sujet du message'])
            ->add('email', EmailType::class)
            ->add('message', TextType::class)
            ->add('submit', SubmitType::class, ['label' => 'Envoyer'])
=======
            ->add('sujet',TextType::class,[
                'label' => 'Sujet de votre demande'
            ])
            ->add('email',EmailType::class)
            ->add('message',TextareaType::class)
            ->add('submit',SubmitType::class,[
                'label' => 'Envoyer votre message'
            ])
>>>>>>> 6ef4c107dc3941c07c18a34b0c3d006e80899420
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            // Configure your form options here
        ]);
    }
}
