<?php

namespace Fp\JsFormValidatorBundle\Tests\TestBundles\DefaultTestBundle\Controller;

use Fp\JsFormValidatorBundle\Tests\TestBundles\DefaultTestBundle\Form\NestedCollection\ParentFormType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;


/**
 * Class NestedCollectionController
 */
class NestedCollectionController extends Controller
{
    public function indexAction(Request $request)
    {
        // Simulate data
        $data = array(
            'step1' => array(
                'tags' => array(
                    array(
                        'name' => null
                    )
                )
            )
        );
        // Disable html5 validation
        $opts = array(
            'attr' => array(
                'novalidate' => 'novalidate',
            )
        );

        $form = $this->createForm(new ParentFormType(), $data, $opts);
        $form->handleRequest($request);

        return $this->render(
            'DefaultTestBundle:NestedCollection:index.html.twig',
            array(
                'form'     => $form->createView(),
                'extraMsg' => $request->isMethod('post') ? 'done' : '',
            )
        );
    }
}
