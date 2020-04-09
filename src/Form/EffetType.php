<?php

namespace App\Form;

use App\Entity\Effet;
use App\Entity\TraitElement;
use FOS\CKEditorBundle\Form\Type\CKEditorType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\UrlType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class EffetType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('Libelle')
            ->add('Description',CKEditorType::class)
            ->add('icone', UrlType::class)
            ->add('TraitElements', EntityType::class, [
                'class' => TraitElement::class,
                'choice_label' => 'Libelle',
                'group_by' => function(TraitElement $item, Int $id) {
                    return $item->getCouleur();
                },
                'multiple'  => true
            ])
            ->add('submit', SubmitType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Effet::class,
        ]);
    }
}
