<?php


namespace App\Form;


use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;

class MenuType extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('burger', ChoiceType::class, [
                'choices'=> [
                    'burger poulet' => 'burger poulet',
                    'burger american' => 'burger american',
                    'burger vegan' => 'burger vegan',
                    'burger steak' => 'burger steak',
                ],
            ])
            ->add('drink', ChoiceType::class, [
                'choices'=> [
                    'Cococola' => 'Cococola',
                    'oisis' => 'oisis',
                    'sprite' => 'sprite',
                    'fanta' => 'fanta',
                    'fueztea' =>'fuzetea'
                ],
            ])
            ->add('fries', ChoiceType::class, [
                'choices'=> [
                    'Large fries' => 'Large fries',
                    'Small fries' => 'Small fries'
                ],
            ])
        ;

    }

}
