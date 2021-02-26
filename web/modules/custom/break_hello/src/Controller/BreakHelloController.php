<?php

/** @file ... */

namespace Drupal\break_hello\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Controlador para devolver el contenido de las páginas definidas
 */
class BreakHelloController extends ControllerBase
{

    public function hello()
    {
        $build = [];


        $form = \Drupal::formBuilder()->getForm('\Drupal\break_forms\Form\Simple');
        $build[] = $form;

        return $build;
    }
}
