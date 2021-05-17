<?php

namespace Drupal\products\Entity;

use Drupal\Core\Config\Entity\ConfigEntityBase;
use Drupal\Core\Url;

/**
 * Defines the  entity.
 *
 * @ConfigEntityType(
 *   id = "",
 *   label = @Translation(""),
 *   handlers = {
 *     "list_builder" = "Drupal\products\ListBuilder",
 *     "form" = {
 *       "add" = "Drupal\products\Form\Form",
 *       "edit" = "Drupal\products\Form\Form",
 *       "delete" = "Drupal\products\Form\DeleteForm"
 *     },
 *     "route_provider" = {
 *       "html" = "Drupal\Core\Entity\Routing\AdminHtmlRouteProvider",
 *     },
 *   },
 *   config_prefix = "",
 *   admin_permission = "administer site configuration",
 *   entity_keys = {
 *     "id" = "id",
 *     "label" = "label",
 *     "uuid" = "uuid"
 *   },
 *   links = {
 *     "add-form" = "/admin/structure//add",
 *     "edit-form" = "/admin/structure//{}/edit",
 *     "delete-form" = "/admin/structure//{}/delete",
 *     "collection" = "/admin/structure/"
 *   },
 *   config_export = {
 *     "id",
 *     "label",
 *     "url",
 *     "plugin",
 *     "update_existing",
 *     "source",
 *     "bundle"
 *   }
 * )
 */
class CloudServices extends ConfigEntityBase implements CloudServicesInterface {

  /**
   * The  ID.
   *
   * @var string
   */
  protected $id;

  /**
   * The  label.
   *
   * @var string
   */
  protected $label;

  /**
   * The URL from where the import file can be retrieved.
   *
   * @var string
   */
  protected $url;

  /**
   * The plugin ID of the plugin to be used for processing this import.
   *
   * @var string
   */
  protected $plugin;

  /**
   * Whether to update existing products if they have already been imported.
   *
   * @var bool
   */
  protected $update_existing = TRUE;

  /**
   * The source of the products.
   *
   * @var string
   */
  protected $source;

  /**
   * The product bundle.
   *
   * @var string
   */
  protected $bundle;

  /**
   * {@inheritdoc}
   */
  public function getUrl() {
    return $this->url ? Url::fromUri($this->url) : NULL;
  }

  /**
   * {@inheritdoc}
   */
  public function getPluginId() {
    return $this->plugin;
  }

  /**
   * {@inheritdoc}
   */
  public function updateExisting() {
    return $this->update_existing;
  }

  /**
   * {@inheritdoc}
   */
  public function getSource() {
    return $this->source;
  }

  /**
   * {@inheritdoc}
   */
  public function getBundle() {
    return $this->bundle;
  }

}
