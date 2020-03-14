<?php

namespace App\Form;

use App\Entity\Ethnie;
use App\Entity\Leader;
use App\Entity\Nation;
use App\Entity\Parti;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\UrlType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class LeaderType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('Nom')
            ->add('Prenom')
            ->add('Age')
            ->add('Ethnie', EntityType::class, [
                'class' => Ethnie::class,
                'choice_label' => 'Libelle',
                'expanded' => false,
            ])
            ->add('Parti', EntityType::class, [
                'class' => Parti::class,
                'choice_label' => 'Libelle',
                'expanded' => false,
            ])
            ->add('Photo',UrlType::class)
            ->add('submit', SubmitType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Leader::class,
        ]);
    }
}
