<?php
namespace App\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class factureType extends AbstractType
{
	public function configureOptions(OptionsResolver $resolver)
	{
		$resolver->setDefaults(array(
						'choices' => array(
							'Espece' => 'Espece',
							'Virement' => 'Virement',
							'Cheque' => 'Cheque',
							'Orange money' => 'Orange money',
							'Wave' => 'Wave',
							)
						));
	}
	public function getParent()
	{
		return ChoiceType::class;
	}

}