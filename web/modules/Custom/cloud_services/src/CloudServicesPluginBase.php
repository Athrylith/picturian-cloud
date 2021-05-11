<?php

namespace Drupal\cloud_services;

use Drupal\Component\Plugin\PluginBase;

/**
 * Base class for cloud_services plugins.
 */
abstract class CloudServicesPluginBase extends PluginBase implements CloudServicesInterface {

  /**
   * {@inheritdoc}
   */
  public function label() {
    // Cast the label to a string since it is a TranslatableMarkup object.
    return (string) $this->pluginDefinition['label'];
  }

}
