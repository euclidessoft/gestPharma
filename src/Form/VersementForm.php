<?php

namespace App\Form;

use App\Entity\Banque;
use App\Entity\Facture;
use App\Entity\User;
use App\Entity\Versement;
use App\Form\Type\factureType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class VersementForm extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('type', factureType::class)
            ->add('numero')
            ->add('montant')
            ->add('banque', EntityType::class, [
                'class' => Banque::class,
                'choice_label' => 'nom',
                'placeholder' => 'Selectionnez une banque',
                'label' => false,
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Versement::class,
        ]);
    }
}
