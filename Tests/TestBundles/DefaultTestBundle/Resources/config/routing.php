<?php

use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;

$collection = new RouteCollection();

$controllerClass = 'Fp\JsFormValidatorBundle\Tests\TestBundles\DefaultTestBundle\Controller\FunctionalTestsController';
$uniqueEntityControllerClass = 'Fp\JsFormValidatorBundle\Tests\TestBundles\DefaultTestBundle\Controller\UniqueEntityController';
$nestedCollectionClass = 'Fp\JsFormValidatorBundle\Tests\TestBundles\DefaultTestBundle\Controller\NestedCollectionController';

$collection->add(
    'fp_js_form_validator_test_base',
    new Route(
        '/fp_js_form_validator/test/{controller}/{type}/{js}',
        array(
            '_controller' => $controllerClass . '::baseAction',
        )
    )
);

$collection->add(
    'fp_js_form_validator_unique_entity_controller',
    new Route(
        '/fp_js_form_validator/unique_entity_controller',
        array(
            '_controller' => $uniqueEntityControllerClass . '::indexAction',
        )
    )
);

$collection->add(
    'fp_js_form_validator_test_base',
    new Route(
        '/fp_js_form_validator/test/nestedCollection',
        array(
            '_controller' => $nestedCollectionClass . '::indexAction',
        )
    )
);

return $collection;