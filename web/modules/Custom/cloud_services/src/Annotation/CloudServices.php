<?php

namespace Drupal\products\Annotation;

use Drupal\Component\Annotation\Plugin;

/**
 * Defines an  item annotation object.
 *
 * @see \Drupal\products\Plugin\Manager
 *
 * @Annotation
 */
class CloudServices extends Plugin {

  /**
   * The plugin ID.
   *
   * @var string
   */
  public $id;

  /**
   * The label of the plugin.
   *
   * @var \Drupal\Core\Annotation\Translation
   *
   * @ingroup plugin_translatable
   */
  public $label;

}
