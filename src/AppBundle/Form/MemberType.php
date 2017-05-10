<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class MemberType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('typ')
            ->add('name')
            ->add('nameUrl')
            ->add('password')
            ->add('descriptionShort')
            ->add('descriptionLong')
            ->add('descriptionMember')
            ->add('image')
            ->add('kontakt')
            ->add('kontaktEmail')
            ->add('urlMyspace')
            ->add('urlFlickr')
            ->add('urlPurevolume')
            ->add('urlLastfm')
            ->add('urlYoutube')
            ->add('urlWebsite')
            ->add('urlSkype')
            ->add('urlIcq')
            ->add('createdAt', 'datetime')
            ->add('updatedAt', 'datetime')
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Member'
        ));
    }
}
