<?php

namespace Drupal\cloud_services\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Returns responses for Cloud Services routes.
 */
class CloudServicesController extends ControllerBase {

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
