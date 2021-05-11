<?php

namespace Drupal\cloud_services;

/**
 * Interface for cloud_services plugins.
 */
interface CloudServicesInterface {

  /**
   * Returns the translated plugin label.
   *
   * @return string
   *   The translated title.
   */
  public function label();

}
