<?php

namespace App\Form;

use App\Entity\Medecin;
use App\Entity\Mutuel;
use App\Entity\Service;
use App\Entity\Vente;
use App\Entity\Banque;
use App\Form\Type\VerserType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;

class VenteType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('medecin', EntityType::class, [
                'class' => Medecin::class,
                'choice_label' => 'nom',
                'placeholder' => 'Selectionnez un medecin',
                'label' => false,
            ])
            ->add('mutuel', EntityType::class, [
                'class' => Mutuel::class,
                'choice_label' => 'nom',
                'placeholder' => 'Selectionnez un mutuelle',
                'label' => false,
            ])
            ->add('service', EntityType::class, [
                'class' => Service::class,
                'choices' => [],
                'placeholder' => 'Selectionnez un service',
                'label' => false,
            ])
            ->add('type', VerserType::class,array('placeholder' => 'Type de Paiement'))
            ->add('banque', EntityType::class, [
                'class' => Banque::class,
                'choice_label' => 'nom',
                'placeholder' => 'Selectionnez une banque',
                'label' => false,
            ])
            ->add('numero')
        ;
        $builder->get('mutuel')->addEventListener(FormEvents::POST_SUBMIT, function (FormEvent $event) {

            if (null === $event->getData()) {
                // we don't need to add the friend field because
                // the message will be addressed to a fixed friend
                return;
            }
            $form = $event->getForm();
            $form->getParent()->add('service', EntityType::class, [// champ service apres selection
                'class' => Service::class,
                'placeholder' => 'Selectionnez un service *',
                'label' => false,
                'choices' => $form->getData() ?  $form->getData()->getServices()  : [],
            ]);
        });
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Vente::class,
        ]);
    }
}
