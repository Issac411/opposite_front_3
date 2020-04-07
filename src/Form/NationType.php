<?php

namespace App\Form;

use App\Entity\Ethnie;
use App\Entity\Leader;
use App\Entity\Nation;
use App\Entity\Parti;
use App\Repository\LeaderRepository;
use Doctrine\ORM\Query\Expr\Join;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\UrlType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class NationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('Libelle')
            ->add('Ethnie', EntityType::class, [
                'class' => Ethnie::class,
                'choice_label' => 'Libelle',
                'expanded' => false,
            ])
            ->add('nationPartis', EntityType::class, [
            'class' => Parti::class,
            'choice_label' => 'Libelle',
            'group_by' => function(Parti $item, Int $id) {
                return $item->getPolitique()->getLibelle();
            },
            'multiple'  => true
            ])
            ->add('Leader', EntityType::class, [
                'class' => Leader::class,
                'choice_label' => function(Leader $leader) {
                    return $leader->getNom()." ".$leader->getPrenom()." [".$leader->getParti()->getLibelle()."]";
                },
                'query_builder' => function (LeaderRepository $repo) {
                    return $repo->createQueryBuilder('u')
                        ->leftjoin(Nation::class,'n',Join::WITH,'n.Leader = u.id')
                        ->where(' n.id IS NULL');
                },
                'expanded' => false,
            ])
            ->add('Drapeau',UrlType::class)
            ->add('submit', SubmitType::class)
        ;

    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Nation::class,
        ]);
    }
}
