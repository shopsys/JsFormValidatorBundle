<?php
namespace Fp\JsFormValidatorBundle\Tests\TestBundles\DefaultTestBundle\Form\NestedCollection;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ParentFormType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array                $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('step1', new StepFormType())
            ->add('submit', 'submit');
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(
            array(
//                'js_validation' => false,
                'validation_groups' => array('Foo', 'Bar')
            )
        );
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'form_nested_collection_parent';
    }
}