<?php

namespace App\Form;

use App\Entity\Parti;
use App\Entity\Politique;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PartiType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('Libelle')
            ->add('Logo')
            ->add('Politique', EntityType::class, [
                'class' => Politique::class,
                'choice_label' => function(Politique $politique) {
                    return $politique->getLibelle();
                },
                'expanded' => false,
            ])
            ->add('submit', SubmitType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Parti::class,
        ]);
    }
}
