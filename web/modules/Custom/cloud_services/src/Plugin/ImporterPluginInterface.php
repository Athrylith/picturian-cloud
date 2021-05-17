<?php

namespace Drupal\products\Plugin;

use Drupal\Component\Plugin\PluginInspectionInterface;

/**
 * Defines an interface for  plugins.
 */
interface PluginInterface extends PluginInspectionInterface {

  /**
   * Performs the import.
   *
   * @return bool
   *   Whether the import was successful.
   */
  public function import();

  /**
   * Returns the  configuration entity.
   *
   * @return \Drupal\products\Entity\CloudServicesInterface
   *   The  config entity used by this plugin.
   */
  public function getConfig();

}
