<?php

namespace Drupal\hello_world\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Returns responses for Hello World routes.
 */
class HelloWorldController extends ControllerBase {

  /**
   * Builds the response.
   */
  public function build() {
    $user = \Drupal::currentUser();

    if (!$user->isAnonymous()) {
      $name = $user->getDisplayName();
    }
    else {
      $name = "World";
    }

    $build['content'] = [
      '#type' => 'item',
      '#markup' => $this->t('Hello @name!', ['@name' => $name]),
    ];

    return $build;
  }

  /**
   * Builds response for helloPerson.
   */
  public function hello($name) {
    $build['hello'] = [
      '#markup' => 'Hello ' . $name . '!',
    ];

    return $build;
  }

}
