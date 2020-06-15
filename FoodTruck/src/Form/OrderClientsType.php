<?php


namespace App\Form;

use App\Entity\Order;
use App\Entity\Test;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;



class OrderClientsType extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('firstname', TextType::class)
            ->add('lastname', TextType::class)
            ->add('email', EmailType::class)
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
            ->add('menus', CollectionType::class, [
                'entry_type' => MenuType::class,
                'entry_options' => ['label' => false],
                'allow_add' => true,
                'by_reference' => false,
                'label' => false,
            ])

            ->add('deliverytime',  ChoiceType::class, [
                'choices'=> [
                    '10h45' => '10h45',
                    '11h00' => '11h00',
                    '11h15' => '11h15',
                    '11h30' => '11h30',
                    '11h45' => '11h45',
                    '12h00' => '12h00',
                ],
            ])
        ;
    }
    public function configurationOption(OptionsResolver $resolver){
        $resolver->setDefaults(array(
            'data_class' => Test::class,
            'csrf_protection' => false,
        ));
    }
}