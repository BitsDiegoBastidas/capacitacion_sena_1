<?php

namespace Drupal\take_break\Controller;

use Drupal\Core\Controller\ControllerBase;

class TakeBreakController extends ControllerBase {

  public function test() {
    return array(
      '#markup' => '<p>' . $this->t('Hello, Adopta un perro') . '</p>',
    );
  }

}
