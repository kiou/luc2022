<?php

namespace App\Form\Type;

use App\Entity\Contact;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ContactType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom', TextType::class,[
                'attr' => [ 'placeholder' => 'Nom complet'],
            ])
            ->add('tel', TextType::class,[
                'attr' => [ 'placeholder' => 'Téléphone'],
            ])
            ->add('email', EmailType::class,[
                'attr' => [ 'placeholder' => 'Email'],
            ])
            ->add('message', TextareaType::class,[
                'attr' => [ 'placeholder' => 'Votre message'],
            ])
            ->add('Envoyer', SubmitType::class,[
                'attr' => ['class' => 'btn btnform']
            ])
        ;
    }
    
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Contact::class
        ]);
    }
}

?>