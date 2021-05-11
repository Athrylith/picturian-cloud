<?php

namespace Drupal\dropbox_test\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Returns responses for dropbox test routes.
 */
class DropboxTestController extends ControllerBase {

  /**
   * Builds the response.
   */
  public function build() {

    $build['content'] = [
      '#type' => 'item',
      '#markup' => $this->t('It works!'),
    ];

    return $build;
  }

}
