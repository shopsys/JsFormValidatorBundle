<?php
namespace Fp\JsFormValidatorBundle\Tests\TestBundles\DefaultTestBundle\Form\NestedCollection;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class StepFormType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array                $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('tags', 'collection', array(
                    'type' => new MyTagType(),
                )
            );
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'form_nested_collection_step_1';
    }
}