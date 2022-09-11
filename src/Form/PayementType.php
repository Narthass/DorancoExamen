<?php

namespace App\Form;

use App\Entity\Payement;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;


class PayementType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('SommePayee', NumberType::class,
             ['attr' => [
                    'class' =>'form-control border border-info',
                ],])
            ->add('TypePayement',ChoiceType::class,[
                
                'label'=>'Quel type de payement est-ce?',
                'choices'=>[
                    'Payement'=>'Payement',
                    'Remboursement'=>'Remboursement',
                    
                ],
                'attr' => [
                    'class' =>'form-control border border-info',
                ],
                'expanded'=>true,
                'multiple'=>false,
            
                

            ])
            
            
            ->add('date', DateType::class,[
                
                'format'=> 'dd-MM-yyyy',
                'data_class' =>null,
                'attr' => [
                    'class' =>'form-control border border-info',
                ],
                
                
                'data' => new \Datetime('now'),
                
                
                
            ])
            ->add(
                'MoyenPayement',
                ChoiceType::class,
                [
                    'choices' => [
                        'CB'=>'CB',
                        'cheque'=>'cheque',
                        'liquide'=>'liquide',
                        
                    ],
                    'attr' => [
                    'class' =>'form-control border border-info',
                ],
                    
                ]
                 
            )
            
            ->add('submit', SubmitType::class, [
                'label' => 'Valider',
                'attr' => [
                    'class' => 'w3-button w3-black w3-margin-bottom',
                    'style' => 'margin-top: 10px',
                ]
                ]);

                
              
    
    
    
            }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Payement::class,
        ]);
    }
}
