<?php

namespace App\Form;

use App\Entity\Produit;
use App\Entity\Emplacement;
use App\Entity\Fournisseur;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class ProduitType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('reference')
            ->add('designation')
            ->add('prix')
            ->add('prixdachat')
            ->add('description')
            ->add('tva')
            ->add('emplacement', EntityType::class, [
                    'class' => Emplacement::class,
                    'choice_label' => 'nom',
                    'placeholder' => 'Choisir un emplacement',
                ])
             ->add('fournisseurs', EntityType::class, [
                'class' => Fournisseur::class,
                'choice_label' => 'designation',
                'multiple' => true,
                'expanded' => true,
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Produit::class,
        ]);
    }
}
